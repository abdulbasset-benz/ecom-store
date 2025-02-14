<x-app-layout>

    <div class="container grid grid-cols-1 md:grid-cols-2 mx-auto">
        <h1 class="text-4xl font-extrabold p-4 uppercase text-left col-span-1 md:col-span-2">Products Details</h1>

        {{-- Images Section --}}
        <div class="p-4 rounded-lg flex flex-col items-center lg:flex-row gap-4">
            <!-- Thumbnails (Left on large screens) -->
            <div class="flex lg:flex-col gap-4 order-2 lg:order-1">
                @foreach (['shoe1.jpg', 'shoe4.jpg', 'green.jpeg', 'shoe2.jpg'] as $image)
                    <img tabindex="0"
                        class="w-20 h-20 lg:w-25 lg:h-25 object-cover rounded-lg cursor-pointer focus:ring-2 focus:ring-pink-500 focus:outline-none thumbnail"
                        src="{{ asset("images/$image") }}" alt="Thumbnail">
                @endforeach
            </div>

            <!-- Main Image (Right on large screens) -->
            <div class="flex-1 order-1 lg:order-2 flex justify-center items-center">
                <img tabindex="0"
                    class="w-full h-auto lg:w-[500px] lg:h-[500px] object-cover rounded-lg focus:ring-4 focus:ring-pink-500 focus:outline-none mainImage"
                    src="{{ asset('images/black.jpeg') }}" alt="Main Image">
            </div>
        </div>


        {{-- Product Details Section --}}
        <div class="p-4 rounded-lg flex flex-col">
            <h2 class="text-4xl capitalize font-extrabold mb-4">One Life Graphic T-Shirt</h2>

            <div class="flex gap-3 items-center">
                <span class="text-2xl md:text-3xl font-bold">$260</span>
                <span class="text-2xl md:text-3xl font-bold line-through text-gray-400">$300</span>
                <span class="py-2 px-5 text-xl text-red-500 bg-red-200 rounded-full">-20%</span>
            </div>

            <hr class="border-gray-300 my-5">

            <p class=" text-gray-700 md:text-xl">
                This t-shirt has the best fabric in the market, with patents of the quality to
                make our clients get the best price, meeting the best quality.
            </p>

            <hr class="border-gray-300 my-5">

            <div>
                <h3 class="text-2xl font-semibold mb-2">Select a Color</h3>
                <div class="flex items-center gap-2">
                    <span
                        class="w-10 h-10 rounded-full bg-green-500 hover:ring-2 hover:ring-pink-500 hover:cursor-pointer"></span>
                    <span
                        class="w-10 h-10 rounded-full bg-blue-800 hover:ring-2 hover:ring-pink-500 hover:cursor-pointer"></span>
                    <span
                        class="w-10 h-10 rounded-full bg-yellow-900 hover:ring-2 hover:ring-pink-500 hover:cursor-pointer"></span>
                </div>
            </div>

            <hr class="border-gray-300 my-5">

            {{-- Size Options --}}
            <div class="flex gap-2 flex-wrap items-center">
                @foreach (['Small', 'Medium', 'Large', 'X-Large'] as $size)
                    <h3
                        class="text-gray-500 text-lg bg-slate-200 px-6 py-2 rounded-full cursor-pointer
                        hover:bg-gray-900 hover:text-slate-100">
                        {{ $size }}
                    </h3>
                @endforeach
            </div>

            <hr class="border-gray-300 my-5">J

            {{-- Quantity & Add to Cart --}}
            <div class=" flex items-center gap-4">

                <x-quantity-button />


                <!-- Add to Cart Button -->
                <button
                    class="bg-black w-full py-3 text-slate-50 rounded-full font-bold uppercase hover:text-indigo-600 hover:bg-indigo-200">
                    Add to Cart
                </button>
            </div>

        </div>
    </div>

    <script>
        const thumbnails = document.querySelectorAll('.thumbnail');
        const mainImage = document.querySelector('.mainImage');

        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', () => {
                let temp = mainImage.src;
                mainImage.src = thumbnail.src;
                thumbnail.src = temp;
            })
        });
    </script>
</x-app-layout>
