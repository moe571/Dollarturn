<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        DB::table('categories')->insert([
             [
                 'title' => 'Uncategorized',
                 'slug' => 'uncategorized'
             ],
             [
                 'title' => 'Tips and Tricks',
                 'slug' => 'tips-and-tricks'
             ],
             [
                 'title' => 'Build Apps',
                 'slug' => 'build-apps'
             ],
             [
                 'title' => 'News',
                 'slug' => 'news'
             ],
             [
                 'title' => 'Freebies',
                 'slug' => 'freebies'
             ],
         ]);

        // update the posts data
        $categories = Category::pluck('id');
        foreach (Post::pluck('id') as $postId)
        {
            $categoryId = $categories[rand(0, $categories->count()-1)];

            DB::table('posts')
                ->where('id', $postId)
                ->update(['category_id' => $categoryId]);
        }
    }
}
