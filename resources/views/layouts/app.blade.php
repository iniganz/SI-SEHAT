<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/x-icon" sizes="16x16" href="favicon-16x16.png">
    <title>@yield('title', 'SI SEHAT')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles') <!-- For adding custom styles in child views -->
</head>
<body class="antialiased bg-white font-sans text-gray-900">
    <main class="w-full">
        <x-navbar></x-navbar>
        @yield('content') <!-- Content from child views -->


        <x-footer></x-footer>
        @stack('scripts') <!-- For adding custom scripts in child views -->

    </main>
</body>
</html>
