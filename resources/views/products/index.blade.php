@extends('layouts.app')

@section('content')
    <div class="container p-5 mx-auto">
        {{-- header section --}}
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold capitalize">casual</h1>
            <span class="bg-gray-300 rounded-full p-2 cursor-pointer"><x-letsicon-filter class="w-7" />
            </span>
        </div>

        {{-- products show section --}}
        <div class="flex flex-wrap justify-center items-center gap-5 p-2">
            @for ($i = 0; $i < 6; $i++)
            <x-card />
            @endfor
        </div>
    </div>
@endsection
