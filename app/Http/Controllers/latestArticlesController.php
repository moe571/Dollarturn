<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Illuminate\Support\Facades\DB;


class latestArticlesController extends Controller
{
    public function index($locale, Category $category)
    {
      $locale = ucfirst(app()->getLocale());
    	$posts = $category->posts()
    										->where('lang', $locale)
    										->with('author','tags','comments')
    										->latestFirst()
    										->published()
    										->paginate(2);

    	$categories = Category::where('lang', $locale)
    							->with(['posts' => function($query) {
    										$query->published();
    							 }])->orderBy('title', 'asc')->get();

       $enHrefCodes = DB::table('english_hreflang')->get();
       $arHrefCodes = DB::table('arabic_hreflang')->get();
       $esHrefCodes = DB::table('spanish_hreflang')->get();

    	return view('blog.postsCategories.latestArticles', ['heading' => $category->title,'enHref' => $category->en_slug, 'esHref' => $category->es_slug, 'arHref' => $category->ar_slug,'meta_description' => $category->meta_description], compact('posts','categories','enHrefCodes','arHrefCodes','esHrefCodes'));
    }
}
