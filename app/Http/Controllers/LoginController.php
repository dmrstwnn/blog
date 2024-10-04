<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function login(){
        return view('auth.login');
    }

    public function regist(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4|confirmed', 
        ]);
    
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
    
        User::create($data);
    
        return redirect()->route('home');
    }
    
    public function postlogin(Request $request) {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);
    
        // Mencoba login
        if (Auth::attempt($request->only('email', 'password'))) {
            // Jika berhasil, redirect ke halaman home
            return redirect()->intended('/home')->with('success', 'Login successful!');
        }
    
        // Jika gagal, redirect kembali ke login dengan pesan error
        return redirect()->back()->withErrors(['email' => 'Invalid email or password.'])->withInput();
    }
    

    public function logout(){
      Auth::logout();
      return redirect()->route('login');
  }
}
