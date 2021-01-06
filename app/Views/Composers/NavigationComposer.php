<?php

namespace App\Views\Composers;

use Illuminate\View\View;
use Illuminate\Http\Request;

use Session;
use App\Category;

use App\Post;

use App\Tag;

class NavigationComposer

{

    public function compose(View $view)
    {
        $this->composeCategories($view);

        $this->composeTags($view);

        $this->composePopularPosts($view);

        $this->composeArchives($view);
    }

    private function composeCategories(View $view)
    {
      $locale = ucfirst(app()->getLocale());
        $categories = Category::where('lang', $locale)
        ->with(['posts' => function($query) {
            $query->published();
        }])->orderBy('title', 'asc')->get();

        $view->with('categories', $categories);
    }

    private function composeTags(View $view)
    {
      $tags = Tag::has('posts')->get();

      $view->with('tags', $tags);
    }

    private function composeArchives(View $view)
    {
      $archives = Post::archives();

      $view->with('archives', $archives);
    }

    private function composePopularPosts(View $view)
    {
      $locale = ucfirst(app()->getLocale());
        $popularPosts = Post::where('lang', $locale)->published()->popular()->take(3)->get();
        $view->with('popularPosts', $popularPosts);
    }
}
