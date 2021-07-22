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
        $tags = Tag::filter()->paginate(5);

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
        $tag->update($request->all());

        if($tag->wasChanged())
            return response(['message'=>'Nothing was changed.']);

        return response([
            'message'=>'Successfully updated your Tag',
            'data' => new TagResource($tag)
        ]);
    }

    public function destroy(Tag $tag)
    {
        try {
            $tag->delete();
        }catch (\Exception $e){
            return response(['message'=>'Failed to delete your Tag'],500);
        }

        return response(['message'=>'Successfully deleted your Tag']);

    }

    public function restore($id)
    {
        if(!$tag = Tag::onlyTrashed()->find($id))
            return response(['message'=>'No recoverable Tag']);

        $tag->restore();
        return response([
            'message'=>'Successfully recovered your Tag',
            'data' => new TagResource($tag)
        ]);

    }
}
