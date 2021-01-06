@extends('layouts.main')


@section('title', $post->title . ' |')

@section('content')

<header class="freelance d-flex align-items-end justify-content-center">



</header>

<section class="post-show" style="page-break-after: always">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        @if($post->image_url)
        <div class="post-image">
          <img class="mb-5" src="{{ $post->image_url }}" alt="{{ $post->slug }}">
        </div>
        @endif

        <div class="post-title">
          <h1 class="mb-4" >{{ $post->title }}</h1>
        </div>

        <nav class="nav mb-5">
          <a class="nav-link" href="{{ route('author',[app()->getLocale() , $post->author->slug]) }}"><i class="fas fa-user"></i> {{ $post->author->name }}</a>
          <a class="nav-link disabled" tabindex="-1" aria-disabled="true"><i class="far fa-clock"></i> {{ $post->date }}</a>
          <a class="nav-link" href="{{ route('category',[app()->getLocale() , $post->category->slug]) }}"><i class="fas fa-folder"></i> {{ $post->category->title }}</a>
          <a class="nav-link" href="#article-comments"><i class="fas fa-comments"></i> {{ $post->commentsNumber() }}</a>
        </nav>


        @if(app()->getLocale() == 'ar')
        <div class="fb-like mb-3 d-flex justify-content-center" data-href="{{route('blog','/ar')}}/blog/{{$arHrefCat}}/{{$arHrefPost}}" data-width="" data-layout="button" data-action="like" data-size="large" data-share="true"></div>
        @else
        <div class="fb-like mb-3 d-flex justify-content-center" data-href="{{ URL::current() }}" data-width="" data-layout="button" data-action="like" data-size="large" data-share="true"></div>
        @endif


      <div class="post-body mb-5">
        @foreach($results as $part)
          @if(app()->getLocale() == 'ar')
            <p style="text-align: right;">{!! nl2br($part) !!}</p>
          @else
            <p>{!! nl2br($part) !!}</p>
          @endif
        @endforeach
      </div>
      <div class="post-body mb-5 d-flex justify-content-center">
        {!! $results->links() !!}
      </div>


      @if(app()->getLocale() == 'ar')
      <div class="fb-like mb-5 d-flex justify-content-center" data-href="{{route('blog','/ar')}}/blog/{{$arHrefCat}}/{{$arHrefPost}}" data-width="" data-layout="button" data-action="like" data-size="large" data-share="true"></div>
      @else
      <div class="fb-like mb-5 d-flex justify-content-center" data-href="{{ URL::current() }}" data-width="" data-layout="button" data-action="like" data-size="large" data-share="true"></div>
      @endif

      <div class="post-author mb-5">
        <div class="row">
          <div class="col-md-2 col-xs-2">
            <?php $author  = $post->author; ?>
            <a href="{{ route('author',[app()->getLocale() , $author->slug]) }}">
              <img class="author-avatar rounded-circle" alt="{{ $author->name }}" width="100px" height="100px" src="{{ $author->gravatar() }}" class="media-object">
            </a>
          </div>
          <div class="col-md-10 col-xs-2">
            <div class="author-info">
              <h4 class="media-heading"><a href="{{ route('latestArticles', [app()->getLocale() , $author->slug]) }}">{{ $author->name }}</a></h4>
              <a href="{{ route('author', [app()->getLocale() , $author->slug]) }}">
                  <i class="fa fa-clone"></i>
                  <?php $postCount = $author->posts->count() ?>
                  {{ $postCount }} {{ str_plural('post', $postCount) }}
              </a>
            </div>
            <div class="author-bio mt-4">
                  {!! $author->bio_html !!}
            </div>
          </div>
        </div>
      </div>

      @include('blog.comments')
      </div>
        @include('layouts.sidebar')
    </div>
  </div>
</section>


@endsection
