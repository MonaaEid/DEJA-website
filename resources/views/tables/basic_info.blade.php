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
            @foreach($infos as $info)

            <tr>
                <th scope="row"></th>
                <td>{{$info->restaurant_name}}</td>
                <td>{{$info-> telephone}}</td>
                <td>{{$info-> address}}</td>
                <td><img src="{{asset('img')}}/{{$info-> logo}}" alt=""/> </td>




                <td><button class="btn btn-warning"><a href="/edit_basic_info/{{$info-> id}}" style="color: white">Edit</a></button></td>



            </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
