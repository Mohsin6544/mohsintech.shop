<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="project/logo1.png" type="image/png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Blogs</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
            padding-top: 90px; /* Space for fixed navbar */
            line-height: 1.6;
        }

        /* Navigation styles */
        .nav-container {
            width: 100%;
            background: linear-gradient(135deg, #6366f1, #8b5cf6, #d946ef);
            background-size: 300% 300%;
            animation: gradientBG 15s ease infinite;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
        }
        
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 15px 20px;
            position: relative;
        }
        
        .logo-container {
            display: flex;
            align-items: center;
            position: relative;
            z-index: 10;
        }
        
        .logo-circle {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            border: 2px solid #ccc;
            transition: transform 0.3s ease;
        }

        .logo-circle:hover {
            transform: scale(1.1);
        }
        
        .nav-menu {
            display: flex;
            align-items: center;
            position: relative;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
            margin-right: 20px;
        }
        
        .nav-links li {
            margin: 0 5px;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 8px 14px;
            border-radius: 10px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            opacity: 0.85;
        }
        
        .nav-links a:hover {
            opacity: 1;
            transform: translateY(-3px);
        }
        
        .nav-links a.active {
            opacity: 1;
            background-color: rgba(255, 255, 255, 0.15);
        }
        
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 24px;
            cursor: pointer;
        }

        /* Search Page Styles */
        .search-container {
            max-width: 800px;
            margin: 30px auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .search-container h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .search-box {
            display: flex;
            margin-bottom: 30px;
        }

        .search-input {
            flex: 1;
            padding: 12px 15px;
            border: 2px solid #ddd;
            border-radius: 4px 0 0 4px;
            font-size: 16px;
        }

        .search-btn {
            background-color: #6366f1;
            color: white;
            border: none;
            padding: 0 20px;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .search-btn:hover {
            background-color: #4f46e5;
        }

        .filter-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 20px;
        }

        .filter-group {
            flex: 1;
            min-width: 150px;
        }

        .filter-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: 500;
        }

        .filter-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .search-results {
            margin-top: 30px;
        }

        .result-card {
            padding: 15px;
            border-bottom: 1px solid #eee;
            transition: background-color 0.3s;
        }

        .result-card:last-child {
            border-bottom: none;
        }

        .result-card:hover {
            background-color: #f9f9f9;
        }

        .result-title {
            color: #4f46e5;
            font-size: 18px;
            margin-bottom: 5px;
            font-weight: 600;
            cursor: pointer;
        }

        .result-meta {
            display: flex;
            gap: 15px;
            font-size: 14px;
            color: #666;
            margin-bottom: 8px;
        }

        .result-category {
            background-color: #f1f1f1;
            padding: 3px 8px;
            border-radius: 10px;
            font-size: 12px;
        }

        .result-excerpt {
            color: #555;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .result-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            margin-top: 8px;
        }

        .result-tag {
            background-color: #e9ecef;
            color: #495057;
            padding: 3px 8px;
            border-radius: 10px;
            font-size: 12px;
        }

        .no-results {
            text-align: center;
            padding: 30px 0;
            color: #666;
        }

        .load-more {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 4px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .load-more:hover {
            background-color: #e9ecef;
        }

        /* Loading spinner */
        .loading {
            display: none;
            text-align: center;
            margin: 20px 0;
        }
        
        .spinner {
            border: 4px solid rgba(0, 0, 0, 0.1);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border-left-color: #6366f1;
            animation: spin 1s linear infinite;
            margin: 0 auto;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 6px;
            font-weight: 500;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        /* Responsive Design */
        @media (max-width: 1000px) {
            .nav-links {
                display: none;
                position: fixed;
                top: 0;
                right: -100%;
                width: 280px;
                height: 100vh;
                background: linear-gradient(135deg, #6366f1, #8b5cf6, #d946ef);
                flex-direction: column;
                align-items: center;
                padding: 80px 0 30px;
                box-shadow: -5px 0 25px rgba(0, 0, 0, 0.15);
                transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                z-index: 100;
            }

            .nav-links.active {
                display: flex;
                right: 0;
            }

            .menu-toggle {
                display: block;
                position: relative;
                z-index: 101;
            }

            .nav-links li {
                width: 80%;
                margin: 8px 0;
            }

            .nav-links a {
                display: block;
                text-align: center;
                width: 100%;
                padding: 12px 20px;
            }

            .filter-container {
                flex-direction: column;
                gap: 10px;
            }

            .filter-group {
                width: 100%;
            }

            .search-container {
                margin: 20px 15px;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <div class="nav-container">
        <div class="nav-content">
            <div class="logo-container">
                <a href="index.html"><div class="logo-circle">🤖</div></a>
            </div>        
            <div class="nav-menu">
                <ul class="nav-links" id="navLinks">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="ai.html">AI</a></li>
                    <li><a href="create.php">Create</a></li>
                    <li><a href="search.php" class="active">Search</a></li>
                    <li><a href="edit4.php">Edit</a></li>
                    <li><a href="all6.php">Blogs</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="privacy.html">Privacy</a></li>
                </ul>
                
                <button class="menu-toggle" id="menuToggle">☰</button>
            </div>
        </div>
    </div>

    <div class="search-container">
        <h1>Search Blogs</h1>
        
        <!-- Search Bar -->
        <div class="search-box">
            <input type="text" class="search-input" id="searchInput" placeholder="Search for blogs..." value="<?php echo isset($_GET['q']) ? htmlspecialchars($_GET['q']) : ''; ?>">
            <button class="search-btn" id="searchButton">Search</button>
        </div>

        <!-- Filters -->
        <div class="filter-container">
            <div class="filter-group">
                <label for="categoryFilter">Category</label>
                <select id="categoryFilter">
                    <option value="">All Categories</option>
                    <option value="lifestyle" <?php echo (isset($_GET['category']) && $_GET['category'] === 'lifestyle') ? 'selected' : ''; ?>>Lifestyle</option>
                    <option value="health" <?php echo (isset($_GET['category']) && $_GET['category'] === 'health') ? 'selected' : ''; ?>>Health</option>
                    <option value="technology" <?php echo (isset($_GET['category']) && $_GET['category'] === 'technology') ? 'selected' : ''; ?>>Technology</option>
                    <option value="education" <?php echo (isset($_GET['category']) && $_GET['category'] === 'education') ? 'selected' : ''; ?>>Education</option>
                    <option value="business" <?php echo (isset($_GET['category']) && $_GET['category'] === 'business') ? 'selected' : ''; ?>>Business</option>
                    <option value="travel" <?php echo (isset($_GET['category']) && $_GET['category'] === 'travel') ? 'selected' : ''; ?>>Travel</option>
                    <option value="food" <?php echo (isset($_GET['category']) && $_GET['category'] === 'food') ? 'selected' : ''; ?>>Food</option>
                </select>
            </div>

            <div class="filter-group">
                <label for="sortBy">Sort By</label>
                <select id="sortBy">
                    <option value="newest" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'newest') ? 'selected' : ''; ?>>Newest First</option>
                    <option value="oldest" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'oldest') ? 'selected' : ''; ?>>Oldest First</option>
                    <option value="az" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'az') ? 'selected' : ''; ?>>A-Z</option>
                    <option value="za" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'za') ? 'selected' : ''; ?>>Z-A</option>
                </select>
            </div>

            <div class="filter-group">
                <label for="readTimeFilter">Reading Time</label>
                <select id="readTimeFilter">
                    <option value="">Any Length</option>
                    <option value="short" <?php echo (isset($_GET['time']) && $_GET['time'] === 'short') ? 'selected' : ''; ?>>Short (< 5 min)</option>
                    <option value="medium" <?php echo (isset($_GET['time']) && $_GET['time'] === 'medium') ? 'selected' : ''; ?>>Medium (5-15 min)</option>
                    <option value="long" <?php echo (isset($_GET['time']) && $_GET['time'] === 'long') ? 'selected' : ''; ?>>Long (> 15 min)</option>
                </select>
            </div>
        </div>

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
            echo "<div class='alert alert-error'>Connection failed: " . $e->getMessage() . "</div>";
        }

        // Get search parameters
        $searchQuery = isset($_GET['q']) ? trim($_GET['q']) : '';
        $categoryFilter = isset($_GET['category']) ? $_GET['category'] : '';
        $sortBy = isset($_GET['sort']) ? $_GET['sort'] : 'newest';
        $readTimeFilter = isset($_GET['time']) ? $_GET['time'] : '';
        $page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
        $postsPerPage = 5;
        $offset = ($page - 1) * $postsPerPage;

        // Build the SQL query
        $sql = "SELECT * FROM my_data WHERE 1=1";
        $params = [];

        // Add search condition
        if (!empty($searchQuery)) {
            $sql .= " AND (title LIKE ? OR content LIKE ? OR tags LIKE ?)";
            $searchParam = "%$searchQuery%";
            $params[] = $searchParam;
            $params[] = $searchParam;
            $params[] = $searchParam;
        }

        // Add category filter
        if (!empty($categoryFilter)) {
            $sql .= " AND catagory = ?";
            $params[] = $categoryFilter;
        }

        // Add reading time filter
        if (!empty($readTimeFilter)) {
            switch($readTimeFilter) {
                case 'short':
                    $sql .= " AND time < 5";
                    break;
                case 'medium':
                    $sql .= " AND time >= 5 AND time <= 15";
                    break;
                case 'long':
                    $sql .= " AND time > 15";
                    break;
            }
        }

        // Add sorting
        switch($sortBy) {
            case 'oldest':
                $sql .= " ORDER BY id ASC";
                break;
            case 'az':
                $sql .= " ORDER BY title ASC";
                break;
            case 'za':
                $sql .= " ORDER BY title DESC";
                break;
            default: // newest
                $sql .= " ORDER BY id DESC";
                break;
        }

        // Count total results for pagination
        $countSql = str_replace("SELECT *", "SELECT COUNT(*)", $sql);
        $countSql = preg_replace('/ORDER BY.*$/', '', $countSql);

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
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch(PDOException $e) {
            echo "<div class='alert alert-error'>Error searching blogs: " . $e->getMessage() . "</div>";
            $results = [];
            $totalResults = 0;
            $totalPages = 0;
        }
        ?>

        <!-- Search Results -->
        <div class="search-results" id="searchResults">
            <?php if (!empty($results)): ?>
                <?php foreach($results as $post): ?>
                    <div class="result-card">
                        <div class="result-title" onclick="viewPost(<?php echo $post['id']; ?>)">
                            <?php echo htmlspecialchars($post['title']); ?>
                        </div>
                        <div class="result-meta">
                            <span><?php echo ucfirst(htmlspecialchars($post['catagory'])); ?></span>
                            <span><?php echo htmlspecialchars($post['time']); ?> min read</span>
                            <span class="result-category"><?php echo ucfirst(htmlspecialchars($post['catagory'])); ?></span>
                        </div>
                        
                        <?php 
                        // Create excerpt from content
                        $content = strip_tags($post['content']);
                        $excerpt = strlen($content) > 200 ? substr($content, 0, 200) . '...' : $content;
                        ?>
                        <div class="result-excerpt"><?php echo htmlspecialchars($excerpt); ?></div>
                        
                        <?php if (!empty($post['tags'])): ?>
                            <div class="result-tags">
                                <?php 
                                $tags = explode(',', $post['tags']);
                                foreach($tags as $tag): 
                                    $tag = trim($tag);
                                    if (!empty($tag)):
                                ?>
                                    <span class="result-tag"><?php echo htmlspecialchars($tag); ?></span>
                                <?php 
                                    endif;
                                endforeach; 
                                ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>

                <!-- Pagination -->
                <?php if ($totalPages > 1): ?>
                    <div style="text-align: center; margin-top: 30px;">
                        <?php
                        $currentUrl = $_SERVER['REQUEST_URI'];
                        $urlParts = parse_url($currentUrl);
                        parse_str($urlParts['query'] ?? '', $queryParams);
                        
                        // Previous page
                        if ($page > 1):
                            $queryParams['page'] = $page - 1;
                            $prevUrl = '?' . http_build_query($queryParams);
                        ?>
                            <a href="<?php echo $prevUrl; ?>" style="display: inline-block; padding: 10px 20px; margin: 5px; background-color: #6366f1; color: white; text-decoration: none; border-radius: 4px;">Previous</a>
                        <?php endif; ?>

                        <!-- Page numbers -->
                        <?php for ($i = max(1, $page - 2); $i <= min($totalPages, $page + 2); $i++): ?>
                            <?php
                            $queryParams['page'] = $i;
                            $pageUrl = '?' . http_build_query($queryParams);
                            ?>
                            <a href="<?php echo $pageUrl; ?>" 
                               style="display: inline-block; padding: 10px 15px; margin: 5px; 
                                      background-color: <?php echo $i === $page ? '#4f46e5' : '#f8f9fa'; ?>; 
                                      color: <?php echo $i === $page ? 'white' : '#333'; ?>; 
                                      text-decoration: none; border-radius: 4px; border: 1px solid #ddd;">
                                <?php echo $i; ?>
                            </a>
                        <?php endfor; ?>

                        <!-- Next page -->
                        <?php if ($page < $totalPages):
                            $queryParams['page'] = $page + 1;
                            $nextUrl = '?' . http_build_query($queryParams);
                        ?>
                            <a href="<?php echo $nextUrl; ?>" style="display: inline-block; padding: 10px 20px; margin: 5px; background-color: #6366f1; color: white; text-decoration: none; border-radius: 4px;">Next</a>
                        <?php endif; ?>
                    </div>

                    <div style="text-align: center; margin-top: 15px; color: #666;">
                        Showing <?php echo (($page - 1) * $postsPerPage) + 1; ?> to <?php echo min($page * $postsPerPage, $totalResults); ?> of <?php echo $totalResults; ?> results
                    </div>
                <?php endif; ?>

            <?php else: ?>
                <div class="no-results">
                    <h3>No results found</h3>
                    <p>Try adjusting your search terms or filters.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div id="feaa"></div>

    <script>
        // Document ready
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu functionality
            setupMobileMenu();
            
            // Set up event listeners
            setupEventListeners();
            
            // Load footer
            fetch('f2.html')
                .then(res => res.text())
                .then(data => {
                    document.getElementById('feaa').innerHTML = data;
                })
                .catch(err => {
                    console.error("Error loading footer:", err);
                });
        });

        // Setup mobile menu
        function setupMobileMenu() {
            const menuToggle = document.getElementById('menuToggle');
            const navLinks = document.getElementById('navLinks');
            
            menuToggle.addEventListener('click', function() {
                navLinks.classList.toggle('active');
                this.innerHTML = navLinks.classList.contains('active') ? '✕' : '☰';
            });

            document.querySelectorAll('.nav-links a').forEach(link => {
                link.addEventListener('click', () => {
                    navLinks.classList.remove('active');
                    menuToggle.innerHTML = '☰';
                });
            });
        }

        // Set up event listeners
        function setupEventListeners() {
            const searchInput = document.getElementById('searchInput');
            const searchButton = document.getElementById('searchButton');
            const categoryFilter = document.getElementById('categoryFilter');
            const sortBy = document.getElementById('sortBy');
            const readTimeFilter = document.getElementById('readTimeFilter');
            
            // Search button click
            searchButton.addEventListener('click', performSearch);
            
            // Search on Enter key
            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    performSearch();
                }
            });
            
            // Filter changes trigger search
            categoryFilter.addEventListener('change', performSearch);
            sortBy.addEventListener('change', performSearch);
            readTimeFilter.addEventListener('change', performSearch);
        }

        // Perform search with current parameters
        function performSearch() {
            const searchQuery = document.getElementById('searchInput').value;
            const category = document.getElementById('categoryFilter').value;
            const sort = document.getElementById('sortBy').value;
            const time = document.getElementById('readTimeFilter').value;
            
            // Build URL with parameters
            const params = new URLSearchParams();
            if (searchQuery) params.append('q', searchQuery);
            if (category) params.append('category', category);
            if (sort) params.append('sort', sort);
            if (time) params.append('time', time);
            
            // Redirect to search results
            window.location.href = 'search.php?' + params.toString();
        }

        // View full post (you can customize this)
        function viewPost(postId) {
            // This would navigate to a full post view page
            alert('Viewing post ID: ' + postId);
            // window.location.href = 'view-post.php?id=' + postId;
        }
    </script>
</body>
</html>
