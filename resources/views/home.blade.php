@extends('layouts.main')
@section('title', 'SI SEHAT')
@section('content')

<div class="relative w-full max-w-8xl mx-auto overflow-hidden   ">
  <div id="carousel" class="flex transition-transform duration-700 ease-in-out">
    <!-- Clone last (slide 3) -->
    <img src="img/slide5.png" class="w-full flex-shrink-0" />

    <!-- Slides -->
    <img src="img/slide1.png" class="w-full flex-shrink-0" />
    <img src="img/slide2.png" class="w-full flex-shrink-0" />
    <img src="img/slide3.png" class="w-full flex-shrink-0" />
    <img src="img/slide4.png" class="w-full flex-shrink-0" />
    <img src="img/slide5.png" class="w-full flex-shrink-0" />

    <!-- Clone first (slide 1) -->
    <img src="img/slide1.png" class="w-full flex-shrink-0" />
  </div>

  <!-- Dots -->
  <div class="absolute bottom-5 w-full flex justify-center gap-3 z-10">
    <button class="dot w-4 h-4 rounded-full border-2 opacity-80" data-index="0"></button>
    <button class="dot w-4 h-4 rounded-full border-2 opacity-80" data-index="1"></button>
    <button class="dot w-4 h-4 rounded-full border-2 opacity-80" data-index="2"></button>
    <button class="dot w-4 h-4 rounded-full border-2 opacity-80" data-index="3"></button>
    <button class="dot w-4 h-4 rounded-full border-2 opacity-80" data-index="4"></button>
  </div>
</div>


    <!-- start about -->
    <section class="relative px-4 py-16 sm:px-8 lg:px-16 lg:py-32 xl:px-40 2xl:px-64">
        <div class="flex flex-col lg:-mx-8 lg:flex-row">
            <div class="w-full lg:w-1/2 lg:px-8">
                <h2 class="mt-4 text-3xl font-bold leading-tight">Welcome to the Dentist Office of Dr. Thomas Dooley</h2>
                <p class="mt-4 text-lg font-semibold">Excellence in Dentistry in the Heart of NY</p>
                <p class="mt-2 leading-relaxed">Donec convallis sollicitudin facilisis. Integer nisl ligula, accumsan non
                    tincidunt ac, imperdiet in enim.
                    Donec efficitur ullamcorper metus, eu venenatis nunc. Nam eget neque tempus, mollis sem a, faucibus mi.
                </p>
            </div>

            <div class="mt-12 w-full lg:mt-0 lg:w-1/2 lg:px-8">
                <div class="md:flex">
                    <div>
                        <div class="h-16 w-16 rounded-full bg-blue-600"></div>
                    </div>
                    <div class="mt-4 md:ml-8 md:mt-0">
                        <h4 class="text-xl font-bold leading-tight">Everything You Need Under One Roof</h4>
                        <p class="mt-2 leading-relaxed">Our comprehensive services allow you to receive all needed dental
                            care
                            right here in our state-of-art
                            office - from dental cleanings and fillings to dental implants and extractions.</p>
                    </div>
                </div>

                <div class="mt-8 md:flex">
                    <div>
                        <div class="h-16 w-16 rounded-full bg-blue-600"></div>
                    </div>
                    <div class="mt-4 md:ml-8 md:mt-0">
                        <h4 class="text-xl font-bold leading-tight">Our Patient-Focused Approach</h4>
                        <p class="mt-2 leading-relaxed">Your treatment plan will perfectly match your needs, lifestyle, and
                            goals.
                            Even if it's been years
                            since you last visited the dentist, we can help. Our comfortable office, compassionate team, and
                            minimally-invasive treatments will help you feel completely at ease.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-24 text-center md:-mx-4 md:flex md:flex-wrap">
            <div class="md:w-1/2 md:px-4 lg:w-1/4">
                <div class="rounded-lg border border-gray-300 bg-white p-8">
                    <img src="img/teeth-whitening.svg" alt="" class="mx-auto h-20">

                    <h4 class="mt-4 text-xl font-bold">Teeth Whitening</h4>
                    <p class="mt-1">Let us show you how our experience.</p>
                    <a href="#" class="mt-4 block">Read More</a>
                </div>
            </div>

            <div class="mt-4 md:mt-0 md:w-1/2 md:px-4 lg:w-1/4">
                <div class="rounded-lg border border-gray-300 bg-white p-8">
                    <img src="img/oral-surgery.svg" alt="" class="mx-auto h-20">

                    <h4 class="mt-4 text-xl font-bold">Oral Surgery</h4>
                    <p class="mt-1">Let us show you how our experience.</p>
                    <a href="#" class="mt-4 block">Read More</a>
                </div>
            </div>

            <div class="mt-4 md:mt-8 md:w-1/2 md:px-4 lg:mt-0 lg:w-1/4">
                <div class="rounded-lg border border-gray-300 bg-white p-8">
                    <img src="img/painless-dentistry.svg" alt="" class="mx-auto h-20">

                    <h4 class="mt-4 text-xl font-bold">Painless Dentistry</h4>
                    <p class="mt-1">Let us show you how our experience.</p>
                    <a href="#" class="mt-4 block">Read More</a>
                </div>
            </div>

            <div class="mt-4 md:mt-8 md:w-1/2 md:px-4 lg:mt-0 lg:w-1/4">
                <div class="rounded-lg border border-gray-300 bg-white p-8">
                    <img src="img/periodontics.svg" alt="" class="mx-auto h-20">

                    <h4 class="mt-4 text-xl font-bold">Periodontics</h4>
                    <p class="mt-1">Let us show you how our experience.</p>
                    <a href="#" class="mt-4 block">Read More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end about -->


    <!-- start testimonials -->
    <section class="relative bg-gray-100 px-4 py-16 sm:px-8 lg:px-16 lg:py-32 xl:px-40 2xl:px-64">
        <div class="flex flex-col lg:-mx-8 lg:flex-row">
            <div class="w-full lg:w-1/2 lg:px-8">
                <h2 class="mt-4 text-3xl font-bold leading-tight">Why choose the Mesothelioma Center?</h2>
                <p class="mt-2 leading-relaxed">Aenean ut tellus tellus. Suspendisse potenti. Nullam tincidunt lacus tellus,
                    sed aliquam est vehicula a. Pellentesque consectetur condimentum nulla, eleifend condimentum purus
                    vehicula
                    in. Donec convallis sollicitudin facilisis. Integer nisl ligula, accumsan non tincidunt ac, imperdiet in
                    enim. Donec efficitur ullamcorper metus, eu venenatis nunc. Nam eget neque tempus, mollis sem a,
                    faucibus
                    mi.</p>
            </div>

            <div class="mt:md-0 mt-12 w-full md:mx-auto md:max-w-md lg:w-1/2 lg:px-8">
                <div class="h-72 w-full rounded-lg bg-gray-400"></div>

                <p class="mt-2 text-center text-sm italic">Aenean ante nisi, gravida non mattis semper.</p>
            </div>
        </div>
    </section>
    <!-- end testimonials -->

    <!-- start blog -->
    <section class="relative bg-white px-4 py-32 sm:px-8 lg:px-16 xl:px-40 2xl:px-64">
        <div class="">
            <h2 class="text-3xl font-bold leading-tight">Health Blog</h2>
            <p class="mt-2 text-gray-600 md:max-w-lg">Pellentesque habitant morbi tristique senectus et netus et malesuada
                fames ac
                turpis egestas.</p>

            <a href="#" title="" class="mt:md-0 mt-6 inline-block font-semibold text-teal-500">View All
                Posts</a>
        </div>

        <div class="mt-12 md:-mx-4 md:flex">
            <div class="md:w-1/2 md:px-4 xl:w-1/4">
                <div class="rounded border border-gray-300 bg-white">
                    <div class="h-48 w-full overflow-hidden bg-gray-300"></div>
                    <div class="p-4">
                        <div class="flex items-center text-sm">
                            <span class="font-semibold text-teal-500">Business</span>
                            <span class="ml-4 text-gray-600">29 Nov, 2019</span>
                        </div>
                        <p class="mt-4 text-lg font-semibold leading-tight">Card Title</p>
                        <p class="mt-1 text-gray-600">This card has supporting text below as a natural lead-in to additional
                            content.
                        </p>
                        <div class="mt-4 flex items-center">
                            <div class="h-8 w-8 overflow-hidden rounded-full bg-gray-300"></div>
                            <div class="ml-4">
                                <p class="text-gray-600">By <span class="font-semibold text-gray-900">Abby Sims</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4 md:mt-0 md:w-1/2 md:px-4 xl:w-1/4">
                <div class="rounded border border-gray-300 bg-white">
                    <div class="h-48 w-full overflow-hidden bg-gray-300"></div>
                    <div class="p-4">
                        <div class="flex items-center text-sm">
                            <span class="font-semibold text-teal-500">Business</span>
                            <span class="ml-4 text-gray-600">29 Nov, 2019</span>
                        </div>
                        <p class="mt-4 text-lg font-semibold leading-tight">Card Title</p>
                        <p class="mt-1 text-gray-600">This card has supporting text below as a natural lead-in to
                            additional
                            content.
                        </p>
                        <div class="mt-4 flex items-center">
                            <div class="h-8 w-8 overflow-hidden rounded-full bg-gray-300"></div>
                            <div class="ml-4">
                                <p class="text-gray-600">By <span class="font-semibold text-gray-900">Abby Sims</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end blog -->

    <!-- start cta -->
    <section
        class="bg-blue-teal-gradient relative px-4 py-12 text-center sm:px-8 md:text-left lg:px-16 xl:px-40 2xl:px-64">
        <div class="md:flex md:items-center md:justify-center">
            <h2 class="text-xl font-bold text-white">Get in touch with us today! <br class="block md:hidden">Call us on:
                +1
                562-789-1935</h2>
            <a href="#"
                class="mt-4 inline-block rounded bg-white px-8 py-4 font-semibold text-blue-600 md:ml-8 md:mt-0">Book
                Appointment</a>
        </div>
    </section>
    <!-- end cta -->


@endsection
