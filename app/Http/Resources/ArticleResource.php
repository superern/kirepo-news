<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'is_published' => $this->is_published,
            'published_date' => $this->published_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated,
            'tags' => TagResource::collection($this->tags)
        ];
    }
}
