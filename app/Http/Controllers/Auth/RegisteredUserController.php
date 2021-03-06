<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisteredRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    public function create(){
        return view('admin.auth.register');
    }
    public function store(RegisteredRequest $request){
        $request->validate([
            'name' => ['required', 'string', 'max:250'],
            'email' => ['required', 'string', 'email','max:250' ,'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => 'user',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);
        Auth::login($user);
        return redirect('');
    }
}
