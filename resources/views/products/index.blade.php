@extends('layouts.app')

@section('content')
    <div class="container p-5 mx-auto">

        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold capitalize">casual</h1>
            <span class="bg-gray-300 rounded-full p-2 cursor-pointer hover:bg-gray-400"><x-letsicon-filter class="w-7" />
            </span>
        </div>

        {{-- products show section --}}
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-2">
            @for ($i = 0; $i < 6; $i++)
            <x-card />
            @endfor
        </div>
    </div>
@endsection
