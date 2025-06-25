@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Manajemen Edukasi</h1>

    @if(session('success'))
    <div class="mb-4 px-4 py-2 rounded bg-green-100 text-green-800 border border-green-300">
        {{ session('success') }}
    </div>
    @endif

    <div class="mb-6">
        <a href="{{ route('admin.edukasi.create') }}"
            class="bg-amber-500 hover:bg-amber-600 text-white font-semibold py-2 px-4 rounded shadow transition">
            + Tambah Edukasi
        </a>
    </div>

    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-blue-900 text-white text-left">
                <tr>
                    <th class="p-4 font-semibold">Gambar</th>
                    <th class="p-4 font-semibold">Judul</th>
                    <th class="p-4 font-semibold">Harga</th>
                    <th class="p-4 font-semibold">Deskripsi</th>
                    <th class="p-4 font-semibold text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach($edukasis as $edukasi)
                <tr class="hover:bg-gray-50 transition">
                    <td class="p-4">
                        <img src="{{ asset('storage/' . $edukasi->gambar) }}"
                            class="w-16 h-16 object-cover rounded border" alt="Gambar {{ $edukasi->judul }}">
                    </td>
                    <td class="p-4 align-top">{{ $edukasi->judul }}</td>
                    <td class="p-4 align-top font-medium text-gray-800">
                        Rp{{ number_format($edukasi->harga, 0, ',', '.') }}
                    </td>
                    <td class="p-4 align-top max-w-sm truncate" title="{{ $edukasi->deskripsi }}">
                        {{ $edukasi->deskripsi }}
                    </td>
                    <td class="p-4 text-center align-top">
                        <a href="{{ route('admin.edukasi.edit', $edukasi) }}"
                            class="text-blue-600 hover:underline font-semibold mr-3">
                            Edit
                        </a>
                        <form action="{{ route('admin.edukasi.destroy', $edukasi) }}"
                            method="POST" class="inline-block" onsubmit="return confirm('Hapus edukasi ini?')">
                            @csrf @method('DELETE')
                            <button type="submit"
                                class="text-red-600 hover:underline font-semibold">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
