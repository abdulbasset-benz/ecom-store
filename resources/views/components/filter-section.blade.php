<div class="flex justify-between items-center lg:hidden">
    <h1 class="text-2xl font-bold capitalize">casual</h1>
    <button class="bg-gray-300 rounded-full p-2 cursor-pointer hover:bg-gray-400" id="filter-section">
        <x-letsicon-filter class="w-7" />
    </button>
</div>


<div class="lg:flex lg:gap-4">

    <div id="filters"
        class="fixed inset-0 mt-16 translate-x-full bg-white transition-transform duration-300 ease-in-out z-50 overflow-y-auto
    lg:static lg:translate-x-0 lg:w-[300px] lg:max-w-[500px] lg:min-w-[350px] lg:h-full lg:border-2 lg:rounded-xl lg:bg-slate-50 lg:shadow-lg
    lg:mr-4 lg:my-0
    [&::-webkit-scrollbar]:w-2
    [&::-webkit-scrollbar-track]:bg-gray-100
    [&::-webkit-scrollbar-thumb]:bg-gray-400
    [&::-webkit-scrollbar-thumb]:rounded-full">


        <div class="pt-16 pb-16 lg:p-5 lg:bg-transparent lg:overflow-y-visible">

            {{-- Mobile Filter Header --}}
            <div class="flex justify-between items-center lg:hidden">
                <h1 class="text-2xl font-bold">Filters section</h1>
                <button id="close-filters" class="mt-3 bg-red-500 text-white px-4 py-2 rounded">Close</button>
            </div>

            {{-- Desktop Filter Header --}}
            <div class="flex justify-between items-center lg:flex">
                <h1 class="text-2xl font-bold hidden lg:block">Filters</h1>
                <span class="hidden lg:block cursor-pointer rounded-full bg-slate-300 p-2"><x-letsicon-filter
                        class="w-7" /></span>
            </div>

            <hr class="my-3 bg-slate-400">

            {{-- Categories Section --}}
            <div class="space-y-3 px-5">
                <ul class="flex flex-col gap-4">
                    <li
                        class="flex items-center justify-between text-xl text-gray-500 group hover:text-gray-700 cursor-pointer">
                        Tshirts
                        <x-eva-arrow-ios-forward-outline class="w-6 h-6 ml-2 group-hover:text-gray-700 arrow" />
                    </li>
                    <li
                        class="flex items-center justify-between text-xl text-gray-500 group hover:text-gray-700 cursor-pointer">
                        Jackets
                        <x-eva-arrow-ios-forward-outline class="w-6 h-6 ml-2 group-hover:text-gray-700 arrow" />
                    </li>
                    <li
                        class="flex items-center justify-between text-xl text-gray-500 group hover:text-gray-700 cursor-pointer">
                        Shirts
                        <x-eva-arrow-ios-forward-outline class="w-6 h-6 ml-2 group-hover:text-gray-700 arrow" />
                    </li>
                    <li
                        class="flex items-center justify-between text-xl text-gray-500 group hover:text-gray-700 cursor-pointer">
                        Hoodies
                        <x-eva-arrow-ios-forward-outline class="w-6 h-6 ml-2 group-hover:text-gray-700 arrow" />
                    </li>
                    <li
                        class="flex items-center justify-between text-xl text-gray-500 group hover:text-gray-700 cursor-pointer">
                        Jeans
                        <x-eva-arrow-ios-forward-outline class="w-6 h-6 ml-2 group-hover:text-gray-700 arrow" />
                    </li>
                </ul>
            </div>

            {{-- Price Range Section --}}
            <hr class="my-3 bg-slate-400">
            <div class="flex justify-between items-center px-5">
                <h1 class="text-2xl font-bold">Price</h1>
                <span><x-eva-arrow-ios-forward-outline class="w-6 h-6" /></span>
            </div>
            <div class="w-[90%] mx-auto">
                <input class="w-full accent-black p-4" type="range" min="0" max="500" step="10"
                    value="250">

            </div>

            {{-- Sizes Section --}}
            <hr class="my-3 bg-slate-400">
            <div class="flex justify-between items-center px-5">
                <h1 class="text-2xl font-bold">Sizes</h1>
                <span><x-eva-arrow-ios-forward-outline class="w-6 h-6" /></span>
            </div>
            <div class="flex flex-wrap  gap-2 items-center p-8">
                <h3
                    class="text-gray-500 text-lg bg-slate-200 px-6 py-2 rounded-full cursor-pointer
                    hover:bg-gray-900 hover:text-slate-100">
                    Small</h3>
                <h3
                    class="text-gray-500 text-lg bg-slate-200 px-6 py-2 rounded-full cursor-pointer
                    hover:bg-gray-900 hover:text-slate-100">
                    Medium</h3>
                <h3
                    class="text-gray-500 text-lg bg-slate-200 px-6 py-2 rounded-full cursor-pointer
                    hover:bg-gray-900 hover:text-slate-100">
                    Large</h3>
                <h3
                    class="text-gray-500 text-lg bg-slate-200 px-6 py-2 rounded-full cursor-pointer
                    hover:bg-gray-900 hover:text-slate-100">
                    X-Large</h3>
                <h3
                    class="text-gray-500 text-lg bg-slate-200 px-6 py-2 rounded-full cursor-pointer
                    hover:bg-gray-900 hover:text-slate-100">
                    2X-Large</h3>
                <h3
                    class="text-gray-500 text-lg bg-slate-200 px-6 py-2 rounded-full cursor-pointer
                    hover:bg-gray-900 hover:text-slate-100">
                    3X-Large</h3>
            </div>

            {{-- Dressing Style Section --}}
            <hr class="my-3 bg-slate-400">
            <div class="flex justify-between items-center px-5">
                <h1 class="text-2xl font-bold">Dressing Style</h1>
                <span><x-eva-arrow-ios-forward-outline class="w-6 h-6" /></span>
            </div>
            <div class="space-y-3 pt-5 px-5">
                <ul class="flex flex-col gap-4">
                    <li
                        class="flex items-center justify-between text-xl text-gray-500 group hover:text-gray-700 cursor-pointer">
                        Casual
                        <x-eva-arrow-ios-forward-outline class="w-6 h-6 ml-2 group-hover:text-gray-700" />
                    </li>
                    <li
                        class="flex items-center justify-between text-xl text-gray-500 group hover:text-gray-700 cursor-pointer">
                        StreetWear
                        <x-eva-arrow-ios-forward-outline class="w-6 h-6 ml-2 group-hover:text-gray-700" />
                    </li>
                    <li
                        class="flex items-center justify-between text-xl text-gray-500 group hover:text-gray-700 cursor-pointer">
                        Formal
                        <x-eva-arrow-ios-forward-outline class="w-6 h-6 ml-2 group-hover:text-gray-700" />
                    </li>
                    <li
                        class="flex items-center justify-between text-xl text-gray-500 group hover:text-gray-700 cursor-pointer">
                        Party
                        <x-eva-arrow-ios-forward-outline class="w-6 h-6 ml-2 group-hover:text-gray-700" />
                    </li>
                    <li
                        class="flex items-center justify-between text-xl text-gray-500 group hover:text-gray-700 cursor-pointer">
                        Gym
                        <x-eva-arrow-ios-forward-outline class="w-6 h-6 ml-2 group-hover:text-gray-700" />
                    </li>
                </ul>
            </div>

            {{-- Apply Filters Button - Only visible on mobile --}}
            <hr class="my-3 lg:hidden bg-slate-400">
            <div class="flex flex-col gap-5 mx-auto w-3/3">
                <button aria-label="Apply filters"
                    class="bg-black text-xl font-bold text-gray-200 capitalize py-3 px-8 rounded-full mt-5 lg:hidden hover:text-gray-100">
                    Apply filters
                </button>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Get DOM elements
            const filterSection = document.getElementById('filter-section');
            const filters = document.getElementById('filters');
            const closeFilters = document.getElementById('close-filters');
            document.addEventListener('click', (e) => {
                const arrows = document.querySelectorAll('.arrow');

                arrows.forEach(arrow => {
                    if (!arrow.closest('li').contains(e.target)) {
                        arrow.classList.remove('active');
                    }
                });
            });

            document.querySelectorAll('.arrow').forEach(arrow => {
                arrow.addEventListener('click', (e) => {
                    e.stopPropagation();
                    arrow.classList.toggle('active');
                });
            });

            if (filterSection && closeFilters) {
                filterSection.addEventListener('click', () => {
                    filters.classList.remove('translate-x-full');
                    filters.classList.add('translate-x-0');
                    document.body.style.overflow = 'hidden'; // Prevent background scrolling
                });

                // Close filter panel
                closeFilters.addEventListener('click', () => {
                    filters.classList.remove('translate-x-0');
                    filters.classList.add('translate-x-full');
                    document.body.style.overflow = ''; // Restore background scrolling
                });
            }

            // Handle screen resize events
            window.addEventListener('resize', () => {
                if (window.innerWidth >= 1024) { // lg breakpoint
                    // Reset mobile-specific styles when switching to desktop
                    filters.classList.remove('translate-x-full', 'translate-x-0');
                    document.body.style.overflow = '';
                }
            });
        });
    </script>
