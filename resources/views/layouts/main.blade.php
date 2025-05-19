<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="img/si sehat.svg">
    <link rel="icon" type="image/x-icon" sizes="16x16" href="img/si sehat.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title', 'SI SEHAT')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/heroslide.js'])

    @stack('styles') <!-- For adding custom styles in child views -->
</head>

<body class="bg-white font-sans text-gray-900 antialiased">
    <main class="w-full">
        <x-navbar></x-navbar>
        @yield('content') <!-- Content from child views -->


        <x-footer></x-footer>

    </main>
    @stack('scripts') <!-- For adding custom scripts in child views -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131505823-4"></script>


    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-131505823-4');



        // slider
        const carousel = document.getElementById('carousel');
        const dots = document.querySelectorAll('.dot');
        const totalSlides = 5;
        let currentIndex = 1;

        function updateSlide() {
            carousel.style.transition = 'transform 0.9s ease-in-out';
            carousel.style.transform = `translateX(-${currentIndex * 100}%)`;

            // Update dots
            dots.forEach(dot => dot.classList.remove('bg-black'));
            dots[(currentIndex - 1 + totalSlides) % totalSlides].classList.add('bg-black');
        }

        function goToNextSlide() {
            currentIndex++;
            updateSlide();

            if (currentIndex === totalSlides + 1) {
                setTimeout(() => {
                    // Langsung lompat ke slide ke-1 (tanpa animasi)
                    carousel.style.transition = 'none';
                    currentIndex = 1;
                    carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
                }, 700); // Waktu transisi
            }
        }

        // Dot click
        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                currentIndex = parseInt(dot.getAttribute('data-index')) + 1;
                updateSlide();
            });
        });

        // Auto play
        setInterval(goToNextSlide, 4000);

        // Inisialisasi
        updateSlide();


        // logo
        function changeImage(isHover) {
            const logo = document.getElementById('logo');
            logo.src = isHover ? 'img/logo-si2.svg' : 'img/si sehat-1.svg';


        }
    </script>

</body>

</html>
