@extends('master2')
@section('main-content')
{{--        <!-- load css -->--}}
{{--        <link href="{{asset('css')}}/bootstrap/bootstrap.css" rel="stylesheet" />--}}
{{--		<link href="{{asset('css')}}/bootstrap/bootstrap-theme.css" rel="stylesheet" />--}}
{{--        <!-- load js libs -->--}}
{{--		<script src="{{asset('js')}}/jquery/jquery-1.12.4.min.js"></script>--}}
{{--		<script src="{{asset('css')}}/bootstrap/bootstrap.min.js"></script>--}}
{{--		<script src="{{asset('js')}}/forms.js"></script>--}}

{{--		<style>--}}
{{--		</style>--}}
{{--	</head>--}}

	<body>
		<div class="container">
        <br/><br/><br/>
			<a class="btn btn-success" href="/createMenu">Add new Dish</a>
			<table class="table table-hover">
				<thead>
					<tr>

						<th>Dish Name</th>
						<th>Dish Type</th>
						<th>Dish price</th>
						<th>Dish Description</th>
						<th>Dish special</th>
						<th>Dish Image</th>
						<th></th>
						<th></th>

					</tr>
				</thead>
				<tbody>
					@foreach($dishes as $dish)
					<tr>
						<td>{{$dish->dish_name}}</td>
						<td>{{$dish->dish_type}}</td>
						<td>{{$dish->dish_price}}</td>
						<td>{{$dish->dish_description}}</td>
						<td>{{$dish->dish_special}}</td>
						<td>
							<img src="{{asset('img')}}/menu-img/{{$dish->dish_image}}" alt="" width="250"/>
						</td>
						<td>
						<a href="/editMenu/{{$dish->id}}" type="button" class="btn btn-danger">Edit</a>
						</td>
						<td>
                            <a href="/deletedish/{{$dish->id}}" type="button" class="btn btn-warning">Delete</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</body>
</html>
@endsection


