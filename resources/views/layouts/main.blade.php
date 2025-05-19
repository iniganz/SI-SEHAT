<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/x-icon" sizes="16x16" href="favicon-16x16.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title', 'SI SEHAT')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles') <!-- For adding custom styles in child views -->
</head>
<body class="antialiased bg-white font-sans text-gray-900">
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
    </script>
</body>
</html>
