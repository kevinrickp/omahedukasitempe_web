@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Manajemen Produk</h1>
    <a href="{{ route('admin.produk.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Produk</a>

    @if(session('success'))
        <p class="text-green-500 mt-2">{{ session('success') }}</p>
    @endif

    <table class="w-full mt-4 border">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-2">Gambar</th>
                <th class="p-2">Nama</th>
                <th class="p-2">Deskripsi</th>
                <th class="p-2">Harga</th>
                <th class="p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produks as $produk)
                <tr class="border-t align-top">
                    <td><img src="{{ asset('storage/' . $produk->gambar) }}" class="w-16 h-16 object-cover"></td>
                    <td class="align-middle">{{ $produk->nama }}</td>
                    <td class="align-middle max-w-xs truncate" title="{{ $produk->deskripsi }}">{{ $produk->deskripsi }}</td>  <!-- Deskripsi dengan tooltip -->
                    <td class="align-middle">Rp{{ number_format($produk->harga) }}</td>
                    <td class="align-middle">
                        <a href="{{ route('admin.produk.edit', $produk) }}" class="text-blue-500">Edit</a>
                        <form action="{{ route('admin.produk.destroy', $produk) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button class="text-red-500 ml-2" onclick="return confirm('Hapus produk ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
