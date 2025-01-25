@extends('layouts.app')

@section('content')
    <div class="relative container mx-auto min-h-screen overflow-hidden lg:overflow-visible">
        <x-filter-section />
            <div class="flex-1">

                <h1 class="text-2xl font-bold capitalize hidden lg:block mb-6">casual</h1>


                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                    @for ($i = 0; $i < 6; $i++)
                        <x-card />
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
