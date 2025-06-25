<div>
  <label class="block mb-1 font-semibold">Nama</label>
  <input type="text" name="nama" value="{{ old('nama', $testimoni->nama ?? '') }}" required class="w-full border p-2 rounded" />
</div>

<div>
  <label class="block mb-1 font-semibold">Jabatan</label>
  <input type="text" name="jabatan" value="{{ old('jabatan', $testimoni->jabatan ?? '') }}" class="w-full border p-2 rounded" />
</div>

<div>
  <label class="block mb-1 font-semibold">Pesan</label>
  <textarea name="pesan" rows="4" required class="w-full border p-2 rounded">{{ old('pesan', $testimoni->pesan ?? '') }}</textarea>
</div>
