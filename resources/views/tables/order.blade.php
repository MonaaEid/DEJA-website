@extends('master2')
@section('main-content')
    <div class=" screenFiller">
        <div class="mona">
            <h2>orders list</h2>
            <table class="table table-striped table-dark t">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">F.name</th>
                    <th scope="col">L.name</th>
                    <th scope="col">phone</th>
                    <th scope="col">Payment Method</th>
                    <th scope="col">Net Price</th>

                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)

                    <tr>
                        <th scope="row"></th>
                        <td>{{$order->first_name}}</td>
                        <td>{{$order->last_name}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->payment_method}}</td>
                        <td>{{$order->net_price}}</td>
                        <td><button class="btn btn-danger"><a href="/dashboard/delete/{{$order->id}}" style="color: white">Delete</a></button></td>


{{--                        <td><button class="btn btn-warning"><a href="/editr/{{$order->id}}" style="color: white">Edit</a></button></td>--}}


{{--                        <td> <button class="btn btn-primary"> <a href="/list/{{$order->id}}" style="color: white">Show</a></button></td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
