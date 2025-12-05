<!DOCTYPE html>
<html lang="id-ID">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Berita | Sukasari Website</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../static/css/preflight.css">
    <link rel="stylesheet" href="../static/css/library.css">
    <link rel="stylesheet" href="../static/css/navbar.css">
    <link rel="stylesheet" href="../static/css/liquid-glass.css">
    <link rel="stylesheet" href="../static/css/footer.css">
    <link rel="stylesheet" href="../static/css/news_item.css">

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
                        <a href="/web_desa/pages/news.php" class="font-montserrat d-inline-block text-colonial-white-950 nav-item active">Berita</a>
                        <a href="/web_desa/pages/product.php" class="font-montserrat d-inline-block text-colonial-white-950 nav-item">Produk</a>
                        <a href="/web_desa/pages/contact.php" class="font-montserrat d-inline-block text-colonial-white-950 nav-item">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO PAGE -->
    <div class="news-header d-flex items-center">
        <div class="container news-header-container bg-colonial-white-200 d-flex justify-between h-fit">
            <div class="news-header-img h-full">
                <img src="../assets/img/hero-page-image.jpg" alt="" class="w-full h-full object-cover">
            </div>
            <div class="news-header-information d-flex flex-col justify-between">
                <div class="news-header-title bg-white-50 d-flex">
                    <div class="bg-colonial-white-400 h-full"></div>
                    <div class="h-full">
                        <p class="font-montserrat font-bold text-colonial-white-950">Judul Berita</p>
                    </div>
                </div>
                <div class="d-flex justify-between">
                    <div class="news-header-release-date">
                        <p class="font-montserrat text-colonial-white-950 font-bold">Tanggal Rilis</p>
                        <div class="bg-white-50 d-flex">
                            <div><i class="fa-regular fa-calendar text-colonial-white-950"></i></div>
                            <p class="font-montserrat text-colonial-white-950">20 Maret 2025</p>
                        </div>
                    </div>
                    <div class="news-header-writer">
                        <p class="font-montserrat text-colonial-white-950 font-bold">Penulis</p>
                        <div class="bg-white-50 d-flex">
                            <div><i class="fa-solid fa-pen-fancy text-colonial-white-950"></i></div>
                            <p class="font-montserrat text-colonial-white-950">Fajar Maulana</p>
                        </div>
                    </div>
                    <div class="news-header-reader">
                        <p class="font-montserrat text-colonial-white-950 font-bold">Pembaca</p>
                        <div class="bg-white-50 d-flex">
                            <div><i class="fa-solid fa-eye text-colonial-white-950"></i></div>
                            <p class="font-montserrat text-colonial-white-950">245</p>
                        </div>
                    </div>
                    <div class="news-header-like">
                        <p class="font-montserrat text-colonial-white-950 font-bold">Suka</p>
                        <div class="bg-white-50 d-flex">
                            <div><i class="fa-regular fa-thumbs-up text-colonial-white-950"></i></div>
                            <p class="font-montserrat text-colonial-white-950">23</p>
                        </div>
                    </div>
                </div>
                <div class="news-header-short-detail bg-white-50">
                    <div class="w-fit">
                        <p class="font-montserrat text-colonial-white-950">Sinopsis Berita</p>
                    </div>
                    <div>
                        <p class="font-montserrat text-colonial-white-950">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, numquam veniam aliquid suscipit id voluptates.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NEWS DETAIL -->
    <div class="news-detail w-full h-fit bg-white-50">
        <div class="container news-detail-container d-flex justify-between">
            <div class="news">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi veritatis numquam ipsa in cum maiores eos nostrum dolore cumque explicabo ex sed vitae et, repudiandae iste fugit praesentium 
                    odio magnam! Possimus nobis laborum cumque molestiae nemo. Earum consequuntur dolore incidunt laborum similique quam alias expedita quas rerum harum! Minus, facilis.</p>
            </div>
            <div class="news-comments bg-colonial-white-200">
                <div class="news-comment-header w-full d-flex justify-center items-center">
                    <p class="font-montserrat font-bold text-colonial-white-950">Komentar</p>
                </div>
                <div class="news-comment-container w-full">
                    <div class="w-full h-full">
                        <div class="comment w-fit h-fit bg-colonial-white-50">
                            <p class="comment-identification font-montserrat text-white-500">Anonymous | 12.30</p>
                            <p class="comment-content font-montserrat text-colonial-white-950">kereen</p>
                        </div>
                    </div>
                </div> 
                <div class="news-comment-send w-full">
                    <form action="" class="w-full h-full bg-white-50 d-flex justify-between">
                        <input type="text" placeholder="tambahkan komentar" class="font-montserrat h-full text-colonial-white-950">
                        <button class="bg-colonial-white-200 h-full d-flex justify-center items-center"><i class="fa-regular fa-paper-plane text-colonial-white-950"></i></button>
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