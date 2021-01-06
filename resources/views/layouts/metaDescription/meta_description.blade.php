@if(Illuminate\Support\Facades\Route::is('blog'))


  @if(app()->getLocale() == 'en')
      <meta name="description" content="We are a blog that posts plenty of ideas to make money online and weekly articles about different ways to earn money, we show you ways to make extra cash.">
    @elseif(app()->getLocale() == 'es')
      <meta name="description" content="Somos tu guía para como puedes ganar dinero y como consigo dinero facil y tanta ideas de trabajos desde casa.">
    @elseif(app()->getLocale() == 'ar')
      <meta name="description" content="مواضيع شاملة حول الربح من الانترنت حيث نساعدك على إيجاد أفضل طرق الربح من الانترنت و كيفية ربح المال من الانترنت للمبتدئين">
  @endif

  @elseif(Illuminate\Support\Facades\Route::is('latestArticles'))
      <meta name="description" content="{{ $meta_description }}">


  @elseif(Illuminate\Support\Facades\Route::is('blog.show'))
      <meta name="description" content="{{ $meta_description }}">


@endif
