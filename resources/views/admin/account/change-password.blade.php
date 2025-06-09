@extends('layouts.admin')

@section('content')
<div class="bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Ubah Password</h2>

    @if(session('success'))
        <p class="text-green-500">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('admin.password.update') }}" class="space-y-4">
        @csrf
        <div>
            <label>Password Baru</label>
            <input type="password" name="password" class="w-full p-2 border rounded" required>
        </div>
        <div>
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="w-full p-2 border rounded" required>
        </div>
        <button class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection
