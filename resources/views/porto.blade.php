@extends('layouts.app')

@section('title', 'Portofolio')

@section('content')
    <div class="h-screen text-white pt-28">
        <h1 class="text-6xl font-bold text-center">Check Out My Latest PortoFolio</h1>

        <div class="grid grid-cols-2 mt-12 gap-8">
            @for ($i=0; $i< 4; $i++)
            <button class="text-left hover:bg-slate-500 rounded-xl">
                <div class="m-4">
                    <div class=" bg-gray-400 h-80">
                        image preview
                    </div>
                    <div class="my-8">
                        <span class="text-2xl font-bold">Article Mobile Apps</span>
                        <span class="text-gray-400 block mt-2">Article Mobile Apps</span>
                    </div>
                </div>
            </button>
            @endfor
        </div>
    </div>
@endsection