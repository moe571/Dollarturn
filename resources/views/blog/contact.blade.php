@extends('layouts.main')


@section('content')
<header class="contact d-flex align-items-end justify-content-center">
  <h1 class="pb-3"> Contact us </h1>
</header>
<div class="background m-0 p-5">
  <section class="contact-form-section mb-2 mt-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form class="contact-form mx-auto p-5 mb-5" action="">
            <div class="form-header">
              <h1 class="mb-4">Contact</h1>
              <h4 class="mb-5">Fill in the form bellow to send a message</h4>
              <i class="fas fa-envelope"></i>
            </div>
            <input type="text" class="form-control mx-auto pb-2 pt-2" name="name" value="Name" placeholder="Name">
            <input type="text" class="form-control mx-auto pb-2 pt-2" name="email" value="Email" placeholder="Email">
            <textarea name="message" class="form-control mx-auto" rows="8" cols="80" placeholder="Message"></textarea>
            <center>
              <button type="submit" class="btn btn-info mx-auto" name="button">Send message</button>
            </center>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
