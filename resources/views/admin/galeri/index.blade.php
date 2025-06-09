@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Galeri Perusahaan</h1>

    <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data" class="mb-6 space-y-4">
        @csrf
        <div>
            <label class="block mb-1 font-semibold" for="nama">Nama Galeri</label>
            <input type="text" name="nama" id="nama" class="border rounded p-2 w-full" placeholder="Masukkan nama galeri" required>
        </div>
        <div>
            <label class="block mb-1 font-semibold" for="gambar">Upload Gambar</label>
            <input type="file" name="gambar[]" id="gambar" multiple class="border rounded p-2 w-full" required>
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Upload Gambar</button>
    </form>

    @if(session('success'))
        <p class="text-green-500">{{ session('success') }}</p>
    @endif

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">
        @foreach($galeris as $galeri)
            <div class="relative group border rounded shadow p-2">
                <img src="{{ asset('storage/' . $galeri->gambar) }}" alt="{{ $galeri->nama }}" class="w-full h-40 object-cover rounded mb-2">
                <p class="text-center font-semibold text-gray-700 mb-2 truncate">{{ $galeri->nama }}</p>
                <form action="{{ route('admin.galeri.destroy', $galeri) }}" method="POST" class="absolute top-2 right-2 hidden group-hover:block">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-600 text-white text-xs px-2 py-1 rounded" onclick="return confirm('Hapus gambar ini?')">X</button>
                </form>
            </div>
        @endforeach
    </div>
</div>
@endsection
