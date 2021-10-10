<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create(){
        return view('admin.auth.login');
    }
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if($request->get('remember')){
            $remember = true;
        }else{
            $remember = false;
        }
        if (Auth::attempt($credentials, $remember)) {
           $request->session()->regenerate();
           if (auth()->user()->role == 'user' || auth()->user()->role == null) {
            return redirect()->intended('');
           }else{
            return redirect()->intended('admin/dashboard'); 
           }
        }
        return back()->withErrors([
            'email' => 'The pro',
        ]);
    }
    public function logout(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
