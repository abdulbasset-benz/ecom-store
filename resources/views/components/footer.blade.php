<div class="bg-slate-200 relative h-full mt-72 flex justify-center items-center p-4">
    <div class="bg-black hidden absolute bottom-8 rounded-3xl flex flex-col items-start justify-center p-8 gap-4">
        <h1 class="text-4xl md:text-6xl font-alfa text-white text-left uppercase px-5">
            stay up to date with our latest offers
        </h1>
        <form action="" class="flex flex-col items-start justify-center gap-4 w-full">
            @csrf
            <input type="text" placeholder="Enter your email" class="border-none text-lg rounded-full p-3 w-full">
            <button class="px-6 py-3 rounded-full bg-slate-50 text-slate-900 text-lg w-full">Subscribe to our
                Newsletter</button>
        </form>
    </div>

    <div class="flex flex-col items-start justify-center gap-2">
        <h1 class="text-4xl md:text-6xl font-alfa text-white text-left uppercase">
            SHOP.CO
        </h1>
        <p class="text-slate-500 text-left">
            We have clothes that suits your style and which you're proud to wear. from men to women
        </p>
    </div>
</div>
