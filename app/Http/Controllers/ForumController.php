<?php

namespace App\Http\Controllers;

use App\Models\AnswerTopic;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ForumController extends Controller
{
    public function index(){
        $treeView = Category::with(['subcategories'])->get();
        $lastTopics = Topic::orderBy('created_at', 'desc')->limit(3)->get();

        $countTopics = Topic::count();
        $countCategories = Category::count();
        $countSubcategories = Subcategory::count();
        $countUsers = User::count();
        $lastUser = User::orderBy('created_at', 'desc')->first() ;

        return view('forum.forum',[
            'treeView' => $treeView,
            'lastTopics' => $lastTopics,
            'countTopics' => $countTopics,
            'countCategories' => $countCategories,
            'countSubcategories' => $countSubcategories,
            'countUsers' => $countUsers,
            'lastUser' => $lastUser
        ]);
    }
}
