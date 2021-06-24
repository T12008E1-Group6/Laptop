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

                <div class="col-md-3">
                    
                </div>

                <div class="col-md-3">
                    
                </div>
         </div>

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
                <div class="row py-2 mb-3">
                    <div class="col-md-3">
                        
                    </div>
    
                    <div class="col-md-3">
                        
                    </div>
    
                    <div class="col-md-3">
                        
                    </div>
    
                    <div class="col-md-3">
                        
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
        <div class="row">
            <div class="col-md-12 title" >
                <h1 class="title-link">Contact Us</h1>
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
