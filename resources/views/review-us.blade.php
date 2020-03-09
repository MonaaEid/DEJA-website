@extends('master')
<link href="{{asset('css')}}/style2.css" rel="stylesheet">
@section('main-content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('img/bg-img/hero-4.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            
          </div>
        </div>
      </div>
</section>
</br></br>
@if(Session::has('status'))
                        <p class="alert alert-info">{{ Session::get('status') }}</p>
                    @endif
        
        <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
            <div class="container">
                <div class="row d-flex align-items-stretch no-gutters">
                    <div class="col-md-6 pt-5 px-2 pb-2 p-md-5 order-md-last">
                        <h2 class="h4 mb-2 mb-md-5 font-weight-bold">Review Us</h2>
                        <form method="post" action="/review-us/store">
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
                <input type="submit" value="submit" class="btn btn-primary py-3 px-5">
              </div>
            </form>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        
                    </div>
                </div>
            </div>
        </section>
@endsection
