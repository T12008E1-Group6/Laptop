@extends('layouts.app')

@section('content')

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
                <div class="col-md-12 title" style="border-bottom: solid 1px rgba(128, 128, 128, 0.3)">
                    <h1 class="title-link">
                        <a href="">
                            New Arrivals    
                            <i class="fas fa-arrow-circle-right"></i>  
                        </a>
                    </h1>

                </div>
            </div>
            <div class="row py-2 mb-3">
               @foreach($NewProduct as $pro)
                    <div class="col-md-3 py-2">
                        <div class="product-section card">
                            <div class="product-top" style="padding-top:1.5vh; justify-content:center;align-items:center;text-align:center">
                                <img src="{{$pro->product_image}}" alt="" class="img-card" height="235vh" width="235vh" style="border: 1px solid rgba(199, 199, 199, 0.3
    616); border-radius: 2px;">
                                <div class="overlay" style="margin-top:5px">
                                    <button class="btn btn-primary" type="button" title="Add to cart"><i class="fas fa-cart-arrow-down"></i></button>
                                    <button class="btn btn-primary" type="button" title="Compare"><i class="fas fa-exchange-alt"></i></button>
                                    <button class="btn btn-primary" type="button" title="Compare"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                            <div class="product-bottom text-center" style="color:black; padding-bottom:1.5vh;">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <h5>{{$pro->product_name}}</h5>
                                <h5>${{$pro->product_price}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
         </div>

        </div>


        <div>
            <div class="container py-4">
                <div class="row">
                    <div class="col-md-12 title" style="border-bottom: solid 1px rgba(128, 128, 128, 0.3)">
                        <h1 class="title-link">
                            <a href="">
                                Best Products    
                                <i class="fas fa-arrow-circle-right"></i>  
                            </a>
                        </h1>
    
                    </div>
                </div>
                <div class="row py-2 mb-3">
                    @foreach($BestProduct as $pro)
                    <div class="col-md-3 py-2">
                        <div class="product-section card">
                            <div class="product-top" style="padding-top:1.5vh; justify-content:center;align-items:center;text-align:center">
                                <img src="{{$pro->product_image}}" alt="" class="img-card" height="235vh" width="235vh" style="border: 1px solid rgba(199, 199, 199, 0.3
    616); border-radius: 2px;">
                                <div class="overlay" style="margin-top:5px">
                                    <button class="btn btn-primary" type="button" title="Add to cart"><i class="fas fa-cart-arrow-down"></i></button>
                                    <button class="btn btn-primary" type="button" title="Compare"><i class="fas fa-exchange-alt"></i></button>
                                    <button class="btn btn-primary" type="button" title="Compare"><i class="fas fa-heart"></i></button>
                                </div>
                            </div>
                            <div class="product-bottom text-center" style="color:black; padding-bottom:1.5vh;">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <h5>{{$pro->product_name}}</h5>
                                <h5>${{$pro->product_price}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
             </div>
    
    
            </div>
            <div>
                <div class="container py-4">
                    <div class="row">
                        <div class="col-md-12 title" style="border-bottom: solid 1px rgba(128, 128, 128, 0.3)">
                            <h1 class="title-link">
                                <a href="">
                                    Suggesting Products    
                                    <i class="fas fa-arrow-circle-right"></i>  
                                </a>
                            </h1>
        
                        </div>
                    </div>
                    <div class="row py-2 mb-3">
                        @foreach($SuggestingProduct as $pro)
                        <div class="col-md-3 py-2">
                            <div class="product-section card">
                                <div class="product-top" style="padding-top:1.5vh; justify-content:center;align-items:center;text-align:center">
                                    <img src="{{$pro->product_image}}" alt="" class="img-card" height="235vh" width="235vh" style="border: 1px solid rgba(199, 199, 199, 0.3
        616); border-radius: 2px;">
                                    <div class="overlay" style="margin-top:5px">
                                        <button class="btn btn-primary" type="button" title="Add to cart"><i class="fas fa-cart-arrow-down"></i></button>
                                        <button class="btn btn-primary" type="button" title="Compare"><i class="fas fa-exchange-alt"></i></button>
                                        <button class="btn btn-primary" type="button" title="Compare"><i class="fas fa-heart"></i></button>
                                    </div>
                                </div>
                                <div class="product-bottom text-center" style="color:black; padding-bottom:1.5vh;">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <h5>{{$pro->product_name}}</h5>
                                    <h5>${{$pro->product_price}}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                 </div>
        
        
                </div>
    
            

    <div class="container py-4">
        <div class="col-md-12 title" style="border-bottom: solid 1px rgba(128, 128, 128,)">
            <h1 class="title-link">
                <a href="/blog">
                    About us <i class="fas fa-arrow-circle-right"></i>
                </a>
            </h1>
        </div>
        <div class="row py-4">
            <div class="col-md-12">
                <div style="background-image: url('images/blogImg.jpg'); justify-content:center; text-align:center; align-items:center; height:50vh">
                    <div style="padding-top:50px;">
                        <h1 style="font-size:5vh; font-weight:300; color:white">
                            Read our story
                        </h1>
                        <h1 >
                            <a href="/about" style="font-size:20vh; font-weight:900; color: white">About Us
                            </a>
                        </h1>
                        <a href="/about" class="h5 py-4">
                            to our story <i class="fas fa-arrow-circle-right"></i>
                        </a>      
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <div class="container py-4" >
        <div class="row">
            <div class="col-md-12 title" style="border-bottom: solid 1px rgba(128, 128, 128, 0.3)">
                <h1 class="title-link">
                    <a href=""> Contact Us</a>
                </h1>
            </div>            
        </div>

        <div class="py-4">
            <h1 style="text-align:center; display:flex; align-items:center; justify-content:center;font-weight:800; color:#231F20;font-size:10vh;">
                Contact Us
            </h1>
        </div>
        <div class="h3" style="display:flex; align-items:center;text-align:center; justify-content:center">
            Your voice matters
        </div>
        <div class="py-4">
            <div class="contact-form">
                <form action="" method="post" style="text-align: center; justify-content: center">
                    @csrf
                    <div class="py-2" style="display:flex">
                        <div class="col-md-1" style="align-items:left">
                            Name
                        </div>
                        <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="py-2" style="display:flex" >
                        <div class="col-md-1" style="align-items:left">
                            Mail
                        </div>
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="py-2" style="display:flex">
                        <div class="col-md-1" style="align-items:left">
                            Mess
                        </div>
                        <textarea name="message" class="form-control" placeholder="Message" row="4" required></textarea>
                    </div>
                    <div class="py-4">
                        <div class="col-md-2" style="float:right">
                            <button class="btn btn-primary form-control submit" type="submit">Send</button>
                        </div>
                    </div>
                        
                    </div>                    
                </form>
            </div>
        </div>
    </div>
</body>
@endsection
