@extends('master2')
@section('main-content')
    <style type="text/css">


    </style>
    <div class=" screenFiller">
        <div class="mona">
            <h2>Restaurant info</h2>
            <table class="table table-striped table-dark t">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Organization name</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Address</th>
                    <th scope="col">logo</th>


                </tr>
                </thead>
                <tbody>
                <form action="/edit_basic_info/{{$info->id}}/update" method="post">
              @csrf


                    <tr>
                        <th scope="row"></th>
                        <td> <input type="text"  name="restaurant_name" value="{{$info->restaurant_name}}"> </td>
                        <td>  <input type="text"  name="telephone" value=" {{$info->telephone}}"></td>
                        <td> <input type="text"  name="address" value="{{$info->address}}"></td>
                        <td><img src="{{asset('img')}}/{{$info->logo}}" alt=""/> </td>

                        <td><button class="btn btn-primary" type="submit" id="submit">submit</button></td>



                    </tr>
                </form>
                </tbody>
            </table>

        </div>
    </div>
@endsection
