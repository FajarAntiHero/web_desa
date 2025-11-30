USE product_database;
CREATE TABLE product_category(
    id CHAR(10) PRIMARY KEY,
    category_name varchar(50)
);
CREATE TABLE product_table(
    id CHAR (10) PRIMARY KEY,
    product_title VARCHAR (500) NOT NULL,
    product_description LONGTEXT NOT NULL,
    product_price INT DEFAULT 0,
    product_shop VARCHAR(255) NOT NULL,
    product_reader INT DEFAULT 0,
    product_likes INT DEFAULT 0,
    category_id CHAR(10),
    
    FOREIGN KEY (category_id) REFERENCES product_category(id)
);

CREATE TABLE product_shop(
    id CHAR(5) PRIMARY KEY,
    shop_name VARCHAR (255) NOT NULL,
    shop_link VARCHAR (500) NOT NULL,
    shop_app VARCHAR (50) NOT NULL,
    product_id CHAR(10),
    FOREIGN KEY (product_id) REFERENCES product_table(id)
);

CREATE TABLE product_comment(
    id CHAR(15) PRIMARY KEY,
    comment_time_send TIME NOT NULL,
    comment_date_send DATE NOT NULL,
    comment_text LONGTEXT NOT NULL,
    product_id CHAR(10),
    FOREIGN KEY (product_id) REFERENCES product_table(id)
);


INSERT INTO product_category (id, category_name) VALUES
('CAT001', 'Elektronik'),
('CAT002', 'Pakaian Pria'),
('CAT003', 'Perabotan Rumah'),
('CAT004', 'Makanan & Minuman'),
('CAT005', 'Olahraga & Hobi');

INSERT INTO product_table (id, product_title, product_description, product_price, product_shop, product_reader, product_likes, category_id) VALUES
('PROD001', 'Smartwatch X-Gen 5 Terbaru', 'Jam tangan pintar dengan fitur pemantauan kesehatan canggih, tahan air, dan baterai hingga 7 hari. Dilengkapi layar AMOLED.', 2500000, 'Toko Gadget Cepat', 1250, 450, 'CAT001'),
('PROD002', 'Kemeja Katun Oxford Slim Fit', 'Kemeja pria lengan panjang dari bahan katun Oxford premium, nyaman, tidak mudah kusut, cocok untuk acara formal maupun kasual.', 350000, 'Butik Pria Keren', 890, 320, 'CAT002'),
('PROD003', 'Sofa Minimalis 3 Seater Scandinavia', 'Sofa ruang tamu dengan desain minimalis khas Scandinavia. Rangka kayu jati solid, busa density tinggi, dan cover linen halus.', 4800000, 'Home Living ID', 550, 180, 'CAT003'),
('PROD004', 'Kopi Arabika Gayo Single Origin 250g', 'Biji kopi arabika pilihan dari dataran tinggi Gayo, Aceh. Rasa fruity dan tingkat keasaman medium, dipanggang medium-dark.', 120000, 'Kopi Nusantara', 1900, 750, 'CAT004'),
('PROD005', 'Raket Badminton Carbon Fiber Pro', 'Raket profesional dari bahan full carbon fiber, ringan, dan memiliki sweet spot luas. Cocok untuk pemain ganda agresif.', 780000, 'Arena Sports', 420, 110, 'CAT005'),
('PROD006', 'Headset Gaming RGB Pro', 'Headset gaming dengan suara surround 7.1, mic noise cancellation, dan lampu RGB yang dapat diatur. Nyaman untuk sesi gaming panjang.', 990000, 'Toko Gadget Cepat', 1100, 390, 'CAT001'),
('PROD007', 'Kaos Polo Basic Warna Navy', 'Kaos polo pria bahan pique cotton 24s. Potongan regular fit yang nyaman dipakai sehari-hari. Tersedia dalam berbagai ukuran.', 150000, 'Butik Pria Keren', 650, 210, 'CAT002'),
('PROD008', 'Meja Kerja Lesehan Kayu Mahoni', 'Meja kerja/belajar lesehan portabel, terbuat dari kayu mahoni. Permukaan halus, desain ergonomis, dan mudah disimpan.', 210000, 'Home Living ID', 700, 250, 'CAT003'),
('PROD009', 'Teh Hijau Matcha Bubuk Premium 100g', 'Bubuk Matcha grade upacara (ceremonial grade). Rasa umami kuat dan warna hijau cerah, ideal untuk minuman dan baking.', 290000, 'Kopi Nusantara', 800, 400, 'CAT004'),
('PROD010', 'Matras Yoga Anti-Slip Tebal 6mm', 'Matras yoga TPE ramah lingkungan, tebal 6mm, anti-slip di kedua sisi. Dilengkapi tali pengikat. Warna-warna cerah tersedia.', 180000, 'Arena Sports', 300, 95, 'CAT005');

INSERT INTO product_shop (id, shop_name, shop_link, shop_app, product_id) VALUES
('S0001', 'Toko Gadget Cepat', 'https://shopee.co.id/gadget-cepat-pro', 'Shopee', 'PROD001'),
('S0002', 'Butik Pria Keren Official', 'https://tokopedia.com/bpk-store', 'Tokopedia', 'PROD002'),
('S0003', 'Home Living ID Store', 'https://blibli.com/homelivingid', 'Blibli', 'PROD003'),
('S0004', 'Kopi Nusantara Official', 'https://shopee.co.id/kopi-nusantara-original', 'Shopee', 'PROD004'),
('S0005', 'Arena Sports Center', 'https://tokopedia.com/arenasports-co', 'Tokopedia', 'PROD005'),
('S0006', 'Toko Gadget Cepat', 'https://tokopedia.com/gadget-cepat-store', 'Tokopedia', 'PROD006'),
('S0007', 'Butik Pria Keren Official', 'https://lazada.co.id/butikpriakeren', 'Lazada', 'PROD007'),
('S0008', 'Home Living ID Store', 'https://tokopedia.com/homeliving-id', 'Tokopedia', 'PROD008'),
('S0009', 'Kopi Nusantara Official', 'https://blibli.com/kopi-nusantara-premium', 'Blibli', 'PROD009'),
('S0010', 'Arena Sports Center', 'https://shopee.co.id/arena-sports-official', 'Shopee', 'PROD010');

INSERT INTO product_comment (id, comment_time_send, comment_date_send, comment_text, product_id) VALUES
('COMM-000000001', '14:30:00', '2025-11-28', 'Smartwatchnya keren banget! Baterainya awet sesuai deskripsi.', 'PROD001'),
('COMM-000000002', '09:15:00', '2025-11-29', 'Kemeja ini bahannya adem dan jahitannya rapi. Sangat puas!', 'PROD002'),
('COMM-000000003', '20:45:00', '2025-11-29', 'Sofa datang dengan cepat dan mudah dirakit. Ruangan jadi estetik.', 'PROD003'),
('COMM-000000004', '07:00:00', '2025-11-30', 'Kopi Gayo ini aroma dan rasanya mantap sekali, wajib coba!', 'PROD004'),
('COMM-000000005', '16:10:00', '2025-11-30', 'Raketnya ringan, tarikan kencang, dan handlingnya enak buat smash.', 'PROD005');
