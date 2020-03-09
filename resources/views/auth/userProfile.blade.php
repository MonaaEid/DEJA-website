@extends('master')

<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
<link href="{{asset('css')}}/style2.css" rel="stylesheet">


@section('main-content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('img')}}/bg-img/hero-3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
        <!--   <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Contact</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact us <i class="ion-ios-arrow-forward"></i></span></p>
          </div> -->
        </div>
      </div>
</section>

        <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
            <div class="container">
                <div class="row d-flex align-items-stretch no-gutters">
                    <div class="col-md-6 pt-5 px-2 pb-2 p-md-5 order-md-last">
                        @if(Session::has('status'))
                            <p class="alert alert-info">{{ Session::get('status') }}</p>
                        @endif
                        <h2 class="h4 mb-2 mb-md-5 font-weight-bold">Edit Profile</h2>
                         <form method="post" action="/profile/{{$user->id}}/update" enctype="multipart/form-data" >

                             @csrf



                         {{--   @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif--}}
              <div class="form-group">
                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$user->name}}" name="name"  required>
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                  @enderror
              </div>
              <div class="form-group">
                <input type="text" class="form-control @error('email') is-invalid @enderror"  value="{{$user->email}}" name="email"  required>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                  @enderror
              </div>

                 <div class="col-md-6 d-flex align-items-stretch">
                        <div id="map">
                          <p><input type="file" class="@error('myimage') is-invalid @enderror" accept="image/*"  name="myimage" id="file"  onchange="loadFile(event)" style="display: none;"></p>
                          <p><label for="file" class="btn btn-primary py-3 px-5" style="cursor: pointer;">upload avatar</label></p>
                          <p><img id="output" width="200" src="{{asset('img')}}/avatar/{{$user->avatar}}" /></p>
                            @error('myimage')
                            <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                            @enderror
                        </div>
                    </div>




              <!-- <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div> -->
              <script>
              let loadFile = function(event) {
                let image = document.getElementById('output');
                image.src = URL.createObjectURL(event.target.files[0]);
              };
              </script>
              <div class="form-group">
               <button type="submit"> <a class="btn caviar-btn"><span></span> reset your data </a></button>
              </div>
            </form>
                    </div>
                 <!-- ////////// -->
                </div>
            </div>
        </section>
       @endsection


<script src="{{asset('js')}}/main.js"></script>
