@extends('master')
@section('main-content')
{{--<body id="mybody">--}}
    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url({{asset('img')}}/bg-img/hero-2.jpg)">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h2>Menu</h2>
                        <a href="#menu" id="menubtn" class="btn caviar-btn"><span></span> Special</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Menu Area Start ***** -->
    <div class="caviar-food-menu section-padding-150 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="food-menu-title">
                        <h2>Menu</h2>
                    </div>
                </div>

                <div class="col-10">
                    <div class="caviar-projects-menu">
                        <div class="text-center portfolio-menu">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".breakfast">breakfast</button>
                            <button data-filter=".lunch">lunch</button>
                            <button data-filter=".dinner">dinner</button>
                        </div>
                    </div>
                </div>

                    <div class="caviar-menu-slides owl-carousel  clearfix">

                        <div class="caviar-portfolio clearfix">
                            <!-- Single Gallery Item -->
                            @foreach( $breakfast as $breakfastI)
                            <div class="single_menu_item breakfast wow fadeInUp">

                                <div class="d-sm-flex align-items-center">

                                    <div class="dish-thumb">

                                        <img src="{{asset('img')}}/menu-img/{{$breakfastI->dish_image}}" alt="" style="width:250px ;height: 250px">
                                    </div>
                                    <div class="dish-description">
                                        <h3>{{$breakfastI->dish_name}}</h3>
                                        <p>{{$breakfastI->dish_description}}.</p>
                                    </div>
                                    <div class="dish-value">
                                        <h3>${{$breakfastI->dish_price}}</h3>
                                    </div>

                                </div>

                            </div>
                            @endforeach
                        </div>
{{--                        lunch area--}}
                        <div class="caviar-portfolio clearfix">
                            @foreach( $lunch as $lunchI)
                                    <div class="single_menu_item lunch wow fadeInUp">

                                        <div class="d-sm-flex align-items-center">
                                            <div class="dish-thumb">
                                                <img src="{{asset('img')}}/menu-img/{{$lunchI->dish_image}}" alt="" style="width:250px">
                                            </div>
                                            <div class="dish-description">
                                                <h3>{{$lunchI->dish_name}}</h3>
                                                <p>{{$lunchI->dish_description}}.</p>
                                            </div>
                                            <div class="dish-value">
                                                <h3>${{$lunchI->dish_price}}</h3>

                                            </div>
                                        </div>

                                    </div>
                              @endforeach
                            </div>


{{--                    dinner area--}}
                <div class="caviar-portfolio clearfix">
                    @foreach( $dinner as $dinnerI)
                        <div class="single_menu_item dinner wow fadeInUp">

                            <div class="d-sm-flex align-items-center">
                                <div class="dish-thumb">
                                    <img src="{{asset('img')}}/menu-img/{{$dinnerI->dish_image}}" alt="" style="width:250px">
                                </div>
                                <div class="dish-description">
                                    <h3>{{$dinnerI->dish_name}}</h3>
                                    <p>{{$dinnerI->dish_description}}.</p>
                                </div>
                                <div class="dish-value">
                                    <h3>${{$dinnerI->dish_price}}</h3>

                                </div>
                            </div>

                        </div>
                    @endforeach
               </div>

                    </div>

                    </div>
            </div>

    <!-- ***** Menu Area End ***** -->

    <!-- ***** Special Menu Area Start ***** -->

                <!-- ***** Special Menu Area Start ***** -->
                <section class="caviar-dish-menu clearfix" id="menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 menu-heading">
                                <div class="section-heading text-center">
                                    <h2>Special</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($specials as $special)
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="caviar-single-dish wow fadeInUp" data-wow-delay="0.5s">
                                    <img src="{{asset('img')}}/menu-img/{{$special->dish_image}}" alt="">
                                    <div class="dish-info">
                                        <h6 class="dish-name">{{$special->dish_name}}</h6>
                                        <p class="dish-price">${{$special->dish_price}}</p>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                        </div>
                    </div>
                </section>
            </div>


                            <!-- ***** Special Menu Area End ***** -->
{{--    <script>--}}
{{--       $(document).ready(function () {--}}
{{--           // $.ajaxSetup({--}}
{{--           //     headers: {--}}
{{--           //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--           //     }--}}
{{--           // });--}}
{{--           // $(function () {--}}
{{--           // })--}}
{{--           fetch_dishes_data();--}}
{{--            function fetch_dishes_data(query = '') {--}}
{{--                $.ajax({--}}
{{--                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},--}}
{{--                    url:"{{ route('action') }}" ,--}}
{{--                    method:'GET' ,--}}
{{--                    data: {query:query},--}}
{{--                    dataType:'json' ,--}}
{{--                    success:function (query) {--}}
{{--                        $('#body').html(query.table_data);--}}
{{--                        // $('body').text(data.total_data);--}}
{{--                    }--}}

{{--                })--}}
{{--            }--}}
{{--//     $(document).ready(function () {--}}
{{--//                 $('#search-btn').on('keyup',function () {--}}
{{--//                     var query = $(this).val().toLowerCase();--}}
{{--//                     $('#mybody').filter(function() {--}}
{{--//                         $(this).toggle($(this).text().toLowerCase().indexOf(value)> -1)--}}
{{--//--}}
{{--//                     });--}}
{{--//--}}
{{--//                 });--}}
{{--//--}}
{{--//        });--}}

{{--    //--}}
    {{--</script>--}}
{{--</body>--}}
@endsection
