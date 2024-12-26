<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=alfa-slab-one:400,700&display=swap" rel="stylesheet">


    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <x-navbar />

    <main
        class="bg-gray-200 flex flex-col md:flex-row items-center text-center w-screen overflow-hidden antialiased md:px-12">
        <div class="w-2xl md:max-w-2xl mx-auto px-12 pt-10 ">
            <div class="space-y-8">
                <h1 class="text-5xl md:text-6xl text-left font-alfa text-slate-900 leading-tight uppercase">
                    Find clothes that match your style
                </h1>
                <p class="text-gray-700 text-left max-w-sm">
                    Browse through our diverse range of meticulously crafted garments, designed to bring out your
                    individuality and cater to your sense of style.
                </p>
                <div class="flex justify-center md:justify-start">
                    <button
                        class="px-32 md:px-12 py-3 my-4 bg-black text-white font-semibold rounded-full hover:bg-gray-800 transition">
                        Shop Now
                    </button>
                </div>

                <div class="flex justify-center items-center gap-5 flex-wrap pb-5">
                    <div>
                        <h2 class="text-2xl text-left md:text-4xl font-bold text-black">200+</h2>
                        <p class="text-gray-500 text-left">International Brands</p>
                    </div>
                    <hr class="border border-gray-500 h-14">
                    <div>
                        <h2 class="text-2xl text-left font-bold md:text-4xl text-black">2,000+</h2>
                        <p class="text-gray-500 text-left">High-Quality Products</p>
                    </div>
                    <hr class="border opacity-0 md:opacity-100 border-gray-500 h-14">
                    <div>
                        <h2 class="text-2xl text-left font-bold md:text-4xl text-black">30,000+</h2>
                        <p class="text-gray-500 text-left">Happy Customers</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-4xl h-auto mx-auto mt-4 relative">
            <img src="images/icons/stars.svg" alt="stars" class="absolute top-20 right-0 w-24">
            <img src="{{ asset('images/fashion-man.png') }}" alt="Fashion Model" class="w-full h-auto max-w-lg">
            <img src="images/icons/stars.svg" alt="" class="absolute bottom-20 left-0 w-24">
        </div>
    </main>

    {{-- brands section --}}
    <section class="flex overflow-hidden w-screen">
        <div class="flex py-3 bg-black">
            <div class="flex gap-20 animate-loop-scroll px-5">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0"
                    src="{{ asset('images/icons/adidas.svg') }}" alt="Adidas">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0"
                    src="{{ asset('images/icons/brand-nike.svg') }}" alt="Nike">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0"
                    src="{{ asset('images/icons/calvin.svg') }}" alt="Calvin Klein">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0" src="{{ asset('images/icons/puma.svg') }}"
                    alt="Puma">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0" src="{{ asset('images/icons/zara.svg') }}"
                    alt="Zara">
            </div>
            <div class="flex gap-20 animate-loop-scroll px-5">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0"
                    src="{{ asset('images/icons/adidas.svg') }}" alt="Adidas">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0"
                    src="{{ asset('images/icons/brand-nike.svg') }}" alt="Nike">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0"
                    src="{{ asset('images/icons/calvin.svg') }}" alt="Calvin Klein">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0" src="{{ asset('images/icons/puma.svg') }}"
                    alt="Puma">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0" src="{{ asset('images/icons/zara.svg') }}"
                    alt="Zara">
            </div>
            <div class="flex gap-20 animate-loop-scroll px-5">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0"
                    src="{{ asset('images/icons/adidas.svg') }}" alt="Adidas">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0"
                    src="{{ asset('images/icons/brand-nike.svg') }}" alt="Nike">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0"
                    src="{{ asset('images/icons/calvin.svg') }}" alt="Calvin Klein">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0" src="{{ asset('images/icons/puma.svg') }}"
                    alt="Puma">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0" src="{{ asset('images/icons/zara.svg') }}"
                    alt="Zara">
            </div>
    </section>

    {{-- cards --}}

    <div class="flex justify-center flex-col items-center">
        <h1 class="text-3xl md:text-7xl text-center font-black uppercase py-3">new arrivals</h1>
    </div>

    {{-- cards --}}
    <div class="flex justify-start md:justify-center">
        <x-card />
        <x-card />
        <x-card />
        <x-card />

    </div>
    <div class="flex items-center justify-center pt-5">
        <button
            class="px-24 md:px-16 py-3 my-4 text-slate-900 border border-slate-600 font-semibold rounded-full hover:bg-slate-900 hover:text-slate-50 transition">
            Shop Now
        </button>
    </div>

    <div class="my-8">
        <hr class="border-t-2 border-gray-200 dark:border-gray-700 max-w-full md:max-w-7xl mx-auto" />
    </div>


    {{-- image grid --}}
    <div class="flex justify-center flex-col md:max-w-7xl md:mx-auto rounded-lg bg-gray-100 max-w-xl m-5 shadow-lg">
        <!-- Header Section -->

        <div class="bg-white dark:bg-gray-200 h-full py-6 sm:py-8 lg:py-12 rounded-lg shadow-lg overflow-hidden">
            <div class="flex justify-center items-center rounded-md px-8 py-4">
                <h1 class="uppercase text-4xl font-alfa text-center antialiased leading-normal text-slate-900">browse by
                    dress style</h1>
            </div>
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                <div class="mb-4 flex items-center justify-between gap-8 sm:mb-8 md:mb-12"></div>

                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
                    <!-- image - start -->
                    <a href="#"
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                        <img src="{{ asset('images/casual1.jpg') }}" loading="lazy" alt="Photo by Minh Pham"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span
                            class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg uppercase font-extrabold">Casual</span>
                    </a>
                    <!-- image - end -->

                    <!-- image - start -->
                    <a href="#"
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                        <img src="{{ asset('images/formal2.jpg') }}" loading="lazy" alt="Photo by Magicle"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span
                            class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg uppercase font-extrabold">Formal</span>
                    </a>
                    <!-- image - end -->

                    <!-- image - start -->
                    <a href="#"
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                        <img src="{{ asset('images/gym.jpg') }}" loading="lazy" alt="Photo by Martin Sanchez"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span
                            class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg uppercase font-extrabold">Gym</span>
                    </a>
                    <!-- image - end -->

                    <!-- image - start -->
                    <a href="#"
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                        <img src="{{ asset('images/casual.jpg') }}" loading="lazy" alt="Photo by Lorenzo Herrera"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span
                            class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg uppercase font-extrabold">Chill</span>
                    </a>
                    <!-- image - end -->
                </div>
            </div>
        </div>

</body>

</html>
