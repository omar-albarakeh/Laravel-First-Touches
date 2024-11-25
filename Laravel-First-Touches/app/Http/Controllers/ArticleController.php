<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Article::with('news')->get();
        return response()->json($articles);
    }

    public function show($id)
    {
        $article = Article::with('news')->findOrFail($id);
        return response()->json($article);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'news_id' => 'required|exists:news,id',
            'content' => 'required|string',
        ]);

        $article = Article::create($validated);
        return response()->json($article, 201);
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return response()->json($article);
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return response()->json(['message' => 'Article deleted successfully']);
    }
}
