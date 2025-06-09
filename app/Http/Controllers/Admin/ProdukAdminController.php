<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukAdminController extends Controller
{
    public function index() {
        return view('admin.produk.index', ['produks' => Produk::all()]);
    }

    public function create() {
        return view('admin.produk.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'required|image|max:2048'
        ]);

        $data['gambar'] = $request->file('gambar')->store('produk', 'public');
        Produk::create($data);

        return redirect()->route('admin.produk.index')->with('success', 'Produk ditambahkan!');
    }

    public function edit(Produk $produk) {
        return view('admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, Produk $produk) {
        $data = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            Storage::disk('public')->delete($produk->gambar);
            $data['gambar'] = $request->file('gambar')->store('produk', 'public');
        }

        $produk->update($data);
        return redirect()->route('admin.produk.index')->with('success', 'Produk diubah!');
    }

    public function destroy(Produk $produk) {
        Storage::disk('public')->delete($produk->gambar);
        $produk->delete();
        return back()->with('success', 'Produk dihapus!');
    }
}
