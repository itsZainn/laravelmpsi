<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function actionregister(Request $request)
    {
        $user = User::create([
            'email' => strtolower($request->email),
            'name' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');
        return redirect('register');
    }
}
