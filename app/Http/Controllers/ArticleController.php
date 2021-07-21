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

    public function store(ArticleRequest $request)
    {
        $article = Article::create($request->all());

        if(!$article->exists)
            return response(['message'=>'Failed to store your Article'],500);

        return response([
            'message' => 'Successfully stored your Article',
            'data' => new ArticleResource($article)
        ]);
    }

    public function show(Article $article): ArticleResource
    {
        return new ArticleResource($article);
    }

    public function update(ArticleRequest $request, Article $article)
    {
        if(!$article->isDirty())
            return response(['message' => 'No update happened.']);

        $article->update($request->validated());
        return response([
            'message' => 'Successfully deleted Article',
            'data' => new ArticleResource($article)
        ]);
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return response(['message' => 'Successfully deleted Article']);
    }

    public function restore($id)
    {
        if(!$article = Article::onlyTrashed()->find($id))
            return response(['message' => 'No recoverable Article'],404);

        $article->restore();
        return response(['message' => 'Successfully recovered Article']);
    }
}
