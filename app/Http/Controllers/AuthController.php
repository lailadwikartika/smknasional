<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Sesuaikan dengan nama view Anda
    }

    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $credentials['email'])->first();

    if (!$user) {
        return back()->withErrors([
            'email' => 'Email yang Anda masukkan tidak terdaftar.',
        ])->withInput($request->only('email'));
    }

    if (Auth::attempt($credentials, $request->boolean('remember'))) {
        $request->session()->regenerate();
        
        return redirect()->intended(route('admin-beranda'));
    }

    return back()->withErrors([
        'password' => 'Password yang Anda masukkan salah.',
    ])->withInput($request->only('email'));
}

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
    protected function create(array $data)
{
    return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']), // Pastikan menggunakan Hash::make()
    ]);
}
}
