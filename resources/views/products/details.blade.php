@extends('layouts.app')

@section('content')
    <div class="container grid grid-cols-1 p-4">

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
        </div>

    </div>


    <script></script>
@endsection
