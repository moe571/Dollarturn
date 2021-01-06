@extends('layouts.main')

@section('content')

<!-- =======================================================
*  Hero Carousel
======================================================== -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item s1 active">
      <img class="d-none d-sm-block" src="/img/landing-page/bg1.png" alt="First slide">
      <div class="carousel-caption">
        <h1 class="wow animate__animated animate__fadeInUp">{{ trans('main.We are your shortcut to easy ways to make money online') }}</h1>
      </div>
    </div>
    <div class="carousel-item s2">
      <img class="d-none d-sm-block" src="/img/landing-page/bg2.png" alt="Second slide">
      <div class="carousel-caption">
        <h1 class="wow animate__animated animate__fadeInUp">{{ trans('main.We share with you legitimate ways to make extra cash') }}</h1>
      </div>
    </div>
    <div class="carousel-item s3">
      <img class="d-none d-sm-block" src="/img/landing-page/bg3.png" alt="Third slide">
      <div class="carousel-caption">
        <h1 class="wow animate__animated animate__fadeInUp">{{ trans('main.Weekly new ideas to make money online') }}</h1>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<div class="wave">
  <svg width="100%" height="300px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
      <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
        <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
      </g>
    </g>
  </svg>
</div>


<!-- =======================================================
*  Selection Section
======================================================== -->


<section class="selection-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="wow animate__animated animate__fadeInUp">{{ trans('main.Choose your path') }}</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-xs-12 none-investment">
        <h2>{{ trans('main.Require zero investment') }}</h2>
        <hr class="d-block d-sm-none">
        @foreach($categories as $category)
          @if($category->type == 'non-investment' )
          <div class="wow animate__animated animate__lightSpeedInLeft card mb-3 item border-0" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="d-flex justify-content-center col-md-4">
                <img src="/img/landing-page/{{$category->slug}}.png" class="card-img" alt="{{$category->slug}}">
              </div>
              <div class="d-flex align-items-center col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><a href="{{ route('latestArticles', [app()->getLocale() ,$category->slug]) }}">{{ $category->title }}</a></h5>
                </div>
              </div>
            </div>
           </div>
          @endif
        @endforeach
      </div>

      <div class="col-lg-6 col-xs-12 investment">
        <hr class="d-block d-sm-none">
        <h2 class="no-investment">{{ trans('main.Require some investment') }}</h2>
        <hr class="d-block d-sm-none">

        @foreach($categories as $category)
          @if($category->type == 'investment' )

          <div class="wow animate__animated animate__lightSpeedInRight card mb-3 item border-0" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="d-flex align-items-center col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><a href="{{ route('latestArticles', [app()->getLocale() ,$category->slug]) }}">{{ $category->title }}</a></h5>
                </div>
              </div>
              <div class="d-flex justify-content-center col-md-4">
                <img src="/img/landing-page/{{$category->slug}}.png" class="card-img" alt="{{$category->slug}}">
              </div>
            </div>
           </div>
          @endif
        @endforeach
      </div>
    </div>
  </div>
</section>

<!-- =======================================================
*  Counters Section
======================================================== -->


<section id="counter-section" class="counter-section text-white mb-5 py-5 min-vh-100">
 <div class="container">
  <div id="counter" class="row justify-content-center text-center">
   <div class="col-md-4 wow animate__animated animate__bounceIn">
     <h5>{{ trans('main.Articles') }}</h5>
    <span id="count1" class="numscroller display-4 counter border rounded-circle" data-min='1' data-max='125' data-delay='5' data-increment='1'>125</span>
   </div>
   <div class="col-md-4 wow animate__animated animate__bounceIn animate__delay-1s">
     <h5>{{ trans('main.Income sources') }}</h5>
    <span id="count2" class="numscroller display-4 counter border rounded-circle" data-min='1' data-max='78' data-delay='5' data-increment='1'>78</span>
   </div>
   <div class="col-md-4 wow animate__animated animate__bounceIn animate__delay-2s">
     <h5>{{ trans('main.Online opportunity') }}</h5>
    <span id="count3" class="numscroller display-4 counter border rounded-circle" data-min='1' data-max='25' data-delay='3' data-increment='1'>25</span>
   </div>
  </div>
 </div>
</section>

<!-- =======================================================
*  Our Approach Section
======================================================== -->
<section class="our-approach p-5 min-vh-100 ">
  <div class="container">
    <div class="row">
      <div class="col-md-6 wow animate__animated animate__fadeInLeft animate__slow">
        <h1>{{ trans('main.Our approach') }}</h1>
        <p>{{ trans('main.Whether you are using a computer or a mobile phone, whether you have a degree or never attended college, There is plenty of ways of making money online and at least one of them is your ideal path if you') }} <span class="just-start">{{ trans('main.just start') }}</span></p>
      </div>
      <div class="col-md-6 wow animate__animated animate__fadeInRight animate__slow d-flex justify-content-center">
        <img src="/img/landing-page/our-approach.png" alt="">
      </div>
    </div>
  </div>
</section>



<!-- =======================================================
*  Newsletter Section
======================================================== -->

<section class="newsletter-section p-5 mb-2">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-center">
        <h4>{{ trans('main.Subscribe to our newsletter and receive our latest updates about different online money making ways') }}</h4>
      </div>
      <div class="col-md-6">
        <form action="">
          <input type="text" class="form-control mb-3" name="" value="" placeholder="Enter your email">
          <center><button type="submit" class="btn btn-info" name="button">Subscribe</button></center>
        </form>
      </div>
    </div>
  </div>
</section>


@endsection
