@extends('layouts.admin')

@section('content')
<div class="bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Tambah Admin Baru</h2>

    <form method="POST" action="{{ route('admin.store') }}" class="space-y-4">
        @csrf
        <div>
            <label>Nama</label>
            <input type="text" name="name" class="w-full p-2 border rounded" required>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" class="w-full p-2 border rounded" required>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" class="w-full p-2 border rounded" required>
        </div>
        <div>
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="w-full p-2 border rounded" required>
        </div>
        <button class="bg-green-600 text-white px-4 py-2 rounded">Tambah</button>
    </form>
</div>
@endsection
