@extends('master')

<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
<link href="{{asset('css')}}/style2.css" rel="stylesheet">
<style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
        height: 100%;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>


@section('main-content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('img')}}/bg-img/hero-3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Contact</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
</section>
        <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
            <div class="container">
                <div class="row d-flex align-items-stretch no-gutters">
                    <div class="col-md-6 pt-5 px-2 pb-2 p-md-5 order-md-last">
                        <h2 class="h4 mb-2 mb-md-5 font-weight-bold">Contact Us</h2>
                        <form method="post" action="/contact-us/send">
                          {{csrf_field()}}
              <div class="form-group">
                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Your Name" name="name">
                 @error('name')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
              <div class="form-group">
                <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Your Email" name="email">
                 @error('email')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
              <div class="form-group">
                <input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" name="subject">
                 @error('subject')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
              <div class="form-group">
                <textarea  id="" cols="30" rows="7" class="form-control textarea @error('message') is-invalid @enderror" placeholder="Message" name="message"></textarea>
                 @error('message')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4 font-weight-bold">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
            <div class="dbox">
                <p><span>Address:</span>  23 El Mohafza Street, Aswan</p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
            <div class="dbox">
                <p><span>Phone:</span> <a href="tel://1234567920">+ 19013</a></p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
            <div class="dbox">
                <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@deja.com</a></p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
            <div class="dbox">
                <p><span>Website</span> <a href="/">deja.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=true"></script>
{{--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"--}}
{{--        async defer></script>--}}

<script src="{{asset('js')}}/google-map.js"></script>
<script src="{{asset('js')}}/main.js"></script>
