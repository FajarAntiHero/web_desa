// Ambil elemen navbar
const navbar = document.getElementById('navbar');
const scrollIndicator = document.getElementById('scrollIndicator');

// Threshold scroll untuk mengaktifkan efek (dalam pixel)
const scrollThreshold = 100;

// Fungsi untuk handle scroll event
function handleScroll() {
    // Dapatkan posisi scroll saat ini
    const scrollPosition = window.scrollY || window.pageYOffset;
    
    // Update scroll indicator
    // scrollIndicator.textContent = `Scroll: ${Math.round(scrollPosition)}px`;
    
    // Cek apakah scroll sudah melewati threshold
    if (scrollPosition > scrollThreshold) {
    // Tambahkan class 'scrolled' untuk efek liquid glass
    navbar.classList.add('navbar-scrolled');
    } else {
    // Hapus class 'scrolled' untuk kembali normal
    navbar.classList.remove('navbar-scrolled');
    }
}

// Event listener untuk scroll
window.addEventListener('scroll', handleScroll);

// Optimasi dengan throttle (opsional, untuk performa lebih baik)
let isScrolling = false;

window.addEventListener('scroll', function() {
    if (!isScrolling) {
    window.requestAnimationFrame(function() {
        handleScroll();
        isScrolling = false;
    });
    isScrolling = true;
    }
});

// Jalankan sekali saat halaman dimuat
handleScroll();