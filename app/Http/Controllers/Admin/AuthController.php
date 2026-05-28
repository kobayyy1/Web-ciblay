<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Menampilkan Form Login Admin
     */
    public function showLogin()
    {
        return view('admin.auth.login');
    }

    /**
     * Memproses Pengajuan Login Admin
     */
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        // Tambahkan log untuk memastikan email yang masuk itu benar
        // \Log::info('Login attempt for: ' . $request->email);

        $credentials = $request->only('email', 'password');

        // Coba tambahkan 'admin' guard
        if (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            // Debug: pastikan dia masuk ke sini
            return redirect()->intended(route('admin.dashboard'));
        }

        // Kalau gagal, dia akan lari ke sini
        return back()->withErrors([
            'email' => 'Email atau password tidak cocok.',
        ]);
    }

    /**
     * Memproses Logout Admin
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout(); // Tambahkan guard('admin')
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('status', 'Kamu berhasil keluar, Jon!');
    }
}
