@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Edit Workshop</h1>

    <form action="{{ route('admin.workshop.update', $workshop->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block font-semibold">Nama Workshop</label>
            <input type="text" name="nama" class="w-full border rounded p-2" value="{{ old('nama', $workshop->nama) }}" required>
        </div>
        <div>
            <label class="block font-semibold">Deskripsi</label>
            <textarea name="deskripsi" class="w-full border rounded p-2" rows="4" required>{{ old('deskripsi', $workshop->deskripsi) }}</textarea>
        </div>
        <div>
            <label class="block font-semibold">Gambar</label>
            <input type="file" name="gambar" class="w-full">
            @if($workshop->gambar)
                <img src="{{ asset('storage/' . $workshop->gambar) }}" alt="Gambar Workshop" class="w-32 h-32 object-cover mt-2">
                <p class="text-sm text-gray-500">Kosongkan jika tidak ingin mengganti gambar.</p>
            @endif
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection
