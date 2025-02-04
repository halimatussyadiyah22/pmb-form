<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginForm(){
        return view('auth/login');
    }
    public function authenticate(Request $request)
{
    $credentials = $request->validate([
        'nisn' => ['required', 'min:10', 'max:10'],
        'tl' => ['required', 'date']
    ]);

    $user = \App\Models\User::where('nisn', $credentials['nisn'])->where('tl', $credentials['tl'])->first();

    if ($user) {
        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->intended('/');
    }

    return back()->withErrors(['login' => 'NISN atau Tanggal Lahir salah.']);
}

}
