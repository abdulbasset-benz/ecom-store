@extends('layouts.app')

@section('content')
    <div class="container grid grid-cols-1 p-4">
        <h1 class="text-4xl font-extrabold p-4 uppercase text-center">Products Details</h1>
        {{-- images layout --}}
        <div class="max-w-sm mx-auto">
            <img tabindex="0" class="w-full rounded-lg focus:ring-4 focus:ring-pink-500 focus:outline-none"
                src="{{ asset('images/black.jpeg') }}" alt="">
            <div class="grid grid-cols-4 gap-4 mt-4 px-1">
                <img tabindex="0"
                    class="w-full h-auto object-fill rounded-lg focus:ring-2 focus:ring-pink-500 focus:outline-none"
                    src="{{ asset('images/shoe1.jpg') }}" alt="">
                <img tabindex="0"
                    class="w-full h-auto object-fill rounded-lg focus:ring-2 focus:ring-pink-500 focus:outline-none"
                    src="{{ asset('images/shoe4.jpg') }}" alt="">
                <img tabindex="0"
                    class="w-full h-auto object-fill rounded-lg focus:ring-2 focus:ring-pink-500 focus:outline-none"
                    src="{{ asset('images/green.jpeg') }}" alt="">
                <img tabindex="0"
                    class="w-full h-auto object-fill rounded-lg focus:ring-2 focus:ring-pink-500 focus:outline-none"
                    src="{{ asset('images/shoe2.jpg') }}" alt="">
            </div>


            {{-- product details --}}
            <div class="pt-5">
                <h2 class="text-left text-4xl capitalize font-extrabold">one life graphic t-shirt</h2>
                <div class="flex gap-3 items-center mt-4">
                    <span class="text-2xl font-bold">$260</span>
                    <span class="text-2xl font-bold line-through text-gray-400">$300</span>
                    <span class="py-2 px-5 text-xl text-red-500 bg-red-200 rounded-full">-20%</span>
                </div>
                <div class="mt-4">
                    <p class="text-gray-500 ">This t-shirt has the best fabric in the market, with patents of the quality to
                        make our clients gets the best price, meeting the best quality.</p>
                </div>
            </div>
        </div>

        <hr class="my-4 border border-gray-300">

        <div class="flex flex-wrap  gap-2 items-center p-2">
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


        </div>

        <hr class="my-4 border border-gray-300">
        <div class="grid grid-cols-3 gap-4">
            <span class="flex items-center gap-4 bg-gray-300 px-5 py-2 rounded-full">
                <x-css-math-minus class="cursor-pointer hover:text-red-500 minus" />
                <span class="quantity text-xl font-bold">1</span>
                <x-css-math-plus class="cursor-pointer hover:text-green-500 plus" />
            </span>
            <button
                class="bg-black text-slate-50 rounded-full col-span-2 font-bold uppercase hover:text-indigo-600 hover:bg-indigo-200">add
                to cart</button>
        </div>
    </div>


    <script></script>
@endsection
