<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;
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
            'lastUser' => $lastUser,
        ]);
    }

    public function themesAll($id){
        $subcategory = Subcategory::where('id',$id)->first();
        $themes = Topic::where('subcategory_id',$id)->get();
        return view('forum.themes',[
            'subcategory' => $subcategory,
            'themes' => $themes,
        ]);
    }

    public function themeGet($id){
        $theme = Topic::where('id',$id)->first();
        return view('forum.theme',[
            'theme' => $theme,
        ]);
    }

    public function searchIndex(){
        return view('forum.search',[

        ]);
    }
//->orWhereRaw('lower(text) LIKE ? COLLATE NOCASE', ['%' . strtolower($value) . '%'])
    public function searchStore(Request $request){
        $value = $request->search;
        $topics = Topic::whereRaw('lower(title) like ?', ['%' . strtolower($value) . '%'])->orderBy('title')->paginate(10);
        return view('forum.search',[
            'topics' => $topics,
        ]);
    }



    public function topicCreate(){
        return view('forum.topic_create',[

        ]);
    }

    public function topicStore(){
        return view('forum.topic_create',[

        ]);
    }
}
