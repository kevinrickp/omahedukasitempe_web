<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimoniController extends Controller
{
    public function index() {
        $testimonis = Testimoni::latest()->paginate(10);
        return view('admin.testimoni.index', compact('testimonis'));
    }

    public function create() {
        return view('admin.testimoni.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'nullable|string|max:255',
            'pesan' => 'required|string',
        ]);

        Testimoni::create($request->all());
        return redirect()->route('admin.testimoni.index')->with('success', 'Testimoni berhasil ditambahkan.');
    }

    public function edit(Testimoni $testimoni) {
        return view('admin.testimoni.edit', compact('testimoni'));
    }

    public function update(Request $request, Testimoni $testimoni) {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'nullable|string|max:255',
            'pesan' => 'required|string',
        ]);

        $testimoni->update($request->all());
        return redirect()->route('admin.testimoni.index')->with('success', 'Testimoni berhasil diperbarui.');
    }

    public function destroy(Testimoni $testimoni) {
        $testimoni->delete();
        return redirect()->route('admin.testimoni.index')->with('success', 'Testimoni berhasil dihapus.');
    }
}

