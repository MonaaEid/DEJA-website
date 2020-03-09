<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Deja Restaurant</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('img')}}/core-img/favicon.ico">


    <!-- Core Stylesheet -->
    <link href="{{asset('css')}}/style.css" rel="stylesheet">
    <!-- added by me -->
    <link href="{{asset('css')}}/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css')}}/others/animate.css" rel="stylesheet" type="text/css">
    <!-- 27\1\2020 -->
    <link href="{{asset('css')}}/clean-blog.min.css" rel="stylesheet">
    <script src="{{asset('js')}}/jquery/jquery-1.12.4.min.js"></script>
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>


    <!-- the fonts links -->

     <!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Work+Sans:400,500,600,700"> -->
    <link href="{{asset('css')}}/others/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('fonts')}}/fontawesome-webfont.woff" rel="stylesheet" type="text/css">
    <link href="{{asset('fonts')}}/fontawesome-webfont.woff2" rel="stylesheet" type="text/css">
     <link href="{{asset('fonts')}}/Pe-icon-7-stroke.woff" rel="stylesheet" type="text/css">
     <!-- extra stylesheet -->
      <link href="{{asset('css')}}/others/magnific-popup.css" rel="stylesheet" type="text/css">
      <link href="{{asset('css')}}/others/pe-icon-7-stroke.css" rel="stylesheet" type="text/css">
      <link href="{{asset('css')}}/others/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Responsive CSS -->
    <link href="{{asset('css')}}/responsive/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="caviar-load"></div>
        <div class="preload-icons">
            <img class="preload-1" src="{{asset('img')}}/core-img/preload-1.png" alt="">
            <img class="preload-2" src="{{asset('img')}}/core-img/preload-2.png" alt="">
            <img class="preload-3" src="{{asset('img')}}/core-img/preload-3.png" alt="">
        </div>
    </div>

    <!-- ***** Search Form Area ***** -->
    <div class="caviar-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="/action" method="get">
                        <input type="search" name="search" id="search" placeholder="Search Your Favourite Dish ...">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="/">Deja</a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#caviarNav" aria-controls="caviarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <div class="collapse navbar-collapse" id="caviarNav">
                            <ul class="navbar-nav ml-auto" id="caviarMenu">
                                <li class="nav-item active">
                                    <a class="nav-link " href="/">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/">Home</a>
                                        <a class="dropdown-item" href="/menu">Menu</a>
                                        <a class="dropdown-item" href="/order">Order now</a>
                                        <a class="dropdown-item" href="/reserv">Reservation</a>
                                        <a class="dropdown-item" href="/contact-us">contact us</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#menu">Menu</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#Testimonials">Testimonials</a>
                                </li>

                                <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profile/{{ Auth::user()->id }}"
                                    >
                                        {{ __('Profile settings') }}
                                    </a>
                                    <a class="dropdown-item" href="/review-us"
                                    >
                                        {{ __('Rate us') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

                            </ul>
                            <!-- Search Btn -->
{{--                            <div class="caviar-search-btn">--}}
{{--                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>--}}
{{--                            </div>--}}
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

        @yield('main-content')



    <!-- ***** Footer Area Start ***** -->
    <footer class="caviar-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-text">
                        <a href="#" class="navbar-brand">Deja</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="deja.com" target="_blank">Deja</a></p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery-2.2.4 js -->
{{--    <script src="{{asset('js')}}/jquery/jquery-2.2.4.min.js"></script>--}}
    <script src="{{asset('js')}}/jquery/jquery-1.12.4.min.js"></script>
    <!-- <script src="{{asset('js')}}/jquery/jquery-3.4.1.min.js"></script> -->
    <!-- Popper js -->
    <script src="{{asset('js')}}/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js')}}/bootstrap/bootstrap.min.js"></script>
      <!-- added in 10/2/2020 -->
    <script src="{{asset('js')}}/jquery/mo.js"></script>
    <!-- All Plugins js -->
    <script src="{{asset('js')}}/others/plugins.js"></script>
    <!-- Google Maps js -->
{{--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk9KNSL1jTv4MY9Pza6w8DJkpI_nHyCnk"></script>--}}
    <script src="{{asset('js')}}/google-map/map-active.js"></script>
    <!-- Active js -->
    <script src="{{asset('js')}}/active.js"></script>


{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />--}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
