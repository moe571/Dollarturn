<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Session;
use Illuminate\Support\Str;
use App\Post;

use App\User;

use App\Category;

use App\Tag;

class BlogController extends Controller
{
	protected $limit = 3;

    public function index($locale, Category $category, Request $request)

    {
				$locale = ucfirst(app()->getLocale());
				session()->put('locale', $locale);
    		$posts = Post::where('lang', $locale)
        ->with('author', 'tags', 'category', 'comments')
        ->latestFirst()
				->published()
        ->filter(request()->only(['term', 'year', 'month']))
				->paginate($this->limit);

				$categories = Category::where('lang', $locale)
				->with(['posts' => function($query) {
            $query->published();
        }])->orderBy('title', 'asc')->get();

  		  $enHrefCodes = DB::table('english_hreflang')->get();
				$arHrefCodes = DB::table('arabic_hreflang')->get();
				$esHrefCodes = DB::table('spanish_hreflang')->get();


    	  return view("blog.index", compact('posts','categories','enHrefCodes','arHrefCodes','esHrefCodes'));
    }

    public function category($locale, Category $category)

    {

				$locale = ucfirst(app()->getLocale());
        $categoryName = $category->title;


        // $posts = Post::with('author')
        //
        //     ->latestFirst()
        //     ->published()
        //     ->where('category_id', $id)
        //     ->paginate($this->limit);

        $posts = $category->posts()->where('lang', $locale)

                          ->with('author','tags','comments')
                          ->latestFirst()
                          ->published()
                          ->paginate($this->limit);


        return view("blog.postsCategories.latestArticles",['heading' => $category->title], compact('posts','categoryName'));
    }

    public function tag($locale, Tag $tag, Category $category)

    {
        $tagName = $tag->title;

        $posts = $tag->posts()
                          ->with('author', 'category','comments')
                          ->latestFirst()
                          ->published()
                          ->paginate($this->limit);

			$categories = Category::where('lang', $locale)
			->with(['posts' => function($query) {
													$query->published();
			}])->orderBy('title', 'asc')->get();

        return view("blog.postsCategories.latestArticles", ['heading' => $category->title], compact('posts','tagName','categories'));
    }

    public function author($locale, User $author ,Category $category)

    {
       $authorName = $author->title;


        $posts = $author->posts()
                          ->with('category','tags','comments')
                          ->latestFirst()
                          ->published()
                          ->paginate($this->limit);
													$categories = Category::where('lang', $locale)
													->with(['posts' => function($query) {
																							$query->published();
													}])->orderBy('title', 'asc')->get();
        return view("blog.postsCategories.latestArticles", ['heading' => $category->title], compact('posts','authorName','categories'));
    }

    public function show($locale, Category $category, Post $post)
    {
			$locale = ucfirst(app()->getLocale());

      $post->increment('view_count', 1);

			$postComments = $post->comments()->orderBy('created_at', 'desc')->paginate(3);
			$categories = Category::where('lang', $locale)
			->with(['posts' => function($query) {
													$query->published();
			}])->orderBy('title', 'asc')->get();

			$enHrefCodes = DB::table('english_hreflang')->get();
			$arHrefCodes = DB::table('arabic_hreflang')->get();
			$esHrefCodes = DB::table('spanish_hreflang')->get();

			// $bodyParts = str_split($post->body, 2000);
			//
			// $currentPage = (int) app('request')->get('page', $default = '1');
			// $body = collect($bodyParts);
			// $body->prepend('NULL');
			// $perPage = 1;
			// $currentPageResults = $body->slice($currentPage * $perPage, $perPage)->all();
			// $paginatedResults = new LengthAwarePaginator($currentPageResults, count($body), $perPage);
			//
			// $paginatedResults->withPath($post->slug);
			//
			//
			$items = array();
			// $bodyParts = str_split($post->body, 2000);
			$bodyParts = explode("==break here==", $post->body);
			// dd($bodyParts);
			foreach($bodyParts as $bodyPart)
			{
			   array_push($items, $bodyPart);
			}


			$currentPage = LengthAwarePaginator::resolveCurrentPage();
			$perPage = 1;

			$currentItems = array_slice($items, $perPage * ($currentPage - 1), $perPage);
			$paginator = new LengthAwarePaginator($currentItems, count($items), $perPage, $currentPage);
			$results = $paginator->appends('filter', request('filter'));
			$results->withPath($post->slug);

    	return view('blog.show', ['enHrefCat' => $post->category->en_slug , 'esHrefCat' => $post->category->es_slug , 'arHrefCat' => $post->category->ar_slug , 'enHrefPost' => $post->en_slug , 'esHrefPost' => $post->es_slug , 'arHrefPost' => $post->ar_slug, 'meta_description' => $post->meta_description] , compact('post','postComments','results','categories','enHrefCodes','arHrefCodes','esHrefCodes'));

    }
}
