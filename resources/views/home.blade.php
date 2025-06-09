@extends('layouts.app')

@section('content')
<div class="space-y-16">

<section class="bg-gradient-to-r from-amber-400 to-amber-300 rounded-lg p-10 text-gray-900 shadow-lg">
  <h1 class="text-4xl md:text-5xl font-extrabold mb-4 max-w-3xl leading-tight">
    Selamat Datang di <span class="text-gray-900">Omah Edukasi Tempe</span>
  </h1>
  <p class="text-lg md:text-xl max-w-2xl space-y-4">
    Desa Parerejo, Kecamatan Purwodadi, Kabupaten Pasuruan, telah lama dikenal sebagai sentra penghasil tempe tradisional yang kaya akan warisan budaya.  
    <br>
    Berbekal tradisi turun-temurun, para pengrajin tempe di desa ini mampu menghasilkan produk berkualitas tinggi yang memuaskan pasar lokal dan sekitarnya.
    <br>
    Namun, dalam menghadapi tantangan zaman dan kebutuhan pasar yang terus berkembang, Mukhamad Irfan, salah satu pengrajin unggulan di Desa Parerejo, hadir dengan inovasi tempe premium bermerk <strong>"Zico"</strong>.
    <br>
    <strong>Omah Edukasi Tempe</strong> kemudian tumbuh sebagai pusat pengembangan tempe modern yang menggabungkan tradisi, teknologi terkini, dan prinsip keberlanjutan.
    <br>
    Di sini, bukan hanya produksi tempe berkualitas yang menjadi fokus, tapi juga edukasi bagi masyarakat, wisatawan, dan calon pengusaha yang ingin menggali ilmu seputar pembuatan tempe unggulan.
    <br>
    Omah Edukasi Tempe adalah bukti nyata bahwa tradisi dan inovasi dapat berjalan berdampingan dengan harmonis, membawa cita rasa dan nilai budaya tempe menuju masa depan yang cerah.
  </p>
</section>

  {{-- Produk Unggulan --}}
  <section>
    <h2 class="text-3xl font-bold mb-6 border-b-4 border-amber-400 inline-block pb-1">
      Produk Unggulan
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @foreach($produk as $p)
      <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-amber-400/40 transition-shadow duration-300">
        @if($p->gambar)
          <img src="{{ asset('storage/' . $p->gambar) }}" alt="{{ $p->nama }}" class="w-full h-48 object-cover rounded mb-4">
        @endif
        <h3 class="text-xl font-semibold mb-2">{{ $p->nama }}</h3>
        <p class="text-gray-700 mb-4 line-clamp-3">{{ $p->deskripsi }}</p>
        <p class="text-green-700 font-bold text-lg">
          Rp{{ number_format($p->harga, 0, ',', '.') }}
        </p>
      </div>
      @endforeach
    </div>
  </section>

  {{-- Program Edukasi --}}
  <section>
    <h2 class="text-3xl font-bold mb-6 border-b-4 border-blue-600 inline-block pb-1">
      Program Edukasi
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @foreach($edukasi as $e)
      <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-blue-600/40 transition-shadow duration-300">
        @if($e->gambar)
          <img src="{{ asset('storage/' . $e->gambar) }}" alt="{{ $e->judul }}" class="w-full h-48 object-cover rounded mb-4">
        @endif
        <h3 class="text-xl font-semibold mb-2">{{ $e->judul }}</h3>
        <p class="text-gray-700 mb-4 line-clamp-3">{{ $e->deskripsi }}</p>
        <p class="text-blue-700 font-bold text-lg">
          Rp{{ number_format($e->harga, 0, ',', '.') }}
        </p>
      </div>
      @endforeach
    </div>
  </section>

  {{-- Testimoni Pelanggan --}}
  <section>
    <h2 class="text-3xl font-bold mb-6 border-b-4 border-rose-500 inline-block pb-1">
      Testimoni Pelanggan
    </h2>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        @php
        $testimoni = [
          ['nama' => 'Bu Lulis Irsyad Yusuf', 'jabatan' => 'Mantan Bupati Pasuruan', 'pesan' => 'Tempenya enak dan gurih.'],
          ['nama' => 'Bu Muna', 'jabatan' => 'Kepala TK Mambaul Khoir, Purwodadi', 'pesan' => 'Setiap ada kegiatan sekolah, tempe mendoan Zico selalu menjadi goodie bag.'],
          ['nama' => 'Bu Mita Devi', 'jabatan' => 'Kepala Puskesmas Kecamatan Purwodadi', 'pesan' => 'Suka dengan produk Omah Edukasi Tempe, terutama penyedap rasa tempe semangit untuk alergi udang dan vegetarian.'],
          ['nama' => 'Umi Azka', 'jabatan' => 'Ibu rumah tangga asal Surabaya', 'pesan' => 'Keripik tempenya beneran enaaaak! Anakku sekali makan langsung habis.'],
          ['nama' => 'Mama Jessie', 'jabatan' => 'Ibu rumah tangga di Rotterdam, Belanda', 'pesan' => 'Keripik tempenya rasanya original dan rempahnya terasa banget.'],
          ['nama' => 'Agha', 'jabatan' => 'Siswa SD Tapas Arrohman, Sidoarjo', 'pesan' => 'Aku suka tempe bacem Zico. Mau makan terus, tempenya enak manis.'],
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
      <!-- Navigation -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>

  {{-- Lokasi Kami --}}
  <section>
    <h2 class="text-3xl font-bold mb-6 border-b-4 border-gray-500 inline-block pb-1">
      Lokasi Kami
    </h2>
    <div class="rounded-lg overflow-hidden shadow-lg">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126491.79238763406!2d112.58047514335935!3d-7.803742000000011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d36a230393d5%3A0x81c4f3b11311dfe1!2sOmah%20Edukasi%20Tempe%20Parerejo!5e0!3m2!1sid!2sid!4v1733273421682!5m2!1sid!2sid" 
        class="w-full h-72 md:h-96"
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade"
        title="Lokasi Omah Edukasi Tempe">
      </iframe>
    </div>
  </section>

</div>
@endsection

@push('styles')
<style>
  /* Animasi warna ringan pada slide aktif */
  .swiper-slide {
    transition: background-color 0.6s ease;
  }

  .swiper-slide-active {
    animation: colorPulse 1.5s ease;
    background-color: #fef3c7; /* kuning muda */
  }

  @keyframes colorPulse {
    0% { background-color: #fff; }
    50% { background-color: #fef3c7; }
    100% { background-color: #fff; }
  }
</style>
@endpush

@push('scripts')
<!-- SwiperJS CDN -->
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
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      }
    }
  });
</script>
@endpush
