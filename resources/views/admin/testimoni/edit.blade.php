@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-xl mx-auto">
  <h1 class="text-2xl font-bold mb-4">Edit Testimoni</h1>
  <form action="{{ route('admin.testimoni.update', $testimoni) }}" method="POST" class="space-y-4">
    @csrf @method('PUT')
    @include('admin.testimoni._form', ['testimoni' => $testimoni])
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
  </form>
</div>
@endsection
