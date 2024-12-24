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
                <h1 class="text-5xl text-left font-alfa text-slate-900 leading-tight uppercase">
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
                        <p class="text-gray-500">International Brands</p>
                    </div>
                    <hr class="border border-gray-500 h-14">
                    <div>
                        <h2 class="text-2xl text-left font-bold md:text-4xl text-black">2,000+</h2>
                        <p class="text-gray-500">High-Quality Products</p>
                    </div>
                    <hr class="border opacity-0 md:opacity-100 border-gray-500 h-14">
                    <div>
                        <h2 class="text-2xl text-left font-bold md:text-4xl text-black">30,000+</h2>
                        <p class="text-gray-500">Happy Customers</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-4xl h-auto mx-auto mt-4 relative">
            <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#000000"
                class="bi bi-stars absolute right-10 top-0">
                <path
                    d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
            </svg>
            <img src="{{ asset('images/fashion-man.png') }}" alt="Fashion Model" class="w-full h-auto max-w-lg">
            <svg width="80px" height="80px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#000000"
                class="bi bi-stars absolute left-10 bottom-5">
                <path
                    d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
            </svg>
        </div>
    </main>

    {{-- brands section --}}
    <section class="flex overflow-hidden">
        <div class="flex py-3 bg-black w-screen">
            <div class="flex gap-20 animate-loop-scroll px-5">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0" src="{{ asset('images/icons/adidas.svg') }}" alt="Adidas">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0" src="{{ asset('images/icons/brand-nike.svg') }}" alt="Nike">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0" src="{{ asset('images/icons/calvin.svg') }}" alt="Calvin Klein">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0" src="{{ asset('images/icons/puma.svg') }}" alt="Puma">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0" src="{{ asset('images/icons/zara.svg') }}" alt="Zara">
            </div>
            <div class="flex gap-20 animate-loop-scroll px-5">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0" src="{{ asset('images/icons/adidas.svg') }}" alt="Adidas">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0" src="{{ asset('images/icons/brand-nike.svg') }}" alt="Nike">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0" src="{{ asset('images/icons/calvin.svg') }}" alt="Calvin Klein">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0" src="{{ asset('images/icons/puma.svg') }}" alt="Puma">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0" src="{{ asset('images/icons/zara.svg') }}" alt="Zara">
            </div>
            <div class="flex gap-20 animate-loop-scroll px-5">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0" src="{{ asset('images/icons/adidas.svg') }}" alt="Adidas">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0" src="{{ asset('images/icons/brand-nike.svg') }}" alt="Nike">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0" src="{{ asset('images/icons/calvin.svg') }}" alt="Calvin Klein">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0" src="{{ asset('images/icons/puma.svg') }}" alt="Puma">
                <img class="w-24 mx-4 max-w-none filter invert brightness-0" src="{{ asset('images/icons/zara.svg') }}" alt="Zara">
            </div>
    </section>





    <footer class="bg-gray-800 w-screen text-white text-center p-4">
        <p>&copy; {{ date('Y') }} SHOP CO. All rights reserved.</p>
    </footer>
</body>

</html>
