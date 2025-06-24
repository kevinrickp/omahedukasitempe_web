@extends('layouts.app')

@section('content')
    <h1 class="text-5xl font-extrabold mb-8 text-amber-600 tracking-tight text-center">Galeri</h1>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        @foreach($galeris as $g)
            <div>
                <img src="{{ asset('storage/' . $g->gambar) }}" alt="{{ $g->nama }}" class="w-full h-48 object-cover rounded shadow">
                <p class="mt-2 text-center font-semibold text-gray-700">{{ $g->nama }}</p>
            </div>
        @endforeach
    </div>
@endsection
