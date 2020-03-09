@extends('master2')
@section('main-content')

    <div class="container">
        <div class="row mt-5">
            <div class="card" style="width: 50rem;">
                <div class="card-body">
                    <h5 class="card-title"> {{'Add new dish'}}<br></h5>
                    <p class="card-text">
                    <form enctype="multipart/form-data" action="/upload" method="Post">
                        @csrf
                        <div class="form-group">
                            <label for="dish_name">Dish Name</label>
                            <input type="text" class="form-control" name="dish_name" id="dish_name"
                                    placeholder="Enter Dish Name">
                        </div>
                        <div class="form-group">
                            <label for="myimage">Dish image </label>
                            <input type="file" class="form-control" accept="image/*" name="myimage" id="myimage"
                                      placeholder="Enter Dish image">
                        </div>
                            </div>
                        <div class="form-group">
                            <label for="dish_type">Dish type </label>
                             <select id="inputSection" class="form-control" name="dish_type">
                                <option selected>Choose...</option>
                                <option>lunch</option>
                                <option>breakfast</option>
                                <option>dinner</option>

                             </select>
                        </div>

                        <div class="form-group">
                            <label for="dish_type">special or regular </label>
                             <select id="inputSection" class="form-control" name="dish_special">
                                <option selected>Choose...</option>
                                <option>special</option>
                                <option>regular</option>
                             </select>
                        </div>

                        <div class="form-group">
                            <label for="dish_description">Dish description </label>
                            <textarea type="text" class="form-control" name="dish_description" id="dish_description"
                                      placeholder="Enter dish description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="dish_price">Dish price</label>
                            <input type="text" class="form-control" name="dish_price" id="dish_price"
                                   placeholder="Enter dish price">
                        </div>
                        <div class="form-group">
                                    <label for="id">select Category</label>
                                    <select class="form-control" id="id" name="id">
                                    @foreach($categories as $category)
                                    <option>
                                     {{$category->category_name}}

                                   @endforeach

                                    </option>

                                    </select>
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
