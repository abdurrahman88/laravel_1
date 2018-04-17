<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
    	$article = Article::orderby('id', 'desc')->get();
    	return view('article.index', compact('article'));
    }

    public function insert(Request $request)
    {
        $request->validate([
            'tittle' => 'required|min:10',
            'content' => 'required'
        ]);
    	Article::create($request->all());
    	return redirect('article');
    }

    public function hapus($id)
    {
    	Article::find($id)->delete();
    	return redirect('article')->with('Article', 'Data di Hapus');
    }

    public function create()
    {
    	return view('article.create');
    }

    public function edit($id)
    {
        $request->validate([
            'tittle' => 'required|min:10',
            'content' => 'required'
        ]);
        $article = Article::find($id);
        return view('article.edit', compact('article'));
    }

    public function update(Request $abc)
    {
        Article::find($abc->id)->update($abc->all());
        return redirect('article')->with('Data di update');
    }
}
