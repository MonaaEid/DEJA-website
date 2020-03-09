@extends('master2')

@section('main-content')
<div class="" style="background: #ddd ;padding-top: 100px; ">
<div class="card container" style="width: 25rem; ">
  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
  <div class="card-body ">
    <h5 class="card-title">Booking for Mr/Ms {{$reservation->first_name}}  </h5>
    <p class="card-text"></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Last name:  {{$reservation->last_name}}</li>
    <li class="list-group-item">Phone: {{$reservation->client_phone}}</li>
    <li class="list-group-item">No. of guests: {{$reservation->guests_number}}</li>
    <li class="list-group-item">comment: {{$reservation->comment}}</li>
    <li class="list-group-item">booking date: {{$reservation->booking_date}}</li>
    <li class="list-group-item">user id: {{$reservation->user_id}}</li>

  </ul>
  <div class="card-body">
    <a href="{{$url}}" class="card-link">Card link</a>
    <a href="/list" class="card-link">back to list</a>
  </div>
</div>
</div>
{{--    <!-- <div class="container">--}}
{{--        <p >--}}
{{--            <p class="card" style="width: 50rem;">--}}
{{--                <p class="card-body">--}}
{{--                    <h5 class="card-title"> {{$reservation->first_name}} {{$reservation->second_name}}<br></h5>--}}
{{--                    <p class="card-text">--}}
{{--                        <br>--}}
{{--                        <div style="color: red;">{{$reservation->client_phone}}</div>--}}
{{--                    {{$reservation->guests_number}}--}}
{{--                     {{$reservation->comment}}<br><br>--}}
{{--                     {{$reservation->booking_date}}<br><br>--}}
{{--                     {{$reservation->user_id}}--}}
{{--                </p>--}}
{{--        </p>--}}
{{--        </p>--}}
{{--        </p>--}}
{{--                      <a href="/products" class="btn btn-primary">return to Products</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div> -->--}}
