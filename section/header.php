<header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                <ul>
                                    <li><img src="/assets/img/icon/header_icon1.png" alt=""><span id="cuaca">34ºc, Cerah</span></li>
                                    <li><img src="/assets/img/icon/header_icon1.png" alt=""><span id="tanggalWaktu"></span></li>
                                </ul>

                                <script>
                                    function perbaruiTanggalWaktu() {
                                        const sekarang = new Date();
                                        const opsi = { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' };
                                        const tanggalFormat = sekarang.toLocaleDateString('id-ID', opsi);

                                        document.getElementById('tanggalWaktu').textContent = `${tanggalFormat}`;
                                    }

                                    // Panggil fungsi saat halaman dimuat dan perbarui setiap menit
                                    perbaruiTanggalWaktu();
                                    setInterval(perbaruiTanggalWaktu, 60000);
                                </script>


                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                        <li><a href="https://www.youtube.com/@vellichor2023"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="https://www.instagram.com/persma_vellichor/"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://www.facebook.com/profile.php?id=61571636001950"><i class="fab fa-facebook"></i></a></li>
                                        <li><a href="https://www.tiktok.com/@persma_vellichor?lang=id-ID"><i class="bi bi-tiktok"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-mid d-none d-md-block">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo" style="width: 100px; height: 100px; overflow: hidden;">
                                    <a href="../index.php">
                                        <img src="/assets/img/logo/velli200x200.png" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                                    </a>
                                </div>
                            </div>                            
                            <div class="col-xl-5 col-lg-5 col-md-5">
                                <div class="header-banner f-right ">
                                    <img src="../assets/img/logo/bannervelli.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                <div class="sticky-logo">
                                    <a href="../index.php"><img src="/assets/img/logo/vellisticky.png" alt=""></a>
                                </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="/index.php">Home</a></li>
                                            <li><a>Berita</a>
                                                <ul class="submenu">
                                                    <li><a href="/pendidikan.php">Pendidikan</a></li>
                                                    <li><a href="/category/psikolog.php">Psikologi</a></li>
                                                    <li><a href="#">Ekonomi</a></li>
                                                    <li><a href="#">Teknik</a></li>
                                                    <li><a href="#">Olahraga</a></li>
                                                    <li><a href="#">Seni</a></li>
                                                    <li><a href="#">Hukum</a></li>
                                                    <li><a href="#">Matematika dan Pengetahuan Alam </a></li>
                                                </ul>
                                              </li>
                                            <li><a href="/artikel.php">Artikel</a></li>
                                            <li><a href="/aspirasi.php">Aspirasi Mahasiswa</a></li>
                                            <!-- <li><a href="contact.html">Profil</a></li> -->
                                            <!-- <li><a href="categori.html">Berita</a> -->    
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <i class="fas fa-search special-tag"></i>
                                    <div class="search-box">
                                        <form action="#">
                                            <input type="text" placeholder="Search">

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>