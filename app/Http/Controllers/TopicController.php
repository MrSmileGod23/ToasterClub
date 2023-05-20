<?php

namespace App\Http\Controllers;

use App\Models\AnswerTopic;
use App\Models\Subcategory;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopicController extends Controller
{
    public function all($id){
        $subcategory = Subcategory::where('id',$id)->first();
        $themes = Topic::where('subcategory_id',$id)->get();
        return view('forum.themes',[
            'subcategory' => $subcategory,
            'themes' => $themes,
        ]);
    }

    public function show($id){
        $theme = Topic::where('id',$id)->first();
        $answers = AnswerTopic::where('topic_id',$id)->get();
        return view('forum.theme',[
            'theme' => $theme,
            'answers' => $answers,
        ]);
    }

    public function create($id){
        $subcategory = Subcategory::where('id',$id)->first();
        return view('forum.topic_create',[
            'subcategory' => $subcategory,
        ]);
    }

    public function store(Request $request){


        $topic=Topic::create([
            'subcategory_id' => $request->category,
            'user_id'  =>Auth::id(),
            'title'   =>$request->title,
            'text'   =>$request->text
        ]);

        return redirect()->action([TopicController::class,'show'], ['id' => $topic->id ]);
    }
}
