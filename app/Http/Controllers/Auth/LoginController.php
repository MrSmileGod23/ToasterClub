<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login',['method' => 'loginPOST']);
    }

    public function store(LoginRequest $request){
        $validated = $request->validated();

        if(Auth::attempt($validated))

            return redirect('/');

        return redirect()->back()->withErrors([
            'error' => 'Логин или пароль неправильны'
        ]);
    }

}
