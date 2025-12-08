USE news_database; 
CREATE TABLE news (
    id CHAR(10) PRIMARY KEY,
    news_title VARCHAR(255) NOT NULL,
    news_release_date DATE NOT NULL,
    news_author VARCHAR(100) NOT NULL,
    news_reader INT DEFAULT 0,
    news_likes INT DEFAULT 0,
    news_text LONGTEXT NOT NULL,
    news_img_path VARCHAR(255)
);

CREATE TABLE news_comment (
    id INT PRIMARY KEY AUTO_INCREMENT,
    comment_time_send TIME NOT NULL,
    comment_date_send DATE NOT NULL,
    comment_text LONGTEXT NOT NULL,
    news_id CHAR (10),

    FOREIGN KEY (news_id) REFERENCES news(id)
);

INSERT INTO news (id, news_title, news_release_date, news_author, news_reader, news_likes, news_text, news_img_path) VALUES
('N001', 'Penemuan Planet Baru di Galaksi Andromeda', '2025-10-01', 'Dr. Bima Sakti', 1500, 350, 'Para astronom mengumumkan penemuan sebuah planet eksotis dengan kondisi mirip Bumi di galaksi tetangga, Andromeda.', '/img/news/n001.jpg'),
('N002', 'Teknologi AI Terbaru Membantu Diagnosis Penyakit', '2025-10-05', 'Jurnal Kesehatan Digital', 890, 120, 'Sistem kecerdasan buatan baru menunjukkan akurasi 98% dalam mendeteksi kanker stadium awal dari hasil pemindaian medis.', '/img/news/n002.jpg'),
('N003', 'Kenaikan Harga Minyak Dunia Capai Rekor Tertinggi', '2025-10-10', 'Ekonomi Hari Ini', 2100, 80, 'Geopolitik global memicu lonjakan harga komoditas utama, berdampak pada inflasi di berbagai negara.', '/img/news/n003.jpg'),
('N004', 'Festival Musik Indie Sukses Menarik Ribuan Penonton', '2025-10-15', 'Reporter Seni', 550, 410, 'Acara tahunan ini menampilkan bakat-bakat lokal dan internasional, menjadi sorotan utama di kalangan pecinta musik.', '/img/news/n004.jpg'),
('N005', 'Resep Rahasia Kue Coklat Paling Lezat', '2025-10-20', 'Chef Renatta', 3200, 1500, 'Panduan langkah demi langkah untuk membuat kue coklat lava yang meleleh di mulut.', '/img/news/n005.jpg'),
('N006', 'Tim Sepak Bola Nasional Lolos ke Piala Dunia', '2025-10-25', 'Sport Channel', 4500, 2900, 'Kemenangan dramatis di babak kualifikasi memastikan tempat timnas di turnamen sepak bola paling bergengsi.', '/img/news/n006.jpg'),
('N007', 'Inovasi Panel Surya Transparan untuk Gedung Pencakar Langit', '2025-11-01', 'Tekno Hijau', 1120, 240, 'Peneliti berhasil menciptakan panel surya yang dapat menggantikan kaca jendela tanpa mengurangi estetika bangunan.', '/img/news/n007.jpg'),
('N008', 'Tips Efektif Mengelola Keuangan Pribadi di Usia Muda', '2025-11-05', 'Financial Guide', 1780, 560, 'Mulai dari investasi kecil hingga dana darurat, inilah cara cerdas mengatur gaji bulanan Anda.', '/img/news/n008.jpg'),
('N009', 'Misteri Hilangnya Kapal Nelayan di Segitiga Bermuda', '2025-11-10', 'Investigasi', 2900, 150, 'Pencarian besar-besaran diluncurkan setelah kontak terakhir dengan kapal tersebut hilang secara misterius.', '/img/news/n009.jpg'),
('N010', 'Peluncuran Mobil Listrik Tercepat di Dunia', '2025-11-15', 'Otomotif News', 3800, 750, 'Perusahaan X merilis kendaraan bertenaga listrik yang mampu mencapai kecepatan 100 km/jam dalam waktu 1.8 detik.', '/img/news/n010.jpg');

INSERT INTO news_comment (comment_time_send, comment_date_send, comment_text, news_id) VALUES
('10:15:00', '2025-10-02', 'Penemuan yang sangat menarik! Semoga ada perkembangan lebih lanjut.', 'N001'),
('14:30:00', '2025-10-06', 'Teknologi AI memang masa depan dunia medis.', 'N002'),
('09:45:00', '2025-10-11', 'Kenaikan harga minyak ini sangat mempengaruhi biaya hidup kita semua.', 'N003'),
('18:20:00', '2025-10-16', 'Festivalnya keren banget! Tahun depan harus ikut lagi.', 'N004'),
('12:00:00', '2025-10-21', 'Kue coklatnya terlihat lezat, mau coba resepnya nih!', 'N005'),
('20:10:00', '2025-10-26', 'Selamat untuk timnas! Semoga sukses di Piala Dunia nanti.', 'N006'),
('11:25:00', '2025-11-02', 'Inovasi yang luar biasa untuk energi terbarukan.', 'N007'),
('16:40:00', '2025-11-06', 'Tipsnya sangat membantu, terima kasih!', 'N008'),
('13:55:00', '2025-11-11', 'Misteri Segitiga Bermuda selalu menarik untuk diikuti.', 'N009'),
('15:05:00', '2025-11-16', 'Mobil listrik ini benar-benar revolusioner!', 'N010');