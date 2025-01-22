<?php
require_once '../config.php';
include BASE_PATH . '/main.php';
?>

<body>
    <?php include '../section/header.php'; ?>
    <div class="container mt-5">
        <h1><?= htmlspecialchars('awdawdawd') ?></h1>
        <p><img src="<?= htmlspecialchars('/articles/67908e5f6e842.webp') ?>" alt="Article Image" class="img-fluid"></p>
        <p><?= nl2br(htmlspecialchars('ferfdsefsefsef')) ?></p>
    </div>
    <?php include '../section/footer.php'; ?>
</body>