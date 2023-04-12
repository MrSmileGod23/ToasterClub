<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ForumController extends Controller
{
    public function index(){
        $treeView = Category::with(['subcategories'])->get();
        return view('forum.forum',[
            'treeView' => $treeView
        ]);
    }
}
