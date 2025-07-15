<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Omah Edukasi Tempe</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
  <style>
  body {
    font-family: 'Inter', sans-serif;
  }

  @keyframes fadeInUp {
    0% {
      opacity: 0;
      transform: translateY(30px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate-fade-in-up {
    animation: fadeInUp 0.8s ease-out both;
  }

  .nav-link {
    position: relative;
    display: inline-block;
    padding: 0.25rem 0.5rem;
    font-weight: 500;
    transition: color 0.3s ease;
  }

  .nav-link::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0%;
    height: 2px;
    background-color: #f59e0b; /* amber-500 */
    transition: all 0.4s ease;
    transform: translateX(-50%);
    border-radius: 9999px;
  }

  .nav-link:hover::after,
  .nav-link.active::after {
    width: 100%;
  }

  .nav-link.active {
    color: #f59e0b; /* amber-500 */
    font-weight: 600;
  }

  .mobile-link {
    display: block;
    padding: 0.5rem 0;
    transition: color 0.3s ease;
  }
</style>
</head>
<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">

  {{-- Navbar --}}
  <nav x-data="{ open: false }" class="bg-white shadow-sm sticky top-0 z-50 transition duration-300">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <a href="/" class="text-2xl font-extrabold text-amber-500 hover:text-amber-600 transition duration-300">
         OmahEdukasiTempe
      </a>

      {{-- Hamburger Menu --}}
      <button @click="open = !open" class="md:hidden focus:outline-none">
        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <path x-show="!open" d="M4 6h16M4 12h16M4 18h16" />
          <path x-show="open" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>

      {{-- Desktop Menu --}}
      <ul class="hidden md:flex space-x-8 text-gray-700 font-medium">
        <li><a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Beranda</a></li>
        <li><a href="/produk" class="nav-link {{ Request::is('produk*') ? 'active' : '' }}">Produk</a></li>
        <li><a href="/edukasi" class="nav-link {{ Request::is('edukasi*') ? 'active' : '' }}">Edukasi</a></li>
        <!-- <li><a href="/workshop" class="nav-link {{ Request::is('workshop*') ? 'active' : '' }}">Workshop</a></li> -->
        <li><a href="/galeri" class="nav-link {{ Request::is('galeri*') ? 'active' : '' }}">Galeri</a></li>
      </ul>

           <!-- Contact Buttons Section -->
<div class="flex gap-4">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- WhatsApp Button -->
<a href="https://wa.me/6281392007329" target="_blank" rel="noopener noreferrer"
  class="hidden md:inline-flex items-center gap-2 bg-amber-500 text-white px-4 py-2 rounded-lg shadow hover:bg-amber-600 transition">
  <i class="fab fa-whatsapp text-lg"></i>
  WhatsApp
</a>

<!-- Instagram Button -->
<a href="https://www.instagram.com/omahdeukasitempe?igsh=bzgyMzF3MXdsNGM5" target="_blank" rel="noopener noreferrer"
  class="hidden md:inline-flex items-center gap-2 bg-amber-500 text-white px-4 py-2 rounded-lg shadow hover:bg-amber-600 transition">
  <i class="fab fa-instagram text-lg"></i>
  Instagram
</a>

</div>

    {{-- Mobile Menu --}}
    <div x-show="open" x-transition class="md:hidden px-6 pb-4 space-y-2 bg-white shadow-inner">
      <a href="/" class="mobile-link {{ Request::is('/') ? 'text-amber-500' : '' }}">Beranda</a>
      <a href="/produk" class="mobile-link {{ Request::is('produk*') ? 'text-amber-500' : '' }}">Produk</a>
      <a href="/edukasi" class="mobile-link {{ Request::is('edukasi*') ? 'text-amber-500' : '' }}">Edukasi</a>
      <!-- <a href="/workshop" class="mobile-link {{ Request::is('workshop*') ? 'text-amber-500' : '' }}">Workshop</a> -->
      <a href="/galeri" class="mobile-link {{ Request::is('galeri*') ? 'text-amber-500' : '' }}">Galeri</a>
      <a href="https://wa.me/6281392007329" target="_blank" rel="noopener noreferrer"
        class="block mt-2 bg-amber-500 text-white px-4 py-2 rounded-lg shadow hover:bg-amber-600 transition text-center">
        Hubungi Kami
      </a>
    </div>
  </nav>

  {{-- Konten Halaman --}}
  <main class="flex-grow">
    @yield('content')
  </main>

  {{-- Footer --}}
<footer class="bg-gray-900 text-gray-400">
  <div class="max-w-7xl mx-auto px-6 py-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">

    <!-- Tentang Kami -->
    <div>
      <h3 class="text-lg font-bold text-amber-400 mb-3">Tentang Kami</h3>
      <p class="text-sm md:text-base">
        Kami adalah pusat edukasi pembuatan tempe sekaligus produsen produk tempe berkualitas tinggi dari Pasuruan.
      </p>
    </div>

    <!-- Navigasi -->
    <div>
      <h3 class="text-lg font-bold text-amber-400 mb-3">Navigasi</h3>
      <ul class="text-sm md:text-base space-y-2">
        <li><a href="/" class="hover:text-amber-300">Beranda</a></li>
        <li><a href="/produk" class="hover:text-amber-300">Produk</a></li>
        <li><a href="/edukasi" class="hover:text-amber-300">Edukasi</a></li>
        {{-- <li><a href="/workshop" class="hover:text-amber-300">Workshop</a></li> --}}
        <li><a href="/galeri" class="hover:text-amber-300">Galeri</a></li>
      </ul>
    </div>

<!-- Kontak -->
<div>
  <h3 class="text-lg font-bold text-amber-400 mb-3">Kontak</h3>
  <p class="text-sm md:text-base">
    <a href="mailto:omahedukasitempe@gmail.com" class="hover:text-amber-300 transition">
      omahedukasitempe@gmail.com
    </a>
  </p>
  <p class="text-sm md:text-base">
    <a href="https://wa.me/6281392007329" target="_blank" class="hover:text-amber-300 transition">
      +6281392007329
    </a>
  </p>
  <p class="text-sm md:text-base">
    Parerejo, Purwodadi, Pasuruan
  </p>
</div>

    <!-- Ikuti Kami -->
    <div>
      <h3 class="text-lg font-bold text-amber-400 mb-3">Ikuti Kami</h3>
      <div class="flex space-x-4 mt-2">

        <!-- Facebook -->
        <a href="https://web.facebook.com/profile.php?id=100088405001249&mibextid=ZbWKwL" target="_blank"
          class="hover:text-amber-400 transition">
          <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
            <path
              d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 5 3.66 9.13 8.44 9.88v-6.99H7.9v-2.89h2.54V9.82c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56v1.87h2.77l-.44 2.89h-2.33V22C18.34 21.13 22 17 22 12z" />
          </svg>
        </a>

        <!-- Instagram -->
        <a href="https://www.instagram.com/omahdeukasitempe?igsh=bzgyMzF3MXdsNGM5" target="_blank"
          class="hover:text-amber-400 transition">
          <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
            <path
              d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2zm0 1.5A4.25 4.25 0 0 0 3.5 7.75v8.5A4.25 4.25 0 0 0 7.75 20.5h8.5a4.25 4.25 0 0 0 4.25-4.25v-8.5A4.25 4.25 0 0 0 16.25 3.5h-8.5zm8.75 2a.75.75 0 0 1 .75.75v1a.75.75 0 0 1-1.5 0v-1a.75.75 0 0 1 .75-.75zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 1.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7z" />
          </svg>
        </a>

      </div>
    </div>
  </div>

  <!-- Copyright -->
  <div class="text-center text-sm text-gray-600 py-4 border-t border-gray-700">
    &copy; {{ date('Y') }} Omah Edukasi Tempe. All rights reserved.
  </div>
</footer>

  @stack('scripts')
</body>
</html>
