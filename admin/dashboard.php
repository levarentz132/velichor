<?php
require_once '../config.php';

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Redirect to login if not authenticated
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: login.php');
    exit;
}

// Define paths for articles and berita categories
$articles_path = '../data/articles.json';
$berita_categories = [
    'pendidikan' => '../data/news_pendidikan.json',
    'seni' => '../data/news_seni.json',
    'psikologi' => '../data/news_psikologi.json',
    'teknologi' => '../data/news_teknologi.json',
];

// Load articles data
$articles = file_exists($articles_path) ? json_decode(file_get_contents($articles_path), true) : [];
$articles = is_array($articles) ? $articles : [];

// Load berita data from multiple categories
$berita = [];
foreach ($berita_categories as $category => $path) {
    if (file_exists($path)) {
        $category_articles = json_decode(file_get_contents($path), true);
        if (is_array($category_articles)) {
            foreach ($category_articles as $article) {
                $article['category'] = $category; // Add category to each berita
                $berita[] = $article;
            }
        }
    }
}

// Handle deletion for articles or berita
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'], $_POST['type'])) {
    $delete_id = $_POST['delete_id'];
    $type = $_POST['type'];

    if ($type === 'article') {
        $articles = array_filter($articles, fn($article) => $article['id'] !== $delete_id);
        file_put_contents($articles_path, json_encode(array_values($articles), JSON_PRETTY_PRINT));
    } elseif ($type === 'berita' && isset($_POST['category'])) {
        $category = $_POST['category'];
        if (isset($berita_categories[$category])) {
            $path = $berita_categories[$category];
            $category_articles = file_exists($path) ? json_decode(file_get_contents($path), true) : [];
            $category_articles = array_filter($category_articles, fn($article) => $article['id'] !== $delete_id);
            file_put_contents($path, json_encode(array_values($category_articles), JSON_PRETTY_PRINT));
        }
    }
    header('Location: dashboard.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Admin Dashboard</h1>
        <a href="logout.php" class="btn btn-danger mb-3">Logout</a>
        <a href="create-blog.php" class="btn btn-success mb-3">Create Article</a>

        <!-- Articles Table -->
        <h2>Articles</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($articles)): ?>
                    <?php foreach ($articles as $index => $article): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= htmlspecialchars($article['title']) ?></td>
                            <td><?= htmlspecialchars($article['date']) ?></td>
                            <td>
                                <form action="dashboard.php" method="POST" style="display:inline;">
                                    <input type="hidden" name="delete_id" value="<?= htmlspecialchars($article['id']) ?>">
                                    <input type="hidden" name="type" value="article">
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">No articles found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <!-- Berita Table -->
        <h2>Berita</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($berita)): ?>
                    <?php foreach ($berita as $index => $article): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= htmlspecialchars($article['title']) ?></td>
                            <td><?= htmlspecialchars($article['date']) ?></td>
                            <td><?= ucfirst(htmlspecialchars($article['category'])) ?></td>
                            <td>
                                <form action="dashboard.php" method="POST" style="display:inline;">
                                    <input type="hidden" name="delete_id" value="<?= htmlspecialchars($article['id']) ?>">
                                    <input type="hidden" name="type" value="berita">
                                    <input type="hidden" name="category" value="<?= htmlspecialchars($article['category']) ?>">
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">No berita found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
