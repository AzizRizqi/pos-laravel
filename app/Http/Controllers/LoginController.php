<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function actionLogin(Request $request)
    {
        $request->validate([
            'email' => 'email',
            'password' => 'required|min:8',

        ]);

        $credential = $request->only(['email', 'password']);
        if (Auth::attempt($credential)) {
            return redirect()->intended('dashboard');

        }
            return redirect()->back()->withErrors('Login Gagal.Mohon periksa kembali email dan password anda!!');
            // return redirect()->back()->with
    }
}
