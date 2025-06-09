<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Edukasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EdukasiAdminController extends Controller
{
    public function index() {
        return view('admin.edukasi.index', ['edukasis' => Edukasi::all()]);
    }

    public function create() {
        return view('admin.edukasi.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'required|image|max:2048'
        ]);
    
        $data['gambar'] = $request->file('gambar')->store('edukasi', 'public');
        Edukasi::create($data);
    
        return redirect()->route('admin.edukasi.index')->with('success', 'Edukasi ditambahkan!');
    }
    

    public function edit(Edukasi $edukasi) {
        return view('admin.edukasi.edit', compact('edukasi'));
    }

    public function update(Request $request, Edukasi $edukasi) {
        $data = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            Storage::disk('public')->delete($edukasi->gambar);
            $data['gambar'] = $request->file('gambar')->store('edukasi', 'public');
        }

        $edukasi->update($data);
        return redirect()->route('admin.edukasi.index')->with('success', 'Edukasi diubah!');
    }

    public function destroy(Edukasi $edukasi) {
        Storage::disk('public')->delete($edukasi->gambar);
        $edukasi->delete();
        return back()->with('success', 'Edukasi dihapus!');
    }
}
