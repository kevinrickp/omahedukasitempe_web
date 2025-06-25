@extends('layouts.admin')

@section('content')
<div class="p-6">
  <h1 class="text-2xl font-bold mb-4">Daftar Testimoni</h1>
  <a href="{{ route('admin.testimoni.create') }}" class="bg-amber-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Testimoni</a>

  @if(session('success'))
    <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">{{ session('success') }}</div>
  @endif

  <table class="w-full bg-white border rounded shadow">
    <thead>
      <tr class="bg-gray-100">
        <th class="p-3 text-left">Nama</th>
        <th class="p-3 text-left">Jabatan</th>
        <th class="p-3 text-left">Pesan</th>
        <th class="p-3 text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($testimonis as $t)
      <tr class="border-t">
        <td class="p-3">{{ $t->nama }}</td>
        <td class="p-3">{{ $t->jabatan }}</td>
        <td class="p-3">{{ Str::limit($t->pesan, 50) }}</td>
        <td class="p-3 text-center space-x-2">
          <a href="{{ route('admin.testimoni.edit', $t) }}" class="text-blue-500 hover:underline">Edit</a>
          <form action="{{ route('admin.testimoni.destroy', $t) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin hapus?')">
            @csrf @method('DELETE')
            <button class="text-red-500 hover:underline">Hapus</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <div class="mt-4">{{ $testimonis->links() }}</div>
</div>
@endsection
