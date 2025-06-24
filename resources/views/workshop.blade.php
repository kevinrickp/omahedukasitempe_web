@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h1 class="text-5xl font-extrabold mb-8 text-amber-600 tracking-tight text-center">
        Program Workshop
    </h1>

    {{-- Bagian Penjelasan Program Workshop --}}
<div class="relative bg-gradient-to-br from-amber-50 to-orange-100 rounded-3xl p-12 mb-16 shadow-2xl max-w-5xl mx-auto overflow-hidden border border-amber-200">
    {{-- Background efek (opsional) --}}
    <div class="absolute inset-0 opacity-15" style="background-image: url('{{ asset('images/abstract-tempe-pattern.png') }}'); background-size: cover; background-repeat: no-repeat; background-position: center;"></div>
    <div class="absolute top-0 left-0 w-24 h-24 bg-amber-200 rounded-br-full opacity-30 blur-sm"></div>
    <div class="absolute bottom-0 right-0 w-24 h-24 bg-orange-200 rounded-tl-full opacity-30 blur-sm"></div>

    <div class="relative z-10 text-gray-800">
        <p class="text-3xl md:text-4xl font-extrabold text-amber-900 leading-tight text-center mb-8 drop-shadow-md">
            Bergabunglah dalam <span class="text-orange-600">Workshop Tempe Kreatif</span> kami!
        </p>
        
        {{-- Penjelasan Baru --}}
        <p class="text-lg md:text-xl text-amber-800 leading-relaxed text-center max-w-3xl mx-auto mb-6 font-medium">
            Program ini dirancang untuk <span class="font-extrabold text-amber-900">mendukung pengembangan industri tempe tradisional</span> melalui pendekatan edukatif, pemberdayaan komunitas, dan promosi budaya. Dengan melibatkan berbagai lapisan masyarakat, program ini bertujuan meningkatkan kualitas produksi, memperluas wawasan bisnis, serta memperkenalkan tempe sebagai bagian penting dari kekayaan kuliner Indonesia.
        </p>

        <p class="text-lg md:text-xl text-amber-800 leading-relaxed text-center max-w-3xl mx-auto">
            Selain itu, peserta akan belajar secara langsung proses pembuatan tempe dari hulu ke hilir, serta mendapatkan bekal pengetahuan tentang <span class="font-extrabold text-amber-900">kewirausahaan berbasis pangan lokal</span>. Dengan pendekatan interaktif dan inspiratif, workshop ini menjadi wadah ideal untuk <span class="underline decoration-orange-600 decoration-2 font-bold">mengasah keterampilan dan memperluas jejaring</span>.
        </p>
    </div>
</div>
{{-- Akhir Penjelasan --}}


    {{-- Daftar Workshop --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach($workshops as $workshop)
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-gray-100 group relative">
                <img src="{{ asset('storage/' . $workshop->gambar) }}" alt="{{ $workshop->nama }}" class="w-full h-60 object-cover object-center rounded-t-lg transition-transform duration-300 group-hover:scale-105 mb-3">
                
                {{-- Overlay jika dibutuhkan --}}
                {{-- 
                <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center p-6 text-white text-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg">
                    <p class="text-base leading-relaxed">
                        {{ $workshop->deskripsi }}
                    </p>
                </div>
                --}}

                <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $workshop->nama }}</h2>
                <p class="text-gray-600">{{ $workshop->deskripsi }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
