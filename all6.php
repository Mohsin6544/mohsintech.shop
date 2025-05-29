<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogs";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "<div class='error-message' style='display: block;'>Connection failed: " . $e->getMessage() . "</div>";
    exit;
}

// Handle AJAX request for single blog
if (isset($_GET['action']) && $_GET['action'] === 'get_blog' && isset($_GET['id'])) {
    $blogId = intval($_GET['id']);
    try {
        $stmt = $pdo->prepare("SELECT * FROM my_data WHERE id = ?");
        $stmt->execute([$blogId]);
        $blog = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($blog) {
            header('Content-Type: application/json');
            echo json_encode($blog);
        } else {
            http_response_code(404);
            echo json_encode(['error' => 'Blog not found']);
        }
    } catch(PDOException $e) {
        http_response_code(500);
        echo json_encode(['error' => 'Database error: ' . $e->getMessage()]);
    }
    exit;
}

// Get filter parameters
$categoryFilter = isset($_GET['category']) ? $_GET['category'] : 'all';
$page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$postsPerPage = 6;
$offset = ($page - 1) * $postsPerPage;

// Get all categories for filter buttons
try {
    $categoryStmt = $pdo->query("SELECT DISTINCT catagory FROM my_data WHERE catagory IS NOT NULL AND catagory != '' ORDER BY catagory");
    $categories = $categoryStmt->fetchAll(PDO::FETCH_COLUMN);
} catch(PDOException $e) {
    $categories = [];
}

// Build the SQL query
$sql = "SELECT * FROM my_data WHERE 1=1";
$params = [];

// Add category filter
if ($categoryFilter !== 'all' && !empty($categoryFilter)) {
    $sql .= " AND catagory = ?";
    $params[] = $categoryFilter;
}

// Order by newest first
$sql .= " ORDER BY id DESC";

// Count total results for pagination
$countSql = str_replace("SELECT *", "SELECT COUNT(*)", $sql);

try {
    $countStmt = $pdo->prepare($countSql);
    $countStmt->execute($params);
    $totalResults = $countStmt->fetchColumn();
    $totalPages = ceil($totalResults / $postsPerPage);

    // Add pagination to main query
    $sql .= " LIMIT $postsPerPage OFFSET $offset";

    // Execute main query
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch(PDOException $e) {
    $posts = [];
    $totalResults = 0;
    $totalPages = 0;
    $error_message = "Error loading blogs: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f5f5f5;
        }

        /* Navigation Bar Styles */
        .navbar {
            background: linear-gradient(135deg, #8b5cf6, #a855f7, #c084fc);
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(139, 92, 246, 0.3);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .nav-logo {
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .logo-icon {
            width: 50px;
            height: 50px;
            background: white;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .logo-icon::before {
            content: "🤖";
            font-size: 24px;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
            align-items: center;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1rem;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }

        .nav-link.active {
            background: rgba(255, 255, 255, 0.2);
            font-weight: 600;
        }

        /* Mobile Menu */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem;
        }

        @media (max-width: 768px) {
            .nav-menu {
                position: fixed;
                top: 80px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 80px);
                background: linear-gradient(135deg, #8b5cf6, #a855f7);
                flex-direction: column;
                justify-content: flex-start;
                align-items: center;
                padding-top: 2rem;
                transition: left 0.3s ease;
                gap: 1rem;
            }

            .nav-menu.active {
                left: 0;
            }

            .mobile-menu-btn {
                display: block;
            }

            .nav-link {
                font-size: 1.2rem;
                padding: 1rem 2rem;
                width: 200px;
                text-align: center;
            }
        }

        .blogs-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .page-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .page-header h1 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .page-header p {
            font-size: 1.1rem;
            color: #7f8c8d;
        }

        .category-filters {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-bottom: 30px;
        }

        .category-btn {
            padding: 10px 20px;
            border: 2px solid #3498db;
            background: transparent;
            color: #3498db;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .category-btn:hover,
        .category-btn.active {
            background: #3498db;
            color: white;
        }

        .loading-spinner {
            display: none;
            text-align: center;
            padding: 40px;
        }

        .spinner {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #3498db;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
            margin: 0 auto 20px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .error-message, .no-posts {
            background: #e74c3c;
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin: 20px 0;
        }

        .no-posts {
            background: #95a5a6;
        }

        .blogs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .blog-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            cursor: pointer;
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.6s ease forwards;
        }

        .blog-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .blog-title {
            font-size: 1.4rem;
            color: #2c3e50;
            margin-bottom: 15px;
            line-height: 1.3;
        }

        .blog-meta {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            font-size: 0.9rem;
            color: #7f8c8d;
        }

        .blog-excerpt {
            color: #555;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .blog-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .blog-tag {
            background: #ecf0f1;
            color: #2c3e50;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 40px;
        }

        .pagination-btn {
            padding: 10px 15px;
            border: 2px solid #3498db;
            background: white;
            color: #3498db;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .pagination-btn:hover,
        .pagination-btn.active {
            background: #3498db;
            color: white;
        }

        /* Modal Styles */
        .blog-modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.8);
            backdrop-filter: blur(5px);
        }

        .blog-modal.show {
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .modal-content {
            background: white;
            margin: 20px;
            padding: 0;
            border-radius: 15px;
            width: 90%;
            max-width: 800px;
            max-height: 90vh;
            overflow-y: auto;
            animation: slideIn 0.3s ease;
            position: relative;
        }

        @keyframes slideIn {
            from { transform: translateY(-50px) scale(0.9); }
            to { transform: translateY(0) scale(1); }
        }

        .modal-header {
            padding: 30px 30px 20px;
            border-bottom: 1px solid #eee;
            position: relative;
        }

        .modal-close {
            position: absolute;
            right: 20px;
            top: 20px;
            background: none;
            border: none;
            font-size: 30px;
            cursor: pointer;
            color: #999;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .modal-close:hover {
            background: #f8f9fa;
            color: #333;
        }

        .modal-title {
            font-size: 1.8rem;
            color: #2c3e50;
            margin-bottom: 15px;
            padding-right: 50px;
            line-height: 1.3;
        }

        .modal-meta {
            display: flex;
            gap: 20px;
            color: #7f8c8d;
            font-size: 0.9rem;
        }

        .modal-body {
            padding: 30px;
            line-height: 1.8;
            font-size: 1.1rem;
            color: #444;
        }

        .modal-body p {
            margin-bottom: 20px;
        }

        .modal-body h1, .modal-body h2, .modal-body h3 {
            color: #2c3e50;
            margin: 30px 0 15px;
        }

        .modal-tags {
            padding: 20px 30px 30px;
            border-top: 1px solid #eee;
        }

        .modal-tags h4 {
            margin-bottom: 15px;
            color: #2c3e50;
        }

        .tags-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .tag {
            background: #3498db;
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .blogs-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .page-header h1 {
                font-size: 2rem;
            }

            .category-filters {
                justify-content: center;
            }

            .category-btn {
                padding: 8px 16px;
                font-size: 0.9rem;
            }

            .modal-content {
                margin: 10px;
                width: 95%;
            }

            .modal-header, .modal-body, .modal-tags {
                padding: 20px;
            }

            .modal-title {
                font-size: 1.5rem;
            }
        }

        .page-transition {
            opacity: 0.5;
            transition: opacity 0.3s ease;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="index.html" class="nav-logo">
                <div class="logo-icon"></div>
            </a>
            <ul class="nav-menu" id="navMenu">
                <li><a href="home.html" class="nav-link">Home</a></li>
                <li><a href="ai.html" class="nav-link">AI</a></li>
                <li><a href="create.php" class="nav-link">Create</a></li>
                <li><a href="search.php" class="nav-link">Search</a></li>
                <li><a href="edit4.php" class="nav-link">Edit</a></li>
                <li><a href="all6.php" class="nav-link active">Blogs</a></li>
                <li><a href="about.html" class="nav-link">About</a></li>
                <li><a href="contact.html" class="nav-link">Contact</a></li>
                <li><a href="privacy.html" class="nav-link">Privacy</a></li>
            </ul>
            <button class="mobile-menu-btn" id="mobileMenuBtn">☰</button>
        </div>
    </nav>

    <div class="blogs-container">
        <!-- Page Header -->
        <div class="page-header">
            <h1>All Blog Posts</h1>
            <p>Discover amazing stories and insights from our community</p>
        </div>

        <!-- Category Filter Buttons -->
        <div class="category-filters">
            <button class="category-btn <?php echo $categoryFilter === 'all' ? 'active' : ''; ?>" 
                    onclick="filterByCategory('all')">All</button>
            <?php foreach($categories as $category): ?>
                <button class="category-btn <?php echo $categoryFilter === $category ? 'active' : ''; ?>" 
                        onclick="filterByCategory('<?php echo htmlspecialchars($category); ?>')">
                    <?php echo ucfirst(htmlspecialchars($category)); ?>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Loading Spinner -->
        <div class="loading-spinner" id="loadingSpinner">
            <div class="spinner"></div>
            <p>Loading blog...</p>
        </div>

        <!-- Error Message -->
        <?php if (isset($error_message)): ?>
            <div class="error-message" style="display: block;">
                <?php echo htmlspecialchars($error_message); ?>
            </div>
        <?php endif; ?>

        <!-- No Posts Message -->
        <?php if (empty($posts) && !isset($error_message)): ?>
            <div class="message no-posts" style="display: block;">
                <h3>No blog posts found</h3>
                <p>There are no blog posts available in this category.</p>
            </div>
        <?php endif; ?>

        <!-- Blog Posts Grid -->
        <?php if (!empty($posts)): ?>
            <div class="blogs-grid" id="blogsGrid">
                <?php foreach($posts as $index => $post): ?>
                    <div class="blog-card" data-category="<?php echo htmlspecialchars($post['catagory'] ?? 'other'); ?>" 
                         style="animation-delay: <?php echo 0.1 * ($index % $postsPerPage); ?>s;"
                         onclick="viewFullBlog(<?php echo $post['id']; ?>)">
                        <div class="blog-content">
                            <h2 class="blog-title">
                                <?php echo htmlspecialchars($post['title'] ?? 'Untitled Post'); ?>
                            </h2>
                            <div class="blog-meta">
                                <span><?php echo htmlspecialchars($post['time'] ?? 5); ?> min read</span>
                                <span><?php echo ucfirst(htmlspecialchars($post['catagory'] ?? 'Blog')); ?></span>
                            </div>
                            <p class="blog-excerpt">
                                <?php 
                                $content = strip_tags($post['content'] ?? 'No content available');
                                $excerpt = strlen($content) > 120 ? substr($content, 0, 120) . '...' : $content;
                                echo htmlspecialchars($excerpt);
                                ?>
                            </p>
                            <div class="blog-tags">
                                <?php 
                                if (!empty($post['tags'])) {
                                    $tags = explode(',', $post['tags']);
                                    $displayedTags = 0;
                                    foreach($tags as $tag) {
                                        $tag = trim($tag);
                                        if (!empty($tag) && $displayedTags < 3) {
                                            echo '<span class="blog-tag">' . htmlspecialchars($tag) . '</span>';
                                            $displayedTags++;
                                        }
                                    }
                                } else {
                                    echo '<span class="blog-tag">' . htmlspecialchars($post['catagory'] ?? 'Blog') . '</span>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <?php if ($totalPages > 1): ?>
                <div class="pagination">
                    <?php
                    $currentUrl = $_SERVER['REQUEST_URI'];
                    $urlParts = parse_url($currentUrl);
                    parse_str($urlParts['query'] ?? '', $queryParams);
                    
                    // Previous button
                    if ($page > 1):
                        $queryParams['page'] = $page - 1;
                        $prevUrl = '?' . http_build_query($queryParams);
                    ?>
                        <a href="<?php echo $prevUrl; ?>" class="pagination-btn">Prev</a>
                    <?php endif; ?>

                    <?php
                    // Page numbers (show max 5 pages)
                    $maxButtons = 5;
                    $startPage = max(1, $page - floor($maxButtons / 2));
                    $endPage = min($totalPages, $startPage + $maxButtons - 1);
                    
                    if ($endPage - $startPage + 1 < $maxButtons) {
                        $startPage = max(1, $endPage - $maxButtons + 1);
                    }
                    
                    for ($i = $startPage; $i <= $endPage; $i++):
                        $queryParams['page'] = $i;
                        $pageUrl = '?' . http_build_query($queryParams);
                    ?>
                        <a href="<?php echo $pageUrl; ?>" 
                           class="pagination-btn <?php echo $i === $page ? 'active' : ''; ?>">
                            <?php echo $i; ?>
                        </a>
                    <?php endfor; ?>

                    <?php
                    // Next button
                    if ($page < $totalPages):
                        $queryParams['page'] = $page + 1;
                        $nextUrl = '?' . http_build_query($queryParams);
                    ?>
                        <a href="<?php echo $nextUrl; ?>" class="pagination-btn">Next</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <!-- Blog Modal Popup -->
    <div class="blog-modal" id="blogModal">
        <div class="modal-content">
            <div class="modal-header">
                <button class="modal-close" onclick="closeBlogModal()">&times;</button>
                <h1 class="modal-title" id="modalTitle">Blog Title</h1>
                <div class="modal-meta" id="modalMeta">
                    <span id="modalTime">5 min read</span>
                    <span id="modalCategory">Blog</span>
                </div>
            </div>
            <div class="modal-body" id="modalBody">
                <p>Loading blog content...</p>
            </div>
            <div class="modal-tags">
                <h4>Tags</h4>
                <div class="tags-container" id="modalTags">
                    <!-- Tags will be loaded here -->
                </div>
            </div>
        </div>
    </div>


    <div id="feaa"></div>


    <script>


    // Load footer
        fetch('f2.html')
          .then(res => res.text())
          .then(data => {
            document.getElementById('feaa').innerHTML = data;
          });


        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const navMenu = document.getElementById('navMenu');

        mobileMenuBtn.addEventListener('click', function() {
            navMenu.classList.toggle('active');
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
            });
        });

        // Category filter function
        function filterByCategory(category) {
            // Show loading
            document.getElementById('loadingSpinner').style.display = 'block';
            const blogsGrid = document.getElementById('blogsGrid');
            if (blogsGrid) {
                blogsGrid.style.opacity = '0.5';
            }
            
            // Update URL
            const url = new URL(window.location);
            if (category === 'all') {
                url.searchParams.delete('category');
            } else {
                url.searchParams.set('category', category);
            }
            url.searchParams.delete('page'); // Reset to first page
            
            // Redirect to filtered page
            window.location.href = url.toString();
        }

        // View full blog in modal
        function viewFullBlog(blogId) {
            const modal = document.getElementById('blogModal');
            const modalTitle = document.getElementById('modalTitle');
            const modalBody = document.getElementById('modalBody');
            const modalTime = document.getElementById('modalTime');
            const modalCategory = document.getElementById('modalCategory');
            const modalTags = document.getElementById('modalTags');
            
            // Show modal
            modal.classList.add('show');
            document.body.style.overflow = 'hidden';
            
            // Reset content
            modalTitle.textContent = 'Loading...';
            modalBody.innerHTML = '<div style="text-align: center; padding: 40px;"><div class="spinner"></div><p>Loading blog content...</p></div>';
            modalTags.innerHTML = '';
            
            // Create the fetch URL
            const currentUrl = new URL(window.location.href);
            const fetchUrl = currentUrl.origin + currentUrl.pathname + '?action=get_blog&id=' + blogId;
            
            console.log('Fetching blog from:', fetchUrl);
            
            // Fetch blog content
            fetch(fetchUrl)
                .then(response => {
                    console.log('Response status:', response.status);
                    console.log('Response type:', response.headers.get('content-type'));
                    
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    
                    return response.text().then(text => {
                        try {
                            return JSON.parse(text);
                        } catch (e) {
                            console.error('Response is not valid JSON:', text);
                            throw new Error('Invalid JSON response');
                        }
                    });
                })
                .then(blog => {
                    console.log('Blog data received:', blog);
                    
                    if (blog.error) {
                        throw new Error(blog.error);
                    }
                    
                    // Update modal content
                    modalTitle.textContent = blog.title || 'Untitled Post';
                    modalTime.textContent = (blog.time || 5) + ' min read';
                    modalCategory.textContent = blog.catagory || 'Blog';
                    
                    // Format and display content
                    let content = blog.content || 'No content available';
                    
                    // Simple text formatting
                    content = content.replace(/\r\n/g, '\n');
                    content = content.replace(/\n\n+/g, '</p><p>');
                    content = content.replace(/\n/g, '<br>');
                    
                    // Wrap in paragraph tags if not already formatted
                    if (!content.includes('<p>') && !content.includes('<div>')) {
                        content = '<p>' + content + '</p>';
                    }
                    
                    modalBody.innerHTML = content;
                    
                    // Display tags
                    if (blog.tags && blog.tags.trim()) {
                        const tags = blog.tags.split(',');
                        modalTags.innerHTML = tags.map(tag => 
                            `<span class="tag">${tag.trim()}</span>`
                        ).join('');
                    } else if (blog.catagory) {
                        modalTags.innerHTML = `<span class="tag">${blog.catagory}</span>`;
                    } else {
                        modalTags.innerHTML = '<span class="tag">Blog</span>';
                    }
                })
                .catch(error => {
                    console.error('Error fetching blog:', error);
                    modalTitle.textContent = 'Error Loading Blog';
                    modalBody.innerHTML = `
                        <div style="text-align: center; padding: 40px; color: #e74c3c;">
                            <h3>Sorry, there was an error loading this blog post.</h3>
                            <p style="margin: 20px 0; color: #666;">Error: ${error.message}</p>
                            <p style="color: #666;">Please try again or contact support if the problem persists.</p>
                            <button onclick="viewFullBlog(${blogId})" style="
                                background: #3498db; 
                                color: white; 
                                border: none; 
                                padding: 12px 24px; 
                                border-radius: 8px; 
                                cursor: pointer;
                                margin-top: 20px;
                                font-size: 1rem;
                            " onmouseover="this.style.background='#2980b9'" onmouseout="this.style.background='#3498db'">Try Again</button>
                        </div>
                    `;
                    modalTags.innerHTML = '';
                });
        }

        // Close blog modal
        function closeBlogModal() {
            const modal = document.getElementById('blogModal');
            modal.classList.remove('show');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        document.getElementById('blogModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeBlogModal();
            }
        });
        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeBlogModal();
            }
        });

        // Hide loading spinner after page load
        window.addEventListener('load', function() {
            const loadingSpinner = document.getElementById('loadingSpinner');
            if (loadingSpinner) {
                loadingSpinner.style.display = 'none';
            }
            
            // Remove any transition effects
            const container = document.querySelector('.blogs-container');
            if (container) {
                container.classList.remove('page-transition');
            }
        });

        // Add smooth hover effects for blog cards
        document.addEventListener('DOMContentLoaded', function() {
            const blogCards = document.querySelectorAll('.blog-card');
            blogCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-8px)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Initialize card animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe all blog cards
            blogCards.forEach(card => {
                observer.observe(card);
            });
        });

        // Pagination smooth loading
        document.querySelectorAll('.pagination-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                document.querySelector('.blogs-container').classList.add('page-transition');
            });
        });
    </script>
</body>
</html>
