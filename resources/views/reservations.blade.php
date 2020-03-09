@extends('master')
@section('main-content')
{{--    <script src="https://www.google.com/recaptcha/api.js?render=_reCAPTCHA_site_key"></script>--}}
{{--    <script>--}}
{{--        grecaptcha.ready(function() {--}}
{{--            grecaptcha.execute('_reCAPTCHA_site_key_', {action: 'homepage'}).then(function(token) {--}}
{{--                {--}}
{{--                    "success": true|false,      // whether this request was a valid reCAPTCHA token for your site--}}
{{--                    "score": number  ,           // the score for this request (0.0 - 1.0)--}}
{{--                    "action": string,            // the action name for this request (important to verify)--}}
{{--                    "challenge_ts": timestamp,  // timestamp of the challenge load (ISO format yyyy-MM-dd'T'HH:mm:ssZZ)--}}
{{--                    "hostname": string,         // the hostname of the site where the reCAPTCHA was solved--}}
{{--                    "error-codes": [...]        // optional--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}

{{--    </script>--}}

{{--<script type="text/javascript">--}}

{{--    $('#submit').on('click', function() {--}}
{{--                    var hasErrors = false;--}}

{{--                    if(!validate_name($('#name').val())) {--}}
{{--                        show_error('name', 'Invalid name. Please use "firstname lastname"');--}}
{{--                        hasErrors = true;--}}
{{--                    }--}}
{{--                    if(!validate_email($('#email').val())) {--}}
{{--                        show_error('email', 'Invalid email address.');--}}
{{--                        hasErrors = true;--}}
{{--                    }--}}
{{--                    if(!$('#job').val()) {--}}
{{--                        show_error('job', 'You must select a job');--}}
{{--                        hasErrors = true;--}}
{{--                    }--}}

{{--                    if(hasErrors) return false;--}}
{{--                })--}}

{{--                $('#name, #email, #password').on('keyup', function() {--}}
{{--                    remove_error($(this).attr('id'));--}}
{{--                })--}}
{{--                $('#job').on('change', function() {--}}
{{--                    remove_error('job');--}}
{{--                })--}}

{{--</script>--}}

<section class="caviar-reservation-area d-md-flex align-items-center" id="reservation">
        <div class="reservation-form-area d-flex justify-content-end">
            <div class="reservation-form">
                <div class="section-heading">
                    @if(Session::has('status'))
                        <p class="alert alert-info">{{ Session::get('status') }}</p>
                    @endif
                    <br><br>
                    <h2>Reservation</h2>
                    <p>For parties of six or more, we recommend making reservations at least two weeks in advance. For walk-ins, we only seat parties on a first come, first served basis.</p>
                </div>
                <form action="/add" method="post">
                    @csrf
                    <div class="row">

                         <div class="col-12 col-lg-6 form-group">
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror" placeholder="First name" id="first_name" name="first_name">
                            @error('first_name')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                            @enderror

                        </div>

                        <div class="col-12 col-lg-6">
                            <input type="text" class="form-control @error('second_name') is-invalid @enderror" placeholder="Last name" name="second_name">
                            @error('second_name')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                            @enderror

                        </div>

                         <div class="col-12 col-lg-6">
                            <input type="text" class="form-control @error('guests_number') is-invalid @enderror" placeholder="Select Persons" name="guests_number">
                             @error('guests_number')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                              @enderror
                                    </div>



                        <div class="col-12 col-lg-6">
                            <input type="text" class="form-control @error('client_phone') is-invalid @enderror" placeholder="phone number" name="client_phone">
                             @error('client_phone')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                        </div>

                        <div class="col-12 col-lg-6">
                            <input type="date" class="form-control @error('date') is-invalid @enderror" name="date">
                             @error('date')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                        </div>

                        <!-- <div class="col-12 col-lg-6">
                            <input type="time" class="form-control" name="date">
                        </div> -->



                        <div class="col-12">
                            <textarea  class="form-control @error('comment') is-invalid @enderror" id="reservationMessage" cols="30" rows="10" placeholder="Your Message"
                            name="comment"></textarea>
                                 @error('comment')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
                        </div>

                        <div class="col-12">
                            <button type="submit" id="submit" class="btn caviar-btn" style="border: 1px solid ;"><span></span> Reserve Your Desk</button>
                            <br><br><br>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="reservation-side-thumb wow fadeInRightBig" data-wow-delay="0.5s">
            <img src="{{asset('img')}}/bg-img/hero-3.jpg" alt="">
        </div>
    </section>
  {{-- @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
        </ul>

    @endif --}}
    @endsection


