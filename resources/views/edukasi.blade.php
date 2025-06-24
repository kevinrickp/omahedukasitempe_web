@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h1 class="text-5xl font-extrabold mb-8 text-amber-600 tracking-tight text-center">
        Program Edukasi
    </h1>

    {{-- Bagian Penjelasan Program Edukasi yang Lebih Baik --}}
<div class="relative bg-gradient-to-br from-amber-50 to-orange-100 rounded-3xl p-12 mb-16 shadow-2xl max-w-5xl mx-auto overflow-hidden border border-amber-200">
    {{-- Efek Latar Belakang Geometris (Opsional, perlu SVG/gambar) atau Pola --}}
    {{-- Contoh: Jika ada SVG atau PNG pola tempe yang lebih abstrak, bisa digunakan di sini --}}
    <div class="absolute inset-0 opacity-15" style="background-image: url('{{ asset('images/abstract-tempe-pattern.png') }}'); background-size: cover; background-repeat: no-repeat; background-position: center;"></div>
    
    {{-- Efek Garis atau Bentuk Abstrak di Pojok --}}
    <div class="absolute top-0 left-0 w-24 h-24 bg-amber-200 rounded-br-full opacity-30 blur-sm"></div>
    <div class="absolute bottom-0 right-0 w-24 h-24 bg-orange-200 rounded-tl-full opacity-30 blur-sm"></div>

    <div class="relative z-10 text-gray-800"> {{-- Pastikan teks di atas efek latar belakang --}}
        <p class="text-3xl md:text-4xl font-extrabold text-amber-900 leading-tight text-center mb-8 drop-shadow-md">
            Selamat datang di <span class="text-orange-600">Omah Edukasi Tempe</span>!
        </p>
        <p class="text-lg md:text-xl text-amber-800 leading-relaxed text-center max-w-3xl mx-auto mb-6 font-medium">
            Kami hadir dengan visi mulia untuk <span class="font-extrabold text-amber-900">mengembangkan dan melestarikan tradisi tempe Indonesia</span> yang kaya. Melalui serangkaian program edukasi dan pemberdayaan masyarakat, kami berkomitmen untuk menjaga warisan budaya kuliner ini tetap hidup dan relevan.
        </p>
        <p class="text-lg md:text-xl text-amber-800 leading-relaxed text-center max-w-3xl mx-auto">
            Fokus kami tidak hanya pada pelestarian, tetapi juga pada <span class="font-extrabold text-amber-900">pemberdayaan pengrajin lokal</span> serta menginspirasi generasi muda tentang <span class="font-extrabold text-amber-900">potensi inovatif tempe</span>. Dengan mengedepankan <span class="underline decoration-orange-600 decoration-2 font-bold">kualitas premium</span> dan produksi yang ramah lingkungan, kami bertekad menjadikan tempe sebagai produk unggulan dengan daya saing global, sambil selalu mendukung keberlanjutan.
        </p>
    </div>
</div>
    {{-- Akhir Bagian Penjelasan Program Edukasi --}}

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($edukasis as $edukasi)
            <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-gray-100 group relative"> {{-- Tambahkan 'group relative' --}}
                <img src="{{ asset('storage/' . $edukasi->gambar) }}" alt="{{ $edukasi->judul }}" class="w-full h-60 object-cover object-center rounded-t-lg transition-transform duration-300 group-hover:scale-105">
                
                {{-- Overlay Deskripsi Saat Hover --}}
                <div class="absolute inset-0 bg-black bg-opacity-70 flex items-center justify-center p-6 text-white text-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg">
                    <p class="text-base leading-relaxed">
                        {{ $edukasi->deskripsi }}
                    </p>
                </div>
                {{-- Akhir Overlay Deskripsi --}}

                <div class="p-6">
                    {{-- FIX: Changed 'truncate' to 'line-clamp-2' to allow title to wrap to two lines --}}
                    <h2 class="text-2xl font-bold text-gray-800 mb-3 line-clamp-2">{{ $edukasi->judul }}</h2>
                    <div class="flex justify-between items-center mt-5">
                        <p class="text-blue-700 font-extrabold text-xl">Rp{{ number_format($edukasi->harga, 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection