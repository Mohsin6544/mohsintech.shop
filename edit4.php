<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="project/logo1.png" type="image/png">

    <!-- Essential Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Primary Meta Tags -->
    <title>Edit Blog Posts - Content Management Dashboard | AI Blog Platform</title>
    <meta name="title" content="Edit Blog Posts - Content Management Dashboard | AI Blog Platform">
    <meta name="description" content="Edit and manage your blog posts with our powerful content management system. Update titles, categories, tags, and content instantly. Professional blog editing tools for content creators.">
    <meta name="keywords" content="edit blog posts, blog editor, content management, blog dashboard, update articles, modify blog content, blog CMS, content editing tools, blog management system, edit published posts">
    <meta name="author" content="AI Blog Platform">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="3 days">
    <meta name="rating" content="General">
    <meta name="distribution" content="Global">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mohsintech.shop/edit-blog">
    <meta property="og:title" content="Edit Blog Posts - Content Management Dashboard">
    <meta property="og:description" content="Edit and manage your blog posts with our powerful content management system. Update titles, categories, tags, and content instantly.">
    <meta property="og:image" content="https://mohsintech.shop/images/edit-blog-og.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="AI Blog Platform">
    <meta property="og:locale" content="en_US">
    <meta property="article:author" content="AI Blog Platform">
    <meta property="article:section" content="Blog Management">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://mohsintech.shop/edit-blog">
    <meta property="twitter:title" content="Edit Blog Posts - Content Management Dashboard">
    <meta property="twitter:description" content="Edit and manage your blog posts with our powerful content management system. Update titles, categories, tags, and content instantly.">
    <meta property="twitter:image" content="https://mohsintech.shop/images/edit-blog-twitter.jpg">
    <meta property="twitter:creator" content="@yourblogplatform">
    <meta property="twitter:site" content="@yourblogplatform">
    <meta name="twitter:image:alt" content="Blog editing dashboard interface">
    
    <!-- Additional SEO Meta Tags -->
    <meta name="theme-color" content="#6366f1">
    <meta name="msapplication-TileColor" content="#6366f1">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Edit Blog">
    <meta name="application-name" content="Blog Editor">
    <meta name="msapplication-tooltip" content="Edit and manage your blog posts">
    <meta name="msapplication-starturl" content="/edit-blog">
    
    <!-- Geo Tags -->
    <meta name="geo.region" content="US">
    <meta name="geo.placename" content="United States">
    <meta name="ICBM" content="40.7128, -74.0060">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://mohsintech.shop/edit-blog">
    
    <!-- Alternate Languages -->
    <link rel="alternate" hreflang="en" href="https://mohsintech.shop/edit-blog">
    <link rel="alternate" hreflang="es" href="https://mohsintech.shop/es/edit-blog">
    <link rel="alternate" hreflang="fr" href="https://mohsintech.shop/fr/edit-blog">
    <link rel="alternate" hreflang="x-default" href="https://mohsintech.shop/edit-blog">
    
    <!-- Google Fonts with Display Swap for Performance -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
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
            padding-top: 90px;
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

        /* Edit Blog Styles */
        .edit-container {
            max-width: 1000px;
            margin: 30px auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .edit-container h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 2.5rem;
        }

        .blog-list {
            margin-bottom: 30px;
        }

        .blog-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            margin-bottom: 15px;
            transition: all 0.3s ease;
            background-color: #fff;
        }

        .blog-item:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }

        .blog-info {
            flex-grow: 1;
        }

        .blog-title {
            font-weight: 600;
            color: #4f46e5;
            margin-bottom: 8px;
            font-size: 1.2rem;
        }

        .blog-meta {
            color: #666;
            font-size: 14px;
            display: flex;
            gap: 15px;
        }

        .blog-actions {
            display: flex;
            gap: 10px;
        }

        .edit-btn, .delete-btn {
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .edit-btn {
            background-color: #4CAF50;
            color: white;
        }

        .edit-btn:hover {
            background-color: #45a049;
            transform: translateY(-2px);
        }

        .delete-btn {
            background-color: #f44336;
            color: white;
        }

        .delete-btn:hover {
            background-color: #d32f2f;
            transform: translateY(-2px);
        }

        .edit-form {
            display: none;
            margin-top: 30px;
            padding: 20px;
            background-color: #f9f9fa;
            border-radius: 8px;
            border: 2px solid #6366f1;
        }

        .edit-form.active {
            display: block;
        }

        .edit-form h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
        }

        .form-group input[type="text"],
        .form-group select,
        .form-group textarea,
        .form-group input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 6px;
            transition: border-color 0.3s ease;
            font-size: 16px;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #6366f1;
        }

        .form-group textarea {
            height: 250px;
            resize: vertical;
        }

        .form-actions {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 25px;
        }

        .save-btn, .cancel-btn {
            padding: 12px 30px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .save-btn {
            background-color: #6366f1;
            color: white;
        }

        .save-btn:hover {
            background-color: #4f46e5;
            transform: translateY(-2px);
        }

        .cancel-btn {
            background-color: #6c757d;
            color: white;
        }

        .cancel-btn:hover {
            background-color: #5a6268;
            transform: translateY(-2px);
        }

        .tags-container {
            border: 2px solid #ddd;
            padding: 12px;
            border-radius: 6px;
            min-height: 60px;
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            align-items: flex-start;
        }

        .tag {
            display: inline-flex;
            align-items: center;
            background-color: #6366f1;
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 14px;
        }

        .tag-close {
            margin-left: 8px;
            color: white;
            cursor: pointer;
            font-weight: bold;
        }

        .tag-close:hover {
            color: #ff6b6b;
        }

        /* Loading spinner */
        .loading {
            display: none;
            text-align: center;
            margin: 30px 0;
        }
        
        .spinner {
            border: 4px solid rgba(0, 0, 0, 0.1);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border-left-color: #6366f1;
            animation: spin 1s linear infinite;
            margin: 0 auto;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .no-posts {
            text-align: center;
            padding: 40px;
            color: #666;
            font-size: 1.2rem;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 6px;
            font-weight: 500;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
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

            .blog-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .blog-actions {
                width: 100%;
                margin-top: 15px;
            }

            .blog-actions button {
                flex-grow: 1;
            }

            .edit-container {
                margin: 20px 15px;
                padding: 20px;
            }

            .form-actions {
                flex-direction: column;
            }

            .form-actions button {
                width: 100%;
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
                    <li><a href="search.php">Search</a></li>
                    <li><a href="edit4.php"class="active">Edit</a></li>
                    <li><a href="all6.php">Blogs</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="privacy.html">Privacy</a></li>
                </ul>
                
                <button class="menu-toggle" id="menuToggle">☰</button>
            </div>
        </div>
    </div>

    <div class="edit-container">
        <h1>Edit Blog Posts</h1>

        <?php
        // Database connection
        $servername = "localhost";
        $username = "root"; // Change as per your setup
        $password = ""; // Change as per your setup
        $dbname = "blogs"; // Change as per your database name

        try {
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }

        // Handle form submissions
        $message = '';
        $messageType = '';

        // Handle Update
        if (isset($_POST['update_blog'])) {
            try {
                $id = $_POST['blog_id'];
                $title = $_POST['title'];
                $catagory = $_POST['catagory'];
                $time = $_POST['time'];
                $tags = $_POST['tags'];
                $content = $_POST['content'];

                $stmt = $pdo->prepare("UPDATE my_data SET title = ?, catagory = ?, time = ?, tags = ?, content = ? WHERE id = ?");
                $stmt->execute([$title, $catagory, $time, $tags, $content, $id]);

                $message = "Blog post updated successfully!";
                $messageType = "success";
            } catch(PDOException $e) {
                $message = "Error updating blog: " . $e->getMessage();
                $messageType = "error";
            }
        }

        // Handle Delete
        if (isset($_POST['delete_blog'])) {
            try {
                $id = $_POST['blog_id'];
                $stmt = $pdo->prepare("DELETE FROM my_data WHERE id = ?");
                $stmt->execute([$id]);

                $message = "Blog post deleted successfully!";
                $messageType = "success";
            } catch(PDOException $e) {
                $message = "Error deleting blog: " . $e->getMessage();
                $messageType = "error";
            }
        }

        // Display message
        if ($message) {
            echo "<div class='alert alert-$messageType'>$message</div>";
        }

        // Fetch all blog posts
        try {
            $stmt = $pdo->query("SELECT * FROM my_data ORDER BY id DESC");
            $blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo "<div class='alert alert-error'>Error fetching blogs: " . $e->getMessage() . "</div>";
            $blogs = [];
        }
        ?>

        <div class="blog-list" id="blogList">
            <?php if (empty($blogs)): ?>
                <div class="no-posts">No blog posts found. Create one first!</div>
            <?php else: ?>
                <?php foreach ($blogs as $blog): ?>
                    <div class="blog-item">
                        <div class="blog-info">
                            <div class="blog-title"><?php echo htmlspecialchars($blog['title']); ?></div>
                            <div class="blog-meta">
                                <span><strong>Category:</strong> <?php echo htmlspecialchars($blog['catagory']); ?></span>
                                <span><strong>Time:</strong> <?php echo htmlspecialchars($blog['time']); ?> min read</span>
                                <span><strong>Tags:</strong> <?php echo htmlspecialchars($blog['tags']); ?></span>
                            </div>
                        </div>
                        <div class="blog-actions">
                            <button class="edit-btn" onclick="editPost(<?php echo $blog['id']; ?>)">Edit</button>
                            <button class="delete-btn" onclick="deletePost(<?php echo $blog['id']; ?>)">Delete</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- Edit Form (Hidden by default) -->
        <div class="edit-form" id="editForm">
            <h2>Edit Blog Post</h2>
            <form method="POST" id="blogEditForm">
                <input type="hidden" name="blog_id" id="editBlogId">
                
                <div class="form-group">
                    <label for="editTitle">Blog Title</label>
                    <input type="text" name="title" id="editTitle" required placeholder="Enter blog title">
                </div>

                <div class="form-group">
                    <label for="editCategory">Category</label>
                    <select name="catagory" id="editCategory" required>
                        <option value="">Select a category</option>
                        <option value="lifestyle">Lifestyle</option>
                        <option value="health">Health</option>
                        <option value="technology">Technology</option>
                        <option value="education">Education</option>
                        <option value="business">Business</option>
                        <option value="travel">Travel</option>
                        <option value="food">Food</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="editTime">Reading Time (minutes)</label>
                    <input type="number" name="time" id="editTime" min="1" max="60" required placeholder="Reading time in minutes">
                </div>

                <div class="form-group">
                    <label for="editTagsInput">Tags</label>
                    <input type="text" id="editTagsInput" placeholder="Type a tag and press Enter">
                    <input type="hidden" name="tags" id="editTags">
                    <div id="editTagsContainer" class="tags-container"></div>
                </div>

                <div class="form-group">
                    <label for="editContent">Blog Content</label>
                    <textarea name="content" id="editContent" required placeholder="Edit your blog post content here..."></textarea>
                </div>

                <div class="form-actions">
                    <button type="submit" name="update_blog" class="save-btn">Save Changes</button>
                    <button type="button" class="cancel-btn" onclick="cancelEdit()">Cancel</button>
                </div>
            </form>
        </div>

        <!-- Hidden Delete Form -->
        <form method="POST" id="deleteForm" style="display: none;">
            <input type="hidden" name="blog_id" id="deleteBlogId">
            <input type="hidden" name="delete_blog" value="1">
        </form>
    </div>

    <div id="feaa"></div>

    <script>
        // Blog data for JavaScript access
        const blogData = <?php echo json_encode($blogs); ?>;
        
        // Current tags array for the form
        let currentTags = [];

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

        // Mobile menu setup
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
            const editTagsInput = document.getElementById('editTagsInput');
            const editTagsContainer = document.getElementById('editTagsContainer');
            
            // Tag input
            editTagsInput.addEventListener('keypress', handleTagInput);
            
            // Tag container click for removing tags
            editTagsContainer.addEventListener('click', handleTagRemoval);
        }

        // Handle tag input (Enter key)
        function handleTagInput(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                const tagText = this.value.trim();
                
                if (tagText && !currentTags.includes(tagText)) {
                    currentTags.push(tagText);
                    addTagToContainer(tagText);
                    updateTagsInput();
                    this.value = '';
                }
            }
        }

        // Add tag to the container
        function addTagToContainer(tagText) {
            const tagElement = document.createElement('span');
            tagElement.classList.add('tag');
            tagElement.innerHTML = `${tagText} <span class="tag-close" data-tag="${tagText}">×</span>`;
            
            document.getElementById('editTagsContainer').appendChild(tagElement);
        }

        // Handle tag removal
        function handleTagRemoval(e) {
            if (e.target.classList.contains('tag-close')) {
                const tagToRemove = e.target.getAttribute('data-tag');
                const tagIndex = currentTags.indexOf(tagToRemove);
                
                if (tagIndex > -1) {
                    currentTags.splice(tagIndex, 1);
                    e.target.closest('.tag').remove();
                    updateTagsInput();
                }
            }
        }

        // Update hidden tags input
        function updateTagsInput() {
            document.getElementById('editTags').value = currentTags.join(', ');
        }

        // Edit post
        function editPost(blogId) {
            const blog = blogData.find(b => b.id == blogId);
            
            if (blog) {
                // Populate form fields
                document.getElementById('editBlogId').value = blog.id;
                document.getElementById('editTitle').value = blog.title || '';
                document.getElementById('editCategory').value = blog.catagory || '';
                document.getElementById('editTime').value = blog.time || '';
                document.getElementById('editContent').value = blog.content || '';
                
                // Clear existing tags
                document.getElementById('editTagsContainer').innerHTML = '';
                currentTags = [];
                
                // Add tags
                if (blog.tags) {
                    const tags = blog.tags.split(',').map(tag => tag.trim()).filter(tag => tag);
                    tags.forEach(tag => {
                        currentTags.push(tag);
                        addTagToContainer(tag);
                    });
                }
                updateTagsInput();
                
                // Show edit form
                document.getElementById('editForm').classList.add('active');
                
                // Scroll to edit form
                document.getElementById('editForm').scrollIntoView({ behavior: 'smooth' });
            }
        }

        // Delete post
        function deletePost(blogId) {
            if (confirm('Are you sure you want to delete this blog post? This action cannot be undone.')) {
                document.getElementById('deleteBlogId').value = blogId;
                document.getElementById('deleteForm').submit();
            }
        }

        // Cancel edit
        function cancelEdit() {
            document.getElementById('editForm').classList.remove('active');
            document.getElementById('blogEditForm').reset();
            document.getElementById('editTagsContainer').innerHTML = '';
            currentTags = [];
        }
    </script>
</body>
</html>
