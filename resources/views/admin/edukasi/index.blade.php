@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Manajemen Edukasi</h1>
    <a href="{{ route('admin.edukasi.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Edukasi</a>

    @if(session('success'))
        <p class="text-green-500 mt-2">{{ session('success') }}</p>
    @endif

    <table class="w-full mt-4 border">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-2">Gambar</th>
                <th class="p-2">Judul</th>
                <th class="p-2">Harga</th>
                <th class="p-2">Deskripsi</th>
                <th class="p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($edukasis as $edukasi)
                <tr class="border-t align-top">
                    <td><img src="{{ asset('storage/' . $edukasi->gambar) }}" class="w-16 h-16 object-cover"></td>
                    <td>{{ $edukasi->judul }}</td> <!-- ✅ Diubah dari 'jenis' -->
                    <td>Rp{{ number_format($edukasi->harga) }}</td>
                    <td>{{ Str::limit($edukasi->deskripsi, 100) }}</td>
                    <td>
                        <a href="{{ route('admin.edukasi.edit', $edukasi) }}" class="text-blue-500">Edit</a>
                        <form action="{{ route('admin.edukasi.destroy', $edukasi) }}" method="POST" class="inline">
                            @csrf 
                            @method('DELETE')
                            <button class="text-red-500 ml-2" onclick="return confirm('Hapus edukasi ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
