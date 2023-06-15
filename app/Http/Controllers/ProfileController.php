<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function index($id, Request $request){

       $user = User::where('id',$id)->first();
       $topics = Topic::where('user_id',$id)->paginate(4);
       $current_user = $request->user();
       return view('user.profile',[
           'user' => $user,
           'topics' => $topics,
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

    public function store(Request $request){

        $current_user = $request->user();
        if ($request->hasFile('profile_photo_path')) {
            $destinationPath = storage_path('app/public/avatars/');
            $fileName = $current_user->id.'.jpg';
            $request->file('profile_photo_path')->move($destinationPath, $fileName);
            $current_user->update([
                'profile_photo_path' =>$fileName
            ]);
        }

        $current_user->update([
            'car'=>$request->car,
            'car_year'=>$request->car_year,
            'birth_date'=>$request->birth_date,
            'city'=>$request->city,
            'vk'=>$request->vk,
            'discord'=>$request->discord,
            'occupation'=>$request->occupation
        ]);

        $current_user -> save();
        return redirect()->route('profile',['id'=>$current_user->id]);
    }

}
