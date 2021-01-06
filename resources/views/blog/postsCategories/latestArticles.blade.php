@extends('layouts.main')


@section('title', $heading . ' |')

@section('content')

<header class="freelance d-flex align-items-end justify-content-center">
  <h1 class="pb-3"> {{ $heading }} </h1>
</header>

<section class="latest-articles">
  @if (app()->getLocale() == 'en')
    <h2 class="text-center mt-5 mb-5">Latest {{ $heading }} articles</h2>
  @endif
  @if (app()->getLocale() == 'ar')
    <h2 class="text-center mt-5 mb-5">آخر المواضيع حول {{ $heading }}</h2>
  @endif
  @if (app()->getLocale() == 'es')
    <h2 class="text-center mt-5 mb-5">Últimas publicaciones de {{ $heading }}</h2>
  @endif
   <div class="container">
    @foreach($posts->chunk(2) as $chunk)
     <div class="row mb-4">
      @foreach($chunk as $post)
       <div class="col-md-6 col-xs-12">
        <div class="latest-post-item border-bottom p-4" style="height:241px;">
          <div class="row">
            <div class="col-md-5 p-0">
              @if($post->image_url)
              <img width="217" height="145" src="{{ $post->image_url }}" alt="{{ $post->slug }}">
              @endif
            </div>
            <div class="col-md-7">
                <a href="{!! route('blog.show', [app()->getLocale() ,$post->category->slug, $post->slug]) !!}">
                  <h4 class="article-title">{{ $post->title }}</h4>
                </a>
              <p class="article-excerpt">{{ $post->excerpt }}</p>
              <p class="article-info">By {{ $post->author->name }} On {{ $post->date }}</p>
            </div>
          </div>
        </div>
      </div>
     @endforeach
    </div>
   @endforeach
  </div>
</section>

<section class="pagination pt-4">
  <div class="container">
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center">
        <nav>
          {{ $posts->appends(request()->only(['term']))->links() }}
        </nav>
      </div>
    </div>
  </div>
</section>




<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection
