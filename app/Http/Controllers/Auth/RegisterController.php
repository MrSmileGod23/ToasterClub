<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register',['method' => 'registerPOST']);

    }

    public function store(RegisterRequest $request){
        $validated = $request->validated();

        $user = User::create(['password' => Hash::make($request->password)]+$request->all());

        Auth::login($user, true);

        return redirect()->route('/');
    }
}
