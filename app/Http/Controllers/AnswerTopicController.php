<?php

namespace App\Http\Controllers;

use App\Models\AnswerTopic;
use Illuminate\Http\Request;

class AnswerTopicController extends Controller
{

    public function store (Request $request)
    {

        $request->validate([
            'text' => 'required'
        ]);

        $answer = AnswerTopic::create([
            'user_id'  =>auth()->id(),
            'topic_id' => $request->id,
            'text'   =>$request->text
        ]);

        return redirect()->route('forum.topic.show',['id'=>$request->id]);
    }
}
