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
                                <img src="/berita/pendidikan/679079208f912.webp" alt="Blog Image">
                            </div>
                            <div class="section-tittle mb-30 pt-30">
                                <h3>adwad</h3>
                            </div>
                            <div class="about-prea text-dark">
                                <p class="about-pera1 mb-25">awdawdad</p>
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