<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel - Omah Edukasi Tempe</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex bg-gray-100 min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-lg min-h-screen">
        <div class="p-6 border-b">
            <h2 class="text-xl font-bold">Admin Panel</h2>
        </div>
        <nav class="p-4 space-y-2">
            <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-200 font-semibold' : '' }}">
                Dashboard
            </a>
            <a href="{{ route('admin.produk.index') }}" class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->routeIs('admin.produk.*') ? 'bg-gray-200 font-semibold' : '' }}">
                Produk
            </a>
            <a href="{{ route('admin.edukasi.index') }}" class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->routeIs('admin.edukasi.*') ? 'bg-gray-200 font-semibold' : '' }}">
                Edukasi
            </a>
            <a href="{{ route('admin.workshop.index') }}" class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->routeIs('admin.workshop.*') ? 'bg-gray-200 font-semibold' : '' }}">
                Workshop
            </a>
            <a href="{{ route('admin.galeri.index') }}" class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->routeIs('admin.galeri.*') ? 'bg-gray-200 font-semibold' : '' }}">
                Galeri
            </a>
            <form method="POST" action="{{ route('logout') }}" onsubmit="return confirm('Logout sekarang?')">
                @csrf
                <button class="w-full text-left px-4 py-2 text-red-500 hover:bg-red-100 rounded">Logout</button>
            </form>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        @yield('content')
    </main>

</body>
</html>
