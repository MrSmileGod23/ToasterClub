<?php

namespace App\Http\Controllers;

use App\Models\AnswerTopic;
use Illuminate\Http\Request;

class AnswerTopicController extends Controller
{
    public function store (Request $request,$id)
    {
        $answer = AnswerTopic::create([
            'user_id'  =>auth()->id(),
            'theme_id' => $id,
            'info'   =>$request->info
        ]);

        return redirect()->action([TopicController::class,'show'], ['id' => $id ]);
    }
}
