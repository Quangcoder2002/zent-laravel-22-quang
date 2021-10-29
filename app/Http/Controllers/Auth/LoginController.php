<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('admin.auth.login');
    }
    public function authenticate(LoginRequest $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if ($request->get('remember')) {
            $remember = true;
        } else {
            $remember = false;
        }
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            if (auth()->user()->role == 'user' || auth()->user()->role == null) {
                return redirect()->intended('');
            } else {
                $title = 'Chào mừng '.auth()->user()->name.' trở lại.';
                $request->session()->flash('login', $title);
                return redirect()->intended('admin/dashboard');
            }
        }
        return back()->withErrors([
            'email' => 'Email hoặc mật khẩu không chính xác',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
