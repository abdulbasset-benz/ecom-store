<div class="bg-gray-300 relative min-h-[500px] mt-48 p-4">
    <div class="bg-black w-[90%] mx-auto absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-3xl p-8 gap-4">
        <h1 class="text-4xl md:text-6xl font-alfa text-white text-left uppercase px-1">
            stay up to date with our latest offers
        </h1>
        <form action="" class="flex flex-col gap-4 mt-4">
            @csrf
            <div class="relative w-full">
                <x-bi-envelope class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500"/>
                <input type="text" placeholder="Enter your email"
                    class="border-none text-lg rounded-full p-3 pl-12 w-full">
            </div>
            <button class="px-6 py-3 rounded-full bg-slate-50 text-slate-900 text-lg w-full hover:text-white hover:bg-indigo-500">
                Subscribe to our Newsletter
            </button>
        </form>
    </div>


    <div class="pt-[38%] md:pt-[15%] w-[90%] mx-auto">
        <div class="flex flex-col items-start justify-center gap-5 max-w-6xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-alfa text-black text-left uppercase">
                SHOP.CO
            </h1>
            <p class="text-slate-500 text-left">
                We have clothes that suits your style and which you're proud to wear. from men to women
            </p>
            <div class="flex gap-7 ">
                <x-bi-facebook class="w-6 h-6 cursor-pointer hover:text-blue-500" />
                <x-bi-instagram class="w-6 h-6 cursor-pointer hover:text-orange-400" />
                <x-bi-twitter class="w-6 h-6 cursor-pointer hover:text-blue-400" />
                <x-bi-github class="w-6 h-6 cursor-pointer hover:text-green-400" />
            </div>

            <div class="grid grid-cols-2 w-full gap-4 mt-4">
                <div class="flex flex-col gap-4">
                    <h1 class="text-2xl font-bold text-black uppercase cursor-pointer">Company</h1>
                    <a href="" class="text-slate-500 capitalize cursor-pointer hover:text-slate-900">About Us</a>
                    <a href="" class="text-slate-500 capitalize cursor-pointer  hover:text-slate-900">Contact Us</a>
                    <a href="" class="text-slate-500 capitalize cursor-pointer hover:text-slate-900">features</a>
                    <a href="" class="text-slate-500 capitalize cursor-pointer hover:text-slate-900">career</a>
                </div>
                <div class="flex flex-col gap-4">
                    <h1 class="text-2xl font-bold text-black uppercase cursor-pointer">help</h1>
                    <a href="" class="text-slate-500 capitalize cursor-pointer hover:text-slate-900">customer support</a>
                    <a href="" class="text-slate-500 capitalize cursor-pointer hover:text-slate-900">delivery details</a>
                    <a href="" class="text-slate-500 capitalize cursor-pointer hover:text-slate-900">terms and conditions</a>
                    <a href="" class="text-slate-500 capitalize cursor-pointer hover:text-slate-900">privacy policy</a>
                </div>
                <div class="flex flex-col gap-4">
                    <h1 class="text-2xl font-bold text-black uppercase cursor-pointer">FAQ</h1>
                    <a href="" class="text-slate-500 capitalize cursor-pointer hover:text-slate-900">about</a>
                    <a href="" class="text-slate-500 capitalize cursor-pointer hover:text-slate-900">manage deliveries</a>
                    <a href="" class="text-slate-500 capitalize cursor-pointer hover:text-slate-900">Orders</a>
                    <a href="" class="text-slate-500 capitalize cursor-pointer hover:text-slate-900">payment</a>
                </div>
                <div class="flex flex-col gap-4">
                    <h1 class="text-2xl font-bold text-black uppercase cursor-pointer">resources</h1>
                    <a href="" class="text-slate-500 capitalize cursor-pointer hover:text-slate-900">free ebook</a>
                    <a href="" class="text-slate-500 capitalize cursor-pointer hover:text-slate-900">development tutorial</a>
                    <a href="" class="text-slate-500 capitalize cursor-pointer hover:text-slate-900">how to - blog</a>
                    <a href="" class="text-slate-500 capitalize cursor-pointer hover:text-slate-900">youtube playlist</a>
                </div>
            </div>
        </div>
        <hr class="border-t-2 border-gray-400 mt-8">
        <div class="flex flex-col items-center justify-center gap-4">
            <p class="text-slate-500 text-center mt-4">
                 1990 - 2025 &copy; SHOP.CO. All rights reserved
            </p>
            <div class="flex justify-between items-center w-full">
                <img class="size-14 cursor-pointer" src="{{ asset('images/apple-pay.svg') }}" alt="">
                <img class="size-14 cursor-pointer" src="{{ asset('images/google-pay.svg') }}" alt="">
                <img class="size-14 cursor-pointer" src="{{ asset('images/visa.svg') }}" alt="">
                <img class="size-14 cursor-pointer" src="{{ asset('images/master-card.svg') }}" alt="">
                <img class="size-14 cursor-pointer" src="{{ asset('images/paypal.svg') }}" alt="">
            </div>
        </div>
    </div>
