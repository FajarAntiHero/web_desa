<?php
    require '../model/product_model.php';
    require_once '../utility/utility.php';
    $koneksi = $getData->getConnection();

    if (isset($_GET['product-title-search'])) {
        $searchTitle = $_GET['product-title-search'];
        // Lakukan query pencarian berdasarkan judul berita
        $query = "SELECT * FROM product_table WHERE product_title LIKE '%$searchTitle%'";
        $result = $koneksi->query($query);
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
    <title>Produk | Sukasari Website</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../static/css/preflight.css">
    <link rel="stylesheet" href="../static/css/library.css">
    <link rel="stylesheet" href="../static/css/navbar.css">
    <link rel="stylesheet" href="../static/css/liquid-glass.css">
    <link rel="stylesheet" href="../static/css/footer.css">
    <link rel="stylesheet" href="../static/css/product.css">

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
                <a href="/web_desa/" class="font-montserrat d-inline-block text-colonial-white-950 nav-item">Beranda</a>
                <a href="/web_desa/pages/news.php" class="font-montserrat d-inline-block text-colonial-white-950 nav-item">Berita</a>
                <a href="/web_desa/pages/product.php" class="font-montserrat d-inline-block text-colonial-white-950 nav-item active">Produk</a>
            </div>
            <div class="nav-action d-flex h-full justify-end items-center">
                <a href="/web_desa/pages/contact.php" class="d-inline-block font-montserrat text-white-50 bg-colonial-white-900 font-bold">Hubungi Kami</a>
            </div>
        </div>
    </nav>
    <div class="hero-page-product w-full relative">
        <div class="container hero-page-product-container d-flex flex-col items-center justify-center h-full">
            <div class="hero-page-slogan w-fit h-fit bg-colonial-white-200 scroll-element fade-top">
                <p class="font-montserrat text-colonial-white-950 font-normal">Dukung Produk Lokal, Dukung Ekonomi Lokal</p>
            </div>
            <p class="font-montserrat text-center text-colonial-white-950 scroll-element scale-up font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste autem alias blanditiis sequi voluptas molestiae!</p>
            <a href="#products" class="font-montserrat font-bold d-inline-block hero-page-atc w-fit h-fit text-colonial-white-950 scroll-element scale-up">Jelajahi Produk Lokal Sukasari</a>
        </div>
        <i class="fa-solid fa-cart-arrow-down absolute text-colonial-white-400 scroll-element fade-left"></i>
        <i class="fa-solid fa-dollar-sign absolute text-colonial-white-400 scroll-element fade-right"></i>
        <i class="fa-solid fa-burger absolute text-colonial-white-400 scroll-element fade-left"></i>
        <i class="fa-solid fa-beer-mug-empty absolute text-colonial-white-400 scroll-element fade-right"></i>
        <i class="fa-solid fa-heart absolute text-colonial-white-400 scroll-element fade-left"></i>
        <i class="fa-solid fa-apple-whole absolute text-colonial-white-400 scroll-element fade-right"></i>
    </div>
    <div class="product-search w-full h-fit d-flex justify-center items-center bg-colonial-white-100" id="products">
        <div class="container product-search-container">
            <p class="font-bold font-montserrat text-colonial-white-950 scroll-element fade-left">Temukan Produk Lokal Sukasari</p>
            <div class="search-input">
                <form action="#products" method="GET" class="d-flex w-full justify-between bg-colonial-white-200 scroll-element fade-left">
                    <div class="d-flex justify-center items-center">
                        <i class="fa-solid fa-magnifying-glass text-colonial-white-950"></i>
                    </div>
                    <input type="text" id="search-input" name='product-title-search' class="font-montserrat text-colonial-white-950" placeholder="Cilok Seribuan" required>
                    <button class="font-bold font-montserrat text-colonial-white-950 bg-colonial-white-400">Cari</button>
                </form>
                <p class="font-bold font-montserrat text-colonial-white-950 d-none">Ditemukan 1 Produk dengan nama <span class="text-colonial-white-400">"Nama Produk"</span></p>
            </div>
            <div class="product-card-container d-flex flex-wrap justify-evenly">
                <?php if (isset($getSearchNews)): ?>
                    <?php foreach ($getSearchNews as $productItem): ?>
                        <?php
                            $productItem['product_title'] = potongTeks($productItem['product_title'], 50);
                            $productItem['product_description'] = potongTeks($productItem['product_description'], 70);
                        ?>
                        <div class="product-card-item d-flex flex-col justify-between bg-white-50 scroll-element scale-up">
                            <div class="product-card-content">
                                <div class="product-card-img">
                                    <img src="../assets/img/hero-page-image.jpg" alt="" class="w-full h-full">
                                </div>
                                <div class="product-card-text">
                                    <p class="font-bold font-montserrat text-colonial-white-950"><?= $productItem['product_title'] ?></p>
                                    <p class="text-colonial-white-900 font-montserrat font-normal"><?= $productItem['product_description'] ?></p>
                                </div>
                            </div>
                            <a href="/web_desa/pages/product_item.php" class="product-card-link d-inline-block w-full h-fit font-montserrat text-colonial-white-950 font-bold">
                                Lihat Produk
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="product-information bg-white-50 d-flex items-center">
        <div class="container d-grid product-information-container">
            <div class="product-information-quote bg-colonial-white-200 d-flex flex-col justify-between scroll-element fade-left">
                <p class="font-montserrat text-colonial-white-950 font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo quaerat maxime nesciunt quis corrupti impedit.</p>
                <div>
                    <p class="font-montserrat font-bold text-colonial-white-950">Fajar Maulana</p>
                    <p class="font-montserrat text-colonial-white-950 font-normal">Professor</p>
                </div>
            </div>
            <div class="product-information-data bg-colonial-white-200">
                <p></p>
                <div>
                    <div>
                        <p></p>
                        <p></p>
                        <p></p>
                    </div>
                </div>
                <p></p>
            </div>
            <div class="product-information-item bg-colonial-white-200"></div>
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
</body>
</html>