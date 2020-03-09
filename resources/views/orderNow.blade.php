@extends('master')

@section('main-content')


<script>

  $(document).ready(function(){
      $('.dynamic').change(function(value){
          //alert('monaaaa');
          if($(this).val() != '') {
              let value = $(this).val();
              console.log(value);

              $.ajax({
                  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                  method:'GET' ,
                  url:'/price' ,
                  data:{value: value} ,
                  dataType:'json' ,//return data will be json
                  success: function (op) {
                      $("#price0").val(op);
                      // console.log(data.op);
                      console.log(op);
                      // alert('hello');
                  }
              });
          }



      });


    let counter=1;
    $('#add').on("click",function(){
      $('#addHere').append("<div></div>");
      $('#addHere div:last').attr({
        class:"form-group form-inline mb-2",
        id:"div"+counter,
      });
      //append
      $('#addHere div:last').append(`
        <select class="aya form-control " ></select>
        <input value="1" type="number" min="1" class="form-control">
        <input type="text" class="form-control mo">
        <input type="button" class="rem  btn-danger" value=" x " onclick="rem()" >
      <br>
`);
      $('#addHere #div'+counter+' select').attr({'name':'meal'+counter,'id':'dynamic'+counter,'onchange':'fun(this)'});
      $('#addHere #div'+counter+' input:nth-child(2)').attr({'id':'quantity'+counter,'onchange':'fun2(this)' ,'name':'quantity'+counter});
        $('#addHere #div'+counter+' input:nth-child(3)').attr('id','price'+counter);
      $('#addHere #div'+counter+' input:nth-child(4)').attr('id','rem'+counter);

        @foreach($dishes as $dish)
        $('#addHere #div'+counter+' select').append('<option></option>');
        $('#addHere #div'+counter+' select option:last').attr( 'value','{{$dish->id}}');
        $('#addHere #div'+counter+' select option:last').text('{{$dish->dish_name}}');
      @endforeach



          counter++;


    });
  });

  function rem() {
      $('#addHere div').last().remove();
      // let val=index.parentNode.id;
      // $('#'+val).remove();
      // alert('helloo');
  }
function fun(index){
  // let inputID=index.parentNode.childNodes[5].id;
  let selectID=index.value;
  // console.log(selectID);
  $.ajax({
                  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                  method:'GET' ,
                  url:"{{route ('priceTwo')}}" ,
                  data:{selectID: selectID} ,
                  // dataType:'json' ,//return data will be json
                  success: function (op) {
                      // $("#price").val(op);
                      // console.log(data.op);
                      // console.log(op);
                      // alert('hello');
                        index.parentNode.childNodes[5].value=op;
                  }
              });
}

function fun2(index){
  // let inputID=index.parentNode.childNodes[5].id;
  // let selectID=index.value;
  let quantity=index.value;
  let dishID=index.parentNode.childNodes[1].value;
  // console.log(quantity,dishID);
  $.ajax({
                  // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                  method:'GET' ,
                  url:"{{route ('totalPriceUpdate')}}" ,
                  data:{quantity: quantity, dishID: dishID} ,
                  // dataType:'json' ,//return data will be json
                  success: function (response) {
                        index.parentNode.childNodes[5].value=response;
                        // $('.totalPrice').val(totalPrice.response)
                  }
              });
}

</script>
<div class="container-fluid" style="background-image: url({{asset('img')}}/bg-img/hero-5.jpg);" width="100%" height="100%" >
  <div class="row justify-content-center">
   <div class="form-container">
    <div class="card card-default">
    <div class="card-header">
    <h1 style="color:#17a2b8"><center>make your order</center></h1>
        @if(Session::has('status'))
            <p class="alert alert-info">{{ Session::get('status') }}</p>
        @endif
    </div>
    <div class="card-body">
      <form action="/store" method="post">
      @csrf



      <div class="form-group row">
          <div class="col-md-12">
            <h6 name="date" style="color:#17a2b8">{{carbon\carbon::now()}}</h6>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-12">
            <label for="">Name</label>
           <input type="text" class="form-control  @error('first_name') is-invalid @enderror"  placeholder="First name" name="first_name" >
              @error('first_name')
              <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
              @enderror
              <br>
           <input type="text" class="form-control @error('last_name') is-invalid @enderror" placeholder="Last name" name="last_name" required>
              @error('last_name')
              <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
              @enderror
          </div>
        </div>
        <div class="form-group row">
         <div class="col-md-12">
           <label>Phone Number</label>
           <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter your Phone" name="phone" required>
             @error('phone')
             <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
             @enderror
         </div>
        </div>
        <div class="form-group row">
         <div class="col-md-4">
           <label>Street Name</label>
           <input type="text" class="form-control @error('street') is-invalid @enderror" placeholder="Enter street name" name="street" required>
             @error('street')
             <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
             @enderror
         </div>
         <div class="col-md-4">
             <label>City</label>
             <input type="text" class="form-control @error('city') is-invalid @enderror" placeholder="Enter city name" name="city" required>
             @error('city')
             <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
             @enderror
         </div>
            <div class="col-md-4">
                <label>Postal code</label>
                <input type="text" class="form-control @error('postal_code') is-invalid @enderror" placeholder="Enter postal code" name="postal_code" required>
                @error('postal_code')
                <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                @enderror
            </div>

        </div>

        <div class="form-group row">
          <label for="meal0">meals</label>
          <div class="col-md-12 form-group form-inline mb-2  input-group-prepend" >

             <select class="form-control dynamic  btn-secondary dropdown-toggle" name="meal0"  >
{{--                 <option selected >pick your meal</option>--}}
                 @foreach($dishes as $dish)

                  <option value="{{$dish->id}}">{{$dish->dish_name}}
                  </option>
                @endforeach
             </select>

               <input value="1" type="number" min="1" name="quantity0" class="form-control input-group-text" onchange="fun2(this)">
              <input  id="price0" />
            <input type="button" class="btn btn-outline-dark " id="add" value="add">

          </div>
        </div>

        <div id="addHere"></div>


          <button type="button"  class="btn btn-warning" onclick="window.location='{{ URL::previous() }}'">Cancel</button>

        <div class="form-group row">
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-block" style="background-color:rgb(131, 125, 125)"
            >Order Now</button>
          </div>
        </div>
</form>
</div>
</div>
</div>
</div>
</div>


@endsection
