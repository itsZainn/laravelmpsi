<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FishType;
use App\Models\Fish;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        } else {
            // return view('login');
            return view('login', ['title' => 'Login']);
        }
    }

    public function actionlogin(Request $request)
    {
        session(['default_data' => 'fish']);

        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            $fishTypes = FishType::all()->toArray();
            $fish = Fish::all()->toArray();
            $records = $fish;
            $data = 'fish';
            $title = 'Dashboard';

            return view('dashboard', compact('records', 'data', 'title'));
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/login');
        }
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

    public function actionlogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate(); // Hapus semua session
        $request->session()->regenerateToken(); // Regenerasi token CSRF
        return redirect('/');
    }
}
