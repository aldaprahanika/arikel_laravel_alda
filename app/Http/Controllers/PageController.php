<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\User;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // tampilkan semua article
    public function index()
    {
        $articles = Article::orderBy('date', 'DESC')->get();
        return view('home', compact('articles'));
    }

    //tampilkan detail article
    public function detailArticle($id)
    {
        $article = article::find($id);
        return view('detail_article', compact('article'));
    }

    //tampilkan artikel berdasarkan author
    public function authorArticle($id)
    {
        $user = User::find($id);
        $articles = $user->articles()->orderBy('date', 'DESC')->get();
        return view('author_article', compact('articles', 'user'));
    }
}
