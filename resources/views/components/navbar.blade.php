<nav class="bg-white shadow-md w-screen p-4 md:p-6 sticky top-0 z-[100]">
    <div class="container mx-auto px-5 flex items-center justify-between relative">
        <!-- Hamburger Menu & Brand -->
        <button class="lg:hidden pr-5 relative z-[102]" onclick="toggleNavLinks()">
            <x-css-menu class="w-7 h-7 text-gray-600 hover:text-gray-900 cursor-pointer" />
        </button>
        <div class="flex items-center space-x-4">
            <a href="#">
                <h1 class="text-xl font-extrabold md:text-2xl">SHOP CO.</h1>
            </a>
        </div>

        <!-- Navigation Links -->
        <div class="fixed inset-0 bg-black bg-opacity-30 hidden lg:flex lg:relative lg:bg-transparent z-[90]"
            id="nav-overlay" onclick="toggleNavLinks()"></div>

        <div class="fixed top-0 left-0 w-full h-1/3 shadow-md transform -translate-x-full transition-transform lg:h-auto lg:relative lg:translate-x-0 lg:shadow-none lg:w-auto lg:flex lg:items-center z-[101] bg-white"
            id="nav-links">
            <ul
                class="pt-12 pl-5 lg:pt-0 lg:flex lg:space-x-8 text-gray-600 w-full lg:w-auto lg:h-auto lg:bg-transparent">
                <li><a href="#" class="hover:text-gray-900 text-lg block p-4 lg:p-0">Home</a></li>
                <li><a href="#" class="hover:text-gray-900 text-lg block p-4 lg:p-0">New Arrivals</a></li>
                <li><a href="#" class="hover:text-gray-900 text-lg block p-4 lg:p-0">Products</a></li>
                <li><a href="#" class="hover:text-gray-900 text-lg block p-4 lg:p-0">Contact</a></li>
            </ul>
        </div>

        <!-- Search, Cart, and Profile -->
        <div class="flex items-center space-x-5">
            <div class="relative">
                <a href="#" class="lg:hidden">
                    <x-css-search class="w-7 h-7 text-gray-600 hover:text-gray-900" />
                </a>
                <div class="hidden lg:flex items-center bg-slate-200 rounded-full px-4 py-1">
                    <x-css-search class="w-5 h-5 text-gray-600 mr-2" />
                    <input type="text" placeholder="Search"
                        class="bg-transparent outline-none text-gray-600 placeholder-gray-400 w-40 lg:w-64" />
                </div>
            </div>
            <a href="#" class="w-6 h-6 md:w-8 md:h-8">
                <x-css-shopping-cart class="w-7 h-7 text-gray-600 hover:text-gray-900 md:w-8 md:h-8" />
            </a>
            <a href="#" class="w-6 h-6 md:w-8 md:h-8">
                <x-css-profile class="w-7 h-7 text-gray-600 hover:text-gray-900 md:w-8 md:h-8" />
            </a>
        </div>
    </div>
</nav>
<script>
    function toggleNavLinks() {
        const navLinks = document.getElementById('nav-links');
        const navOverlay = document.getElementById('nav-overlay');

        navLinks.classList.toggle('-translate-x-full');
        navOverlay.classList.toggle('hidden');
    }
</script>
