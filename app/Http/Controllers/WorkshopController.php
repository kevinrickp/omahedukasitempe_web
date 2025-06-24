<?php

namespace App\Http\Controllers;

use App\Models\Workshop;

class WorkshopController extends Controller
{
    public function index()
    {
        $workshops = Workshop::all();
        return view('workshop', compact('workshops'));
    }
}