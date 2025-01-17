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
                                <x-css-trash class="text-red-600" />
                            </span>
                        </h2>

                        <!-- Price -->
                        <p class="text-lg text-gray-900">
                            Price: <span class="text-gray-500">200 $</span>
                        </p>
                        <p class="text-lg text-gray-900">
                            Quantity: <span class="text-gray-500 qty">1</span>
                        </p>

                        <!-- Total Price and Quantity Controls -->
                        <div class="flex items-center justify-between gap-4">
                            <p class="text-2xl font-bold text-gray-900 total"> $</p>
                            <span class="flex items-center gap-4 bg-gray-300 px-5 py-2 rounded-full">
                                <x-css-math-minus class="cursor-pointer minus" />
                                <span class="quantity text-xl font-bold">1</span>
                                <x-css-math-plus class="cursor-pointer plus" />
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

    {{-- order summary --}}
    <div class="container mx-auto p-4 flex flex-col gap-5">
        <div class="flex flex-col max-w-full border-2 border-gray-300 rounded-lg p-5 gap-4">
            <h1 class="text-2xl capitalize font-bold">order summary</h1>
            <div class="flex justify-between">
                <p class="text-xl text-gray-400 capitalize">subtotal</p>
                <span class="text-xl font-bold text-black">565 $</span>
            </div>
            <div class="flex justify-between">
                <p class="text-xl text-red-600 capitalize">discount (20%)</p>
                <span class="text-xl font-bold text-red-600">-113 $</span>
            </div>
            <div class="flex justify-between">
                <p class="text-xl text-gray-400 capitalize">delivery fee</p>
                <span class="text-xl font-bold text-black">15 $</span>
            </div>
            <hr class="border-gray-300">
            <div class="flex justify-between">
                <p class="text-xl text-gray-600 font-bold capitalize">total</p>
                <span class="text-xl font-bold">467 $</span>
            </div>
            <button class="bg-black text-xl font-bold text-gray-200 capitalize py-5 rounded-full mt-5 hover:text-gray-100">Confirm your order</button>
        </div>
    </div>
    <script>
        const plusButtons = document.querySelectorAll('.plus');
        const minusButtons = document.querySelectorAll('.minus');
        const quantities = document.querySelectorAll('.quantity');
        const totals = document.querySelectorAll('.total');
        const qty = document.querySelectorAll('.qty');

        plusButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                quantities[index].innerText = parseInt(quantities[index].innerText) + 1;
                totals[index].innerText = parseInt(quantities[index].innerText) * 200 + ' $';
            });
        });

        minusButtons.forEach((button, index) => {
            button.addEventListener('click', () => {
                if (parseInt(quantities[index].innerText) > 1) {
                    quantities[index].innerText = parseInt(quantities[index].innerText) - 1;
                    totals[index].innerText = parseInt(quantities[index].innerText) * 200 + ' $';
                }
            });
        });
    </script>
@endsection
