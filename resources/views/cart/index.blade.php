@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="uppercase text-3xl font-bold">your cart</h1>
        <div class="flex w-full border border-gray-600 rounded-lg p-5">
            <img src="{{ asset('images/sneakers.jpeg') }}" alt="" class="w-32 rounded-sm mr-5">
            <div>
                <h2 class="text-2xl font-bold">Nike Sneakers cyan color</h2>
                <p class="text-lg">Price: $100</p>
                <p class="text-sm">Quantity: 1</p>
                <p class="text-sm">Total: $100</p>
            </div>
        </div>
    </div>
@endsection
