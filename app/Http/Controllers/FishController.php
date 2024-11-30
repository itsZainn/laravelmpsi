<?php

namespace App\Http\Controllers;

use App\Models\Fishtype;
// use Illuminate\Http\Request;

class FishController extends Controller
{
    public function index()
    {
        // Mengambil semua data fish dengan relasi fish_type
        $fishTypes = FishType::all();
        // Mengembalikan data dalam format JSON
        return view('dashboard', compact('fishTypes'));
    }
}
