<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MebmerController extends Controller
{
    public function index(){
        $users = User::paginate(10)->all();
        return view('members.members',[
                'users' => $users
        ]);
    }

    public function store(Request $request){
        $value = $request->search;
        $users = User::whereRaw('lower(login) like ?', ['%' . strtolower($value) . '%'])->orderBy('login')->paginate(10);
        return view('members.members',[
            'users' => $users,
        ]);
    }
}
