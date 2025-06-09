@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Edit Edukasi</h1>

    <form action="{{ route('admin.edukasi.update', $edukasi) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block font-semibold">Judul Edukasi</label>
            <input type="text" name="judul" value="{{ old('judul', $edukasi->judul) }}" class="w-full border rounded p-2" required>
        </div>
        <div>
            <label class="block font-semibold">Harga</label>
            <input type="number" name="harga" value="{{ old('harga', $edukasi->harga) }}" class="w-full border rounded p-2" required>
        </div>
        <div>
            <label class="block font-semibold">Deskripsi</label>
            <textarea name="deskripsi" rows="4" class="w-full border rounded p-2" required>{{ old('deskripsi', $edukasi->deskripsi) }}</textarea>
        </div>
        <div>
            <label class="block font-semibold">Gambar Baru (opsional)</label>
            <input type="file" name="gambar" class="w-full">
            <p class="text-sm mt-1">Gambar saat ini:</p>
            <img src="{{ asset('storage/' . $edukasi->gambar) }}" class="w-24 h-24 object-cover mt-2">
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection
