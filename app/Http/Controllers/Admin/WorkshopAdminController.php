<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkshopAdminController extends Controller
{
    public function index() {
        return view('admin.workshop.index', ['workshops' => Workshop::all()]);
    }

    public function create() {
        return view('admin.workshop.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|max:2048'
        ]);

        $data['gambar'] = $request->file('gambar')->store('workshop', 'public');
        Workshop::create($data);

        return redirect()->route('admin.workshop.index')->with('success', 'Workshop ditambahkan!');
    }

    public function edit(Workshop $workshop) {
        return view('admin.workshop.edit', compact('workshop'));
    }

    public function update(Request $request, Workshop $workshop) {
        $data = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            Storage::disk('public')->delete($workshop->gambar);
            $data['gambar'] = $request->file('gambar')->store('workshop', 'public');
        }

        $workshop->update($data);
        return redirect()->route('admin.workshop.index')->with('success', 'Workshop diubah!');
    }

    public function destroy(Workshop $workshop) {
        Storage::disk('public')->delete($workshop->gambar);
        $workshop->delete();
        return back()->with('success', 'Workshop dihapus!');
    }
}
