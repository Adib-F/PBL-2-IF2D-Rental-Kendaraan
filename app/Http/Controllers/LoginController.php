<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth, Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function login_proses(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->Roles === 'Admin') {
                return redirect()->route('AdminDashboard')->with('berhasil', 'Login berhasil!');
            } else {
                return redirect()->route('dashboard')->with('berhasil', 'Login berhasil!');
            }
        }

        return back()->with('gagal', 'Email atau password yang dimasukkan salah!.')->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput($request->only('email'));
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect()->route('login')->with('gagal', 'Logout Berhasil');
    }
}
