<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(3)->create();
         $this->call(ArticleSeeder::class);
         $this->call(TagSeeder::class);
         $this->call(ArticleTagSeeder::class);
    }
}
