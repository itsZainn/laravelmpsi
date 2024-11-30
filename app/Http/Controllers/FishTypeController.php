<?php

namespace App\Http\Controllers;

use App\Models\FishType;
// use Illuminate\Http\Request;

class FishTypeController extends Controller
{
    public function index()
    {
        // Mengambil semua data fish dengan relasi fish_type
        $fishTypes = FishType::all();
        $a = 0;
        // dd($fishTypes)->toArray();

        return view('dashboard', compact('fishTypes', 'a'));
    }
}
