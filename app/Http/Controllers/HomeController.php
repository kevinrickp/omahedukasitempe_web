<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Edukasi;

class HomeController extends Controller
{
    public function index()
    {
        $produk = Produk::limit(3)->get();
        $edukasi = Edukasi::limit(3)->get();
        return view('home', compact('produk', 'edukasi'));
    }
}

