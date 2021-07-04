<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/Carousel1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/Carousel2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/Carousel3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>

    <div>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-12 title">
                    <h1 class="title-link">
                        <a href="">
                            Best sellers    
                            <i class="fas fa-arrow-circle-right"></i>  
                        </a>
                    </h1>

                </div>
            </div>
            <div class="row py-2 mb-3">
                <div class="col-md-3">
                    
                </div>

                <div class="col-md-3">
                    
                </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="jquery.min.js"></script>
    <!-- Fontawesome-->
    <script src="https://use.fontawesome.com/4c66e35559.js"></script>

    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
 
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbackground shadow-sm">
            <div class="container">
                <a href="{{ url('/index') }}" style="padding-right:3%">
                    <img src="{{asset('images/logo.svg')}}" alt="" style="height:40px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto" style="font-weight:bold">
                        <li class='navbar-nav'>
                            <a href="/index" class="nav-link active">Home</a>
                        </li>
                        <li class='navbar-nav'>
                            <a href="/products" class="nav-link  ">Products</a>
                        </li>
                        <li class='navbar-nav'>
                            <a href="/about" class="nav-link ">About us</a>
                        </li>
                        <li class='navbar-nav'>
                            <a href="/contact" class="nav-link ">Contact us</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="navbar-nav">
                            <a href="/shopping_cart" class="nav-link" style="font-weight:bold">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> shopping cart
                            </a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item" style="font-weight:bold">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item" style="font-weight:bold">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown" style="font-weight:bold"> 
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="/userInfo/{{ Auth::user()->id}}" class="dropdown-item">Profile</a>      
                                    @if(Auth::user()->role > 0)
                                    <a href="/admin" class="dropdown-item">Admin</a>   
                                    @endif                         
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>
