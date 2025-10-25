<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Desa Sukamaju</title>
    <link rel="stylesheet" href="static/css/footer.css"> <!-- Menghubungkan CSS eksternal -->
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="notch"></div>
        </div>

        <!-- Konten -->
        <div class="content">
            <div class="row">
                <!-- Suweb -->
                <div>
                    <div class="profile">
                        <div class="avatar"></div>
                        <div class="profile-info">
                            <h3>Suweb</h3>
                            <p>
                                <?php 
                                    echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
                                ?>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Informasi -->
                <div class="section">
                    <h2>Informasi</h2>
                    <ul>
                        <?php 
                        $informasi = array(
                            "Visi & Misi",
                            "Program Kerja",
                            "Lokasi",
                            "Sejarah",
                            "Berita Management",
                            "Produk Lurah"
                        );
                        foreach ($informasi as $item) {
                            echo "<li>$item</li>";
                        }
                        ?>
                    </ul>
                </div>

                <!-- Sosial Media -->
                <div class="section">
                    <h2>Sosial Media</h2>
                    <ul>
                        <?php 
                        $sosmed = array(
                            "Facebook",
                            "X (Twitter)",
                            "Youtube",
                            "Instagram",
                            "Tiktok"
                        );
                        foreach ($sosmed as $media) {
                            echo "<li>$media</li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>

            <!-- Kantor Desa -->
            <div class="section" style="margin-top: 15px;">
                <h2>Kantor Desa</h2>
                <p>
                    <?php 
                        echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
                    ?>
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <?php 
                $year = date("Y");
                echo "@Copyright All Right Reserved by Desa Sukamaju $year";
            ?>
        </div>
    </div>
</body>
</html>


                