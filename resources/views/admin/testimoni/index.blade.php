@extends('layouts.admin')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Daftar Testimoni</h1>

    @if(session('success'))
    <div class="mb-4 px-4 py-2 rounded bg-green-100 text-green-800 border border-green-300">
        {{ session('success') }}
    </div>
    @endif

    <div class="mb-6">
        <a href="{{ route('admin.testimoni.create') }}"
            class="bg-amber-500 hover:bg-amber-600 text-white font-semibold py-2 px-4 rounded shadow transition">
            + Tambah Testimoni
        </a>
    </div>

    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-blue-900 text-white text-left">
                <tr>
                    <th class="p-4 font-semibold">Nama</th>
                    <th class="p-4 font-semibold">Jabatan</th>
                    <th class="p-4 font-semibold">Pesan</th>
                    <th class="p-4 font-semibold text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach ($testimonis as $t)
                <tr class="hover:bg-gray-50 transition">
                    <td class="p-4 align-top">{{ $t->nama }}</td>
                    <td class="p-4 align-top">{{ $t->jabatan }}</td>
                    <td class="p-4 align-top max-w-sm truncate" title="{{ $t->pesan }}">
                        {{ $t->pesan }}
                    </td>
                    <td class="p-4 text-center align-top">
                        <a href="{{ route('admin.testimoni.edit', $t) }}"
                            class="text-blue-600 hover:underline font-semibold mr-3">
                            Edit
                        </a>
                        <form action="{{ route('admin.testimoni.destroy', $t) }}"
                            method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin hapus?')">
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

        <div class="mt-6">
            {{ $testimonis->links() }}
        </div>
    </div>
</div>
@endsection
