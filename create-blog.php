<?php
// Define the base path for the berita directory
$berita_path = __DIR__ . '/berita/';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $folder = $_POST['folder'] ?? '';
    $filename = $_POST['filename'] ?? '';
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';
    $image = $_FILES['image'] ?? null;

    $json_path = __DIR__ . '/data/news_' . $folder . '.json';

    // Validate inputs
    if (!preg_match('/^[a-zA-Z0-9_-]+$/', $folder) || !preg_match('/^[a-zA-Z0-9_-]+$/', $filename)) {
        echo "Invalid folder or filename. Only alphanumeric characters, dashes, and underscores are allowed.";
        exit;
    }

    if (empty($title) || empty($content)) {
        echo "Title and content are required.";
        exit;
    }

    // Ensure the folder exists
    $target_folder = $berita_path . $folder;
    if (!is_dir($target_folder)) {
        mkdir($target_folder, 0755, true);
    }

    // Handle image upload
    $image_url = '';
    if ($image && $image['error'] === 0) {
        $image_extension = pathinfo($image['name'], PATHINFO_EXTENSION);
        $image_name = uniqid() . '.' . $image_extension;
        $image_path = $target_folder . '/' . $image_name;

        if (move_uploaded_file($image['tmp_name'], $image_path)) {
            // Use an absolute URL for the image
            $image_url = '/berita/' . $folder . '/' . $image_name;
        } else {
            echo "Failed to upload image.";
            exit;
        }
    }


    // Create the blog file
    $file_path = $target_folder . '/' . $filename . '.php';
    if (file_exists($file_path)) {
        echo "The file already exists.";
        exit;
    }

    // Template content for the new page
    $template = <<<HTML
<?php
require_once '../../config.php';
include BASE_PATH . '/main.php';
?>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../../assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->

    <?php include '../../section/header.php'; ?>

    <main>
        <!-- About US Start -->
        <div class="about-area">
            <div class="container">
            <?php include '../section/trending.php'; ?>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="about-right mb-90">
                            <div class="about-img">
                                <img src="$image_url" alt="Blog Image">
                            </div>
                            <div class="section-tittle mb-30 pt-30">
                                <h3>$title</h3>
                            </div>
                            <div class="about-prea text-dark">
                                <p class="about-pera1 mb-25">$content</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Sidebar or Additional Content -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About US End -->
    </main>

    <?php 
include '../../section/footer.php'; 
?>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./../../assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./../../assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./../../assets/js/popper.min.js"></script>
        <script src="./../../assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./../../assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./../../assets/js/owl.carousel.min.js"></script>
        <script src="./../../assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./../../assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./../../assets/js/wow.min.js"></script>
		<script src="./../../assets/js/animated.headline.js"></script>
        <script src="./../../assets/js/jquery.magnific-popup.js"></script>

        <!-- Breaking New Pluging -->
        <script src="./../../assets/js/jquery.ticker.js"></script>
        <script src="./../../assets/js/site.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./../../assets/js/jquery.scrollUp.min.js"></script>
        <script src="./../../assets/js/jquery.nice-select.min.js"></script>
		<script src="./../../assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./../../assets/js/contact.js"></script>
        <script src="./../../assets/js/jquery.form.js"></script>
        <script src="./../../assets/js/jquery.validate.min.js"></script>
        <script src="./../../assets/js/mail-script.js"></script>
        <script src="./../../assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./../../assets/js/plugins.js"></script>
        <script src="./../../assets/js/main.js"></script>
        
    </body>
</html>
HTML;

    // Write to the new file
    file_put_contents($file_path, $template);
    $json_data = file_exists($json_path) ? json_decode(file_get_contents($json_path), true) : [];

// Add the new entry
$json_data[] = [
    'folder' => $folder,
    'filename' => $filename,
    'title' => $title,
    'content' => $content,
    'image' => $image_url,
    'date' => date('Y-m-d'), // Add creation date
];

// Save the updated JSON data back to the file
if (file_put_contents($json_path, json_encode($json_data, JSON_PRETTY_PRINT))) {
    echo "Blog and JSON updated successfully! <a href='/berita/$folder/$filename.php'>View it here</a>";
} else {
    echo "Blog created but failed to update JSON.";
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 20px;
        }

        .form-container {
            max-width: 700px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Create a New Blog</h1>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="folder">Select Folder:</label>
                <select class="form-control" name="folder" id="folder" required>
                    <option value="pendidikan">Pendidikan</option>
                    <option value="psikologi">Psikologi</option>
                    <option value="teknologi">Teknologi</option>
                    <option value="ekonomi">Ekonomi</option>
                    <option value="olahraga">Olahraga</option>
                    <option value="seni">Seni</option>
                    <option value="hukum">Hukum</option>
                    <option value="alam">Pengetahuan Alam</option>


                    <!-- Add more folders as needed -->
                </select>
            </div>
            <div class="form-group">
                <label for="filename">File Name:</label>
                <input type="text" class="form-control" id="filename" name="filename"
                    placeholder="Enter file name (e.g., my-blog)" required>
            </div>
            <div class="form-group">
                <label for="title">Blog Title:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter blog title" required>
            </div>
            <!-- Content Field with TinyMCE -->
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" id="content" name="content" placeholder="Enter blog content" rows="6"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Upload Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Create Blog</button>
        </form>
    </div>
</body>

</html>