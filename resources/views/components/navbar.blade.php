<nav class="bg-green-900 backdrop-blur-md translate-all- duration-300 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 sticky top-0 z-50">
    <div class="flex flex-wrap items-center justify-between py-6">
    <div class="w-1/2 md:w-auto flex items-center space-x-3">
        <img src="img/si sehat-1.svg" alt="" class="h-10 w-auto">
        <a href="index.html" class="text-white font-bold text-2xl">SI SEHAT</a>
    </div>

    <label for="menu-toggle" class="pointer-cursor md:hidden block"><svg class="fill-current text-white"
        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
        <title>menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg></label>

    <input class="hidden" type="checkbox" id="menu-toggle">

        <div class="hidden md:block w-full md:w-auto" id="menu">
            <nav
            class="w-full bg-gree-900 md:bg-transparent rounded shadow-lg px-6 py-4 mt-4 text-center md:p-0 md:mt-0 md:shadow-none">
            <ul class="md:flex items-center">
                {{-- <li><a class="py-2 inline-block md:text-white md:hidden lg:block font-semibold" href="#">About Us</a></li> --}}
                <li class="md:ml-4"><a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                    href="{{ Route('home') }}">Beranda</a></li>
                <li class="md:ml-4"><a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                    href="{{ Route('about') }}">Tentang Kami</a></li>
                <li class="md:ml-4 md:hidden lg:block"><a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                    href="{{ Route('information') }}">Informasi Penyakit</a></li>
                <li class="md:ml-4"><a class="py-2 inline-block md:text-white md:px-2 font-semibold" href="{{ Route('articles') }}">Artikel</a></li>
                <li class="md:ml-6 mt-3 md:mt-0">
                <a class="inline-block font-semibold px-4 py-2 text-white bg-blue-600 md:bg-transparent md:text-white border border-white rounded"
                    href="{{ Route('contact') }}"><i class="fa-brands fa-whatsapp mr-1.5"></i> Hubungi Kami </a>
                </li>
            </ul>
            </nav>
        </div>
    </div>
</nav>
