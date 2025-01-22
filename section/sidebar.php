<div class="blog_right_sidebar">
    <!-- Search Widget -->
    <aside class="single_sidebar_widget search_widget">
        <form action="search.php" method="GET">
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="query" placeholder="Search Keyword" required>
                    <div class="input-group-append">
                        <button class="btns" type="submit"><i class="ti-search"></i></button>
                    </div>
                </div>
            </div>
            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
        </form>
    </aside>

    <!-- Categories Widget -->
    <aside class="single_sidebar_widget post_category_widget">
        <h4 class="widget_title">Categories</h4>
        <ul class="list cat-list">
            <li>
                <a href="/category/pendidikan" class="d-flex">
                    <p>Pendidikan</p>
                    <p>(12)</p>
                </a>
            </li>
            <li>
                <a href="/category/teknologi" class="d-flex">
                    <p>Teknologi</p>
                    <p>(8)</p>
                </a>
            </li>
            <li>
                <a href="/category/ekonomi" class="d-flex">
                    <p>Ekonomi</p>
                    <p>(5)</p>
                </a>
            </li>
            <!-- Add more categories dynamically if needed -->
        </ul>
    </aside>

    <!-- Recent Posts Widget -->
    <aside class="single_sidebar_widget popular_post_widget">
        <h3 class="widget_title">Recent Posts</h3>
        <?php
        // Load recent posts from JSON or database
        $recentPostsFile = $_SERVER['DOCUMENT_ROOT'] . '/data/news.json';
        if (file_exists($recentPostsFile)) {
            $recentPosts = json_decode(file_get_contents($recentPostsFile), true);
            $recentPosts = array_slice($recentPosts, 0, 5); // Limit to 5 recent posts
            foreach ($recentPosts as $post) {
                echo '
                <div class="media post_item">
                    <img src="' . $post['image'] . '" alt="post">
                    <div class="media-body">
                        <a href="/berita/' . $post['folder'] . '/' . $post['filename'] . '.php">
                            <h3>' . $post['title'] . '</h3>
                        </a>
                        <p>' . date('F d, Y', strtotime($post['date'])) . '</p>
                    </div>
                </div>';
            }
        } else {
            echo '<p>No recent posts available.</p>';
        }
        ?>
    </aside>

    <!-- Tag Cloud Widget -->
    <aside class="single_sidebar_widget tag_cloud_widget">
        <h4 class="widget_title">Tag Clouds</h4>
        <ul class="list">
            <li><a href="#">Technology</a></li>
            <li><a href="#">Travel</a></li>
            <li><a href="#">Lifestyle</a></li>
            <li><a href="#">Education</a></li>
            <li><a href="#">Design</a></li>
        </ul>
    </aside>

    <!-- Newsletter Widget -->
    <aside class="single_sidebar_widget newsletter_widget">
        <h4 class="widget_title">Newsletter</h4>
        <form action="subscribe.php" method="POST">
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Enter email" required>
            </div>
            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Subscribe</button>
        </form>
    </aside>
</div>
