<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $articles = Article::all();
        return view('frontend.home', compact('articles'));
    }
}
