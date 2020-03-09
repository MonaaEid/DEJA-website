@extends('master2')
@section('main-content')

    <div class="container">
        <div class="row mt-5">
            <div class="card" style="width: 50rem;">
                <div class="card-body">
                    <h3 class="card-title"> {{'edit employee'}}<br></h3>
                    <p class="card-text">
                    <form enctype="multipart/form-data" action="/editemployee/{{$employee->id}}/update" method="Post">
                        @csrf
                        <div class="form-group">
                            <label for="employee_name">Employee Name</label>
                            <input type="text" class="form-control" name="employee_name"
                                    placeholder="Enter employee name" value="{{$employee->employee_name}}">
                        </div>
                        <div class="form-group">
                            <label for="salary">Salary </label>
                            <input type="text" class="form-control" name="salary"
                                      placeholder="Enter salary" value="{{$employee->salary}}">
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="city">city</label>
                            <input type="text" class="form-control" name="city"
                                      placeholder="Enter city" value="{{$employee->city}}">
                        </div>

                        <div class="form-group">
                            <label for="street">street</label>
                            <input type="text" class="form-control" name="street"
                                      placeholder="Enter street" value="{{$employee->street}}">

                        </div>
                        <div class="form-group">
                            <label for="position">position</label>
                            <input type="text" class="form-control" name="position"
                                   placeholder="Enter position" value="{{$employee->position}}">
                        </div>
                        <div class="form-group">
                            <label for="department_id">Department</label>
                            <input type="text" class="form-control" name="department_id"
                                   placeholder="Enter department id" value="{{$employee->department_id}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                        </p>
                        <!-- <a href="/dishes" class="btn btn-primary">Return to Products</a> -->
                </div>
            </div>
        </div>
    </div>
@endsection
