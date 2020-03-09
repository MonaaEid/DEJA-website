@extends('master2')
@section('main-content')
    <style type="text/css">


    </style>
    <div class=" screenFiller">
        <div class="mona">
            <h2>Employees</h2>
            <table class="table table-striped table-dark t">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Empolyee Name</th>
                    <th scope="col">Salary</th>
                    <th scope="col">City</th>
                    <th scope="col">Street</th>
                    <th scope="col">position</th>
                    <th scope="col">Department</th>

                </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee)

                    <tr>


                        <th scope="row"></th>
                        <td>{{$employee->employee_name}}</td>
                        <td>{{$employee->salary}}</td>
                        <td>{{$employee->city}}</td>
                        <td>{{$employee->street}}</td>
                        <td>{{$employee->position}}</td>
                        <td>{{$employee->department_id}}</td>
                        <td><button class="btn btn-danger"><a href="/delete/{{$employee->id}}" style="color: white">Delete</a></button></td>


                        <td><button class="btn btn-warning"><a href="/editemployee/{{$employee->id}}" style="color: white">Edit</a></button></td>


{{--                        <td> <button class="btn btn-primary"> <a href="/list/{{$reservation->id}}" style="color: white">Show</a></button></td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
