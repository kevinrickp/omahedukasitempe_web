@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-extrabold mb-6 text-amber-500 tracking-wide">
      Program Edukasi
    </h1>

    <p class="mb-10 max-w-3xl text-lg italic font-semibold text-amber-700 bg-amber-100 bg-opacity-30 rounded-lg p-6 shadow-sm">
      Omah Edukasi Tempe hadir untuk <span class="text-amber-900 font-bold">mengembangkan tradisi tempe Indonesia</span> melalui berbagai program edukasi dan pemberdayaan masyarakat.  
      Kami berkomitmen untuk <span class="underline decoration-amber-500 decoration-2">melestarikan warisan budaya tempe</span>, memberdayakan pengrajin lokal, dan menginspirasi generasi muda tentang potensi inovatif tempe.  
      Dengan fokus pada <span class="text-amber-800 font-semibold">kualitas premium</span> dan produksi ramah lingkungan, kami ingin menjadikan tempe sebagai produk bernilai tinggi dan berdaya saing global, sambil mendukung keberlanjutan.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($edukasis as $edukasi)
            <div class="bg-white p-4 rounded shadow">
                <img src="{{ asset('storage/' . $edukasi->gambar) }}" alt="{{ $edukasi->judul }}" class="w-full h-48 object-cover mb-3 rounded">
                <h2 class="text-lg font-bold">{{ $edukasi->judul }}</h2>
                <p>{{ $edukasi->deskripsi }}</p>
                <p class="text-blue-600 font-semibold">Rp{{ number_format($edukasi->harga, 0, ',', '.') }}</p>
            </div>
        @endforeach
    </div>
@endsection
