@extends('layouts.appIndex')

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
                <div class="col-md-12 title">
                    <h1 class="title-link">
                        <a href="">
                            New Arrivals    
                            <i class="fas fa-arrow-circle-right"></i>  
                        </a>
                    </h1>

                </div>
            </div>
            <div class="row py-4">
                <div class="col-md-3">
                    <div class="product-section">
                        <div class="product-top">
                            <img src="images/product1.jpg" alt="" height="100%" >
                            <div class="overlay" style="margin-top:5px">
                                <button class="btn btn-secondary" type="button" title="Add to cart"><i class="fas fa-cart-arrow-down"></i></button>
                                <button class="btn btn-secondary" type="button" title="Compare"><i class="fas fa-exchange-alt"></i></button>
                                <button class="btn btn-secondary" type="button" title="Compare"><i class="fas fa-heart"></i></button>
                            </div>
                        </div>
                        <div class="product-bottom text-center" style="color:white">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <h3>Macbook</h3>
                            <h5>$2500</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-section">
                        <div class="product-top">
                            <img src="images/product1.jpg" alt="" height="100%" >
                            <div class="overlay" style="margin-top:5px">
                                <button class="btn btn-secondary" type="button" title="Add to cart"><i class="fas fa-cart-arrow-down"></i></button>
                                <button class="btn btn-secondary" type="button" title="Compare"><i class="fas fa-exchange-alt"></i></button>
                                <button class="btn btn-secondary" type="button" title="Compare"><i class="fas fa-heart"></i></button>
                            </div>
                        </div>
                        <div class="product-bottom text-center" style="color:white">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <h3>Macbook</h3>
                            <h5>$2500</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-section">
                        <div class="product-top">
                            <img src="images/product1.jpg" alt="" height="100%" >
                            <div class="overlay" style="margin-top:5px">
                                <button class="btn btn-secondary" type="button" title="Add to cart"><i class="fas fa-cart-arrow-down"></i></button>
                                <button class="btn btn-secondary" type="button" title="Compare"><i class="fas fa-exchange-alt"></i></button>
                                <button class="btn btn-secondary" type="button" title="Compare"><i class="fas fa-heart"></i></button>
                            </div>
                        </div>
                        <div class="product-bottom text-center" style="color:white">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <h3>Macbook</h3>
                            <h5>$2500</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="product-section">
                        <div class="product-top">
                            <img src="images/product1.jpg" alt="" height="100%" >
                            <div class="overlay" style="margin-top:5px">
                                <button class="btn btn-secondary" type="button" title="Add to cart"><i class="fas fa-cart-arrow-down"></i></button>
                                <button class="btn btn-secondary" type="button" title="Compare"><i class="fas fa-exchange-alt"></i></button>
                                <button class="btn btn-secondary" type="button" title="Compare"><i class="fas fa-heart"></i></button>
                            </div>
                        </div>
                        <div class="product-bottom text-center" style="color:white">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <h3>Macbook</h3>
                            <h5>$2500</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    <div class="container py-4">
        <div class="col-md-12 title">
            <h1 class="title-link">
                <a href="/blog">
                    Blogs <i class="fas fa-arrow-circle-right"></i>
                </a>
            </h1>
        </div>
        <div class="row py-4">
            <div class="col-md-12">
                <div style="background-image: url('images/blogImg.jpg'); justify-content:center; text-align:center; align-items:center; height:50vh">
                    <div style="padding-top:50px;">
                        <h1 style="font-size:5vh; font-weight:300; color:white">
                            Read our newest
                        </h1>
                        <h1 >
                            <a href="/blog" style="font-size:20vh; font-weight:900; color: white">Blogs
                            </a>
                        </h1>
                        <a href="/blog" class="h5 py-4">
                            to blogs <i class="fas fa-arrow-circle-right"></i>
                        </a>      
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <div class="container py-4" >
        <div class="col-md-12 title" >
            <h1 class="title-link">Contact Us</h1>
        </div>
        <div style="text-align: center" class="py-4">
            <h1 style="font-height:15vh; font-weight:800; color:white;font-size:10vh">
                Contact Us
            </h1>
            <h3 style="font-weight:200; color:white">
                Your voice matters to us, so let us hear it!
            </h2>
            <div class="contact-form" style="text-align: center; justify-content: center">
                <form action="" method="post" style="margin-top:50px; transition: all 4s ease-in-out; margin-left:22%">
                    @csrf
                    <input type="text" class="form-control" name="name" placeholder="Your Name" required><br>
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required><br>
                    <textarea name="message" class="form-control" placeholder="Message" row="4" required></textarea>
                    <input type="submit" class="form-control submit" value="Send Message">
                </form>
            </div>
        </div>
        
    </div>
</body>
@endsection