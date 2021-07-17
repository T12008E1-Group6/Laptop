<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fontawesome-->
    <script src="https://kit.fontawesome.com/6533f8a88f.js" crossorigin="anonymous"></script>

    {{-- Bootstrap v5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    @yield('internalCSS')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbackground shadow-sm">
            <div class="container">
                <a href="{{ url('/product') }}" style="padding-right:3%">
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
                            <a href="/product" class="nav-link  ">Products</a>
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
                            <a class="nav-link" href="{{ route('cart.shoppingCart') }}" tabindex="-1" aria-disabled="true">
                                Shopping Cart 
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span class="badge rounded-circle" id="cartTotalQty" style="background-color: gold; position: relative; top: -10px; left: -10px">{{ Session::has('cart') ? Session::get('cart')->sum_qty() : '' }}</span>
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

        <main style="min-height:100%">
            <div></div>
            @yield('content')
        </main>
    </div>


</body>



<footer class="page-footer bg-light" style="border-top: solid 1px rgb(223, 210, 210); margin-top:100px">
    <div class="bg-light">
        <div class="container">
            <div class="row py-4 d-flex align-items-center">
                <div class="col-md-12 text-center">
                    <a href=""><i class="fab fa-facebook mr-4"></i></a>
                    <a href=""><i class="fab fa-twitter mr-4"></i></a>
                    <a href=""><i class="fab fa-google-plus-g mr-4"></i></a>
                    <a href=""><i class="fab fa-instagram mr-4"></i></a>
                    <a href=""><i class="fab fa-linkedin-in mr-4"></i></a>

                </div>
            </div>
        </div>
    </div>
    <div class="container text-center text-md-left mt-5">
        <div class="row">
            <div class="col-md-3 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">Dvice</h6>
                <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width:125px;height:2px">
                <p class="mt-2">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum vv</p>
            </div>
            <div class="col-md-3 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">Discover more</h6>
                <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width:125px;height:2px">
            <ul class="list-unstyled">
                <li class="my-2"><a href="">Apple</a></li>
                <li class="my-2"><a href="">Asus</a></li>
                <li class="my-2"><a href="">Lenovo</a></li>
                <li class="my-2"><a href="">Samsung</a></li>
            </ul>
        </div>
        <div class="col-md-3 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Useful links</h6>
            <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width:125px;height:2px">
            <ul class="list-unstyled">
                <li class="my-2"><a href="">Product</a></li>
                <li class="my-2"><a href="">About Us</a></li>
                <li class="my-2"><a href="">Blogs</a></li>
            </ul>
        </div>
        <div class="col-md-3 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Contact</h6>
            <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width:125px;height:2px">
            <ul class="list-unstyled">
                <li class="my-2"><i class="fas fa-home"></i> CMT8 str, District 3, HCM city</li>
                <li class="my-2"><i class="far fa-envelope"></i> Dvice@gmail.com</li>
                <li class="my-2"><i class="fas fa-phone"></i> +84 912345678</li>
            </ul>
        </div>
        
</footer>
</html>