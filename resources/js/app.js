import './bootstrap';

// navbar
const navbar = document.getElementById('navbar');

let lastScrollY = window.scrollY;

window.addEventListener('scroll', () => {
    const currentScroll = window.scrollY;

    if (currentScroll > 10) {
        // Saat scroll ke bawah
        navbar.classList.add(
            'fixed',
            'top-0',
            'left-0',
            'right-0',
            'z-50',
            'bg-opacity-30',
            'backdrop-blur-md'
        );
        navbar.classList.remove('translate-y-[-100%]');
        navbar.classList.add('translate-y-0');
    } else {
        // Saat kembali ke atas
        navbar.classList.remove(
            'bg-opacity-30',
            'backdrop-blur-md'
        );
        navbar.classList.remove('fixed', 'top-0', 'left-0', 'right-0', 'z-50');
        navbar.classList.remove('translate-y-0');
        navbar.classList.add('translate-y-[-100%]');

        // Delay untuk transisi keluar, lalu reset posisi
        setTimeout(() => {
            navbar.classList.remove('translate-y-[-100%]');
        }, 300); // sesuaikan dengan durasi transition
    }

    lastScrollY = currentScroll;
});




