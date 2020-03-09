@extends('master2')
@section('main-content')
    <style type="text/css">


    </style>
    <div class=" screenFiller">
        <div class="mona">
            <h2>Reservations</h2>
            <table class="table table-striped table-dark t">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">F.name</th>
                    <th scope="col">L.name</th>
                    <th scope="col">phone</th>
                    <th scope="col">No.of guests</th>
                    <th scope="col">comment</th>

                </tr>
                </thead>
                <tbody>
                @foreach($reservations as $reservation)

                    <tr>
                        <th scope="row"></th>
                        <td>{{$reservation->first_name}}</td>
                        <td>{{$reservation->last_name}}</td>
                        <td>{{$reservation->client_phone}}</td>
                        <td>{{$reservation->guests_number}}</td>
                        <td>{{$reservation->comment}}</td>
                        <td><button class="btn btn-danger"><a href="/deleter/{{$reservation->id}}" style="color: white">Delete</a></button></td>


                        <td><button class="btn btn-warning"><a href="/editr/{{$reservation->id}}" style="color: white">Edit</a></button></td>


                        <td> <button class="btn btn-primary"> <a href="/list/{{$reservation->id}}" style="color: white">Show</a></button></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
