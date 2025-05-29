<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="project/logo1.png" type="image/png">
    
    <!-- Essential Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Primary Meta Tags -->
    <title>Create Blog Post - AI-Powered Blog Platform | Write & Publish Online</title>
    <meta name="title" content="Create Blog Post - AI-Powered Blog Platform | Write & Publish Online">
    <meta name="description" content="Create and publish engaging blog posts on our AI-powered platform. Easy-to-use editor with categories, tags, and instant publishing. Join thousands of content creators today!">
    <meta name="keywords" content="create blog, write blog post, blog platform, online publishing, content creation, AI blog, blogging platform, publish articles, blog editor, content management">
    <meta name="author" content="AI Blog Platform">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mohsintech.shop/create-blog">
    <meta property="og:title" content="Create Blog Post - AI-Powered Blog Platform">
    <meta property="og:description" content="Create and publish engaging blog posts on our AI-powered platform. Easy-to-use editor with categories, tags, and instant publishing.">
    <meta property="og:image" content="https://mohsintech.shop/images/create-blog-og.jpg">
    <meta property="og:site_name" content="AI Blog Platform">
    <meta property="og:locale" content="en_US">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://mohsintech.shop/create-blog">
    <meta property="twitter:title" content="Create Blog Post - AI-Powered Blog Platform">
    <meta property="twitter:description" content="Create and publish engaging blog posts on our AI-powered platform. Easy-to-use editor with categories, tags, and instant publishing.">
    <meta property="twitter:image" content="https://mohsintech.shop/images/create-blog-twitter.jpg">
    <meta property="twitter:creator" content="@yourblogplatform">
    <meta property="twitter:site" content="@yourblogplatform">
    
    <!-- Additional SEO Meta Tags -->
    <meta name="theme-color" content="#6366f1">
    <meta name="msapplication-TileColor" content="#6366f1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="Create Blog">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://mohsintech.shop/create-blog">
    
    <!-- Preconnect for Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
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

        /* Create Blog Form Styles */
        .create-container {
            max-width: 600px;
            margin: 30px auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .create-container h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: 500;
        }

        input[type="text"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }

        textarea {
            height: 200px;
            resize: vertical;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #6366f1;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #4f46e5;
        }

        .submit-btn:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        .tags-container {
            border: 2px solid #ddd;
            padding: 10px;
            border-radius: 4px;
            min-height: 50px;
            background-color: #fff;
        }

        .tag {
            display: inline-block;
            background-color: #e9ecef;
            color: #495057;
            padding: 5px 12px;
            margin: 3px;
            border-radius: 15px;
            font-size: 14px;
        }

        .tag-close {
            margin-left: 8px;
            color: #dc3545;
            cursor: pointer;
            font-weight: bold;
        }

        .tag-close:hover {
            color: #c82333;
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

        /* Loading state */
        .loading {
            opacity: 0.6;
            pointer-events: none;
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

            .create-container {
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
                    <li><a href="create.php" class="active">Create</a></li>
                    <li><a href="search.php">Search</a></li>
                    <li><a href="edit4.php">Edit</a></li>
                    <li><a href="all6.html">Blogs</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="privacy.html">Privacy</a></li>
                </ul>
                
                <button class="menu-toggle" id="menuToggle">☰</button>
            </div>
        </div>
    </div>

    <?php
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blogs";

    $message = '';
    $messageType = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        try {
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Get form data
            $blog_id = trim($_POST['blog_id']);
            $title = trim($_POST['title']);
            $category = $_POST['category'];
            $time = intval($_POST['time']);
            $content = trim($_POST['content']);
            $tags = isset($_POST['tags']) ? trim($_POST['tags']) : '';
            
            // Validate required fields
            if (empty($blog_id) || empty($title) || empty($category) || empty($time) || empty($content)) {
                throw new Exception("Please fill all required fields");
            }
            
            // Validate blog ID (should be positive integer)
            if (!is_numeric($blog_id) || $blog_id <= 0) {
                throw new Exception("Blog ID must be a positive number");
            }
            
            // Validate reading time
            if ($time < 1 || $time > 60) {
                throw new Exception("Reading time must be between 1 and 60 minutes");
            }
            
            // Check if blog ID already exists
            $checkSql = "SELECT id FROM my_data WHERE id = ?";
            $checkStmt = $pdo->prepare($checkSql);
            $checkStmt->execute([$blog_id]);
            
            if ($checkStmt->rowCount() > 0) {
                throw new Exception("Blog ID $blog_id already exists. Please choose a different ID.");
            }
            
            // Insert into database with specified ID
            $sql = "INSERT INTO my_data (id, title, catagory, time, content, tags) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $result = $stmt->execute([$blog_id, $title, $category, $time, $content, $tags]);
            
            if ($result) {
                $message = "Blog post created successfully with ID: " . $blog_id;
                $messageType = 'success';
                
                // Clear form data after successful submission
                $_POST = [];
            } else {
                throw new Exception("Failed to create blog post");
            }
            
        } catch(PDOException $e) {
            $message = "Database error: " . $e->getMessage();
            $messageType = 'error';
        } catch(Exception $e) {
            $message = $e->getMessage();
            $messageType = 'error';
        }
    }
    ?>

    <div class="create-container">
        <h1>Create New Blog Post</h1>
        
        <?php if (!empty($message)): ?>
            <div class="alert alert-<?php echo $messageType; ?>">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>
        
        <form method="POST" id="blogPostForm">
            <div class="form-group">
                <label for="blog_id">Blog ID *</label>
                <input 
                    type="number" 
                    id="blog_id" 
                    name="blog_id" 
                    required 
                    placeholder="Enter unique blog ID (e.g., 101)"
                    min="1"
                    value="<?php echo isset($_POST['blog_id']) ? htmlspecialchars($_POST['blog_id']) : ''; ?>"
                >
                <small style="color: #666; font-size: 12px;">Enter a unique number for this blog post</small>
            </div>

            <div class="form-group">
                <label for="title">Blog Title *</label>
                <input 
                    type="text" 
                    id="title" 
                    name="title" 
                    required 
                    placeholder="Enter blog title"
                    maxlength="255"
                    value="<?php echo isset($_POST['title']) ? htmlspecialchars($_POST['title']) : ''; ?>"
                >
            </div>

            <div class="form-group">
                <label for="category">Category *</label>
                <select id="category" name="category" required>
                    <option value="">Select a category</option>
                    <option value="technology" <?php echo (isset($_POST['category']) && $_POST['category'] === 'technology') ? 'selected' : ''; ?>>Technology</option>
                    <option value="lifestyle" <?php echo (isset($_POST['category']) && $_POST['category'] === 'lifestyle') ? 'selected' : ''; ?>>Lifestyle</option>
                    <option value="education" <?php echo (isset($_POST['category']) && $_POST['category'] === 'education') ? 'selected' : ''; ?>>Education</option>
                    <option value="health" <?php echo (isset($_POST['category']) && $_POST['category'] === 'health') ? 'selected' : ''; ?>>Health</option>
                    <option value="business" <?php echo (isset($_POST['category']) && $_POST['category'] === 'business') ? 'selected' : ''; ?>>Business</option>
                    <option value="travel" <?php echo (isset($_POST['category']) && $_POST['category'] === 'travel') ? 'selected' : ''; ?>>Travel</option>
                    <option value="food" <?php echo (isset($_POST['category']) && $_POST['category'] === 'food') ? 'selected' : ''; ?>>Food</option>
                </select>
            </div>

            <div class="form-group">
                <label for="time">Estimated Reading Time (minutes) *</label>
                <input 
                    type="number" 
                    id="time" 
                    name="time" 
                    min="1" 
                    max="60" 
                    required 
                    placeholder="Reading time in minutes"
                    value="<?php echo isset($_POST['time']) ? htmlspecialchars($_POST['time']) : ''; ?>"
                >
            </div>

            <div class="form-group">
                <label for="tags">Tags</label>
                <input type="text" id="tagInput" placeholder="Type a tag and press Enter">
                <div id="tagsContainer" class="tags-container"></div>
                <input type="hidden" id="tagsHidden" name="tags" value="<?php echo isset($_POST['tags']) ? htmlspecialchars($_POST['tags']) : ''; ?>">
            </div>

            <div class="form-group">
                <label for="content">Blog Content *</label>
                <textarea 
                    id="content" 
                    name="content" 
                    required 
                    placeholder="Write your blog post here..."
                ><?php echo isset($_POST['content']) ? htmlspecialchars($_POST['content']) : ''; ?></textarea>
            </div>

            <button type="submit" id="submitBtn" class="submit-btn">Publish Blog Post</button>
        </form>
    </div>

    <div id="feaa"></div>

    <script>
        // Load footer
        fetch('f2.html')
            .then(res => res.text())
            .then(data => {
                document.getElementById('feaa').innerHTML = data;
            })
            .catch(err => {
                console.error("Error loading footer:", err);
            });

        // Mobile Menu Toggle
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menuToggle');
            const navLinks = document.getElementById('navLinks');
            
            if (menuToggle && navLinks) {
                menuToggle.addEventListener('click', function() {
                    navLinks.classList.toggle('active');
                    this.innerHTML = navLinks.classList.contains('active') ? '✕' : '☰';
                });

                // Close menu when a link is clicked
                document.querySelectorAll('.nav-links a').forEach(link => {
                    link.addEventListener('click', () => {
                        navLinks.classList.remove('active');
                        menuToggle.innerHTML = '☰';
                    });
                });

                // Close menu when clicking outside
                document.addEventListener('click', function(e) {
                    if (!navLinks.contains(e.target) && !menuToggle.contains(e.target)) {
                        navLinks.classList.remove('active');
                        menuToggle.innerHTML = '☰';
                    }
                });
            }
        });

        // Tag Management
        const tagInput = document.getElementById('tagInput');
        const tagsContainer = document.getElementById('tagsContainer');
        const tagsHidden = document.getElementById('tagsHidden');
        const tags = [];

        // Load existing tags if any
        if (tagsHidden.value) {
            const existingTags = tagsHidden.value.split(',').map(tag => tag.trim()).filter(tag => tag);
            existingTags.forEach(tag => {
                if (!tags.includes(tag)) {
                    tags.push(tag);
                    addTagElement(tag);
                }
            });
        }

        tagInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                const tagValue = this.value.trim();
                
                if (tagValue && !tags.includes(tagValue) && tagValue.length <= 50) {
                    tags.push(tagValue);
                    addTagElement(tagValue);
                    updateTagsHidden();
                    this.value = '';
                } else if (tagValue.length > 50) {
                    alert('Tag must be 50 characters or less');
                }
            }
        });

        function addTagElement(tagValue) {
            const tagElement = document.createElement('span');
            tagElement.className = 'tag';
            tagElement.innerHTML = `${tagValue} <span class="tag-close">×</span>`;
            
            const closeBtn = tagElement.querySelector('.tag-close');
            closeBtn.addEventListener('click', function() {
                const tagText = this.parentElement.textContent.trim().replace('×', '').trim();
                
                // Remove from tags array
                const index = tags.indexOf(tagText);
                if (index > -1) {
                    tags.splice(index, 1);
                }
                
                // Remove from DOM
                tagsContainer.removeChild(this.parentElement);
                updateTagsHidden();
            });
            
            tagsContainer.appendChild(tagElement);
        }

        function updateTagsHidden() {
            tagsHidden.value = tags.join(',');
        }

        // Form Validation
        function validateForm() {
            const blogId = document.getElementById('id').value.trim();
            const title = document.getElementById('title').value.trim();
            const category = document.getElementById('catagory').value;
            const time = document.getElementById('time').value;
            const content = document.getElementById('content').value.trim();
            
            if (!blogId) {
                alert('Please enter a blog ID');
                return false;
            }
            
            if (!/^\d+$/.test(blogId) || parseInt(blogId) <= 0) {
                alert('Please enter a valid positive number for Blog ID');
                return false;
            }
            
            if (!title) {
                alert('Please enter a blog title');
                return false;
            }
            
            if (!category) {
                alert('Please select a category');
                return false;
            }
            
            if (!time || time < 1 || time > 60) {
                alert('Please enter a valid reading time (1-60 minutes)');
                return false;
            }
            
            if (!content) {
                alert('Please enter blog content');
                return false;
            }
            
            return true;
        }

        // Form Submission with loading state
        document.getElementById('blogPostForm').addEventListener('submit', function(e) {
            if (!validateForm()) {
                e.preventDefault();
                return;
            }
            
            const submitBtn = document.getElementById('submitBtn');
            const form = document.getElementById('blogPostForm');
            
            // Add loading state
            submitBtn.disabled = true;
            submitBtn.textContent = 'Publishing...';
            form.classList.add('loading');
            
            // Update hidden tags field before submission
            updateTagsHidden();
            
            // Re-enable form after some time in case of errors
            setTimeout(() => {
                submitBtn.disabled = false;
                submitBtn.textContent = 'Publish Blog Post';
                form.classList.remove('loading');
            }, 10000);
        });

        // Auto-resize textarea
        const textarea = document.getElementById('content');
        if (textarea) {
            textarea.addEventListener('input', function() {
                this.style.height = 'auto';
                this.style.height = (this.scrollHeight) + 'px';
            });
        }

        // Character counter for title
        const titleInput = document.getElementById('title');
        if (titleInput) {
            titleInput.addEventListener('input', function() {
                const remaining = 255 - this.value.length;
                if (remaining < 20) {
                    this.style.borderColor = remaining < 0 ? '#dc3545' : '#ffc107';
                } else {
                    this.style.borderColor = '#ddd';
                }
            });
        }

        // Blog ID validation
        const blogIdInput = document.getElementById('id');
        if (blogIdInput) {
            blogIdInput.addEventListener('input', function() {
                const value = this.value;
                if (value && (!/^\d+$/.test(value) || parseInt(value) <= 0)) {
                    this.style.borderColor = '#dc3545';
                } else {
                    this.style.borderColor = '#ddd';
                }
            });
        }
    </script>
</body>
</html>
