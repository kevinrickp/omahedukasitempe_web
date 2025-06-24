@extends('layouts.app')

@section('content')
    <h1 class="text-5xl font-extrabold mb-8 text-amber-600 tracking-tight text-center">Produk Kami</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($produks as $produk)
            <div class="bg-white p-4 rounded shadow">
                <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama }}" class="w-full h-48 object-cover mb-3 rounded">
                <h2 class="text-lg font-bold">{{ $produk->nama }}</h2>
                <p>{{ $produk->deskripsi }}</p>
                <p class="text-green-600 font-semibold">Rp{{ number_format($produk->harga, 0, ',', '.') }}</p>
            </div>
        @endforeach
    </div>
@endsection
