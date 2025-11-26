// Fungsi untuk mengecek apakah element terlihat di viewport
document.fonts.ready.then(function() {
    initScrollTrigger();
});

function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.85 &&
        rect.bottom >= 0
    );
}
function animateCounter(element) {
    const target = parseInt(element.getAttribute('data-target'));
    const duration = 2000;
    const step = target / (duration / 16);
    let current = 0;

    const updateCounter = () => {
        current += step;
        if (current < target) {
            element.textContent = Math.floor(current);
            requestAnimationFrame(updateCounter);
        } else {
            element.textContent = target;
        }
    };

    updateCounter();
}

// Fungsi untuk menjalankan scroll trigger
function handleScrollTrigger() {
    const elements = document.querySelectorAll('.scroll-element, .image-grid, .scroll-element-2');
    
    elements.forEach(element => {
        if (isInViewport(element) && !element.classList.contains('active')) {
            element.classList.add('active');
            element.classList.add('animating');
            
            // Tunggu animasi fade in selesai (0.8s) baru trigger counter
            setTimeout(() => {
                element.classList.remove('animating');
                
                // Cari semua counter dalam element ini
                const counters = element.querySelectorAll('.counter');
                counters.forEach(counter => {
                    if (!counter.hasAttribute('data-counted')) {
                        counter.setAttribute('data-counted', 'true');
                        animateCounter(counter);
                    }
                });
            }, 800); // Sesuai dengan durasi transition di CSS
        }
    });
}

// Event listener untuk scroll
window.addEventListener('scroll', () => {
    handleScrollTrigger();
    updateProgressBar();
});

// Jalankan sekali saat load untuk element yang sudah di viewport
window.addEventListener('load', () => {
    handleScrollTrigger();
    updateProgressBar();
});

if (!document.fonts) {
    window.addEventListener('load', initScrollTrigger);
}