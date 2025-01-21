@extends('layouts.app')

@section('content')
    <div class="relative container p-5 mx-auto">

        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold capitalize">casual</h1>
            <span class="bg-gray-300 rounded-full p-2 cursor-pointer hover:bg-gray-400" id="filter-section">
                <x-letsicon-filter class="w-7" />
            </span>
        </div>

        {{-- Filters section --}}
        <div id="filters"
            class="fixed top-0 right-[-100%] w-full h-full bg-white shadow-lg transition-all duration-300 ease-in-out z-50 p-5">
            <h1 class="text-lg font-bold">Filters</h1>
            <button id="close-filters" class="mt-3 bg-red-500 text-white px-4 py-2 rounded">Close</button>
        </div>

        {{-- Products show section --}}
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-2">
            @for ($i = 0; $i < 6; $i++)
                <x-card />
            @endfor
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const filterSection = document.getElementById('filter-section');
            const filters = document.getElementById('filters');
            const closeFilters = document.getElementById('close-filters');


            filterSection.addEventListener('click', () => {
                filters.classList.toggle('right-[-100%]');
                filters.classList.add('right-0');
            });


            closeFilters.addEventListener('click', () => {
                filters.classList.remove('right-0');
                filters.classList.add('right-[-100%]');
            });
        });
    </script>
@endsection




