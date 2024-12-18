<?php

namespace App\Http\Controllers;

use App\Models\Fish;
use App\Models\FishType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FishController extends Controller
{
    public function index()
    {
        $fish = Fish::all();
        $fishType = FishType::all();
        $title = 'Catalogue';
        return view('catalogue', compact('fish', 'fishType', 'title'));
    }
    public function create()
    {
        $title = 'Tambah Data Ikan';
        $fishType = FishType::all();
        return view('addfish', compact('title', 'fishType'));
    }
    public function store(Request $request)
    {
        $message = [
            'img.required' => 'Gambar harus diunggah.',
            'img.mimes' => 'Gambar harus berupa file dengan format: jpg, png, jpeg.',
            'img.max' => 'Gambar harus kurang dari 2 MB.',
        ];

        // Validasi data
        $validatedData = $request->validate([
            'fishname' => 'required|string|max:255',
            'harga' => 'required|string', // Validasi harga sebagai string karena ada pemisah titik
            'keterangan' => 'nullable|string',
            'img' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'fishtype' => 'required|exists:fish_type,type_id', // Memastikan ada di tabel fish_type
        ], $message);
        $validatedData['harga'] = str_replace('.', '', $validatedData['harga']);
        // Upload gambar
        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('images'), $imageName);
            $validatedData['img'] = $imageName;
        }

        $validatedData['created_by'] = Auth::id();

        // Simpan ke database
        Fish::create($validatedData);

        // Redirect dengan pesan sukses
        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        // Cari ikan berdasarkan ID
        $fish = Fish::findOrFail($id);
        $fishType = FishType::all(); // Ambil semua tipe ikan untuk dropdown

        return view('editfish', compact('fish', 'fishType'));
    }

    public function update(Request $request, $id)
    {
        $message = [
            'img.required' => 'Gambar harus diunggah.',
            'img.mimes' => 'Gambar harus berupa file dengan format: jpg, png, jpeg.',
            'img.max' => 'Gambar harus kurang dari 2 MB.',
        ];

        $validatedData = $request->validate([
            'fishname' => 'required|string|max:255',
            'harga' => 'required|string',
            'keterangan' => 'nullable|string',
            'img' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'fishtype' => 'required|exists:fish_type,type_id',
        ], $message);

        $validatedData['harga'] = (int) str_replace('.', '', $validatedData['harga']);

        // Ambil data ikan berdasarkan ID
        $fish = Fish::findOrFail($id);

        // Jika ada file gambar baru, upload dan ganti gambar lama
        if ($request->hasFile('img')) {
            // Hapus gambar lama jika ada
            if ($fish->img && file_exists(public_path('images/' . $fish->img))) {
                unlink(public_path('images/' . $fish->img));
            }

            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('images'), $imageName);
            $validatedData['img'] = $imageName;
        }

        // Update data ikan
        $fish->update($validatedData);

        // Redirect dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'Data ikan berhasil diperbarui!');
    }

    public function delete($id)
    {
        // Cari ikan berdasarkan ID
        $fish = Fish::findOrFail($id);

        // Hapus gambar yang terkait jika ada
        $imagePath = public_path('images/' . $fish->img);
        if (file_exists($imagePath)) {
            unlink($imagePath); // Menghapus file gambar
        }

        // Hapus data ikan
        $fish->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'Data ikan berhasil dihapus.');
    }
}
