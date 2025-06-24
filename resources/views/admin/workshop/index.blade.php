@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Manajemen Workshop</h1>
    <a href="{{ route('admin.workshop.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Workshop</a>

    @if(session('success'))
        <p class="text-green-500 mt-2">{{ session('success') }}</p>
    @endif

    <table class="w-full mt-4 border">
        <thead>
            <tr class="bg-gray-200">
                <th class="p-2">Gambar</th>
                <th class="p-2">Nama</th>
                <th class="p-2">Deskripsi</th>
                <th class="p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($workshops as $workshop)
                <tr class="border-t align-top">
                    <td><img src="{{ asset('storage/' . $workshop->gambar) }}" class="w-16 h-16 object-cover"></td>
                    <td class="align-middle">{{ $workshop->nama }}</td>
                    <td class="align-middle max-w-xs truncate" title="{{ $workshop->deskripsi }}">{{ $workshop->deskripsi }}</td>
                    <td class="align-middle">
                        <a href="{{ route('admin.workshop.edit', $workshop) }}" class="text-blue-500">Edit</a>
                        <form action="{{ route('admin.workshop.destroy', $workshop) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button class="text-red-500 ml-2" onclick="return confirm('Hapus workshop ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
