@extends('layouts.app')

@section('content')
    <div class="relative container p-5 mx-auto">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold capitalize">casual</h1>
            <button class="bg-gray-300 rounded-full p-2 cursor-pointer hover:bg-gray-400" id="filter-section">
                <x-letsicon-filter class="w-7" />
            </button>
        </div>

        {{-- Filters section - Using transform for better performance and smoother animations --}}
        <div id="filters"
            class="fixed inset-0 top-16 translate-x-full bg-slate-50 transition-transform duration-300 ease-in-out z-50 overflow-y-auto
            [&::-webkit-scrollbar]:w-2
            [&::-webkit-scrollbar-track]:bg-gray-200
            [&::-webkit-scrollbar-thumb]:bg-gray-500
            [&::-webkit-scrollbar-thumb]:rounded-full">

            <div class="p-6">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-bold">Filters</h1>
                    <button id="close-filters" class="mt-3 bg-red-500 text-white px-4 py-2 rounded">Close</button>
                </div>
                <hr class="my-3 bg-slate-400">

                <div class="space-y-3 px-5">
                    <div class="flex justify-between items-center group">
                        <h3 class="text-gray-500 text-lg group-hover:text-gray-700 cursor-pointer">T-shirts</h3>
                        <span><x-eva-arrow-ios-forward-outline class="w-6 h-6" /></span>
                    </div>
                    <div class="flex justify-between items-center">
                        <h3 class="text-gray-500 text-lg">Shorts</h3>
                        <span><x-eva-arrow-ios-forward-outline class="w-6 h-6" /></span>
                    </div>
                    <div class="flex justify-between items-center">
                        <h3 class="text-gray-500 text-lg">Shirts</h3>
                        <span><x-eva-arrow-ios-forward-outline class="w-6 h-6" /></span>
                    </div>
                    <div class="flex justify-between items-center">
                        <h3 class="text-gray-500 text-lg">Hoodie</h3>
                        <span><x-eva-arrow-ios-forward-outline class="w-6 h-6" /></span>
                    </div>
                    <div class="flex justify-between items-center">
                        <h3 class="text-gray-500 text-lg">Jeans</h3>
                        <span><x-eva-arrow-ios-forward-outline class="w-6 h-6" /></span>
                    </div>
                </div>

                <hr class="my-3 bg-slate-400">
                <div class="flex justify-between items-center px-5">
                    <h1 class="text-2xl font-bold">Price</h1>
                    <span><x-eva-arrow-ios-forward-outline class="w-6 h-6" /></span>
                </div>
                <div class="w-[90%] mx-auto">
                    <input class="w-full px-auto accent-black p-4" type="range" name="" id="">
                </div>

                <hr class="my-3 bg-slate-400">

                <div class="flex justify-between items-center px-5">
                    <h1 class="text-2xl font-bold">Sizes</h1>
                    <span><x-eva-arrow-ios-forward-outline class="w-6 h-6" /></span>
                </div>
                <div class="flex flex-wrap gap-2 items-center p-8">
                    <h3
                        class="text-gray-500 text-lg bg-slate-200 px-6 py-2 rounded-full cursor-pointer hover:bg-gray-900 hover:text-slate-100">
                        Small</h3>
                    <h3
                        class="text-gray-500 text-lg bg-slate-200 px-6 py-2 rounded-full cursor-pointer hover:bg-gray-900 hover:text-slate-100">
                        Medium</h3>
                    <h3
                        class="text-gray-500 text-lg bg-slate-200 px-6 py-2 rounded-full cursor-pointer hover:bg-gray-900 hover:text-slate-100">
                        Large</h3>
                    <h3
                        class="text-gray-500 text-lg bg-slate-200 px-6 py-2 rounded-full cursor-pointer hover:bg-gray-900 hover:text-slate-100">
                        X-Large</h3>
                    <h3
                        class="text-gray-500 text-lg bg-slate-200 px-6 py-2 rounded-full cursor-pointer hover:bg-gray-900 hover:text-slate-100">
                        2X-Large</h3>
                    <h3
                        class="text-gray-500 text-lg bg-slate-200 px-6 py-2 rounded-full cursor-pointer hover:bg-gray-900 hover:text-slate-100">
                        3X-Large</h3>
                </div>

                <hr class="my-3 bg-slate-400">
                <div class="flex justify-between items-center px-5">
                    <h1 class="text-2xl font-bold">Dressing Style</h1>
                    <span><x-eva-arrow-ios-forward-outline class="w-6 h-6" /></span>
                </div>
                <div class="flex flex-wrap gap-2 items-center p-8">
                    <h3
                        class="text-gray-500 text-lg bg-slate-200 px-6 py-2 rounded-full cursor-pointer hover:bg-gray-900 hover:text-slate-100">
                        Casual</h3>
                    <h3
                        class="text-gray-500 text-lg bg-slate-200 px-6 py-2 rounded-full cursor-pointer hover:bg-gray-900 hover:text-slate-100">
                        Formal</h3>
                    <h3
                        class="text-gray-500 text-lg bg-slate-200 px-6 py-2 rounded-full cursor-pointer hover:bg-gray-900 hover:text-slate-100">
                        Sport</h3>
                    <h3
                        class="text-gray-500 text-lg bg-slate-200 px-6 py-2 rounded-full cursor-pointer hover:bg-gray-900 hover:text-slate-100">
                        Vintage</h3>
                    <h3
                        class="text-gray-500 text-lg bg-slate-200 px-6 py-2 rounded-full cursor-pointer hover:bg-gray-900 hover:text-slate-100">
                        Streetwear</h3>
                </div>
                <hr class="my-3 bg-slate-400">

                <div class="flex flex-col gap-5 mx-auto w-2/3">
                    <button
                        class="bg-black text-xl font-bold text-gray-200 capitalize py-3 px-8 rounded-full mt-5 hover:text-gray-100">
                        Apply filters
                    </button>
                </div>
            </div>
        </div>

        {{-- Products show section --}}
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-2">
            @for ($i = 0; $i < 6; $i++)
                <x-card />
            @endfor
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const filterSection = document.getElementById('filter-section');
            const filters = document.getElementById('filters');
            const closeFilters = document.getElementById('close-filters');

            // Open filters panel
            filterSection.addEventListener('click', () => {
                filters.classList.remove('translate-x-full');
                filters.classList.add('translate-x-0');
                // Prevent background scrolling when filter is open
                document.body.style.overflow = 'hidden';
            });

            // Close filters panel
            closeFilters.addEventListener('click', () => {
                filters.classList.remove('translate-x-0');
                filters.classList.add('translate-x-full');
                // Restore background scrolling when filter is closed
                document.body.style.overflow = '';
            });
        });
    </script>
@endsection
