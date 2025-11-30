document.addEventListener('DOMContentLoaded', () => {
    
    const galleryCards = document.querySelectorAll('.gallery-card');
    const galleryContainer = document.querySelectorAll('.gallery-container');
    let currentIndex = 0; 
    const totalSlides = galleryCards.length; // Total gambar, harusnya 3
    
    if (!galleryContainer || galleryCards.length === 0) return;

    // 3. Loop melalui setiap kartu untuk menambahkan event listener
    galleryCards.forEach(card => {
        // Event saat mouse masuk (hover mulai)
        card.addEventListener('mouseover', () => {
            // Tambahkan class khusus ke container saat kartu di-hover
            galleryContainer.classList.add('is-card-hovered');
            
            // Opsional: Jeda animasi auto-scroll saat di-hover
            galleryContainer.style.animationPlayState = 'paused';
        });

        // Event saat mouse keluar (hover selesai)
        card.addEventListener('mouseout', () => {
            // Hapus class khusus dari container
            galleryContainer.classList.remove('is-card-hovered');
            
            // Opsional: Lanjutkan animasi auto-scroll saat hover selesai
            galleryContainer.style.animationPlayState = 'running';
        });
    });
    

    // 2. Fungsi untuk menampilkan gambar tertentu
    function showSlide(index) {
        // Pastikan index berada dalam batas (0 hingga totalSlides - 1)
        if (index >= totalSlides) {
            currentIndex = 0; // Kembali ke gambar pertama (loop)
        } else if (index < 0) {
            currentIndex = totalSlides - 1; // Kembali ke gambar terakhir
        } else {
            currentIndex = index;
        }

        // Hitung persentase pergeseran. Contoh: index 1 berarti digeser -100%
        const offset = -currentIndex * (100 / totalSlides); 
        
        // Terapkan pergeseran menggunakan CSS transform
        slidesContainer.style.transform = `translateX(${offset}%)`; 
        
        // Perbarui tampilan dots
        updateDots();
    }
    
    // 3. Buat Penunjuk (Dots) secara dinamis
    function createDots() {
        for (let i = 0; i < totalSlides; i++) {
            const dot = document.createElement('span');
            dot.classList.add('dot');
            dot.dataset.index = i; // Simpan index gambar di dot
            
            // Tambahkan event listener agar dot bisa diklik
            dot.addEventListener('click', function() {
                showSlide(parseInt(this.dataset.index));
            });
            dotsContainer.appendChild(dot);
        }
    }
    
    // 4. Fungsi untuk memperbarui tampilan dots yang aktif
    function updateDots() {
        const cards = document.querySelectorAll('.card');
        cards.forEach((card, i) => {
            // Hapus class 'active' dari semua dot
            cards.classList.remove('card-active'); 
            // Tambahkan class 'active' hanya pada card yang sesuai dengan currentIndex
            if (i === currentIndex) {
                cards.classList.add('card-active');
            }
        });
    }

    // 5. Otomatisasi Slide (Sliding otomatis)
    const slideInterval = 5000; // 5000ms = 5 detik
    
    function autoSlide() {
        // Pindah ke gambar berikutnya
        showSlide(currentIndex + 1); 
    }

    // Mulai sliding otomatis saat halaman dimuat
    setInterval(autoSlide, slideInterval);

    // Inisialisasi: Buat dots dan tampilkan slide pertama
    createDots();
    showSlide(0); 

    // Opsi: Tambahkan fungsi navigasi tombol (jika Anda tambahkan tombol di HTML)
    // document.querySelector('.next-btn')?.addEventListener('click', () => showSlide(currentIndex + 1));
    // document.querySelector('.prev-btn')?.addEventListener('click', () => showSlide(currentIndex - 1));
}); 