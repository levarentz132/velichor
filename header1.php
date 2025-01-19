<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header dengan Gradasi Ungu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }
        .header {
            display: flex;
            align-items: center;
            background: linear-gradient(to right, #4B0082, #DA70D6);
            padding: 10px 20px;
            color: white;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .header img {
            width: 50px;
            height: 50px;
            margin-right: 15px;
        }
        .header h1 {
            font-size: 24px;
            margin: 0;
        }
        .nav {
            background: linear-gradient(to right, #4B0082, #DA70D6);
            display: flex;
            justify-content: center;
            padding: 5px 0;
            position: sticky;
            top: 60px;
            z-index: 999;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            flex-wrap: wrap;
        }
        .nav a {
            text-decoration: none;
            color: white;
            padding: 5px 10px;
            font-size: 14px;
            font-weight: bold;
        }
        .nav a:hover {
            background-color: rgba(75, 0, 130, 0.7);
        }
        .subnav {
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            padding: 5px 0;
            flex-wrap: wrap;
        }
        .subnav a {
            text-decoration: none;
            color: black;
            padding: 5px 10px;
            font-size: 12px;
            font-weight: bold;
        }
        .subnav a:hover {
            background-color: #ddd;
        }
        .content {
            padding: 20px;
        }
        .article {
            margin-bottom: 30px;
        }
        .article h2 {
            color: #4B0082;
        }
        .article p {
            text-align: justify;
        }
        .footer {
            background: linear-gradient(to right, #4B0082, #DA70D6);
            color: white;
            text-align: center;
            padding: 20px 10px;
            margin-top: 20px;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
        }
        .footer p {
            margin: 5px 0;
        }
        .footer a {
            color: #FFD700;
            text-decoration: none;
            font-weight: bold;
        }
        .footer a:hover {
            text-decoration: underline;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
            }
            .header img {
                margin-bottom: 10px;
            }
            .header h1 {
                font-size: 20px;
            }
            .nav {
                flex-direction: column;
                align-items: center;
                padding: 5px 0;
            }
            .nav a {
                font-size: 12px;
                padding: 5px 10px;
            }
            .subnav {
                flex-direction: column;
                align-items: center;
                padding: 5px 0;
            }
            .subnav a {
                font-size: 10px;
                padding: 3px 8px;
            }
            .article h2 {
                font-size: 20px;
            }
            .article p {
                font-size: 14px;
            }
            .footer p {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .nav {
                display: flex;
                flex-wrap: nowrap;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
            .nav a {
                flex: 0 0 auto;
                margin: 0 5px;
                font-size: 12px;
                padding: 5px;
            }
            .subnav {
                display: none;
            }
            .header {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="../assets/img/logo/vellikecil.png" alt="Logo">
        <h1>Vellichor</h1>
    </div>
    <div class="nav">
        <a href="#">News</a>
        <a href="#">Breaking News</a>
        <a href="#">Artikel</a>
        <a href="#">Editorial</a>
        <a href="#">Kolom</a>
        <a href="#">Aspirasi Mahasiswa</a>
        <a href="#">Sulawesi Utara</a>
        <a href="#">Nasional</a>
    </div>
    <div class="subnav">
        <a href="#">Rektorat</a>
        <a href="#">Sosial dan Politik</a>
        <a href="#">Hukum</a>
        <a href="#">Ekonomi</a>
        <a href="#">Teknik</a>
        <a href="#">Budaya</a>
        <a href="#">Kedokteran</a>
        <a href="#">Kesehatan Masyarakat</a>
        <a href="#">Pertanian</a>
        <a href="#">Perikanan dan Kelautan</a>
        <a href="#">Matematika dan Pengetahuan Alam</a>
    </div>
    <div class="content">
        <div class="article">
            <h2>Breaking News: Teknologi AI Membantu Pendidikan di Sulawesi Utara</h2>
            <p>
                Di era digital ini, teknologi kecerdasan buatan (AI) semakin banyak digunakan untuk berbagai keperluan.
                Salah satu perkembangan terbaru adalah penerapan teknologi AI dalam bidang pendidikan di Sulawesi Utara.
                Dengan bantuan AI, sekolah-sekolah dapat meningkatkan efisiensi belajar mengajar serta memberikan pengalaman
                belajar yang lebih interaktif bagi siswa.
            </p>
            <p>
                Kepala Dinas Pendidikan Sulawesi Utara, Dr. Alex Mandolang, menyatakan bahwa program ini bertujuan untuk
                menjembatani kesenjangan pendidikan di daerah terpencil. “Kami percaya bahwa teknologi bisa menjadi solusi
                untuk memberikan akses pendidikan yang lebih baik bagi semua siswa,” katanya dalam konferensi pers hari ini.
            </p>
            <p>
                Program ini melibatkan implementasi platform pembelajaran berbasis AI yang dapat diakses melalui perangkat
                smartphone dan komputer. Fitur-fitur unggulan platform ini mencakup analisis hasil belajar siswa secara real-time,
                pengajaran adaptif yang disesuaikan dengan kebutuhan masing-masing siswa, serta akses ke materi pelajaran yang
                telah disiapkan oleh para ahli di bidangnya.
            </p>
            <p>
                Selain itu, para guru juga mendapatkan pelatihan intensif mengenai penggunaan teknologi ini. "Kami tidak hanya
                berfokus pada siswa, tetapi juga para guru yang memainkan peran kunci dalam penerapan teknologi ini," tambah
                Dr. Alex. Pelatihan ini mencakup cara menggunakan perangkat lunak AI, memahami data analitik, dan menerapkan
                strategi pembelajaran inovatif.
            </p>
            <p>
                Banyak pihak menyambut baik inisiatif ini, termasuk para orang tua. Mereka berharap dengan adanya teknologi AI,
                pendidikan anak-anak mereka menjadi lebih baik dan setara dengan daerah lain yang lebih maju. Namun, ada juga
                tantangan yang dihadapi, seperti ketersediaan infrastruktur teknologi yang memadai di daerah terpencil serta
                kebutuhan akan internet dengan kualitas yang stabil.
            </p>
            <p>
                Meski demikian, program ini dianggap sebagai langkah besar dalam menghadirkan pemerataan pendidikan di Sulawesi
                Utara. Dengan kerja sama berbagai pihak, diharapkan teknologi ini dapat membawa dampak positif yang signifikan
                bagi dunia pendidikan di masa depan.
            </p>
            <p>
                Di era digital ini, teknologi kecerdasan buatan (AI) semakin banyak digunakan untuk berbagai keperluan.
                Salah satu perkembangan terbaru adalah penerapan teknologi AI dalam bidang pendidikan di Sulawesi Utara.
                Dengan bantuan AI, sekolah-sekolah dapat meningkatkan efisiensi belajar mengajar serta memberikan pengalaman
                belajar yang lebih interaktif bagi siswa.
            </p>
            <p>
                Kepala Dinas Pendidikan Sulawesi Utara, Dr. Alex Mandolang, menyatakan bahwa program ini bertujuan untuk
                menjembatani kesenjangan pendidikan di daerah terpencil. “Kami percaya bahwa teknologi bisa menjadi solusi
                untuk memberikan akses pendidikan yang lebih baik bagi semua siswa,” katanya dalam konferensi pers hari ini.
            </p>
            <p>
                Program ini melibatkan implementasi platform pembelajaran berbasis AI yang dapat diakses melalui perangkat
                smartphone dan komputer. Fitur-fitur unggulan platform ini mencakup analisis hasil belajar siswa secara real-time,
                pengajaran adaptif yang disesuaikan dengan kebutuhan masing-masing siswa, serta akses ke materi pelajaran yang
                telah disiapkan oleh para ahli di bidangnya.
            </p>
            <p>
                Selain itu, para guru juga mendapatkan pelatihan intensif mengenai penggunaan teknologi ini. "Kami tidak hanya
                berfokus pada siswa, tetapi juga para guru yang memainkan peran kunci dalam penerapan teknologi ini," tambah
                Dr. Alex. Pelatihan ini mencakup cara menggunakan perangkat lunak AI, memahami data analitik, dan menerapkan
                strategi pembelajaran inovatif.
            </p>
            <p>
                Banyak pihak menyambut baik inisiatif ini, termasuk para orang tua. Mereka berharap dengan adanya teknologi AI,
                pendidikan anak-anak mereka menjadi lebih baik dan setara dengan daerah lain yang lebih maju. Namun, ada juga
                tantangan yang dihadapi, seperti ketersediaan infrastruktur teknologi yang memadai di daerah terpencil serta
                kebutuhan akan internet dengan kualitas yang stabil.
            </p>
            <p>
                Meski demikian, program ini dianggap sebagai langkah besar dalam menghadirkan pemerataan pendidikan di Sulawesi
                Utara. Dengan kerja sama berbagai pihak, diharapkan teknologi ini dapat membawa dampak positif yang signifikan
                bagi dunia pendidikan di masa depan.
            </p>
            <p>
                Di era digital ini, teknologi kecerdasan buatan (AI) semakin banyak digunakan untuk berbagai keperluan.
                Salah satu perkembangan terbaru adalah penerapan teknologi AI dalam bidang pendidikan di Sulawesi Utara.
                Dengan bantuan AI, sekolah-sekolah dapat meningkatkan efisiensi belajar mengajar serta memberikan pengalaman
                belajar yang lebih interaktif bagi siswa.
            </p>
            <p>
                Kepala Dinas Pendidikan Sulawesi Utara, Dr. Alex Mandolang, menyatakan bahwa program ini bertujuan untuk
                menjembatani kesenjangan pendidikan di daerah terpencil. “Kami percaya bahwa teknologi bisa menjadi solusi
                untuk memberikan akses pendidikan yang lebih baik bagi semua siswa,” katanya dalam konferensi pers hari ini.
            </p>
            <p>
                Program ini melibatkan implementasi platform pembelajaran berbasis AI yang dapat diakses melalui perangkat
                smartphone dan komputer. Fitur-fitur unggulan platform ini mencakup analisis hasil belajar siswa secara real-time,
                pengajaran adaptif yang disesuaikan dengan kebutuhan masing-masing siswa, serta akses ke materi pelajaran yang
                telah disiapkan oleh para ahli di bidangnya.
            </p>
            <p>
                Selain itu, para guru juga mendapatkan pelatihan intensif mengenai penggunaan teknologi ini. "Kami tidak hanya
                berfokus pada siswa, tetapi juga para guru yang memainkan peran kunci dalam penerapan teknologi ini," tambah
                Dr. Alex. Pelatihan ini mencakup cara menggunakan perangkat lunak AI, memahami data analitik, dan menerapkan
                strategi pembelajaran inovatif.
            </p>
            <p>
                Banyak pihak menyambut baik inisiatif ini, termasuk para orang tua. Mereka berharap dengan adanya teknologi AI,
                pendidikan anak-anak mereka menjadi lebih baik dan setara dengan daerah lain yang lebih maju. Namun, ada juga
                tantangan yang dihadapi, seperti ketersediaan infrastruktur teknologi yang memadai di daerah terpencil serta
                kebutuhan akan internet dengan kualitas yang stabil.
            </p>
            <p>
                Meski demikian, program ini dianggap sebagai langkah besar dalam menghadirkan pemerataan pendidikan di Sulawesi
                Utara. Dengan kerja sama berbagai pihak, diharapkan teknologi ini dapat membawa dampak positif yang signifikan
                bagi dunia pendidikan di masa depan.
            </p>
            <p>
                Di era digital ini, teknologi kecerdasan buatan (AI) semakin banyak digunakan untuk berbagai keperluan.
                Salah satu perkembangan terbaru adalah penerapan teknologi AI dalam bidang pendidikan di Sulawesi Utara.
                Dengan bantuan AI, sekolah-sekolah dapat meningkatkan efisiensi belajar mengajar serta memberikan pengalaman
                belajar yang lebih interaktif bagi siswa.
            </p>
            <p>
                Kepala Dinas Pendidikan Sulawesi Utara, Dr. Alex Mandolang, menyatakan bahwa program ini bertujuan untuk
                menjembatani kesenjangan pendidikan di daerah terpencil. “Kami percaya bahwa teknologi bisa menjadi solusi
                untuk memberikan akses pendidikan yang lebih baik bagi semua siswa,” katanya dalam konferensi pers hari ini.
            </p>
            <p>
                Program ini melibatkan implementasi platform pembelajaran berbasis AI yang dapat diakses melalui perangkat
                smartphone dan komputer. Fitur-fitur unggulan platform ini mencakup analisis hasil belajar siswa secara real-time,
                pengajaran adaptif yang disesuaikan dengan kebutuhan masing-masing siswa, serta akses ke materi pelajaran yang
                telah disiapkan oleh para ahli di bidangnya.
            </p>
            <p>
                Selain itu, para guru juga mendapatkan pelatihan intensif mengenai penggunaan teknologi ini. "Kami tidak hanya
                berfokus pada siswa, tetapi juga para guru yang memainkan peran kunci dalam penerapan teknologi ini," tambah
                Dr. Alex. Pelatihan ini mencakup cara menggunakan perangkat lunak AI, memahami data analitik, dan menerapkan
                strategi pembelajaran inovatif.
            </p>
            <p>
                Banyak pihak menyambut baik inisiatif ini, termasuk para orang tua. Mereka berharap dengan adanya teknologi AI,
                pendidikan anak-anak mereka menjadi lebih baik dan setara dengan daerah lain yang lebih maju. Namun, ada juga
                tantangan yang dihadapi, seperti ketersediaan infrastruktur teknologi yang memadai di daerah terpencil serta
                kebutuhan akan internet dengan kualitas yang stabil.
            </p>
            <p>
                Meski demikian, program ini dianggap sebagai langkah besar dalam menghadirkan pemerataan pendidikan di Sulawesi
                Utara. Dengan kerja sama berbagai pihak, diharapkan teknologi ini dapat membawa dampak positif yang signifikan
                bagi dunia pendidikan di masa depan.
            </p>
            <p>
                Di era digital ini, teknologi kecerdasan buatan (AI) semakin banyak digunakan untuk berbagai keperluan.
                Salah satu perkembangan terbaru adalah penerapan teknologi AI dalam bidang pendidikan di Sulawesi Utara.
                Dengan bantuan AI, sekolah-sekolah dapat meningkatkan efisiensi belajar mengajar serta memberikan pengalaman
                belajar yang lebih interaktif bagi siswa.
            </p>
            <p>
                Kepala Dinas Pendidikan Sulawesi Utara, Dr. Alex Mandolang, menyatakan bahwa program ini bertujuan untuk
                menjembatani kesenjangan pendidikan di daerah terpencil. “Kami percaya bahwa teknologi bisa menjadi solusi
                untuk memberikan akses pendidikan yang lebih baik bagi semua siswa,” katanya dalam konferensi pers hari ini.
            </p>
            <p>
                Program ini melibatkan implementasi platform pembelajaran berbasis AI yang dapat diakses melalui perangkat
                smartphone dan komputer. Fitur-fitur unggulan platform ini mencakup analisis hasil belajar siswa secara real-time,
                pengajaran adaptif yang disesuaikan dengan kebutuhan masing-masing siswa, serta akses ke materi pelajaran yang
                telah disiapkan oleh para ahli di bidangnya.
            </p>
            <p>
                Selain itu, para guru juga mendapatkan pelatihan intensif mengenai penggunaan teknologi ini. "Kami tidak hanya
                berfokus pada siswa, tetapi juga para guru yang memainkan peran kunci dalam penerapan teknologi ini," tambah
                Dr. Alex. Pelatihan ini mencakup cara menggunakan perangkat lunak AI, memahami data analitik, dan menerapkan
                strategi pembelajaran inovatif.
            </p>
            <p>
                Banyak pihak menyambut baik inisiatif ini, termasuk para orang tua. Mereka berharap dengan adanya teknologi AI,
                pendidikan anak-anak mereka menjadi lebih baik dan setara dengan daerah lain yang lebih maju. Namun, ada juga
                tantangan yang dihadapi, seperti ketersediaan infrastruktur teknologi yang memadai di daerah terpencil serta
                kebutuhan akan internet dengan kualitas yang stabil.
            </p>
            <p>
                Meski demikian, program ini dianggap sebagai langkah besar dalam menghadirkan pemerataan pendidikan di Sulawesi
                Utara. Dengan kerja sama berbagai pihak, diharapkan teknologi ini dapat membawa dampak positif yang signifikan
                bagi dunia pendidikan di masa depan.
            </p>
            <p>
                Di era digital ini, teknologi kecerdasan buatan (AI) semakin banyak digunakan untuk berbagai keperluan.
                Salah satu perkembangan terbaru adalah penerapan teknologi AI dalam bidang pendidikan di Sulawesi Utara.
                Dengan bantuan AI, sekolah-sekolah dapat meningkatkan efisiensi belajar mengajar serta memberikan pengalaman
                belajar yang lebih interaktif bagi siswa.
            </p>
            <p>
                Kepala Dinas Pendidikan Sulawesi Utara, Dr. Alex Mandolang, menyatakan bahwa program ini bertujuan untuk
                menjembatani kesenjangan pendidikan di daerah terpencil. “Kami percaya bahwa teknologi bisa menjadi solusi
                untuk memberikan akses pendidikan yang lebih baik bagi semua siswa,” katanya dalam konferensi pers hari ini.
            </p>
            <p>
                Program ini melibatkan implementasi platform pembelajaran berbasis AI yang dapat diakses melalui perangkat
                smartphone dan komputer. Fitur-fitur unggulan platform ini mencakup analisis hasil belajar siswa secara real-time,
                pengajaran adaptif yang disesuaikan dengan kebutuhan masing-masing siswa, serta akses ke materi pelajaran yang
                telah disiapkan oleh para ahli di bidangnya.
            </p>
            <p>
                Selain itu, para guru juga mendapatkan pelatihan intensif mengenai penggunaan teknologi ini. "Kami tidak hanya
                berfokus pada siswa, tetapi juga para guru yang memainkan peran kunci dalam penerapan teknologi ini," tambah
                Dr. Alex. Pelatihan ini mencakup cara menggunakan perangkat lunak AI, memahami data analitik, dan menerapkan
                strategi pembelajaran inovatif.
            </p>
            <p>
                Banyak pihak menyambut baik inisiatif ini, termasuk para orang tua. Mereka berharap dengan adanya teknologi AI,
                pendidikan anak-anak mereka menjadi lebih baik dan setara dengan daerah lain yang lebih maju. Namun, ada juga
                tantangan yang dihadapi, seperti ketersediaan infrastruktur teknologi yang memadai di daerah terpencil serta
                kebutuhan akan internet dengan kualitas yang stabil.
            </p>
            <p>
                Meski demikian, program ini dianggap sebagai langkah besar dalam menghadirkan pemerataan pendidikan di Sulawesi
                Utara. Dengan kerja sama berbagai pihak, diharapkan teknologi ini dapat membawa dampak positif yang signifikan
                bagi dunia pendidikan di masa depan.
            </p>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2025 Vellichor. All Rights Reserved.</p>
        <p>Follow us on 
            <a href="#">Facebook</a>, 
            <a href="#">Twitter</a>, and 
            <a href="#">Instagram</a>
        </p>
        <p>For inquiries, contact us at <a href="mailto:info@vellichor.com">info@vellichor.com</a></p>
    </div>
</body>
</html>
