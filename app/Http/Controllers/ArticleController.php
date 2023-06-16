<?php

namespace App\Http\Controllers;

use App\Models\AnswerArticle;
use App\Models\Article;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index(){

        $articles = Article::paginate(10);

        return view('articles.articles',[
            'articles' => $articles
        ]);

    }

    public function show($id){
        $article = Article::where('id',$id)->first();
        $answers = AnswerArticle::orderBy('created_at','desc')->where('article_id',$id)->paginate(5);
        return view('articles.article',[
            'article' => $article,
            'answers' => $answers,
        ]);
    }

    public function create(){

        return view('articles.article_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required'
        ]);
        Article::create([
            'user_id'  => Auth::id(),
            'title' => $request->title,
            'text' => Markdown::convert($request->description)->getContent(),
        ]);

        return redirect()->route('articles.index');
    }

    public function search(){
        $articles = Article::paginate(10)->all();
        return view('articles.search',[
            'articles' => $articles,
        ]);
    }

    public function searchPost(Request $request){
        $value = $request->search;
        $articles = Article::whereRaw('lower(title) like ?', ['%' . strtolower($value) . '%'])->orderBy('title')->paginate(10);
        return view('articles.search',[
            'articles' => $articles,
        ]);
    }
}
