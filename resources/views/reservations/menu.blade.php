@extends('master')
@section('main-content')

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
                    <div class="caviar-menu-slides owl-carousel clearfix">
                        <div class="caviar-portfolio clearfix">

                        <div class="caviar-portfolio clearfix">
                            <!-- Single Gallery Item -->
                        @foreach($dishes as $dish)
                        <div class="caviar-menu-slides owl-carousel clearfix"></div>
                        <div class="single_menu_item breakfast wow fadeInUp">
                        <div class="container" >
                                <div class="row">
                                    <div class="col-sm-4">
                                        <span><img  src="{{ asset('img')}}/menu-img/{{ $dish->dish_image}}" alt="" width="250px"></span>
                                    </div>
                                    <div class="col-sm-4" >
                                        <h3>{{$dish->dish_name}}</h3>
                                        <p style="text-align: center;">{{$dish->dish_description}}</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <br><br><br><br>
                                        <h3 style="text-align: center;color: #0c0c0c" class="dish-value" to>{{$dish->dish_price}}$</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ***** Menu Area End ***** -->

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
                <div class="col-sm-6 col-md-4" style=" width: 280px  ;height :250px">
                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay=".5s">
                        <img src="{{asset('img')}}/menu-img/{{$special->dish_image}}" style=" width: 280px ;height :250px" alt="">
                    <div class="dish-info">
                        <h6 class="dish-name">{{$special->dish_name}}</h6>
                        <p class="dish-price">{{$special->dish_price}}$</p>
                </div>
            </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ***** Special Menu Area End ***** -->
@endsection
