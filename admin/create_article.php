<?php
require_once '../config.php';

// Restrict access to logged-in users
requireLogin();

// Define base paths
$articles_path = __DIR__ . '/articles/';
$json_path = __DIR__ . '/data/articles.json';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';
    $image = $_FILES['image'] ?? null;

    // Validate inputs
    if (empty($title) || empty($content)) {
        echo "Title and Content are required.";
        exit;
    }

    // Ensure the articles directory exists
    if (!is_dir($articles_path)) {
        mkdir($articles_path, 0755, true);
    }

    // Handle image upload
    $image_url = '';
    if ($image && $image['error'] === 0) {
        $image_extension = pathinfo($image['name'], PATHINFO_EXTENSION);
        $image_name = uniqid() . '.' . $image_extension;
        $image_path = $articles_path . $image_name;

        if (move_uploaded_file($image['tmp_name'], $image_path)) {
            $image_url = '/articles/' . $image_name;
        } else {
            echo "Failed to upload image.";
            exit;
        }
    }

    // Generate unique ID and file-safe name for the article
    $article_id = uniqid();
    $file_safe_title = preg_replace('/[^a-zA-Z0-9-_]/', '-', strtolower($title));
    $file_safe_title = preg_replace('/-+/', '-', $file_safe_title); // Avoid multiple dashes

    // Save the article to the JSON file
    $articles = file_exists($json_path) ? json_decode(file_get_contents($json_path), true) : [];
    $articles[] = [
        'id' => $article_id,
        'title' => $title,
        'content' => $content,
        'image' => $image_url,
        'date' => date('Y-m-d'),
    ];

    file_put_contents($json_path, json_encode($articles, JSON_PRETTY_PRINT));

    // Create a dedicated PHP file for the article with the title in the name
    $article_file_path = $articles_path . $file_safe_title . '-' . $article_id . '.php';
    $article_template = <<<PHP
<?php
require_once '../config.php';
include BASE_PATH . '/main.php';
?>

<body>
    <?php include '../section/header.php'; ?>
    <div class="container mt-5">
        <h1><?= htmlspecialchars('$title') ?></h1>
        <p><img src="<?= htmlspecialchars('$image_url') ?>" alt="Article Image" class="img-fluid"></p>
        <p><?= nl2br(htmlspecialchars('$content')) ?></p>
    </div>
    <?php include '../section/footer.php'; ?>
</body>
PHP;

    file_put_contents($article_file_path, $article_template);

    // Redirect to the newly created article
    header("Location: articles/" . basename($article_file_path));
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Article</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Create a New Article</h1>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Article Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Upload Image</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Create Article</button>
        </form>
    </div>
</body>

</html>
