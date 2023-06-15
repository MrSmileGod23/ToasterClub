<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
        $topics = Topic::paginate(10)->all();
        return view('forum.search',[
            'topics' => $topics,
        ]);
    }

//->orWhereRaw('lower(text) LIKE ? COLLATE NOCASE', ['%' . strtolower($value) . '%'])
    public function store(Request $request){
        $value = $request->search;
        $topics = Topic::whereRaw('lower(title) like ?', ['%' . strtolower($value) . '%'])->orderBy('title')->paginate(10);
        return view('forum.search',[
            'topics' => $topics,
        ]);
    }

}
