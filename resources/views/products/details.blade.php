@extends('layouts.app')

@section('content')
    <div class="container grid grid-cols-1 md:grid-cols-2 gap-6 p-4 bg-green-400">
        <h1 class="text-4xl font-extrabold p-4 uppercase text-center col-span-1 md:col-span-2">Products Details</h1>

        {{-- Images Section --}}
        <div class=" p-4 rounded-lg">
            <img tabindex="0" class="w-full h-auto md:w-1/2 md:mx-auto rounded-lg focus:ring-4 focus:ring-pink-500 focus:outline-none"
                src="{{ asset('images/black.jpeg') }}" alt="Main Image">

            <div class="grid grid-cols-4 gap-1 mt-4">
                @foreach (['shoe1.jpg', 'shoe4.jpg', 'green.jpeg', 'shoe2.jpg'] as $image)
                    <img tabindex="0"
                        class="size-32 h-auto object-cover rounded-lg focus:ring-2 focus:ring-pink-500 focus:outline-none"
                        src="{{ asset("images/$image") }}" alt="Thumbnail">
                @endforeach
            </div>
        </div>

        {{-- Product Details Section --}}
        <div class="p-4 rounded-lg flex flex-col justify-between">
            <h2 class="text-4xl capitalize font-extrabold mb-4">One Life Graphic T-Shirt</h2>

            <div class="flex gap-3 items-center">
                <span class="text-2xl font-bold">$260</span>
                <span class="text-2xl font-bold line-through text-gray-400">$300</span>
                <span class="py-2 px-5 text-xl text-red-500 bg-red-200 rounded-full">-20%</span>
            </div>

            <p class="mt-4 text-gray-700">
                This t-shirt has the best fabric in the market, with patents of the quality to
                make our clients get the best price, meeting the best quality.
            </p>

            {{-- Size Options --}}
            <div class="flex gap-2 items-center mt-6">
                @foreach (['Small', 'Medium', 'Large', 'X-Large'] as $size)
                    <h3 class="text-gray-500 text-lg bg-slate-200 px-6 py-2 rounded-full cursor-pointer
                        hover:bg-gray-900 hover:text-slate-100">
                        {{ $size }}
                    </h3>
                @endforeach
            </div>

            {{-- Quantity & Add to Cart --}}
            <div class="grid grid-cols-3 gap-4 mt-6">
                <span class="flex items-center gap-4 bg-gray-300 px-5 py-2 rounded-full">
                    <x-css-math-minus class="cursor-pointer hover:text-red-500 minus" />
                    <span class="quantity text-xl font-bold">1</span>
                    <x-css-math-plus class="cursor-pointer hover:text-green-500 plus" />
                </span>
                <button
                    class="bg-black text-slate-50 rounded-full col-span-2 font-bold uppercase hover:text-indigo-600 hover:bg-indigo-200">
                    Add to Cart
                </button>
            </div>
        </div>
    </div>
@endsection
