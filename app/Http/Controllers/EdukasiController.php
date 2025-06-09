<?php

namespace App\Http\Controllers;

use App\Models\Edukasi;

class EdukasiController extends Controller
{
    public function index()
    {
        $edukasis = Edukasi::all();
        return view('edukasi', compact('edukasis'));
    }
}

