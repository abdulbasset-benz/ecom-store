<div class="bg-gray-200 relative min-h-[500px] mt-48 p-4">
    <div
        class="bg-black w-[90%] mx-auto absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 rounded-3xl p-8 gap-4">
        <h1 class="text-4xl md:text-6xl font-alfa text-white text-left uppercase px-1">
            stay up to date with our latest offers
        </h1>
        <form action="" class="flex flex-col gap-4 mt-4">
            @csrf
            <input type="text" placeholder="Enter your email" class="border-none text-lg rounded-full p-3 w-full">
            <button class="px-6 py-3 rounded-full bg-slate-50 text-slate-900 text-lg w-full">
                Subscribe to our Newsletter
            </button>
        </form>
    </div>

    <div class="pt-[38%] md:pt-[15%] w-[90%] mx-auto">
        <div class="flex flex-col items-start justify-center gap-4 max-w-6xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-alfa text-black text-left uppercase">
                SHOP.CO
            </h1>
            <p class="text-slate-500 text-left">
                We have clothes that suits your style and which you're proud to wear. from men to women
            </p>
            <div class="flex gap-7 ">
                <x-bi-facebook class="w-8 h-8 cursor-pointer hover:text-blue-500" />
                <x-bi-instagram class="w-8 h-8 cursor-pointer hover:text-orange-400" />
                <x-bi-twitter class="w-8 h-8 cursor-pointer hover:text-blue-400" />
                <x-bi-github class="w-8 h-8 cursor-pointer hover:text-green-400" />
            </div>

            <div class="grid grid-cols-2 w-full gap-4">
                <div class="flex flex-col gap-4">
                    <h1 class="text-2xl font-bold text-black uppercase">Company</h1>
                    <a href="" class="text-slate-500 capitalize">About Us</a>
                    <a href="" class="text-slate-500 capitalize">Contact Us</a>
                    <a href="" class="text-slate-500 capitalize">features</a>
                    <a href="" class="text-slate-500 capitalize">career</a>
                </div>
                <div class="flex flex-col gap-4">
                    <h1 class="text-2xl font-bold text-black uppercase">help</h1>
                    <a href="" class="text-slate-500 capitalize">customer support</a>
                    <a href="" class="text-slate-500 capitalize">delivery details</a>
                    <a href="" class="text-slate-500 capitalize">terms and conditions</a>
                    <a href="" class="text-slate-500 capitalize">privacy policy</a>
                </div>
                <div class="flex flex-col gap-4">
                    <h1 class="text-2xl font-bold text-black uppercase">FAQ</h1>
                    <a href="" class="text-slate-500 capitalize">about</a>
                    <a href="" class="text-slate-500 capitalize">manage deliveries</a>
                    <a href="" class="text-slate-500 capitalize">Orders</a>
                    <a href="" class="text-slate-500 capitalize">payment</a>
                </div>
                <div class="flex flex-col gap-4">
                    <h1 class="text-2xl font-bold text-black uppercase">resources</h1>
                    <a href="" class="text-slate-500 capitalize">free ebook</a>
                    <a href="" class="text-slate-500 capitalize">development tutorial</a>
                    <a href="" class="text-slate-500 capitalize">how to - blog</a>
                    <a href="" class="text-slate-500 capitalize">youtube playlist</a>
                </div>
            </div>
        </div>
    </div>
