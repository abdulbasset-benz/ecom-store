<div class="p-3 md:p-4">
    <div class="max-w-sm mx-auto">
        <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden">
            {{-- Image Container - Made taller with min-height utilities --}}
            <div class="relative min-w-[250px] min-h-[250px] md:min-h-[300px] bg-gray-100">
                <img
                    src="{{ asset('images/shoe4.jpg') }}"
                    alt="Nike Air Jordan"
                    class="absolute inset-0 w-full h-full object-contain md:object-cover transform hover:scale-105 transition-transform duration-300"
                >
            </div>

            {{-- Product Info --}}
            <div class="p-4">
                <h2 class="text-lg md:text-xl font-bold text-gray-800 truncate">
                    Nike Air Jordan
                </h2>
                <p class="text-blue-600 font-semibold mt-2">
                    $233 USD
                </p>
            </div>

            {{-- Button Container --}}
            <div class="px-4 pb-4">
                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Buy Now
                </button>
            </div>
        </div>
    </div>
</div>


