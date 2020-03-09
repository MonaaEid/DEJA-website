@extends('master2')
@section('main-content')

    <div class="container">
        <div class="row mt-5">
            <div class="card" style="width: 50rem;">
                <div class="card-body">
                    <h3 class="card-title"> {{'Add anew employee'}}<br></h3>
                    <p class="card-text">
                    <form enctype="multipart/form-data" action="/addemployee" method="Post">
                        @csrf
                        <div class="form-group">
                            <label for="employee_name">Employee Name</label>
                            <input type="text" class="form-control" name="employee_name" id="employee_name"
                                    placeholder="Enter employee name">
                        </div>
                        <div class="form-group">
                            <label for="salary">Salary </label>
                            <input type="text" class="form-control" name="salary" id="salary"
                                      placeholder="Enter salary">
                        </div>
                            </div>
                        <div class="form-group">
                            <label for="city">city</label>
                            <input type="text" class="form-control" name="city" id="city"
                                      placeholder="Enter city">
                        </div>
                        <div class="form-group">
                            <label for="street">street</label>
                            <input type="text" class="form-control" name="street" id="street"
                                      placeholder="Enter street">
                        </div>
                        <div class="form-group">
                            <label for="position">position</label>
                            <input type="text" class="form-control" name="position" id="position"
                                   placeholder="Enter position">
                        </div>
                        <div class="form-group">
                            <label for="department_id">Department</label>
                            <input type="text" class="form-control" name="department_id" id="department_id"
                                   placeholder="Enter department id">
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
