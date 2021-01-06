@if(Illuminate\Support\Facades\Route::is('blog.show'))

  @if(app()->getLocale() == 'ar')

  <meta property="og:title" content="{{ $post->title }}" />
  <meta property="og:url" content="{{route('blog','/ar')}}/blog/{{$arHrefCat}}/{{$arHrefPost}}" />
  <meta property="og:type" content="blog" />
  <meta property="og:description" content="{{ $post->meta_description }}" />
  <meta property="og:image" content="localhost:8000/img/articles-images/{{ $post->image }}" />

  @else
  <meta property="og:title" content="{{ $post->title }}" />
  <meta property="og:url" content="{{ URL::current() }}" />
  <meta property="og:type" content="blog" />
  <meta property="og:description" content="{{ $post->meta_description }}" />
  <meta property="og:image" content="localhost:8000/img/articles-images/{{ $post->image }}" />
  @endif
@endif
