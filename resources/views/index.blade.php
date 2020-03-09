@extends('master')

@section('main-content')
    <!-- ****** Welcome Area Start ****** -->
    <section class="caviar-hero-area" id="home">
        <!-- Welcome Social Info -->
        <div class="welcome-social-info">
            <a href="facebook.com/DEJA-Restaurant-104485931172351/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
        <!-- Welcome Slides -->
        <div class="caviar-hero-slides owl-carousel">
            <!-- Single Slides -->
            <div class="single-hero-slides bg-img" style="background-image: url({{asset('img')}}/bg-img/hero-1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>Hi their</h2>
                                <p>Our restaurant is a life savior when you don’t feel like cooking or wants to eat something else..</p>
                                <a href="/reserv" class="btn caviar-btn"><span></span> Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Nav -->
                <div class="hero-slides-nav bg-img" style="background-image: url({{('img')}}/bg-img/hero-2.jpg);"></div>
            </div>
            <!-- Single Slides -->
            <div class="single-hero-slides bg-img" style="background-image: url({{asset('img')}}/bg-img/hero-2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2>Hi their</h2>
                                <p>Our restaurant is a life savior when you don’t feel like cooking or wants to eat something else..</p>
                                <a href="/reserv" class="btn caviar-btn"><span></span> Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Nav -->
                <div class="hero-slides-nav bg-img" style="background-image: url({{('img')}}/bg-img/hero-1.jpg);"></div>
            </div>
        </div>
    </section>
    <!-- ****** Welcome Area End ****** -->

    <!-- ****** About Us Area Start ****** -->
    <section class="caviar-about-us-area section-padding-150" id="about">
        <div class="container">
            <!-- About Us Single Area -->
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-us-thumbnail wow fadeInUp" data-wow-delay="0.5s">
                        <img src="{{asset('img')}}/bg-img/about-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 ml-md-auto">
                    <div class="section-heading">
                        <h2>About Us</h2>
                    </div>
                    <div class="about-us-content">
                        <span>restaurant style</span>
                        <p>  Craving some delicious Egyptian food? Maybe you’re in the mood for a juicy steak? No matter what kind of meal you have in mind, The Deja Restaurant is ready to prepare it for you.
                            The Spot Restaurant is open daily from 5 a.m. to 11 p.m. We’re here to serve you the best food around, whenever you’re looking for a great Egyptian restaurant in Aswan.
                            </p>
                    </div>
                </div>
            </div>
            <!-- About Us Single Area -->
            <div class="about-us-second-part">
                <div class="row align-items-center pt-200">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="about-us-content">
                            <span>our chef</span>
                            <p>A collaboration between chef Ahmed Ali and interior designer Mohammed Alaam , Deja is where Aswan returns to the Old East. Styled like the saloons of yore.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 ml-md-auto">
                        <div class="about-us-thumbnail wow fadeInUp" data-wow-delay="0.5s">
                            <img src="{{asset('img')}}/bg-img/about-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** About Us Area End ****** -->

    <!-- ****** Dish Menu Area Start ****** -->
    <section class="caviar-dish-menu" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-12 menu-heading">
                    <div class="section-heading text-center">
                        <h2>Special</h2>
                    </div>
                    <!-- btn -->
                    <a href="/menu" class="btn caviar-btn"><span></span> View The Menu</a>
                </div>
            </div>
            <div class="row">
                @foreach($dishes as $dish)
                <div class="col-12 col-sm-6 col-md-4">

                    <div class="caviar-single-dish wow fadeInUp" data-wow-delay="0.5s">

                        <img src="{{asset('img')}}/menu-img/{{$dish->dish_image}}" alt="">
                        <div class="dish-info">
                            <h6 class="dish-name">{{$dish->dish_name}}</h6>
                            <p class="dish-price">${{$dish->dish_price}}</p>
                        </div>

                    </div>

                </div>
                @endforeach
            </div>
        </div>

    </section>
                <!-- ****** Dish Menu Area End ****** -->

    <!-- ****** Awards Area Start ****** -->
    <section class="caviar-awards-area" id="awards">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-2">
                    <div class="section-heading">
                        <h2>Awards</h2>
                    </div>
                </div>
            </div>
                <div class="col-12 col-md-9 ml-md-auto">
                    <div class="caviar-awards d-sm-flex justify-content-between">
                        <img src="{{asset('img')}}/awards-img/a-1.png" alt="">
                        <img src="{{asset('img')}}/awards-img/a-2.png" alt="">
                        <img src="{{asset('img')}}/awards-img/a-3.png" alt="">
                        <img src="{{asset('img')}}/awards-img/a-4.png" alt="">
                        <img src="{{asset('img')}}/awards-img/a-5.png" alt="">
                    </div>
                </div>
            </div>

    </section>
    <!-- ****** Awards Area End ****** -->

    <!-- ****** Testimonials Area Start ****** -->
    <section class="caviar-testimonials-area" id="Testimonials">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonials-content">
                        <div class="section-heading text-center">
                            <h2>Testimonials</h2>
                        </div>
                        <div class="caviar-testimonials-slides owl-carousel">
                            <!-- Single Testimonial Area -->
                            @foreach($users as $user)
                            <div class="single-testimonial">
                                <div class="testimonial-thumb-name d-flex align-items-center">



                                    <img src="{{asset('img')}}/avatar/{{$user->avatar}}" alt="">


                                    <div class="tes-name">
                                        <h5>{{$user->name}}</h5>
                                        <p>{{$user->subject}}</p>
                                    </div>
                                </div>
                                <p>{{$user->message}}</p>


                            </div>
                        @endforeach
{{--                            <!-- Single Testimonial Area -->--}}
{{--                            <div class="single-testimonial">--}}
{{--                                <div class="testimonial-thumb-name d-flex align-items-center">--}}

{{--                                    <img src="{{asset('img')}}/testimonial-img/2.jpg" alt="">--}}

{{--                                    <div class="tes-name">--}}
{{--                                        <h5>Clara Hudson</h5>--}}
{{--                                        <p>Cordon Bleu at its best in Cairo</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <p>Thank you to Khaled and his team for a wonderful experience for my daughter and I. The service and hospitality were warm and impeccable, and the the dinner from amuse bouche to petit fours was an absolute delight.</p>--}}
{{--                            </div>--}}
                            <!-- Single Testimonial Area -->
                            <div class="single-testimonial">
                                <div class="testimonial-thumb-name d-flex align-items-center">
                                    <img src="{{asset('img')}}/testimonial-img/1.jpg" alt="">
                                    <div class="tes-name">
                                        <h5>Jane Black</h5>
                                        <p>Amazing experience!</p>
                                    </div>
                                </div>
                                <p>I had a very special celebration and Mr Maged helped me setup the most beautiful dinner ever!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Testimonials Area End ****** -->

    <!-- ****** Reservation Area Start ****** -->
    <!-- <section class="caviar-reservation-area d-md-flex align-items-center" id="reservation">
        <div class="reservation-form-area d-flex justify-content-end">
            <div class="reservation-form">
                <div class="section-heading">
                    <h2>Reservation</h2>
                </div>
                <form action="#">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-12 col-lg-6">
                            <input type="time" class="form-control">
                        </div>
                        <div class="col-12 col-lg-6">
                            <input type="text" class="form-control" placeholder="Select Persons">
                        </div>
                        <div class="col-12 col-lg-6">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                        <div class="col-12">
                            <textarea name="reservation-message" class="form-control" id="reservationMessage" cols="30" rows="10" placeholder="Your Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn caviar-btn" style="border: 1px solid ;"><span></span> Reserve Your Desk</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="reservation-side-thumb wow fadeInRightBig" data-wow-delay="0.5s">
{{--            <img src="{{asset('img')}}/bg-img/hero-3.jpg" alt="">--}}
        </div>
    </section>
 -->    <!-- ****** Reservation Area End ****** -->
    @endsection
