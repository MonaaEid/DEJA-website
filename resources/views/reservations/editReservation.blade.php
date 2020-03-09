@extends('master')
@section('main-content')


<section class="caviar-reservation-area d-md-flex align-items-center" id="reservation">
        <div class="reservation-form-area d-flex justify-content-end">
            <div class="reservation-form">
                <div class="section-heading">
                    <br><br>
                    <h2>Reservation</h2>
                    
                </div>
                <form action="/editr/{{$reservation->id}}/update" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-lg-6 form-group">
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror" placeholder="First name" id="first_name" name="first_name" value="{{$reservation->first_name}}">
                            @error('first_name')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                            @enderror
                        </div>

                        <div class="col-12 col-lg-6">
                            <input type="text" class="form-control @error('second_name') is-invalid @enderror" placeholder="Last name" name="second_name" value="{{$reservation->last_name}}">
                             @error('second_name')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                            @enderror

                        </div>

                        <div class="col-12 col-lg-6">
                            <input type="text" class="form-control @error('client_phone') is-invalid @enderror" placeholder="phone number" name="client_phone" value="{{$reservation->client_phone}}">
                            @error('client_phone')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror

                        </div>

                        <div class="col-12 col-lg-6">
                            <input type="text" class="form-control @error('guests_number') is-invalid @enderror" placeholder="Select Persons" name="guests_number" value="{{$reservation->guests_number}}">
                             @error('guests_number')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                              @enderror
                        </div>

                        <div class="col-12 col-lg-6">
                            <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" placeholder="">
                             @error('date')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                        </div>

  
                        <div class="col-12">
                            <textarea  class="form-control @error('comment') is-invalid @enderror" id="reservationMessage" cols="30" rows="10" placeholder="Your Message"
                            name="comment"> {{$reservation->comment}}</textarea>
                            @error('comment')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                             @enderror
                        </div>

                        <div class="col-12">
                            <button type="submit" id="submit" class="btn caviar-btn" style="border: 1px solid ;"><span></span> Update</button>
                            <br><br><br>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- <div class="reservation-side-thumb wow fadeInRightBig" data-wow-delay="0.5s">
            <img src="{{asset('img')}}/bg-img/hero-3.jpg" alt="">
        </div> -->
    </section>
   @include('errors.list')
    
   @endsection