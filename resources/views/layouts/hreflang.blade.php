
@if(Illuminate\Support\Facades\Route::is('blog'))


  @foreach($enHrefCodes as $enHrefCode)
    <link rel="alternate" href="{{ route('blog', '/en') }}" hreflang="{{ $enHrefCode->code }}" />
  @endforeach


  @foreach($esHrefCodes as $esHrefCode)
    <link rel="alternate" href="{{ route('blog', '/es') }}" hreflang="{{ $esHrefCode->code }}" />
  @endforeach

  @foreach($arHrefCodes as $arHrefCode)
  <link rel="alternate" href="{{ route('blog', '/ar') }}" hreflang="{{ $arHrefCode->code }}" />
  @endforeach


@elseif(Illuminate\Support\Facades\Route::is('latestArticles'))

  @foreach($enHrefCodes as $enHrefCode)
  <link rel="alternate" href="{{ route('blog', '/en') .'/'. $enHref }}" hreflang="{{ $enHrefCode->code }}" />
  @endforeach
  @foreach($esHrefCodes as $esHrefCode)
    <link rel="alternate" href="{{ route('blog', '/es') .'/'. $esHref }}" hreflang="{{ $esHrefCode->code }}" />
  @endforeach
  @foreach($arHrefCodes as $arHrefCode)
  <link rel="alternate" href="{{ route('blog', '/ar') .'/'. $arHref }}" hreflang="{{ $arHrefCode->code }}" />
  @endforeach

@elseif(Illuminate\Support\Facades\Route::is('blog.show'))
  @isset($post->en_slug)
    @foreach($enHrefCodes as $enHrefCode)
    <link rel="alternate" href="{{ route('blog.show', ['/en' ,$post->category->en_slug, $post->en_slug])}}" hreflang="{{ $enHrefCode->code }}" />
    @endforeach
  @endisset

  @isset($post->es_slug)
    @foreach($esHrefCodes as $esHrefCode)
      <link rel="alternate" href="{{ route('blog.show', ['/es' ,$post->category->es_slug, $post->es_slug])}}" hreflang="{{ $esHrefCode->code }}" />
    @endforeach
  @endisset

  @isset($post->ar_slug)
    @foreach($arHrefCodes as $arHrefCode)
    <link rel="alternate" href="{{route('blog','/ar')}}/blog/{{$arHrefCat}}/{{$arHrefPost}}" hreflang="{{ $arHrefCode->code }}" />
    @endforeach
  @endisset


@endif
