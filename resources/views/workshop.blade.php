@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Program Workshop</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($workshops as $workshop)
            <div class="bg-white p-4 rounded shadow">
                <img src="{{ asset('storage/' . $workshop->gambar) }}" alt="{{ $workshop->nama }}" class="w-full h-48 object-cover mb-3 rounded">
                <h2 class="text-lg font-bold">{{ $workshop->nama }}</h2>
                <p>{{ $workshop->deskripsi }}</p>
            </div>
        @endforeach
    </div>
@endsection