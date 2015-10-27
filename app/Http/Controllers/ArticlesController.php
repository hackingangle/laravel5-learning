<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Carbon\Carbon;
use Request;

class ArticlesController extends Controller
{
    public function index() 
    {
        $articles = Articles::latest('published_at')->published()->get();
        // $articles = Articles::orderBy('published_at')->get();
        return view('articles.index', compact('articles'));
    }

    public function show($id) 
    {
        $article = Articles::findOrFail($id);

        return view('articles.show', compact('article'));
    }

    public function create() 
    {
        return view('articles.create');
    }

    public function store() 
    {
        $input = Request::all();
        Articles::create($input);
        return redirect('articles');
    }
}
