<?php

namespace App\Http\Controllers;

use App\Models\FishType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

    public function create()
    {
        $title = 'Tambah Data Jenis Ikan';
        $fishType = FishType::all();
        return view('addtype', compact('title', 'fishType'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'typename' => 'required|string|max:55',
            'category' => 'required|string|max:55',
        ]);
        $validatedData['createdby'] = Auth::id();

        // Simpan ke database
        FishType::create($validatedData);

        // Redirect dengan pesan sukses
        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $fishType = FishType::findOrFail($id);

        return view('edittype', compact('fishType'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'typename' => 'required|string|max:55',
            'category' => 'required|string|max:55',
        ]);

        $fishType = FishType::findOrFail($id);

        $fishType->update($validatedData);

        // Redirect dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'Data jenis ikan berhasil diperbarui!');
    }
}
