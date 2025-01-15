<nav class="bg-white shadow-md w-screen p-4 md:p-6 sticky top-0 z-[100]">
    <div class="container mx-auto px-5 flex items-center justify-between relative">
        <!-- Left section: Hamburger Menu & Brand -->
        <div class="flex items-center space-x-4">
            <button class="group lg:hidden relative z-[102]">
                <div class="flex flex-col gap-1">
                    <span class="h-1 w-6 rounded-full bg-slate-400 transition"></span>
                    <span class="h-1 w-8 rounded-full bg-red-400 transition "></span>
                    <span class="h-1 w-6 rounded-full bg-slate-400 transition"></span>
                </div>
            </button>
            <a href="#">
                <h1 class="text-xl font-extrabold md:text-2xl">SHOP CO.</h1>
            </a>
        </div>

        <!-- Center section: Navigation Links -->
        <div class="fixed inset-0 bg-black bg-opacity-30 hidden lg:hidden z-[90]" id="nav-overlay"
            onclick="toggleNavLinks()"></div>
        <div class="fixed top-0 left-0 w-full h-auto bg-white transform -translate-x-full transition-transform lg:static lg:h-auto lg:translate-x-0 lg:bg-transparent lg:w-auto lg:flex lg:items-center z-[101]"
            id="nav-links">
            <ul class="pt-20 px-5 lg:pt-0 lg:px-0 lg:flex lg:space-x-8 text-gray-600 capitalize">
                <li><a href="#" class="hover:text-gray-900 text-lg block p-4 lg:p-0">Home</a></li>
                <li><a href="#" class="hover:text-gray-900 text-lg block p-4 lg:p-0">New Arrivals</a></li>
                <li><a href="#" class="hover:text-gray-900 text-lg block p-4 lg:p-0">Products</a></li>
                <li><a href="#" class="hover:text-gray-900 text-lg block p-4 lg:p-0">Contact</a></li>
            </ul>
        </div>


        <!-- Right section: Search, Cart, and Profile -->
        <div class="flex items-center space-x-4">
            <!-- Search -->


            <div class="relative flex items-center">
                <div
                    class="search-container fixed inset-0 h-14 bg-white p-4 translate-x-full transition-transform duration-300 z-[200] lg:relative lg:inset-auto lg:p-0 lg:transform-none flex items-center">
                    <input type="search" class="w-full px-6 py-2 bg-gray-100 border border-gray-200 rounded-full "
                        placeholder="Search">
                    <x-feathericon-x class="w-7 h-7 cursor-pointer cursor-icon md:hidden" />
                </div>
            </div>

            <!-- Cart and Profile -->
            <button class="search">
                <x-css-search class="w-7 h-7 text-gray-600 hover:text-gray-900 md:w-8 md:h-8" />
            </button>

            <a href="/cart-index" class="block">
                <x-css-shopping-cart class="w-7 h-7 text-gray-600 hover:text-gray-900 md:w-8 md:h-8" />
            </a>
            <a href="#" class="block">
                <x-css-profile class="w-7 h-7 text-gray-600 hover:text-gray-900 md:w-8 md:h-8" />
            </a>
        </div>

    </div>
    </div>
</nav>

<script>
    // Selecting elements
    const btn = document.querySelector('button');
    const spans = document.querySelectorAll('span');
    const navLinks = document.getElementById('nav-links');
    const navOverlay = document.getElementById('nav-overlay');
    const searchIcon = document.querySelector('.search');
    const searchContainer = document.querySelector('.search-container');
    const closeSearchIcon = document.querySelector('.cursor-icon');

    btn.addEventListener('click', toggleNavLinks);

    searchIcon.addEventListener('click', () => {
        searchContainer.classList.add('active');
    });
    closeSearchIcon.addEventListener('click', () => {
        searchContainer.classList.remove('active');
    });
    let isMenuOpen = false;

    function toggleSpanAnimation() {
        isMenuOpen = !isMenuOpen;

        spans.forEach((span, index) => {
            if (isMenuOpen) {
                if (index === 0) {
                    span.style.transform = 'translateY(8px) rotate(45deg)';
                } else if (index === 1) {
                    span.style.transform = 'scale(0)';
                } else if (index === 2) {
                    span.style.transform = 'translateY(-8px) rotate(-45deg)';
                }
            } else {
                span.style.transform = 'none';
            }
        });

    }

    // Function to toggle navigation links
    function toggleNavLinks() {
        navLinks.classList.toggle('-translate-x-full');
        navOverlay.classList.toggle('hidden');
        toggleSpanAnimation();
    }
</script>
