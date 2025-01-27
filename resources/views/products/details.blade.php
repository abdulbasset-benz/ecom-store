@extends('layouts.app')

@section('content')
    <div class="bg-gray-100">
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-wrap -mx-4">
                <!-- Product Images -->
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <img src="{{ asset('images/shoe1.jpg') }}"
                        alt="Product" class="w-full h-auto rounded-lg shadow-md mb-4" id="mainImage">
                    <div class="flex gap-4 py-4 justify-center overflow-x-auto">
                        <img src="{{ asset('images/shoe2.jpg') }}"
                            alt="Thumbnail 1"
                            class="w-24 h-24 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
                            onclick="changeImage(this.src)">
                        <img src="{{ asset('images/shoe3.jpg') }}"
                            alt="Thumbnail 2"
                            class="w-24 h-24 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
                            onclick="changeImage(this.src)">
                        <img src="{{ asset('images/shoe4.jpg') }}"
                            alt="Thumbnail 3"
                            class="w-24 h-24 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
                            onclick="changeImage(this.src)">
                        <img src="{{ asset('images/formal2.jpg') }}"
                            alt="Thumbnail 4"
                            class="w-24 h-24 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
                            onclick="changeImage(this.src)">
                    </div>
                </div>

                <!-- Product Details -->
                <div class="w-full md:w-1/2 px-4">
                    <h2 class="text-3xl font-bold mb-2">Premium Wireless Headphones</h2>
                    <p class="text-gray-600 mb-4">SKU: WH1000XM4</p>
                    <div class="mb-4">
                        <span class="text-2xl font-bold mr-2">$20,000</span>
                        <span class="text-gray-500 line-through">$22,000</span>
                    </div>
                    <div class="flex items-center mb-4">
                        @for ($i = 0; $i < 5; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6 text-yellow-500">
                                <path fill-rule="evenodd"
                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                    clip-rule="evenodd" />
                            </svg>
                        @endfor
                        <span class="ml-2 text-gray-600">4.5 (120 reviews)</span>
                    </div>
                    <p class="text-gray-700 mb-6">Experience premium sound quality and industry-leading noise cancellation
                        with these wireless headphones. Perfect for music lovers and frequent travelers.</p>

                    <div class="mb-6">
                        <label for="quantity" class="block text-sm font-medium text-gray-700 mb-1">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" min="1" value="1"
                            class="w-16 text-center rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>

                    <div class="flex space-x-4 mb-6">
                        <button
                            class="bg-indigo-600 flex gap-2 items-center text-white px-6 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218..." />
                            </svg>
                            Add to Cart
                        </button>
                        <button
                            class="bg-gray-200 flex gap-2 items-center text-gray-700 px-6 py-2 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9V3m0 0c5.523 0 10 4.477 10 10s-4.477 10-10 10-10-4.477-10-10S6.477 3 12 3zm0 6v6m0 3h.01" />
                            </svg>
                            Add to Wishlist
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function changeImage(src) {
            document.getElementById('mainImage').src = src;
        }
    </script>
@endsection
