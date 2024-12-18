<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FishType; // Import model FishType
use App\Models\Fish; // Import model Fish

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $title = $request->session()->get('title', 'Default Title'); // Default jika tidak ada title
        $data = 'fish';
        $fish = Fish::all()->toArray();
        $fishTypes = FishType::all()->toArray();
        $records = $fish;


        return view('dashboard', compact('title', 'data', 'records'));
    }

    public function show($data)
    {
        $fish = [];
        $fishType = [];
        $records = [];
        $title = '';

        if ($data === 'fish') {
            $records = Fish::all()->toArray(); // Data ikan
            $title = 'Data Ikan';
            // dd($data);
        } elseif ($data === 'fishType') {
            $records = FishType::all()->toArray(); // Data tipe ikan
            $title = 'Data Tipe Ikan';
            // dd($data);
        } else {
            abort(404); // Jika parameter tidak valid
        }

        // dd($records);

        return view('dashboard', compact('records', 'data', 'title'));
    }

    public function fishtype()
    {
        // Mengambil semua data fish dengan relasi fish_type
        $fishType = FishType::all();
        $a = 0;
        // dd($fishTypes)->toArray();

        return view('dashboard', compact('fishType', 'a'));
    }

    public function fish()
    {
        $fish = Fish::all(); // Ganti dengan model Anda
        $a = 0;

        return view('dashboard', compact('fish', 'a'));
    }
}
