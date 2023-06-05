<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function showRegistration()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'nim' => ['required', 'max:10', 'unique:mahasiswas'],
            'username' => ['required', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:8']
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $validated['password'],
            'role' => 'mahasiswa',
        ]);
        Mahasiswa::create([
            'nim' => $request->nim,
            'users_id' => $user->id,
        ]);

        session()->flash('status', 'Registrasi Berhasil');
        session()->flash('registered_nim', $request->nim);

        return redirect()->route('login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->role === "admin") {
                return redirect()->route('admin');
            } else if ($user->role === "mahasiswa") {
                return redirect()->route('mahasiswa');
            }
        }

        return redirect()->back()->with('loginError', 'Email atau Password Salah!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route('login');
    }
}
