@extends('master2')
@section('main-content')
<div class="screenFiller">
    <br/> <br/>
<section class="caviar-reservation-area d-md-flex align-items-center" >
{{--	  <div class="reservation-form-area d-flex justify-content-end">--}}

                <div class="section-heading">
<div class="container-fluid">
<h2>welcome to dashboard, {{ Auth::user()->name }}</h2>
    <br/> <br/><br/><br/> <br/><br/>
</div>
</div>

{{--</div>--}}

</section>
</div>
@endsection
