@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-xl mx-auto">
  <h1 class="text-2xl font-bold mb-4">Tambah Testimoni</h1>
  <form action="{{ route('admin.testimoni.store') }}" method="POST" class="space-y-4">
    @csrf
    @include('admin.testimoni._form', ['testimoni' => null])
    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Simpan</button>
  </form>
</div>
@endsection
