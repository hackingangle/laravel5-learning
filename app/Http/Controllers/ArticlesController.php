<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index() 
    {
        $articles = Articles::all();

        return view('articles.index', compact('articles'));
    }

    public function show($id) 
    {
        $article = Articles::findOrFail($id);

        return view('articles.show', compact('article'));
    }
}
