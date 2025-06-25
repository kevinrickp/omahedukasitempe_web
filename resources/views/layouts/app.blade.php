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
         Omah Tempe
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
        <li><a href="/workshop" class="nav-link {{ Request::is('workshop*') ? 'active' : '' }}">Workshop</a></li>
        <li><a href="/galeri" class="nav-link {{ Request::is('galeri*') ? 'active' : '' }}">Galeri</a></li>
      </ul>

            {{-- Contact Button --}}
            <a href="https://wa.me/6281216647993" target="_blank" rel="noopener noreferrer"
        class="hidden md:inline-block bg-amber-500 text-white px-4 py-2 rounded-lg shadow hover:bg-amber-600 transition">
        Hubungi Kami
      </a>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="open" x-transition class="md:hidden px-6 pb-4 space-y-2 bg-white shadow-inner">
      <a href="/" class="mobile-link {{ Request::is('/') ? 'text-amber-500' : '' }}">Beranda</a>
      <a href="/produk" class="mobile-link {{ Request::is('produk*') ? 'text-amber-500' : '' }}">Produk</a>
      <a href="/edukasi" class="mobile-link {{ Request::is('edukasi*') ? 'text-amber-500' : '' }}">Edukasi</a>
      <a href="/workshop" class="mobile-link {{ Request::is('workshop*') ? 'text-amber-500' : '' }}">Workshop</a>
      <a href="/galeri" class="mobile-link {{ Request::is('galeri*') ? 'text-amber-500' : '' }}">Galeri</a>
      <a href="https://wa.me/6281216647993" target="_blank" rel="noopener noreferrer"
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
      <div>
        <h3 class="text-lg font-bold text-amber-400 mb-3">Tentang Kami</h3>
        <p class="text-sm md:text-base">Kami adalah pusat edukasi pembuatan tempe sekaligus produsen produk tempe berkualitas tinggi dari Pasuruan.</p>
      </div>
      <div>
        <h3 class="text-lg font-bold text-amber-400 mb-3">Navigasi</h3>
        <ul class="text-sm md:text-base space-y-2">
          <li><a href="/" class="hover:text-amber-300">Beranda</a></li>
          <li><a href="/produk" class="hover:text-amber-300">Produk</a></li>
          <li><a href="/edukasi" class="hover:text-amber-300">Edukasi</a></li>
          <li><a href="/workshop" class="hover:text-amber-300">Workshop</a></li>
          <li><a href="/galeri" class="hover:text-amber-300">Galeri</a></li>
        </ul>
      </div>
      <div>
        <h3 class="text-lg font-bold text-amber-400 mb-3">Kontak</h3>
        <p class="text-sm md:text-base">kevinrickypradana@gmail.com</p>
        <p class="text-sm md:text-base">+62 812 1664 7993</p>
        <p class="text-sm md:text-base">Parerejo, Purwodadi, Pasuruan</p>
      </div>
      <div>
        <h3 class="text-lg font-bold text-amber-400 mb-3">Ikuti Kami</h3>
        <div class="flex space-x-4 mt-2">
          <a href="#" class="hover:text-amber-400 transition">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
              <path d="M22.46 6c-.77.35-1.6.58-2.46.69a4.27 4.27 0 001.88-2.36 8.27 8.27 0 01-2.64 1 4.15 4.15 0 00-7.16 3.78A11.75 11.75 0 013 4.6a4.15 4.15 0 001.28 5.53 4.07 4.07 0 01-1.88-.52v.05a4.16 4.16 0 003.33 4.07 4.26 4.26 0 01-1.87.07 4.17 4.17 0 003.89 2.88A8.33 8.33 0 012 19.54a11.74 11.74 0 006.29 1.84c7.55 0 11.68-6.26 11.68-11.68 0-.18-.01-.35-.02-.53A8.33 8.33 0 0024 5.56a8.13 8.13 0 01-2.34.64 4.17 4.17 0 001.82-2.3"></path>
            </svg>
          </a>
          <a href="#" class="hover:text-amber-400 transition">
            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
              <path d="M12 2.04c-5.5 0-9.96 4.46-9.96 9.96 0 4.4 2.86 8.13 6.83 9.46.5.1.67-.22.67-.48v-1.7c-2.77.6-3.35-1.34-3.35-1.34-.45-1.14-1.1-1.44-1.1-1.44-.9-.61.07-.6.07-.6 1 .07 1.53 1.02 1.53 1.02.88 1.52 2.3 1.08 2.87.83.1-.63.34-1.08.61-1.33-2.21-.25-4.54-1.1-4.54-4.91 0-1.08.39-1.96 1.02-2.65-.1-.25-.45-1.27.1-2.64 0 0 .83-.27 2.75 1.02a9.48 9.48 0 015 0c1.92-1.29 2.75-1.02 2.75-1.02.55 1.37.2 2.39.1 2.64.64.7 1.02 1.57 1.02 2.65 0 3.82-2.33 4.66-4.55 4.9.35.3.66.9.66 1.82v2.7c0 .26.17.58.67.48a10.01 10.01 0 006.82-9.46C22 6.5 17.52 2.04 12 2.04z"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <div class="text-center text-sm text-gray-600 py-4 border-t border-gray-700">
      &copy; {{ date('Y') }} Omah Edukasi Tempe. All rights reserved.
    </div>
  </footer>

  @stack('scripts')
</body>
</html>
