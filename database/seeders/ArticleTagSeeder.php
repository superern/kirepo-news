<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($x=0; $x<10; $x++){
            $article = Article::find(rand(1,10));
            $article->attachTags([
                Tag::find(rand(1,5))->id,
                Tag::find(rand(1,5))->id,
            ]);
        }
    }
}
