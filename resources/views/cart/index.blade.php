@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4 flex flex-col gap-5">
        <h1 class="uppercase text-3xl font-bold">your cart</h1>
        <!-- Wrapping all items in a single div -->
        <div class="flex flex-col max-w-full border-2 border-gray-300 rounded-lg p-5 gap-4">
            @for ($i = 0; $i < 4; $i++)
                <div class="flex items-start gap-5">
                    <img src="{{ asset('images/sneakers.jpeg') }}" alt="" class="w-32 rounded-sm">
                    <div class="flex flex-col justify-between gap-2">
                        <!-- Product Title -->
                        <h2 class="text-2xl font-bold flex items-center gap-2">
                            Nike Sneakers cyan
                            <span class="inline-block cursor-pointer text-center">
                                <x-css-trash class="text-red-600"/>
                            </span>
                        </h2>

                        <!-- Price -->
                        <p class="text-lg text-gray-900">
                            Price: <span class="text-gray-500">100 $</span>
                        </p>
                        <p class="text-lg text-gray-900">
                            Quantity: <span class="text-gray-500">2</span>
                        </p>

                        <!-- Total Price and Quantity Controls -->
                        <div class="flex items-center justify-between gap-4">
                            <p class="text-2xl font-bold text-gray-900">200 $</p>
                            <span class="flex items-center gap-2 bg-gray-400 px-5 py-2 rounded-lg">
                                <x-css-math-minus class="w-4 h-4 cursor-pointer"/>
                                <span>1</span>
                                <x-css-math-plus class="w-4 h-4 cursor-pointer"/>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Add <hr> after every item except the last one -->
                @if ($i < 3)
                    <hr class="border-gray-300">
                @endif
            @endfor
        </div>
    </div>
@endsection
