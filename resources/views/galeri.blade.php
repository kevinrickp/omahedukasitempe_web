@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
<h1 class="text-5xl sm:text-6xl font-extrabold mb-10 text-center text-amber-700 drop-shadow-md tracking-wide animate-fade-in-up">
    Galeri
</h1>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        @foreach($galeris as $g)
            <div class="bg-white rounded-lg shadow-md hover:shadow-rose-400/40 transition-shadow duration-300 transform hover:scale-105 overflow-hidden border border-gray-100 group">
                <img src="{{ asset('storage/' . $g->gambar) }}" alt="{{ $g->nama }}" class="w-full h-48 object-cover object-center rounded-t transition-transform duration-300 group-hover:scale-105">
                <div class="p-3">
                    <p class="text-center font-semibold text-gray-800">{{ $g->nama }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
