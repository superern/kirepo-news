<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mehradsadeghi\FilterQueryString\FilterQueryString;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Article extends Model
{
    use HasFactory, SoftDeletes, HasSlug, FilterQueryString;

    protected $fillable = [
        'title',
        'content',
        'is_published',
        'published_at'
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    protected $filters = ['sort', 'like', 'title', 'content', 'is_published'];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function tags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Tag::class)
            ->withTimestamps();
    }

    public function attachTags($tags)
    {
        return $this->tags()->syncWithoutDetaching($tags);
    }

    public function detachTags($tags)
    {
        return $this->tags()->detach($tags);
    }
}
