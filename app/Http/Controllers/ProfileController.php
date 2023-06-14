<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function index($id, Request $request){

       $user = User::where('id',$id)->first();
       $current_user = $request->user();
       return view('user.profile',[
           'user' => $user,
           'current_user' => $current_user,
       ]);

   }

    public function create(Request $request)
    {
        $current_user = $request->user();


        return view('user.editing',[

            'user' => $current_user
        ]);
    }

    public function store(Request $request)
    {

    }


}
