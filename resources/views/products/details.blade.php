@extends('layouts.app')

@section('content')
    <div class="bg-slate-300 w-full h-1/2 p-5 rounded-lg flex items-center justify-center flex-col">
        <div class="w-full h-1/2 bg-slate-100 rounded-lg m-2">
            <img class="h-full w-full" src="{{ asset('images/shirt.png') }}" alt="">
        </div>

        <div class="flex justify-between items-center w-full gap-2">
            <img class="size-32 rounded-md cursor-pointer " src="{{ asset('images/casual1.jpg') }}" alt="">
            <img class="size-32 rounded-md cursor-pointer " src="{{ asset('images/black.jpeg') }}" alt="">
            <img class="size-32 rounded-md cursor-pointer " src="{{ asset('images/formal.jpeg') }}" alt="">
        </div>
    </div>

    <script></script>
@endsection
