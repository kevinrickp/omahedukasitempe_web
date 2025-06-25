@extends('layouts.app')

@section('content')
  <div class="bg-gradient-to-br from-amber-50 to-amber-100 py-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-12 space-y-20">

    {{-- Hero Section --}}
    <section
      class="bg-white rounded-3xl shadow-xl overflow-hidden transition duration-500 hover:scale-[1.01] hover:shadow-2xl">
      <div class="grid md:grid-cols-2 gap-10 items-center p-8 md:p-14">
      <div class="order-2 md:order-1 space-y-6 animate-fade-in-up">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight">
        Selamat Datang di <br><span class="text-amber-600">Omah Edukasi Tempe</span>
        </h1>
        <p class="text-lg sm:text-xl text-gray-700 text-justify">
        <strong>Desa Parerejo</strong>, Kecamatan Purwodadi, Kabupaten Pasuruan telah lama dikenal sebagai sentra
        penghasil tempe tradisional berkualitas tinggi.
        </p>
        <p class="text-lg sm:text-xl text-gray-700 text-justify">
        Dalam menghadapi tantangan zaman, <strong>Mukhamad Irfan</strong> hadir dengan inovasi tempe premium
        <strong>"Zico"</strong> yang menggabungkan kearifan lokal dan teknologi modern.
        </p>
      </div>
      <div class="order-1 md:order-2 flex justify-center animate-fade-in-up delay-200">
        <img src="{{ asset('storage/ilustrasitempe.jpg') }}" alt="Ilustrasi Tempe"
        class="w-full max-w-md h-auto rounded-2xl shadow-lg ring-4 ring-amber-200 object-cover transform rotate-3 hover:rotate-0 transition-transform duration-300">
      </div>
      </div>
    </section>

    {{-- Misi Kami --}}
    <section class="space-y-6 text-center">
      <h2
      class="text-4xl sm:text-5xl font-extrabold text-zinc-700 group inline-block relative after:absolute after:left-1/2 after:translate-x-[-50%] after:mt-2 after:w-0 after:h-1 after:bg-zinc-400 after:rounded-full group-[.show]:after:w-20 transition-all duration-500 animate-fade-in-up">
      Misi Kami</h2>
      <div
      class="bg-white p-8 rounded-2xl shadow-lg border border-amber-100 text-justify space-y-4 animate-fade-in-up delay-100">
      <p class="text-lg text-gray-700">
        <strong>Omah Edukasi Tempe</strong> bukan hanya pusat produksi tempe unggulan, melainkan juga tempat edukasi
        masyarakat dan wisatawan.
      </p>
      <p class="text-lg text-gray-700">
        Tempat ini menjadi saksi perpaduan <strong>tradisi dan inovasi</strong>, serta komitmen terhadap
        <strong>kelestarian budaya</strong> dan <strong>ekonomi lokal</strong>.
      </p>
      </div>
    </section>

    {{-- Produk Unggulan --}}
    <section class="space-y-6 text-center">
      <h2
      class="text-4xl sm:text-5xl font-extrabold text-amber-600 relative after:block after:h-1 after:w-20 after:mt-2 after:mx-auto after:bg-amber-400 after:rounded-full animate-fade-in-up">
      Produk Unggulan</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 animate-fade-in-up delay-200">
      @foreach($produk as $p)
      <div
        class="bg-white rounded-xl shadow-lg p-6 border border-gray-100 hover:scale-105 transition-transform duration-300 group">
        @if($p->gambar)
      <img src="{{ asset('storage/' . $p->gambar) }}" alt="{{ $p->nama }}"
      class="w-full h-48 object-cover rounded mb-4 group-hover:scale-105 transition">
      @endif
        <h3 class="text-xl font-semibold mb-2 group-hover:text-amber-600 transition">{{ $p->nama }}</h3>
        <p class="text-gray-700 mb-4 line-clamp-3">{{ $p->deskripsi }}</p>
        <p class="text-green-700 font-bold text-lg">Rp{{ number_format($p->harga, 0, ',', '.') }}</p>
      </div>
    @endforeach
      </div>
    </section>

    {{-- CTA --}}
    <section class="text-center animate-fade-in-up delay-300">
      <a href="{{ route('edukasi') }}"
      class="bg-amber-500 hover:bg-amber-600 text-white font-semibold px-10 py-4 rounded-full text-lg shadow-lg transition hover:scale-105 focus:ring-4 focus:ring-amber-300 inline-block">
      Jelajahi Edukasi Tempe Sekarang! &rarr;
      </a>
    </section>

    {{-- Program Edukasi --}}
    <section class="space-y-6 text-center">
      <h2
      class="text-4xl sm:text-5xl font-extrabold text-blue-600 relative after:block after:h-1 after:w-20 after:mt-2 after:mx-auto after:bg-blue-500 after:rounded-full animate-fade-in-up">
      Program Edukasi</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 animate-fade-in-up delay-200">
      @foreach($edukasi as $e)
      <div
        class="bg-white rounded-xl shadow-lg p-6 border border-gray-100 hover:scale-105 transition-transform duration-300 group">
        @if($e->gambar)
      <img src="{{ asset('storage/' . $e->gambar) }}" alt="{{ $e->judul }}"
      class="w-full h-48 object-cover rounded mb-4 group-hover:scale-105 transition">
      @endif
        <h3 class="text-xl font-semibold mb-2 group-hover:text-blue-600 transition">{{ $e->judul }}</h3>
        <p class="text-gray-700 mb-4 line-clamp-3">{{ $e->deskripsi }}</p>
        <p class="text-blue-700 font-bold text-lg">Rp{{ number_format($e->harga, 0, ',', '.') }}</p>
      </div>
    @endforeach
      </div>
    </section>

    <section>
      <h2 class="section-heading text-4xl sm:text-5xl font-extrabold tracking-tight text-rose-500 text-center">
      Testimoni Pelanggan
      </h2>
      <div class="swiper mySwiper mt-6">
      <div class="swiper-wrapper">
        @foreach($testimoni as $t)
      <div
      class="swiper-slide bg-white rounded-lg shadow-md p-6 max-w-lg mx-auto text-center min-h-full flex flex-col justify-between transition duration-300 transform hover:scale-105 hover:shadow-xl">
      <p class="text-gray-700 italic mb-4 flex-grow">"{{ $t['pesan'] }}"</p>
      <div>
        <h4 class="text-lg font-semibold">{{ $t['nama'] }}</h4>
        <p class="text-sm text-gray-500">{{ $t['jabatan'] }}</p>
      </div>
      </div>
      @endforeach
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      </div>
    </section>

    {{-- Lokasi --}}
    <section class="space-y-6 text-center">
      <h2
      class="text-4xl sm:text-5xl font-extrabold text-gray-700 relative after:block after:h-1 after:w-20 after:mx-auto after:mt-2 after:bg-gray-400 after:rounded-full animate-fade-in-up">
      Lokasi Kami</h2>
      <div class="rounded-xl overflow-hidden shadow-lg hover:scale-105 transition">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126491.79238763406!2d112.58047514335935!3d-7.803742000000011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d36a230393d5%3A0x81c4f3b11311dfe1!2sOmah%20Edukasi%20Tempe%20Parerejo!5e0!3m2!1sid!2sid!4v1733273421682!5m2!1sid!2sid"
        class="w-full h-72 md:h-96 border-0" allowfullscreen loading="lazy"
        referrerpolicy="no-referrer-when-downgrade" title="Lokasi Omah Edukasi Tempe">
      </iframe>
      </div>
    </section>

    </div>
  </div>
@endsection

@push('styles')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush

@push('scripts')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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

    // Animasi heading dengan IntersectionObserver
    document.addEventListener('DOMContentLoaded', () => {
    const headings = document.querySelectorAll('.section-heading');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
      });
    }, { threshold: 0.3 });

    headings.forEach(h => observer.observe(h));
    });
  </script>
@endpush