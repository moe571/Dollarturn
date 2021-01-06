<!DOCTYPE html>
@if(app()->getLocale() == 'ar')
<html dir="rtl" lang="{{ app()->getLocale() }}">
@else
<html lang="{{ app()->getLocale() }}">
@endif
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    @include('layouts.metaDescription.meta_description')

    @include('layouts.hreflang')

    @include('layouts.openGraphData')

    <title>@yield('title')  Dollarturn</title>


  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

  <link href="/plugins/fontawesome-free-5.13.0-web/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
  <link rel="stylesheet" type="text/css" href="/plugins/animateCss/animate.min.css">
  <link rel="stylesheet" type="text/css" href="/css/footer.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet"/>



  <link rel="stylesheet" type="text/css" href="/css/algolia.css">
  <link rel="stylesheet" type="text/css" href="/css/main.css">

  </head>
<body>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0" nonce="SLfmBJpg"></script>

<button id="btnScrollToTop">
  <i class="fas fa-arrow-up"></i>
</button>
  <!-- =======================================================
  *  Navigation
  ======================================================== -->
  <nav id="navbar" class="navbar navbar-custom navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
      <div class="nav-logo d-flex flex-column">
        <img id="logo" data-href="{{ route('blog', app()->getLocale()) }}" class="logo" src="/img/logo-transparent.png" alt="Dollarturn logo">
        <h2 id="brand-name" class="navbar-brand"><a href="{{ route('blog', app()->getLocale()) }}">DOLLARTURN</a></h2>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars toggler-bars" style="font-size:28px;"></i></span>
      </button>
      @if (app()->getLocale() == 'en')
        @include('layouts.navs.english-navbar')
      @endif
      @if (app()->getLocale() == 'ar')
        @include('layouts.navs.arabic-navbar')
      @endif
      @if (app()->getLocale() == 'es')
        @include('layouts.navs.spanish-navbar')
      @endif
    </div>
  </nav>


@yield('content')


<footer class="p-4">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-4 col-xs-12">
        <h4>{{ trans('main.About us') }}</h4>
        <img src="/img/logo-transparent.png" alt="">
        <p>{{ trans('main.Dollarturn is a blog that guides you to easy ways to make money online and to website that pays you') }}</p>
      </div>
      <div class="col-md-4 col-xs-12">
        <h4>{{ trans('main.Quick links') }}</h4>
        <ul>
          <li><a href="{{ route('latestArticles', [ app()->getLocale(), 'categories' => 'freelance']) }}"></a>{{ trans('main.Make Money') }}</li>
          <li><a href="{{ route('latestArticles', [ app()->getLocale(), 'categories' => 'online-business']) }}">{{ trans('main.Start a business') }}</a></li>
          <li><a href="{{ route('latestArticles', [ app()->getLocale(), 'categories' => 'save-money']) }}">{{ trans('main.Save money') }}</a></li>
          <li><a href="{{ route('latestArticles', [ app()->getLocale(), 'categories' => 'stocks-and-forex']) }}">{{ trans('main.Invest') }}</a></li>
          <li><a href="{{ route('latestArticles', [ app()->getLocale(), 'categories' => 'cryptocurrncies']) }}">{{ trans('main.Cryptocurrencies') }}</a></li>
          <li><a href="{{ route('contact', app()->getLocale()) }}">{{ trans('main.Contact us') }}</a></li>
          <li><a href="/auth/admin/panel/login">Admin</a></li>
        </ul>
      </div>
      <div class="col-md-4 col-xs-12">
        <h4>{{ trans('main.Subscribe') }}</h4>
        <div class="social-links mb-3">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-youtube"></a>
          <a href="#" class="fab fa-pinterest"></a>
        </div>
        <form class="" action="index.html" method="post">
            <input class="form-control mb-3" type="text" placeholder="Subscribe to our newsletter" name="" value="">
            <button type="submit" class="btn btn-info pl-4 pr-4" style="width:60%" name="button">{{ trans('main.Subscribe') }}</button>
        </form>
      </div>
    </div>
  </div>
</footer>

<section class="copyright-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h5>&copy; 2020 Dollarturn</h5>
      </div>
    </div>
  </div>
</section>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="plugins/wowjs/wow.min.js"></script>
<script src="plugins/JsCounter/numscroller-1.0.js"></script>
<script src="plugins/scrollJs/scroll.js"></script>
<script src="https://cdn.jsdelivr.net/npm/algoliasearch@3/dist/algoliasearchLite.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script>
  new WOW().init();
</script>
<script>
$(window).scroll(function() {
    if ($(window).scrollTop() >= 100 || document.documentElement.scrollTop > 100) {
      $('#btnScrollToTop').css('display', 'block');
    }else{
      $('#btnScrollToTop').css('display', 'none');
    }
});
 const btnScrollToTop = document.querySelector("#btnScrollToTop");

 btnScrollToTop.addEventListener("click", function(){
    window.scrollTo({
      top: 0,
      left: 0,
      behavior: "smooth"
    });
 });
</script>
<script src="{{ asset('js/algolia.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
