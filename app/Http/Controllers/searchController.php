<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class searchController extends Controller
{
    public function index()
    {
      $locale = ucfirst(app()->getLocale());
      $posts = Post::where('lang', $locale)
        ->with('author', 'tags', 'category', 'comments')
        ->latestFirst()
        ->published()
        ->filter(request()->only(['term', 'year', 'month']))
        ->paginate(4);
      return view("blog.search-result", compact('posts'));
    }
}
