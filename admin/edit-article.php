<?php
require_once 'config.php';

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Redirect to login if not authenticated
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: login.php');
    exit;
}

// Path to the JSON file
$json_path = __DIR__ . '/data/articles.json';

// Load articles from JSON
$articles = file_exists($json_path) ? json_decode(file_get_contents($json_path), true) : [];

// Get article by ID
$id = $_GET['id'] ?? '';
$article = array_filter($articles, fn($a) => $a['id'] === $id);
$article = reset($article);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';

    foreach ($articles as &$a) {
        if ($a['id'] === $id) {
            $a['title'] = $title;
            $a['content'] = $content;
            break;
        }
    }

    file_put_contents($json_path, json_encode($articles, JSON_PRETTY_PRINT));
    header('Location: dashboard.php');
    exit;
}

if (!$article) {
    echo "Article not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Article</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Edit Article</h1>
        <form method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?= htmlspecialchars($article['title']) ?>" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" required><?= htmlspecialchars($article['content']) ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
</body>

</html>
