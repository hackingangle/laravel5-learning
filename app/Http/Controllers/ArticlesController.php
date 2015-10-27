<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CreateArticleRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

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

    public function store(CreateArticleRequest $request) 
    {
        Articles::create($request->all());
        return redirect('articles');
    }

    public function store2(Request $request) 
    {
        $this->validate($request, ['title' => 'required|min:2']);
        Articles::create($request->all());
        return redirect('articles');
    }
}
