@extends('layouts.app')

@section('content')
    <div class="bg-green-400 container mx-auto p-4 flex flex-col gap-5">
        <h1 class="uppercase text-3xl font-bold">your cart</h1>
        <div class="flex max-w-lg border border-gray-600 rounded-lg p-5">
            @for ($i = 0; $i < 3; $i++)
                <img src="{{ asset('images/sneakers.jpeg') }}" alt="" class="w-32 rounded-sm mr-5">
                <div class=" flex flex-col justify-between items-start py-5 gap-2 flex-nowrap">
                    <h2 class="text-2xl font-bold">Nike Sneakers cyan color</h2>
                    <p class="text-lg text-gray-900">Price: <span class="text-gray-500">100 $</span></p>
                    <p class="text-lg text-gray-900">Quantity: <span class="text-gray-500">2</span></p>
                    <p class="text-2xl font-bold text-gray-900">200 $</p>
                </div>
            @endfor
        </div>
    </div>
@endsection
