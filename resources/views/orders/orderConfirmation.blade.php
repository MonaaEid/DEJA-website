@extends('master')

@section('main-content')
    <div class="" style="background: #ddd ;padding-top: 100px; ">
        <div class="card container" style="width: 25rem; ">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <div class="card-body ">
                <h5 class="card-title">order for Mr/Ms {{$order->first_name}}  </h5>
                <p class="card-text"></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Last name:  {{$order->last_name}}</li>
                <li class="list-group-item">payment: {{$order->payment_method}}</li>
                <li class="list-group-item">net price: {{$order->net_price}}</li>

            </ul>
            <div class="card-body">
{{--                <a href="{{$url}}" class="card-link">Card link</a>--}}
                <a href="/order" class="card-link">make new order</a>
                <button class="btn btn-danger"><a href="/order/cancel/{{$order->id}}" style="color: white">cancel order</a></button>
            </div>
        </div>
    </div>
    @endsection
