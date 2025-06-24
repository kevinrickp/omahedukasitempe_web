@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-br from-amber-50 to-amber-100 py-16">
  <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-12 space-y-20 sm:space-y-24">

    {{-- Hero Section --}}
    <section class="bg-white rounded-3xl shadow-xl overflow-hidden transform transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl">
      <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center p-8 md:p-14">

        {{-- Left Side: Text --}}
        <div class="order-2 md:order-1">
          <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight mb-6 sm:mb-8 animate-fade-in-down">
            Selamat Datang di <br><span class="text-amber-600">Omah Edukasi Tempe</span>
          </h1>
          <p class="text-lg sm:text-xl text-gray-700 leading-relaxed text-justify mb-6 animate-fade-in-left">
            <strong>Desa Parerejo</strong>, Kecamatan Purwodadi, Kabupaten Pasuruan telah lama dikenal sebagai sentra penghasil tempe tradisional berkualitas tinggi.
          </p>
          <p class="text-lg sm:text-xl text-gray-700 leading-relaxed text-justify animate-fade-in-left delay-100">
            Dalam menghadapi tantangan zaman, <strong>Mukhamad Irfan</strong> hadir dengan inovasi tempe premium <strong>"Zico"</strong> yang menggabungkan kearifan lokal dan teknologi modern.
          </p>
        </div>

        {{-- Right Side: Image --}}
        <div class="order-1 md:order-2 flex justify-center items-center animate-fade-in-right">
          <img src="{{ asset('images/tempe-illustration.png') }}" alt="Ilustrasi Tempe" class="w-full max-w-md lg:max-w-none h-auto rounded-2xl shadow-lg ring-4 ring-amber-200 object-cover transform rotate-3 hover:rotate-0 transition-transform duration-300 ease-in-out">
        </div>
      </div>
    </section>

    {{-- Misi Kami --}}
    <section class="py-5">
      <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-900 mb-4 animate-fade-in">Misi Kami</h2>
      <div class="bg-white p-8 rounded-2xl shadow-lg border border-amber-100 animate-fade-in delay-200">
        <p class="text-lg sm:text-xl text-gray-700 leading-relaxed text-justify mb-4">
          <strong>Omah Edukasi Tempe</strong> bukan hanya pusat produksi tempe unggulan, melainkan juga tempat edukasi masyarakat dan wisatawan.
        </p>
        <p class="text-lg sm:text-xl text-gray-700 leading-relaxed text-justify">
          Tempat ini menjadi saksi perpaduan <strong>tradisi dan inovasi</strong>, serta komitmen terhadap <strong>kelestarian budaya</strong> dan <strong>ekonomi lokal</strong>.
        </p>
      </div>
    </section>

  
    {{-- Produk Unggulan --}}
    <section class="py-3">
      <h2 class="text-3xl font-bold mb-6 border-b-4 border-amber-400 inline-block pb-1">Produk Unggulan</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach($produk as $p)
        <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-amber-400/40 transition-shadow duration-300">
          @if($p->gambar)
            <img src="{{ asset('storage/' . $p->gambar) }}" alt="{{ $p->nama }}" class="w-full h-48 object-cover rounded mb-4">
          @endif
          <h3 class="text-xl font-semibold mb-2">{{ $p->nama }}</h3>
          <p class="text-gray-700 mb-4 line-clamp-3">{{ $p->deskripsi }}</p>
          <p class="text-green-700 font-bold text-lg">Rp{{ number_format($p->harga, 0, ',', '.') }}</p>
        </div>
        @endforeach
      </div>
    </section>

    {{-- CTA --}}
    <section class="text-center">
      <a href="{{ route('edukasi') }}" class="inline-block bg-amber-500 hover:bg-amber-600 text-white font-semibold px-10 py-5 rounded-full text-lg sm:text-xl shadow-lg transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-amber-300 animate-fade-in delay-300">
        Jelajahi Edukasi Tempe Sekarang! &rarr;
      </a>
    </section>

    {{-- Program Edukasi --}}
    <section class="py-3">
      <h2 class="text-3xl font-bold mb-6 border-b-4 border-blue-600 inline-block pb-1">Program Edukasi</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach($edukasi as $e)
        <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-blue-600/40 transition-shadow duration-300">
          @if($e->gambar)
            <img src="{{ asset('storage/' . $e->gambar) }}" alt="{{ $e->judul }}" class="w-full h-48 object-cover rounded mb-4">
          @endif
          <h3 class="text-xl font-semibold mb-2">{{ $e->judul }}</h3>
          <p class="text-gray-700 mb-4 line-clamp-3">{{ $e->deskripsi }}</p>
          <p class="text-blue-700 font-bold text-lg">Rp{{ number_format($e->harga, 0, ',', '.') }}</p>
        </div>
        @endforeach
      </div>
    </section>

    {{-- Testimoni --}}
    <section class="py-3">
      <h2 class="text-3xl font-bold mb-6 border-b-4 border-rose-500 inline-block pb-1">Testimoni Pelanggan</h2>
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          @php
          $testimoni = [
            ['nama' => 'Bu Lulis Irsyad Yusuf', 'jabatan' => 'Mantan Bupati Pasuruan', 'pesan' => 'Tempenya enak dan gurih.'],
            ['nama' => 'Bu Muna', 'jabatan' => 'Kepala TK Mambaul Khoir', 'pesan' => 'Tempe mendoan Zico selalu jadi goodie bag.'],
            ['nama' => 'Bu Mita Devi', 'jabatan' => 'Kepala Puskesmas', 'pesan' => 'Suka dengan penyedap rasa tempe semangit.'],
            ['nama' => 'Umi Azka', 'jabatan' => 'Ibu rumah tangga Surabaya', 'pesan' => 'Keripik tempenya enaaaak!'],
            ['nama' => 'Mama Jessie', 'jabatan' => 'Ibu rumah tangga di Rotterdam', 'pesan' => 'Rasa original, rempahnya terasa banget.'],
            ['nama' => 'Agha', 'jabatan' => 'Siswa SD', 'pesan' => 'Aku suka tempe bacem Zico!']
          ];
          @endphp
          @foreach($testimoni as $t)
          <div class="swiper-slide bg-white rounded-lg shadow-md p-6 max-w-lg mx-auto text-center">
            <p class="text-gray-700 italic mb-4">"{{ $t['pesan'] }}"</p>
            <h4 class="text-lg font-semibold">{{ $t['nama'] }}</h4>
            <p class="text-sm text-gray-500">{{ $t['jabatan'] }}</p>
          </div>
          @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </section>

    {{-- Lokasi Kami --}}
    <section class="py-3">
      <h2 class="text-3xl font-bold mb-6 border-b-4 border-gray-500 inline-block pb-1">Lokasi Kami</h2>
      <div class="rounded-lg overflow-hidden shadow-lg">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126491.79238763406!2d112.58047514335935!3d-7.803742000000011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d36a230393d5%3A0x81c4f3b11311dfe1!2sOmah%20Edukasi%20Tempe%20Parerejo!5e0!3m2!1sid!2sid!4v1733273421682!5m2!1sid!2sid" 
          class="w-full h-72 md:h-96"
          style="border:0;" 
          allowfullscreen 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade"
          title="Lokasi Omah Edukasi Tempe">
        </iframe>
      </div>
    </section>

  </div> {{-- end container --}}
</div> {{-- end background --}}
@endsection

@push('styles')
<style>
  .swiper-slide { transition: background-color 0.6s ease; }
  .swiper-slide-active {
    animation: colorPulse 1.5s ease;
    background-color: #fef3c7;
  }

  @keyframes colorPulse {
    0% { background-color: #fff; }
    50% { background-color: #fef3c7; }
    100% { background-color: #fff; }
  }

  @keyframes fadeInDown {
    from { opacity: 0; transform: translateY(-20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  @keyframes fadeInLeft {
    from { opacity: 0; transform: translateX(-20px); }
    to { opacity: 1; transform: translateX(0); }
  }

  @keyframes fadeInRight {
    from { opacity: 0; transform: translateX(20px); }
    to { opacity: 1; transform: translateX(0); }
  }

  @keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
  }

  .animate-fade-in-down { animation: fadeInDown 0.8s ease-out forwards; }
  .animate-fade-in-left { animation: fadeInLeft 0.8s ease-out forwards; }
  .animate-fade-in-right { animation: fadeInRight 0.8s ease-out forwards; }
  .animate-fade-in { animation: fadeIn 0.8s ease-out forwards; }

  .delay-100 { animation-delay: 0.1s; }
  .delay-200 { animation-delay: 0.2s; }
  .delay-300 { animation-delay: 0.3s; }
</style>
@endpush

@push('scripts')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 20,
    slidesPerView: 1,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      640: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 3 }
    }
  });
</script>
@endpush
