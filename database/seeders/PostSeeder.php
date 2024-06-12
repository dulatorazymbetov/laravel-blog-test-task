<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::factory()->count(10)->create();

        $posts = Post::factory()->count(100)->create();

        $posts->each(function ($post) use ($categories) {
            $randomCategories = $categories->random(rand(1, 3));
            $post->categories()->attach($randomCategories->pluck('id')->toArray());
        });
    }
}
