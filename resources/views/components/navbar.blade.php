<nav class="bg-green-900 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 ">
    <div class="flex flex-wrap items-center justify-between py-6">
        <div class="group flex w-1/2 items-center space-x-3 md:w-auto">
            <img id="logo" src="img/si sehat-1.svg" alt="Logo" class="h-10 w-auto transition-all duration-300">
            <a href="index.html" class="text-2xl font-bold text-white hover:text-orange-300" onmouseover="changeImage(true)"
                onmouseout="changeImage(false)">
                SI SEHAT
            </a>
        </div>


        <label for="menu-toggle" class="pointer-cursor block md:hidden"><svg class="fill-current text-white"
                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <title>menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg></label>

        <input class="hidden" type="checkbox" id="menu-toggle">

        <div class="hidden w-full md:block md:w-auto" id="menu">
            <nav
            class="w-full bg-gree-900 md:bg-transparent rounded shadow-lg px-6 py-4 mt-4 text-center md:p-0 md:mt-0 md:shadow-none">
            <ul class="md:flex items-center">
                {{-- <li><a class="py-2 inline-block md:text-white md:hidden lg:block font-semibold" href="#">About Us</a></li> --}}
                <li class="md:ml-4"><a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                    href="#">Beranda</a></li>
                <li class="md:ml-4"><a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                    href="#">Tentang Kami</a></li>
                <li class="md:ml-4 md:hidden lg:block"><a class="py-2 inline-block md:text-white md:px-2 font-semibold"
                    href="#">Informasi Penyakit</a></li>
                <li class="md:ml-4"><a class="py-2 inline-block md:text-white md:px-2 font-semibold" href="#">Artikel</a></li>
                <li class="md:ml-6 mt-3 md:mt-0">
                <a class="inline-block font-semibold px-4 py-2 text-white bg-blue-600 md:bg-transparent md:text-white border border-white rounded"
                    href="book-appointment.html"><i class="fa-brands fa-whatsapp mr-1.5"></i> Hubungi Kami </a>
                </li>
            </ul>
            </nav>
        </div>
    </div>
</nav>
