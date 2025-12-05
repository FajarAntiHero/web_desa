<?php
    require '../model/news_model.php';
    require '../utility/utility.php';
    
    $getData = $koneksi;
    // var_dump($getData);
    $allNews = getAllNews();
    // var_dump($allNews);

    $dataPerPage = 8;
    $countData = count($allNews);
    $countPages = ceil($countData / $dataPerPage);
    $activePage = (isset($_GET['page'])) ? $_GET['page'] : 1;
    $startData = ($dataPerPage * $activePage) - $dataPerPage;
    $paginatedNews = getNewsPerPage($startData, $dataPerPage);

    if (isset($_GET['news-title-search'])) {
        $searchTitle = $_GET['news-title-search'];
        // Lakukan query pencarian berdasarkan judul berita
        $query = "SELECT * FROM news WHERE news_title LIKE '%$searchTitle%'";
        $result = $getData->query($query);
        $getSearchNews = [];
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $getSearchNews[] = $row;
            }
        }
    }
    else {
        $searchTitle = [];
    }
?>

<!DOCTYPE html>
<html lang="id-ID">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita | Sukasari Website</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../static/css/preflight.css">
    <link rel="stylesheet" href="../static/css/library.css">
    <link rel="stylesheet" href="../static/css/navbar.css">
    <link rel="stylesheet" href="../static/css/liquid-glass.css">
    <link rel="stylesheet" href="../static/css/footer.css">
    <link rel="stylesheet" href="../static/css/news.css">
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
            <div class="nav-list h-fit justify-between">
                <a href="/web_desa/" class="font-montserrat d-inline-block text-colonial-white-950 nav-item active">Beranda</a>
                <a href="/web_desa/pages/news.php" class="font-montserrat d-inline-block text-colonial-white-950 nav-item">Berita</a>
                <a href="/web_desa/pages/product.php" class="font-montserrat d-inline-block text-colonial-white-950 nav-item">Produk</a>
            </div>
            <div class="nav-action h-full justify-end items-center">
                <a href="/web_desa/pages/contact.php" class="d-inline-block font-montserrat text-white-50 bg-colonial-white-900 font-bold">Hubungi Kami</a>
            </div>
            <div class="toggle-bar">
                <i class="fa-solid fa-bars text-colonial-white-950"></i>
            </div>
            <div class="nav-vertical hidden">
                <div class="liquid-glass h-full">
                    <div class="nav-list-vertical d-flex flex-col h-fit">
                        <a href="/web_desa/" class="font-montserrat d-inline-block text-colonial-white-950 nav-item">Beranda</a>
                        <a href="/web_desa/pages/news.php" class="font-montserrat d-inline-block text-colonial-white-950 nav-item active">Berita</a>
                        <a href="/web_desa/pages/product.php" class="font-montserrat d-inline-block text-colonial-white-950 nav-item">Produk</a>
                        <a href="/web_desa/pages/contact.php" class="font-montserrat d-inline-block text-colonial-white-950 nav-item">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <header class="hero-page w-full d-flex justify-center items-center bg-colonial-white-50">
        <div class="container d-grid hero-page-news-container">
            <div class="news-quote bg-colonial-white-400 d-flex flex-col justify-between scroll-element scale-up">
                <div>
                    <p class="font-montserrat font-bold text-colonial-white-950">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis saepe architecto nobis.</p>
                </div>
                <div>
                    <p class="font-montserrat font-bold text-colonial-white-950">Fajar Maulana | <span class="font-normal">Professor</span> </p>
                </div>
            </div>
            <div class="news-hot-topic relative scroll-element fade-left">
                <img src="../assets/img/hero-page-image.jpg" alt="" class="w-full h-full">
                <div class="relative"></div>
            </div>
            <div class="news-event bg-colonial-white-200 scroll-element fade-right"></div>
        </div>
    </header>
    <div class="news-search w-full h-fit d-flex justify-center items-center bg-white-50" id='news-search'>
        <div class="container news-search-container">
            <p class="font-bold font-montserrat text-colonial-white-950 scroll-element fade-left">Temukan Berita Desa</p>
            <div class="search-input">
                <form action="#news-search" method="GET" class="d-flex w-full justify-between bg-colonial-white-200 scroll-element fade-left">
                    <div class="d-flex justify-center items-center">
                        <i class="fa-solid fa-magnifying-glass text-colonial-white-950"></i>
                    </div>
                    <input type="text" id="search-input" class="font-montserrat text-colonial-white-950" placeholder="Pembangunan Posyandu" name="news-title-search" required>
                    <button class="font-bold font-montserrat text-colonial-white-950 bg-colonial-white-400">Cari</button>
                </form>
                <p class="font-bold font-montserrat text-colonial-white-950 d-none">Ditemukan 4 berita dengan judul <span class="text-colonial-white-400">"Judul Berita"</span></p>
            </div>
            <div class="news-card-container d-flex flex-wrap justify-evenly">
                <?php if (isset($getSearchNews)): ?>
                    <?php foreach ($getSearchNews as $newsItem): ?>
                        <?php
                            $newsItem['news_title'] = potongTeks($newsItem['news_title'], 50);
                            $newsItem['news_text'] = potongTeks($newsItem['news_text'], 70);
                        ?>
                        <div class="news-card-item d-flex flex-col justify-between bg-white-50 scroll-element scale-up">
                            <div class="news-card-content">
                                <div class="news-card-img">
                                    <img src="../assets/img/hero-page-image.jpg" alt="" class="w-full h-full">
                                </div>
                                <div class="news-card-text">
                                    <p class="font-bold font-montserrat text-colonial-white-950"><?= $newsItem['news_title'] ?></p>
                                    <p class="text-colonial-white-900 font-montserrat font-normal"><?= $newsItem['news_text'] ?></p>
                                </div>
                            </div>
                            <a href="/web_desa/pages/news_item.php" class="news-card-link d-inline-block w-full h-fit font-montserrat text-colonial-white-950 font-bold">
                                Baca Berita
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="news-history h-fit" id="news-history">
        <div class="container news-history-container h-fit">
            <div class="news-history-header">
                <p class="font-montserrat font-bold text-colonial-white-950">Arsip Berita Desa</p>
                <div class="news-history-years d-flex">
                    <a href="" class="d-inline-block w-fit h-fit font-bold font-montserrat text-persian-red-500 years-active">2025</a>
                </div>
                <p class="news-result-information font-montserrat font-bold text-colonial-white-950">Ditemukan 17 berita pada tahun 2025 | Ditampilkan <?= count($paginatedNews)?> dari <?= count($allNews) ?> berita</p>
            </div>
            <div class="news-history-items d-flex flex-wrap justify-evenly">
                <?php foreach ($paginatedNews as $newsItem): ?>
                    <?php
                        $newsItem['news_title'] = potongTeks($newsItem['news_title'], 50);
                        $newsItem['news_text'] = potongTeks($newsItem['news_text'], 70);
                    ?>
                    <div class="news-card-item d-flex flex-col justify-between bg-white-50 scroll-element scale-up">
                        <div class="news-card-content">
                            <div class="news-card-img">
                                <img src="../assets/img/hero-page-image.jpg" alt="" class="w-full h-full">
                            </div>
                            <div class="news-card-text">
                                <p class="font-bold font-montserrat text-colonial-white-950"><?= $newsItem['news_title'] ?></p>
                                <p class="text-colonial-white-900 font-montserrat font-normal"><?= $newsItem['news_text'] ?></p>
                            </div>
                        </div>
                        <a href="" class="news-card-link d-inline-block w-full h-fit font-montserrat text-colonial-white-950 font-bold">
                            Baca Berita
                        </a>
                    </div>
                <?php endforeach; ?>

            </div>
            <div class="pagination d-flex justify-center w-full h-fit">
                <?php for($i = 1; $i <= $countPages; $i++): ?>
                    <?php if($i == $activePage) : ?>
                        <a href="?page=<?= $i ?>#news-history" class="font-montserrat font-bold d-inline-block text-colonial-white-950 bg-colonial-white-200 h-fit <?= ($i == $activePage) ? 'pagination-active' : '' ?>"><?= $i ?></a>
                    <?php else : ?>
                        <a href="?page=<?= $i ?>#news-history" class="font-montserrat font-bold d-inline-block text-colonial-white-950 bg-colonial-white-200 h-fit"><?= $i ?></a>
                    <?php endif; ?>
                <?php endfor; ?>
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
                        <p class="text-colonial-white-950">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate tenetur unde enim ratione ab aliquid consequuntur ad tempora illo a.</p>
                    </div>
                </div>
                <div class="footer-detail bg-colonial-white-100 scroll-element scale-up">
                    <p class="text-colonial-white-950 font-bold">Alamat Kantor Desa</p>
                    <p class="text-colonial-white-950 font-normal">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ullam eos dicta laboriosam aliquid expedita nihil 
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
                    <li><a href="" class="text-colonial-white-950">Berita Masyarakt</a></li>
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

    <script src="../static/javascript/nav-scrolled.js"></script>
    <script src="../static/javascript/animation_on_scroll.js"></script>
    <script src="../static/javascript/liquid-glass.js"></script>
    <script src="../static/javascript/toggle_nav.js"></script>
</body>
</html> 