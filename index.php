<?php 
    // require_once 'controller/route.php';

// Include Model (jika ada)
    // require_once 'model/database.php'; // Contoh: koneksi database

// Include Controller
    // require_once 'controller/homeController.php';
    // require_once 'controller/ProductController.php';
// require_once 'controller/ContactController.php';

// Buat instance router
// $router = new Router();
// $router->setViewPath('');

// ========== ROUTES WEB ==========

// Home Page
// $router->get('', function($params, $router) {
//     $controller = new HomeController();
//     $controller->index($router);
// });
// $router->setViewPath('pages/');
// Product Pages
// $router->get('/product', function($params, $router) {
//     $controller = new ProductController();
//     $controller->index($router);
// });

// $router->get('/product/{id}', function($params, $router) {
//     $controller = new ProductController();
//     $controller->detail($params['id'], $router);
// });

// // News Page
// $router->get('/news', function($params, $router) {
//     $router->view('news.php', [
//         'title' => 'Berita Terbaru',
//         'news' => [
//             ['id' => 1, 'title' => 'Berita 1', 'date' => '2025-11-01'],
//             ['id' => 2, 'title' => 'Berita 2', 'date' => '2025-11-02']
//         ]
//     ]);
// });

// $router->get('/news/{id}', function($params, $router) {
//     $newsId = $params['id'];
//     $router->view('news_detail.php', [
//         'newsId' => $newsId,
//         'title' => 'Detail Berita ' . $newsId
//     ]);
// });

// // Contact Page
// $router->get('/contact', function($params, $router) {
//     $controller = new ContactController();
//     $controller->showForm($router);
// });

// $router->post('/contact/submit', function($params, $router) {
//     $controller = new ContactController();
//     $controller->submit($router);
// });

// Download
// $router->get('/download/{file}', function($params, $router) {
//     $filename = $params['file'];
//     $filepath = __DIR__ . '/assets/' . $filename;
    
//     if (file_exists($filepath)) {
//         header('Content-Type: application/octet-stream');
//         header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
//         header('Content-Length: ' . filesize($filepath));
//         readfile($filepath);
//         exit();
//     } else {
//         http_response_code(404);
//         echo "File tidak ditemukan";
//     }
// });

// Jalankan Router
    // $router->debug();
    // $router->run();
?>

<!DOCTYPE html>
<html lang="id-ID">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Sukasari Website</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="static/css/preflight.css">
    <link rel="stylesheet" href="static/css/library.css">
    <link rel="stylesheet" href="static/css/navbar.css">
    <link rel="stylesheet" href="static/css/liquid-glass.css">
    <link rel="stylesheet" href="static/css/footer.css">
    <link rel="stylesheet" href="static/css/index.css">
</head>
<body class="bg-colonial-white-50">
    <nav id="navbar">
        <div class="container d-flex navbar-container justify-between items-center">
            <div class="nav-logo w-fit h-fit">
                <div></div>
                <div>
                    <p class="font-montserrat font-bold text-colonial-white-950">Suweb</p>
                </div>
            </div>
            <div class="nav-list h-fit d-flex justify-between">
                <a href="/web_desa/" class="font-montserrat d-inline-block text-colonial-white-950 nav-item active">Beranda</a>
                <a href="/web_desa/pages/news.php" class="font-montserrat d-inline-block text-colonial-white-950 nav-item">Berita</a>
                <a href="/web_desa/pages/product.php" class="font-montserrat d-inline-block text-colonial-white-950 nav-item">Produk</a>
            </div>
            <div class="nav-action d-flex h-full justify-end items-center">
                <a href="/web_desa/pages/contact.php" class="d-inline-block font-montserrat text-white-50 bg-colonial-white-900 font-bold">Hubungi Kami</a>
            </div>
        </div>
    </nav>
    <header class="hero-page">
        <div class="container h-full d-flex flex-col justify-center items-center">
            <div class="hero-page-text w-full h-fit">
                <p class="font-montserrat font-bold text-colonial-white-800 text-center scroll-element fade-top">Selamat Datang</p>
                <p class="font-montserrat text-colonial-white-950 text-center font-normal scroll-element fade-top">Publikasi Informasi Bermanfaat Untuk Warga Desa Sukasari</p>
            </div>
            <div class="hero-page-img w-full bg-colonial-white-300 scroll-element scale-up">
                <img src="assets/img/hero-page-image.jpg" alt="Desa Sukasari">
            </div>
        </div>
    </header>
    <div class="visi-misi w-full bg-white-50">
        <div class="container h-full d-flex justify-center items-center">
            <div class="visi-misi-container w-full d-grid">
                <div class="bg-colonial-white-400 visi d-flex flex-col justify-between scroll-element fade-left">
                    <p class="font-bold font-montserrat text-white-50">Visi</p>
                    <p class="font-montserrat text-white-50">Terwujudnya Pemerintahan Desa yang Baik dan Pelayanan Prima untuk Masyarakat</p>
                </div>
                <div class="bg-colonial-white-100 misi scroll-element fade-left">
                    <div class="bg-colonial-white-400">
                        <p class="font-bold font-montserrat text-white-50">Misi</p>
                    </div>
                    <div>
                        <ol class="font-montserrat text-colonial-white-950">
                            <li>Meningkatkan kemampuan dan kinerja aparatur pemerintah desa</li>
                            <li>Melaksanakan pemerintahan desa secara partisipatif dan demokratis</li>
                            <li>Mewujudkan transparansi dan akuntabilitas dalam pengelolaan desa</li>
                            <li>Memberikan pelayanan publik yang berkualitas dan inklusif</li>
                        </ol>
                    </div>
                </div>
                <div class="bg-colonial-white-50 scroll-element fade-right program-kerja">
                    <p class="font-bold font-montserrat text-colonial-white-950">Program Kerja</p>
                    <ol class="font-montserrat text-colonial-white-950">
                        <li>Memaksimalkan sistem Kerja Aparatur Pemerintah Desa sesuai tugas, fungsi dan wewenang.</li>
                        <li>Menyelenggarakan Program Desa Berdasarkan Musyawarah Yang termuat dalam RPJM Desa, RKPDes dan APB Desa.</li>
                        <li>Melaksanakan Program Desa dengan transparan terbuka dan bertanggung jawab.</li>
                        <li>Meningkatkan pelayanan kepada amsyarakat dari yang tidak tahu sampai mengerti dan dari yang tidak mampu menjadi mandiri dengan baik.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="geology d-flex justify-center items-center w-full">
        <div class="container geology-container ">
            <p class="font-bold text-colonial-white-950 font-montserrat">Lokasi Desa Sukasari</p>
            <div class="maps-container w-full d-flex justify-between">
                <div class="maps h-full scroll-element fade-left">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63441.256022619134!2d107.03006268041621!3d-6.38386943724485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6999e2fc409c45%3A0xc9f074797f62d3ca!2sSukasari%2C%20Kec.%20Serang%20Baru%2C%20Kabupaten%20Bekasi%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1762178024172!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-full"></iframe>
                </div>
                <div class="citizen-information h-full bg-colonial-white-400 d-flex flex-col justify-center items-center scroll-element fade-right">
                    <div>
                        <p class="font-bold font-montserrat text-white-50 text-center counter" data-target="234">0</p>
                        <p class="font-montserrat text-white-50 text-center font-normal">Keluarga</p>
                    </div>
                    <div>
                        <p class="font-bold font-montserrat text-white-50 text-center counter" data-target="58">0</p>
                        <p class="font-montserrat text-white-50 text-center font-normal">Pengusaha</p>
                    </div>
                    <div>
                        <p class="font-bold font-montserrat text-white-50 text-center counter" data-target="1478">0</p>
                        <p class="font-montserrat text-white-50 text-center font-normal">Penduduk</p>
                    </div>
                </div>
            </div>
            <div class="location-description d-flex scroll-element fade-left">
                <div>
                    <p class="font-montserrat text-colonial-white-950 font-normal">Kecamatan</p>
                    <p class="font-bold font-montserrat text-colonial-white-950">Serang Baru</p>
                </div>
                <div>
                    <p class="font-montserrat text-colonial-white-950 font-normal">Kabupaten</p>
                    <p class="font-bold font-montserrat text-colonial-white-950">Bekasi</p>
                </div>
                <div>
                    <p class="font-montserrat text-colonial-white-950 font-normal">Provinsi</p>
                    <p class="font-bold font-montserrat text-colonial-white-950">Jawa Barat</p>
                </div>
            </div>
            
        </div>
    </div>
    <div class="structure-organization w-full bg-colonial-white-200">
        <div class="container structure-organization-container h-full d-flex justify-between">
            <div class="structure-organization-text h-full d-flex flex-col justify-between">
                <p class="font-montserrat text-colonial-white-950 font-normal scroll-element fade-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis voluptas illum rem, ipsa tempore voluptates?</p>
                <div>
                    <p class="font-montserrat text-colonial-white-950 font-bold scroll-element fade-left">Fajar Maulana</p>
                    <p class="font-montserrat text-colonial-white-950 font-normal scroll-element fade-left">Professor</p>
                </div>
            </div>
            <div class="structure-organization-img h-full scroll-element fade-right">
                <img src="assets/img/hero-page-image.jpg" alt="Struktur Organisasi Desa Sukasari" class="w-full h-full object-cover">
            </div>
        </div>
    </div>
    <div class="event-history d-flex justify-center items-center bg-white-50">
        <div class="container event-history-container scroll-element scale-up">
            <div class="w-full h-full">
                <div class="h-full d-flex flex-col justify-between">
                    <p class="font-montserrat text-colonial-white-50 font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque consequatur officia, tenetur nobis pariatur amet.</p>
                    <p class="font-montserrat text-colonial-white-50 font-normal">Upacara Hari Kemerdekaan | <span class="font-bold">17 Agustus 2025</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="news bg-colonial-white-200 w-full">
        <div class="container h-full d-flex justify-center items-center">
            <div class="news-container w-full">
                <p class="font-montserrat font-bold text-colonial-white-950 scroll-element fade-left">Berita Masyarakat</p>
                <div class="news-content d-flex justify-between">
                    <div class="news-hot-topic h-full scroll-element fade-left">
                        <img src="assets/img/hero-page-image.jpg" alt="">
                        <div class="news-hot-topic-text d-flex flex-col justify-between">
                            <div class="w-full hot-topic-header">
                                <div class="w-fit h-fit liquid-glass">
                                    <p class="font-bold font-montserrat">
                                        Berita Populer
                                    </p>
                                </div>
                                <div></div>
                            </div>
                            <div class="hot-topic-information liquid-glass d-flex justify-between">
                                <div class="h-full">
                                    <p class="font-bold font-montserrat">Pelatihan Kewirausahaan untuk Pemuda</p>
                                    <p class="font-montserrat text-white-200">Meliputi cara memulai usaha, manajemen keuangan, dan strategi pemasaran produk.</p>
                                </div>
                                <div class="h-full">
                                    <div class="d-flex flex-col justify-center items-center">
                                        <p class="font-bold font-montserrat">13</p>
                                        <p class="font-bold font-montserrat text-white-950">Nov 2025</p>
                                    </div> 
                                    <a href="" class="font-montserrat font-bold liquid-glass d-flex justify-center items-center">
                                        Baca Berita
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-recent h-full">
                        <div class="news-items-container w-full h-full d-flex flex-col justify-between">
                            <a href="" class="d-flex news-item bg-colonial-white-50 justify-between scroll-element scale-up">
                                <div>
                                    <img src="assets/img/hero-page-image.jpg" alt="">
                                </div>
                                <div>
                                    <p class="font-bold font-montserrat text-colonial-white-950">Panen Raya Padi Hasil Melimpah</p>
                                    <p class="font-montserrat text-white-950">Panen yang meningkat dibanding tahun lalu berkat cuaca mendukung dan bantuan pupuk dari desa.</p>
                                </div>
                            </a>
                            <a href="" class="d-flex news-item bg-colonial-white-50 justify-between scroll-element scale-up">
                                <div>
                                    <img src="assets/img/hero-page-image.jpg" alt="">
                                </div>
                                <div>
                                    <p class="font-bold font-montserrat text-colonial-white-950">Gotong Royong Bersihkan Lingkungan Desa</p>
                                    <p class="font-montserrat text-white-950">Ratusan warga dari berbagai dusun turun bersama membersihkan jalan, selokan, dan fasilitas umum.</p>
                                </div>
                            </a>
                            <a href="" class="d-flex news-item bg-colonial-white-50 justify-between scroll-element scale-up">
                                <div>
                                    <img src="assets/img/hero-page-image.jpg" alt="">
                                </div>
                                <div>
                                    <p class="font-bold font-montserrat text-colonial-white-950">Festival Budaya Desa Sukasari</p>
                                    <p class="font-montserrat text-white-950">Festival budaya menampilkan tarian tradisional, musik daerah, dan pameran hasil karya warga.</p>
                                </div>
                            </a>
                            <a href="" class="d-flex justify-center items-center bg-colonial-white-50 font-bold font-montserrat text-colonial-white-950 news-cta scroll-element scale-up">
                                Lebih Banyak Berita
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="quote bg-white-50 d-flex justify-center items-center">
        <div class="container quote-container bg-colonial-white-400 d-flex flex-col justify-between">
            <p class="font-montserrat text-colonial-white-950 text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, rem. Illo praesentium quaerat amet quis!</p>
            <p class="font-montserrat text-colonial-white-950 font-bold text-center">Fajar Maulana | Profesor</p>
        </div>
    </div>
    <div class="products bg-colonial-white-200 w-full">
        <div class="container h-full d-flex justify-center items-center">
            <div class="products-container w-full">
                <p class="font-bold font-montserrat text-colonial-white-950 scroll-element fade-left">Produk Lokal</p>
                <div class="d-flex justify-between w-full h-fit">
                    <div class="product-card scroll-element scale-up">
                        <img src="assets/img/hero-page-image.jpg" alt="">
                        <div class="product-card-detail ">
                            <div class="products-category w-full h-fit">
                                <div class="w-fit h-fit liquid-glass tag-item font-montserrat text-colonial-white-950 font-normal">
                                    Makanan
                                </div>
                            </div>
                            <div class="product-detail d-flex flex-col justify-between bg-colonial-white-50">
                                <div class="product-detail-text">
                                    <p class="font-bold font-montserrat text-colonial-white-500">Beras Organik</p>
                                    <p class="font-montserrat text-colonial-white-950">
                                        Ditanam tanpa menggunakan pestisida kimia, sehingga aman dan sehat untuk dikonsumsi.
                                    </p>
                                </div>
                                <div class="product-detail-price d-flex justify-between">
                                    <div class="w-fit h-fit">
                                        <p class="font-montserrat text-colonial-white-950 font-normal">Harga</p>
                                        <p class="font-bold font-montserrat text-colonial-white-950">Rp. 13.000</p>
                                    </div>
                                    <div>
                                        <a href="" class="d-flex items-center w-fit h-full bg-colonial-white-500 font-bold font-montserrat text-colonial-white-50">
                                            Lebih Lengkap
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card scroll-element scale-up">
                        <img src="assets/img/hero-page-image.jpg" alt="">
                        <div class="product-card-detail ">
                            <div class="products-category w-full h-fit">
                                <div class="w-fit h-fit liquid-glass tag-item font-montserrat text-colonial-white-950 font-normal">
                                    Makanan
                                </div>
                            </div>
                            <div class="product-detail d-flex flex-col justify-between bg-colonial-white-50">
                                <div class="product-detail-text">
                                    <p class="font-bold font-montserrat text-colonial-white-500">Keripik Singkong Renyah</p>
                                    <p class="font-montserrat text-colonial-white-950">
                                        Keripik singkong renyah dengan berbagai varian rasa: original, balado, keju, dan bawang.
                                    </p>
                                </div>
                                <div class="product-detail-price d-flex justify-between">
                                    <div class="w-fit h-fit">
                                        <p class="font-montserrat text-colonial-white-950">Harga</p>
                                        <p class="font-bold font-montserrat text-colonial-white-950">Rp. 10.000</p>
                                    </div>
                                    <div>
                                        <a href="" class="d-flex items-center w-fit h-full bg-colonial-white-500 font-bold font-montserrat text-colonial-white-50">
                                            Lebih Lengkap
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card scroll-element scale-up">
                        <img src="assets/img/hero-page-image.jpg" alt="">
                        <div class="product-card-detail ">
                            <div class="products-category w-full h-fit">
                                <div class="w-fit h-fit liquid-glass tag-item font-montserrat text-colonial-white-950 font-normal">
                                    Makanan
                                </div>
                            </div>
                            <div class="product-detail d-flex flex-col justify-between bg-colonial-white-50">
                                <div class="product-detail-text">
                                    <p class="font-bold font-montserrat text-colonial-white-500">Madu Hutan Asli</p>
                                    <p class="font-montserrat text-colonial-white-950">
                                        Madu murni 100% hasil panen dari hutan sekitar Desa Sukasari. Madu ini diambil langsung dari sarang lebah liar yang hidup di hutan alami, sehingga kualitasnya terjamin keasliannya.
                                    </p>
                                </div>
                                <div class="product-detail-price d-flex justify-between">
                                    <div class="w-fit h-fit">
                                        <p class="font-montserrat text-colonial-white-950">Harga</p>
                                        <p class="font-bold font-montserrat text-colonial-white-950">Rp. 50.000</p>
                                    </div>
                                    <div>
                                        <a href="" class="d-flex items-center w-fit h-full bg-colonial-white-500 font-bold font-montserrat text-colonial-white-50">
                                            Lebih Lengkap
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery bg-white-50 d-flex">
        <div class="gallery-container d-flex justify-center items-center w-fit h-full scroll-element slide-left">
            <div class="gallery-card card h-full relative">
                <div class="gallery-card-info w-full absolute">
                    <p class="font-montserrat text-colonial-white-950 font-normal">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, quo!</p>
                </div>
            </div>
            <div class="gallery-card card h-full relative">
                <div class="gallery-card-info w-full absolute">
                    <p class="font-montserrat text-colonial-white-950 font-normal">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, quo!</p>
                </div>
            </div>
            <div class="gallery-card card h-full relative">
                <div class="gallery-card-info w-full absolute">
                    <p class="font-montserrat text-colonial-white-950 font-normal">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, quo!</p>
                </div>
            </div>
            <div class="gallery-card card h-full relative">
                <div class="gallery-card-info w-full absolute">
                    <p class="font-montserrat text-colonial-white-950 font-normal">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, quo!</p>
                </div>
            </div>
            <div class="gallery-card card h-full relative">
                <div class="gallery-card-info w-full absolute">
                    <p class="font-montserrat text-colonial-white-950 font-normal">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, quo!</p>
                </div>
            </div>
        </div>
        <div aria-hidden class="gallery-container d-flex w-fit h-full scroll-element slide-left">
            <div class="gallery-card card h-full relative">
                <div class="gallery-card-info w-full absolute">
                    <p class="font-montserrat text-colonial-white-950 font-normal">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, quo!</p>
                </div>
            </div>
            <div class="gallery-card card h-full relative">
                <div class="gallery-card-info w-full absolute">
                    <p class="font-montserrat text-colonial-white-950 font-normal">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, quo!</p>
                </div>
            </div>
            <div class="gallery-card card h-full relative">
                <div class="gallery-card-info w-full absolute">
                    <p class="font-montserrat text-colonial-white-950 font-normal">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, quo!</p>
                </div>
            </div>
            <div class="gallery-card card h-full relative">
                <div class="gallery-card-info w-full absolute">
                    <p class="font-montserrat text-colonial-white-950 font-normal">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, quo!</p>
                </div>
            </div>
            <div class="gallery-card card h-full relative">
                <div class="gallery-card-info w-full absolute">
                    <p class="font-montserrat text-colonial-white-950 font-normal">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, quo!</p>
                </div>
            </div>
        </div>
    </div>
    <footer class="w-full">
        <div class="footer-content d-flex font-montserrat">
            <div class="footer-information h-full">
                <div class="footer-icon">
                    <div class="footer-icon-detail">
                        <div></div>
                        <p class="font-bold text-colonial-white-950">Suweb</p>
                    </div>
                    <div class="footer-information-detail">
                        <p class="text-colonial-white-950">Website resmi Desa Sukasari menyajikan informasi terkini seputar pemerintahan, pembangunan, kegiatan masyarakat, dan potensi desa. Kami hadir untuk memberikan pelayanan informasi yang transparan dan mudah diakses oleh seluruh masyarakat.</p>
                    </div>
                </div>
                <div class="footer-detail bg-colonial-white-100 scroll-element scale-up">
                    <p class="text-colonial-white-950 font-bold">Alamat Kantor Desa</p>
                    <p class="text-colonial-white-950">
                        Jl. Raya Serang Jl. Raya Serang Cibarusah 17330 Kabupaten Bekasi Jawa Barat 
                    </p>
                </div>
            </div>
            <div class="footer-list-information h-full text-colonial-white-950">
                <p class="font-bold">Information</p>
                <ul>
                    <li><a href="" class="text-colonial-white-950">Visi & Misi</a></li>
                    <li><a href="" class="text-colonial-white-950">Program Kerja</a></li>
                    <li><a href="" class="text-colonial-white-950">Lokasi</a></li>
                    <li><a href="" class="text-colonial-white-950">Pengurus</a></li>
                    <li><a href="" class="text-colonial-white-950">Berita Masyarakat</a></li>
                    <li><a href="" class="text-colonial-white-950">Produk Lokal</a></li>
                </ul>
            </div>
            <div class="footer-list-social-media h-full text-colonial-white-950">
                <p class="font-bold">Social Media</p>
                <ul>
                    <li><a href="" class="text-colonial-white-950">Facebook</a></li>
                    <li><a href="" class="text-colonial-white-950">X (Twitter)</a></li>
                    <li><a href="" class="text-colonial-white-950">Youtube</a></li>
                    <li><a href="" class="text-colonial-white-950">Instagram</a></li>
                    <li><a href="" class="text-colonial-white-950">Tiktok</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-copyright bg-colonial-white-200 d-flex justify-center items-center">
            <p class="font-montserrat text-colonial-white-950">Copyright 2025 Suweb of Desa Sukasari. All Right Reserved</p>
        </div>
    </footer>

    <script src="static/javascript/nav-scrolled.js"></script>
    <script src="static/javascript/animation_on_scroll.js"></script>
    <script src="static/javascript/liquid-glass.js"></script>
    <!-- <script src="static/javascript/gallery_card.js"></script> -->
</body>
</html>