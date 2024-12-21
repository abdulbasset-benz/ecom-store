<nav class="bg-white shadow-md w-full p-4 md:p-6 mx-auto sticky top-0 z-20">
    <div class="container mx-auto flex items-center justify-between md:w-2xl">
        <!-- Left Section: Menu and Logo -->
        <div class="flex items-center space-x-4">
            <!-- Menu Icon -->
            <a href="" class="lg:hidden">
                <x-css-menu class="w-7 h-7 text-gray-600 hover:text-gray-900" />
            </a>

            <!-- Logo -->
            <a href="">
                <h1 class="text-xl font-extrabold md:text-2xl">SHOP CO.</h1>
            </a>
        </div>

        <!-- Center Section: Navigation Links (visible on medium and larger screens) -->
        <div class="hidden lg:flex flex-grow justify-center">
            <ul class="flex space-x-8 text-gray-600">
                <li><a href="" class="hover:text-gray-900 text-lg">Home</a></li>
                <li><a href="" class="hover:text-gray-900 text-lg">New Arrivals</a></li>
                <li><a href="" class="hover:text-gray-900 text-lg">Products</a></li>
                <li><a href="" class="hover:text-gray-900 text-lg">Contact</a></li>
            </ul>
        </div>

        <!-- Right Section: Search, Cart, and Profile -->
        <div class="flex items-center space-x-5">
            <!-- Search Icon or Bar -->
            <div class="relative">
                <!-- Search Icon for small screens -->
                <a href="" class="lg:hidden">
                    <x-css-search class="w-7 h-7 text-gray-600 hover:text-gray-900" />
                </a>

                <!-- Search Bar for medium and large screens -->
                <div class="hidden lg:flex items-center bg-slate-200 rounded-full px-4 py-1">
                    <x-css-search class="w-5 h-5 text-gray-600 mr-2" />
                    <input type="text" placeholder="Search"
                        class="bg-transparent outline-none text-gray-600 placeholder-gray-400 w-40 lg:w-64" />
                </div>
            </div>

            <!-- Cart Icon -->
            <a href="" class="w-6 h-6 md:w-8 md:h-8">
                <x-css-shopping-cart class="w-7 h-7 text-gray-600 hover:text-gray-900 md:w-8 md:h-8" />
            </a>

            <!-- Profile Icon -->
            <a href="" class="w-6 h-6 md:w-8 md:h-8">
                <x-css-profile class="w-7 h-7 text-gray-600 hover:text-gray-900 md:w-8 md:h-8" />
            </a>
        </div>
    </div>
</nav>
