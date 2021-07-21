<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(10);

        return ArticleResource::collection($articles);
    }

    public function store(ArticleRequest $request): ArticleResource
    {
        $article = Article::create($request->all());

        return new ArticleResource($article);
    }

    public function show(Article $article): ArticleResource
    {
        return new ArticleResource($article);
    }

    public function update(Request $request, Article $article): ArticleResource
    {
        return new ArticleResource($article);
    }

    public function destroy(Article $article)
    {
        //
    }
}
