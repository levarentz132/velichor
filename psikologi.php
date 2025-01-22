<?php
// Use absolute paths for includes
include $_SERVER['DOCUMENT_ROOT'] . '/main.php';
?>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/section/header.php'; ?>
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php
                        // Load news data from JSON file
                        $file = $_SERVER['DOCUMENT_ROOT'] . '/data/news_psikologi.json';
                        if (file_exists($file)) {
                            $newsData = json_decode(file_get_contents($file), true);
                        
                            if (!empty($newsData)) {
                                foreach ($newsData as $news) {
                                    echo '
                                    <article class="blog_item">
                                        <div class="blog_item_img">
                                            <img class="card-img rounded-0" src="' . htmlspecialchars($news['image']) . '" alt="">
                                            <a href="#" class="blog_item_date">
                                                <h3>' . date('d', strtotime($news['date'])) . '</h3>
                                                <p>' . date('M', strtotime($news['date'])) . '</p>
                                            </a>
                                        </div>
                                        <div class="blog_details">
                                            <a class="d-inline-block" href="#">
                                                <h2>' . htmlspecialchars($news['title']) . '</h2>
                                            </a>
                                            <p>' . htmlspecialchars($news['content']) . '</p>
                                        </div>
                                    </article>';
                                }
                            } else {
                                echo '<p>No news available.</p>';
                            }
                        } else {
                            echo '<p>No news available.</p>';
                        }
                        
                        ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/section/sidebar.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/section/footer.php'; ?>
</body>
</html>
