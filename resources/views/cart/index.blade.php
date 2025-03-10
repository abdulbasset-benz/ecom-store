<x-app-layout>
<div class="md:flex md:justify-center md:items-start md:h-screen gap-4 container mx-auto p-4">
    <!-- Cart Section -->
    <div class="container mx-auto p-4 flex flex-col gap-5 md:w-2/3">
        <div>
            <h1 class="uppercase text-3xl font-bold">your cart</h1>
        </div>

        <!-- Wrapping all items in a single div -->
        <div class="flex flex-col max-w-full border-2 border-gray-300 rounded-lg p-5 gap-4">
            @for ($i = 0; $i < 4; $i++)
                <div class="flex items-start gap-5">
                    <img src="{{ asset('images/sneakers.jpeg') }}" alt="" class="w-32 rounded-sm">
                    <div class="flex flex-col justify-between w-full gap-2">
                        <!-- Product Title -->
                        <h2 class="text-2xl font-bold flex justify-between items-center gap-2">
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
                            <x-quantity-button />

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

    {{-- Order Summary --}}
    <div class="container mx-auto p-4 flex flex-col gap-5 md:w-1/3 md:self-start mt-[3.5rem] md:sticky md:top-32">
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
            <div class="flex flex-col gap-5 mx-auto">
                <button class="bg-black text-xl font-bold text-gray-200 capitalize py-3 px-8 rounded-full mt-5 hover:text-gray-100">Confirm your order</button>
            </div>
        </div>
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
</x-app-layout>
