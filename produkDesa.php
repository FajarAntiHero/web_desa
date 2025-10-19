<?php
// ========== Data Produk Desa ==========
$produk = [
  [
    "nama" => "Gula Aren Asli",
    "kategori" => "Makanan",
    "deskripsi" => "Gula tradisional 500gr dari nira pohon aren, manis alami dan sehat.",
    "harga" => 45000,
    "gambar" => "https://images.unsplash.com/photo-1506808547685-e2ba962ded36?q=80&w=1200&auto=format&fit=crop"
  ],
  [
    "nama" => "Kain Tenun Tradisional",
    "kategori" => "Kerajinan",
    "deskripsi" => "Tenun tangan motif khas desa, cocok untuk pakaian adat dan hiasan rumah.",
    "harga" => 250000,
    "gambar" => "https://images.unsplash.com/photo-1520975916982-1c2a9f3b6f4d?q=80&w=1200&auto=format&fit=crop"
  ],
  [
    "nama" => "Kopi Desa Lestari",
    "kategori" => "Minuman",
    "deskripsi" => "Kopi robusta pilihan dari perkebunan desa, aroma kuat dan nikmat.",
    "harga" => 75000,
    "gambar" => "https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=1200&auto=format&fit=crop"
  ],
  [
    "nama" => "Madu Hutan Asli",
    "kategori" => "Makanan",
    "deskripsi" => "Madu murni hasil panen lebah liar dari hutan sekitar desa.",
    "harga" => 120000,
    "gambar" => "https://images.unsplash.com/photo-1615486369964-7fdb2db885b4?q=80&w=1200&auto=format&fit=crop"
  ]
];

// ========== Simulasi Kirim Pesan ==========
if(isset($_POST['kirim'])){
  $nama  = htmlspecialchars($_POST['nama']);
  $email = htmlspecialchars($_POST['email']);
  $pesan = htmlspecialchars($_POST['pesan']);
  
  $data = "Nama: $nama\nEmail: $email\nPesan: $pesan\nTanggal: ".date("Y-m-d H:i:s")."\n----------------------\n";
  file_put_contents("pesan.txt", $data, FILE_APPEND);
  echo "<script>alert('Terima kasih, pesan Anda telah dikirim!');</script>";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Produk Desa Maju</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background: #f4f9f4;
      color: #2d3436;
    }

    header {
      background: linear-gradient(90deg, #2f855a, #f6ad55);
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 30px;
    }
    header .brand { display: flex; align-items: center; gap: 10px; }
    header .brand .logo { width: 40px; height: 40px; }
    header nav a {
      color: white;
      text-decoration: none;
      margin-left: 15px;
      font-weight: 600;
    }
    header nav a:hover { text-decoration: underline; }

    .hero {
      text-align: center;
      padding: 60px 20px;
      background: linear-gradient(180deg, #e6fffa, #fefae0);
    }
    .hero h2 { color: #276749; font-size: 28px; }
    .hero p { max-width: 700px; margin: 10px auto; }
    .cta {
      display: inline-block;
      background: #2f855a;
      color: white;
      padding: 10px 20px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 600;
      margin-top: 10px;
    }
    .cta:hover { background: #276749; }

    .produk { padding: 40px 20px; text-align: center; }
    .produk .grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 20px;
      margin-top: 20px;
    }
    .card {
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      transition: 0.3s;
    }
    .card:hover { transform: translateY(-5px); }
    .card img { width: 100%; height: 180px; object-fit: cover; }
    .card .info { padding: 15px; text-align: left; }
    .card h3 { margin: 0; color: #276749; }
    .harga { font-weight: bold; color: #2f855a; margin: 5px 0; }
    button {
      background: #2f855a;
      color: white;
      border: none;
      padding: 8px 12px;
      border-radius: 6px;
      cursor: pointer;
    }
    button:hover { background: #276749; }

    .tentang {
      background: #fefae0;
      padding: 40px 20px;
    }
    .tentang ul {
      list-style: none;
      padding: 0;
      max-width: 600px;
      margin: auto;
    }
    .tentang li {
      padding: 6px;
      font-weight: 500;
    }

    .kontak {
      padding: 40px 20px;
      background: #e6fffa;
    }
    form {
      max-width: 400px;
      margin: auto;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
    input, textarea {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    footer {
      background: #2f855a;
      color: white;
      text-align: center;
      padding: 15px;
    }
  </style>
</head>
<body>
  <header>
    <div class="brand">
      <img src="https://cdn-icons-png.flaticon.com/512/616/616408.png" alt="Logo" class="logo">
      <h1>Desa Maju</h1>
    </div>
    <nav>
      <a href="#beranda">Beranda</a>
      <a href="#produk">Produk</a>
      <a href="#tentang">Tentang</a>
      <a href="#kontak">Kontak</a>
    </nav>
  </header>

  <section id="beranda" class="hero">
    <h2>Selamat Datang di Website Desa Maju 🌾</h2>
    <p>Temukan keindahan dan potensi desa kami. Dukung produk lokal buatan warga desa untuk ekonomi mandiri dan berkelanjutan.</p>
    <a href="#produk" class="cta">Lihat Produk</a>
  </section>

  <main>
    <section id="produk" class="produk">
      <h2>Produk Unggulan Desa</h2>
      <div class="grid">
        <?php foreach($produk as $p): ?>
          <div class="card">
            <img src="<?= $p['gambar']; ?>" alt="<?= $p['nama']; ?>">
            <div class="info">
              <h3><?= $p['nama']; ?></h3>
              <p><?= $p['deskripsi']; ?></p>
              <div class="harga">Rp <?= number_format($p['harga'],0,',','.'); ?></div>
              <button onclick="alert('Anda memilih <?= $p['nama']; ?>')">Beli Sekarang</button>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <section id="tentang" class="tentang">
      <h2>Tentang Desa Maju</h2>
      <p>Desa Maju merupakan desa yang berkembang berkat semangat warganya dalam melestarikan budaya, kerajinan, dan hasil bumi lokal. Melalui website ini, kami memperkenalkan potensi desa untuk mendukung kesejahteraan masyarakat.</p>
      <ul>
        <li>🌿 Produk alami dan ramah lingkungan</li>
        <li>🤝 Dikelola oleh UMKM dan warga desa</li>
        <li>🚜 Mendukung ekonomi mandiri desa</li>
      </ul>
    </section>

    <section id="kontak" class="kontak">
      <h2>Hubungi Kami</h2>
      <form method="POST">
        <input type="text" name="nama" placeholder="Nama Anda" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="pesan" placeholder="Tulis pesan Anda..." rows="4" required></textarea>
        <button type="submit" name="kirim">Kirim Pesan</button>
      </form>
    </section>
  </main>

  <footer>
    &copy; <?= date('Y'); ?> Desa Maju — Membangun dari Desa untuk Indonesia.
  </footer>
</body>
</html>
