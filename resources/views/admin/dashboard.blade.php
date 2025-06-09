@extends('layouts.admin')

@section('content')
<div class="bg-white rounded shadow p-6">
    <h1 class="text-2xl font-bold mb-4">Selamat Datang, {{ Auth::user()->name }}</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
        <!-- Ubah Password -->
        <div class="bg-gray-100 p-4 rounded shadow">
            <h2 class="text-lg font-semibold mb-2">Pengaturan Akun</h2>
            <a href="{{ route('admin.password.change') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Ubah Password
            </a>
        </div>

        <!-- Tambah Admin -->
        <div class="bg-gray-100 p-4 rounded shadow">
            <h2 class="text-lg font-semibold mb-2">Admin Baru</h2>
            <a href="{{ route('admin.create') }}" class="inline-block bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                Tambah Admin
            </a>
        </div>
    </div>
</div>
@endsection
