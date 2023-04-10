<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('auth.login',['method' => 'loginPOST']);
    }

    public function login(LoginRequest $request){
        $validated = $request->validated();

        if(Auth::attempt($validated))

        return redirect('/');

        return redirect()->back()->withErrors([
            'error' => 'Логин или пароль неправильны'
        ]);
    }

    public function showRegisterForm(){
        return view('auth.register',['method' => 'registerPOST']);

    }

    public function register(RegisterRequest $request){
        $validated = $request->validated();

        $user = User::create(['password' => Hash::make($request->password)]+$request->all());

        Auth::login($user, true);

        return redirect()->route('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
