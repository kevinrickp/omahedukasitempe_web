@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
<h1 class="text-5xl sm:text-6xl font-extrabold mb-10 text-center text-amber-700 drop-shadow-md tracking-wide animate-fade-in-up">
    Produk Unggulan Kami
</h1>


    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach($produks as $produk)
            <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-100 group relative 
                        transition-all duration-500 ease-in-out transform hover:scale-105 hover:shadow-2xl">
                
                <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama }}"
                     class="w-full h-48 object-cover object-center rounded mb-4 
                            transition-transform duration-500 ease-in-out group-hover:scale-105">

                <h2 class="text-xl font-bold text-gray-800 mb-1 
                           transition-colors duration-500 ease-in-out group-hover:text-amber-600">
                    {{ $produk->nama }}
                </h2>

                <p class="text-gray-600 mb-3 line-clamp-3 
                          transition-opacity duration-500 ease-in-out group-hover:opacity-90">
                    {{ $produk->deskripsi }}
                </p>

                <p class="text-green-600 font-bold text-lg 
                          transition-transform duration-500 ease-in-out group-hover:scale-105">
                    Rp{{ number_format($produk->harga, 0, ',', '.') }}
                </p>
            </div>
        @endforeach
    </div>
</div>
@endsection