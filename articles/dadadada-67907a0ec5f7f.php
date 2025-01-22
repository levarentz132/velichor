<?php
require_once '../config.php';
include BASE_PATH . '/main.php';
?>

<body>
    <?php include '../section/header.php'; ?>
    <div class="container mt-5">
        <h1><?= htmlspecialchars('dadadada') ?></h1>
        <p><img src="<?= htmlspecialchars('/articles/67907a0ec5dbe.jpg') ?>" alt="Article Image" class="img-fluid"></p>
        <p><?= nl2br(htmlspecialchars('dadadada')) ?></p>
    </div>
    <?php include '../section/footer.php'; ?>
</body>