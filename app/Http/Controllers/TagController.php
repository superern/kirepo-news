<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagRequest;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::latest()->paginate(10);

        return TagResource::collection($tags);
    }

    public function store(TagRequest $request)
    {
        $tag = Tag::create($request->all());

        if(!$tag->exists)
            return response(['message' => 'Failed to store your Tag'], 500);

        return response([
            'message' => 'Successfully stored your Tag',
            'data' => new TagResource($tag)
        ]);
    }

    public function show(Tag $tag): TagResource
    {
        return new TagResource($tag);
    }

    public function update(Request $request, Tag $tag)
    {
        //
    }

    public function destroy(Tag $tag)
    {
        //
    }

    public function restore($id)
    {

    }
}
