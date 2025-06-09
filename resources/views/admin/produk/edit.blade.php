@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Edit Produk</h1>

    <form action="{{ route('admin.produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block font-semibold">Nama Produk</label>
            <input type="text" name="nama" class="w-full border rounded p-2" value="{{ old('nama', $produk->nama) }}" required>
        </div>
        <div>
            <label class="block font-semibold">Harga</label>
            <input type="number" name="harga" class="w-full border rounded p-2" value="{{ old('harga', $produk->harga) }}" required>
        </div>
        <div>
            <label class="block font-semibold">Deskripsi</label>
            <textarea name="deskripsi" class="w-full border rounded p-2" rows="4" required>{{ old('deskripsi', $produk->deskripsi) }}</textarea>
        </div>
        <div>
            <label class="block font-semibold">Gambar</label>
            <input type="file" name="gambar" class="w-full">
            @if($produk->gambar)
                <img src="{{ asset('storage/' . $produk->gambar) }}" alt="Gambar Produk" class="w-32 h-32 object-cover mt-2">
                <p class="text-sm text-gray-500">Kosongkan jika tidak ingin mengganti gambar.</p>
            @endif
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection
