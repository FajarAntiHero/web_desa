<?php 
    require '../model/product_model.php';
    $getData = $koneksi;

    if (isset($_GET['product_id'])) {
        $getID = $_GET['product_id'];
        // Lakukan query pencarian berdasarkan judul berita
        $query = "SELECT * FROM product_table WHERE id = '$getID'";
        $result = $getData->query($query);
        $getProducts = [];
        // var_dump($result);
        // echo $query;
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $getProducts[] = $row;
            }
        }
        $getComment = getComment($getID);
        // var_dump($getSearchNews);   
    }
    else {
        $searchTitle = [];
    }

    if (isset($_POST['send_comment'], $_POST['product_id'], $_POST['comment'])) {
        $sendComment = $_POST['send_comment'];
        $productID = $_POST['product_id'];
        $commentText = $_POST['comment'];
        $query = "INSERT INTO product_comment (product_id, comment_text, comment_date_send, comment_time_send) VALUES ('$productID', '$commentText', CURDATE(), CURTIME())";
        $result = $getData->query($query);
        if ($result) {
            header("Location: /web_desa/pages/product_item.php?product_id=$productID");
        exit();}
        
    }

?>
<!DOCTYPE html>
<html lang="id-ID">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Produk | Sukasari Website</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../static/css/preflight.css">
    <link rel="stylesheet" href="../static/css/library.css">
    <link rel="stylesheet" href="../static/css/navbar.css">
    <link rel="stylesheet" href="../static/css/liquid-glass.css">
    <link rel="stylesheet" href="../static/css/footer.css">
    <link rel="stylesheet" href="../static/css/product_item.css">

</head>
<body class="bg-colonial-white-50">

    <!-- NAVIGATION BAR -->
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
                        <a href="/web_desa/pages/news.php" class="font-montserrat d-inline-block text-colonial-white-950 nav-item">Berita</a>
                        <a href="/web_desa/pages/product.php" class="font-montserrat d-inline-block text-colonial-white-950 nav-item active">Produk</a>
                        <a href="/web_desa/pages/contact.php" class="font-montserrat d-inline-block text-colonial-white-950 nav-item">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO PAGE -->
    <div class="product-header d-flex items-center">
        <div class="container product-header-container bg-colonial-white-200 d-flex justify-between h-fit">
            <div class="product-header-img h-full">
                <img src="../assets/img/hero-page-image.jpg" alt="" class="w-full h-full object-cover">
            </div>
            <div class="product-header-information d-flex flex-col justify-between">
                <div class="product-header-title bg-white-50 d-flex">
                    <div class="bg-colonial-white-400 h-full"></div>
                    <div class="h-full">
                        <p class="text-colonial-white-950 font-bold font-montserrat"><?= $getProducts[0]['product_title'] ?></p>
                    </div>
                </div>
                <div class="d-flex justify-between">
                    <div class="product-price">
                        <p class="text-colonial-white-950 font-bold font-montserrat">Harga</p>
                        <div class="bg-white-50 d-flex">
                            <div><i class="fa-regular fa-calendar text-colonial-white-950"></i></div>
                            <p class="font-montserrat text-colonial-white-950"><?= $getProducts[0]['product_price'] ?></p>
                        </div>
                    </div>
                    <div class="product-shop">
                        <p class="text-colonial-white-950 font-bold  font-montserrat">Toko</p>
                        <div class="bg-white-50 d-flex">
                            <div><i class="fa-solid fa-pen-fancy text-colonial-white-950"></i></div>
                            <p class="font-montserrat text-colonial-white-950"><?= $getProducts[0]['product_shop'] ?></p>
                        </div>
                    </div>
                    <div class="product-header-reader">
                        <p class="text-colonial-white-950 font-bold  font-montserrat">Pelihat</p>
                        <div class="bg-white-50 d-flex">
                            <div><i class="fa-solid fa-eye text-colonial-white-950"></i></div>
                            <p class="font-montserrat text-colonial-white-950"><?= $getProducts[0]['product_reader'] ?></p>
                        </div>
                    </div>
                    <div class="product-header-like">
                        <p class="text-colonial-white-950 font-bold  font-montserrat">Suka</p>
                        <div class="bg-white-50 d-flex">
                            <div><i class="fa-regular fa-thumbs-up text-colonial-white-950"></i></div>
                            <p class="font-montserrat text-colonial-white-950"><?= $getProducts[0]['product_likes'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="product-header-short-detail bg-white-50">
                    <div class="w-fit">
                        <p class= "font-montserrat text-colonial-white-950">Deskripsi Singkat</p>
                    </div>
                    <div>
                        <p class= "font-montserrat text-colonial-white-950"><?= $getProducts[0]['product_description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PRODUCT DETAIL -->
    <div class="product-detail w-full h-fit bg-white-50" id="product_id">
        <div class="container product-detail-container d-flex justify-between">
            <div class="product">
                <p class="font-montserrat text-colonial-white-950"><?= $getProducts[0]['product_description'] ?></p>
            </div>
            <div class="product-comments bg-colonial-white-200">
                <div class="product-comment-header w-full d-flex justify-center items-center">
                    <p class="font-montserrat font-bold text-colonial-white-950">Komentar</p>
                </div>
                <div class="product-comment-container w-full">
                    <div class="w-full h-full">
                        <?php foreach ($getComment as $comment): ?>
                            <div class="comment w-fit h-fit bg-colonial-white-50">
                                <p class="comment-identification font-montserrat text-white-500">Anonymous | <?= $comment['comment_time_send'] ?></p>
                                <p class="comment-content font-montserrat text-colonial-white-950"><?= $comment['comment_text'] ?></p> 
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div> 
                <div class="product-comment-send w-full">
                    <form action="#product_id" method="POST" class="w-full h-full bg-white-50 d-flex justify-between">
                        <input type="text" hidden name="product_id" value="<?= $getID ?>">
                        <input type="text" placeholder="tambahkan komentar" class="font-montserrat h-full text-colonial-white-950" name="comment">
                        <button class="bg-colonial-white-200 h-full d-flex justify-center items-center" name="send_comment"><i class="fa-regular fa-paper-plane text-colonial-white-950"></i></button>
                    </form>                    
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="w-full">
        <div class="footer-content d-flex font-montserrat">
            <div class="footer-information h-full">
                <div class="footer-icon">
                    <div class="footer-icon-detail">
                        <div></div>
                        <p class="font-bold text-colonial-white-950">Suweb</p>
                    </div>
                    <div class="footer-information-detail">
                        <p class="text-colonial-white-950">Website resmi Desa Sukasari menyajikan informasi terkini seputar pemerintahan, pembangunan, kegiatan masyarakat, dan potensi desa.</p>
                    </div>
                </div>
                <div class="footer-detail bg-colonial-white-100 scroll-element scale-up">
                    <p class="text-colonial-white-950 font-bold">Alamat Kantor Desa</p>
                    <p class="text-colonial-white-950 font-normal">
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

    <script src="../static/javascript/nav-scrolled.js"></script>
    <script src="../static/javascript/animation_on_scroll.js"></script>
    <script src="../static/javascript/liquid-glass.js"></script>
    <script src="../static/javascript/toggle_nav.js"></script>
</body>
</html>