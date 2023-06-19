<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index(){

       return view('dashboard.dashboard',[

       ]);

   }

    public function usersIndex(){
        $users = User::where('login','!=','adminbB')->paginate(10);
        return view('dashboard.users',[
            'users' => $users
        ]);

    }

    public function usersDestroy($id){

       User::destroy($id);
       return redirect()->route('dashboard.users.index');

    }

    public function topicsIndex(){

        $topics = Topic::paginate(10);
        return view('dashboard.topics',[
            'topics' => $topics
        ]);

    }

    public function topicsDestroy($id){

        $topic = Topic::find($id);
        $topic->answers()->delete();
        $topic->delete();
        return redirect()->route('dashboard.topics.index');

    }
}
