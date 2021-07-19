<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('icon_font/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('owl/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('owl/assets/owl.theme.default.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      
    <link href="{{ asset('css/sanpham.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sanpham2.css') }}" rel="stylesheet">
 

    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
  </head>
  <style>
   .right{
       text-align: right
   } 
   .owl-carousel:hover .nav-icon{
    opacity: 1 ;
    transition: 1s;
    }

    .fa-chevron-circle-left{
    left: 10px;
    }
    .fa-chevron-circle-right{
    right: 10px;
    }  
    .nav-icon{
  color: gray;
  position: absolute;
  top:50%;
  transform: translate(-50%);
  font-size: 50px;
  opacity: 0;
}

.nav-icon:hover{
  color: #2196f3;
}
.pagination {
    display: inline-block;
    padding-left: 550px;
    margin: 20px 0;
    border-radius: 4px;
}
.owl-carousel .owl-item img {
    display: block;
    width: 100%;
    padding-right: 150px;
}
.image img{
    height: 180px; 
    width: 250px;
    border-radius: 8px; 
}
.image img:hover{
    height: 190px; 
    width: 260px;
    border-radius: 8px;
    transition: 0.6s
}

</style>
<body style="background-color: rgb(241 240 241) ">
    <nav class="navbar navbar-expand-md shadow-sm">
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
                        <a href="{{ ('/product/') }}" class="nav-link  ">Products</a>
                    </li>
                    <li class='navbar-nav'>
                        <a href="/blog" class="nav-link ">Blog</a>
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
                            <span class="badge rounded-circle" style="background-color: gold; position: relative; top: -10px; left: -20px">{{ Session::has('cart') ? Session::get('cart')->sum_qty() : '' }}</span>
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
    <section >
		<div class="container" style="background-color: white">
            <div class="row" >
                    <div class="owl-carousel owl-theme">
                        <div class="item"><img src="../images/Carouselproduct1.jpg" height="400px" ></div>
                        <div class="item"><img src="../images/Carouselproduct2.jpg" height="400px" ></div>
                        <div class="item"><img src="../images/Carouselproduct3.jpg" height="400px" ></div>
                        <div class="item"><img src="../images/Carouselproduct4.jpg" height="400px" ></div>
                    </div>
            </div>
           {{-- Thương hiệu nổi bật --}}
           <div>
               <h3> | Thương hiệu nổi bật</h3>
           </div >

            <div class="row image" style="margin-right: 1px ; margin-bottom: 50px ; text-align: center">
                @foreach ($show_brand as $key =>$brand)         
                    <a href="{{ URL::to('/thuong-hieu-san-pham/'.$brand->brand_id) }}">
                        <div class="col-sm-3" style="height: 200px ; width: 280px ; margin-bottom: 30px ; margin-left: 5px ">
                                <img src="{{ URL::to('uploads/product/'.$brand->brand_image) }}" ><br>
                                <label style="color: black">{{ $brand->brand_name }}</label>
                        </div>
                    </a>
                @endforeach
            </div>
           {{-- Thương hiệu nổi bật --}}
        <div class="row" style="margin-bottom: 30px">
            <div class="col-sm-4"></div>
            
         
            <div class="col-sm-3">
            </div>
        
            <div class="col-sm-5">
            <form action="{{ URL::to('/tim-kiem') }}" method="POST" style="text-align: right">
                {{ csrf_field() }}
                    <span style="display: inline-block;">
                        <input type="text" name="keywords_submit" class="form-control search" placeholder="Tìm kiếm sản phẩm" style="width: 300px">
                    </span>
                    <span><input type="submit" name="search_item" class="btn btn-danger btn-sm" value="Tìm kiếm" ></span>
            </form>
            </div>
        </div>
			<div class="row" style="margin-top: 5px">
				<div class="col-sm-3">
					<div class="left-sidebar">
                        <h2>Bộ lọc</h2>
                        <div class="brands_products" style="margin-bottom: 10px">
						
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="{{ URL::to('/price1') }}">Dưới 20.000.000 đ</a></li>
                                    <li><a href="{{ URL::to('/price2') }}">20.000.000 đ - 30.000.000 đ</a></li>
                                    <li><a href="{{ URL::to('/price3') }}">30.000.000 đ - 50.000.000 đ</a></li>
                                    <li><a href="{{ URL::to('/price4') }}">Trên 50.000.000đ </a></li>
                                   
								</ul>
							</div>
						</div>
						<h2>Danh mục sản phẩm</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							@foreach ($show_category as $key =>$category) 
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="{{ URL::to('/danh-muc-san-pham/'.$category->category_id) }}">{{ $category->category_name }}</a></h4>
                                    </div>
                                </div>	
                            @endforeach											
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Thương hiệu sản phẩm</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
                                    @foreach ($show_brand as $key =>$brand)
									<li>
                                        <a href="{{ URL::to('/thuong-hieu-san-pham/'.$brand->brand_id) }}">
                                             {{ $brand->brand_name }}
                                        </a>
                                    </li>
                                    @endforeach
								</ul>
							</div>
						</div><!--/brands_products-->

                        <div class="brands_products" style="margin-top: 10px">
							<div>
                                <img src="../images/posteracer.jpg" width="260px" height="280px">
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-9 padding-right">
                    @yield('product_content')
				</div>
			</div>
		</div>
	</section>

    <footer class="page-footer bg-light" style="border-top: solid 1px rgb(223, 210, 210)">
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
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('owl/owl.carousel.min.js') }}"></script>
   
  <script>
        $('.owl-carousel').owlCarousel({
            items:1,
            NotIn:true,
            margin:15,
            loop:true,
            nav:true,
            autoplay:true,
            dots:false,
            autoplayTimeout:5000,
            navText:['<i class="fa fa-chevron-circle-left nav-icon" aria-hidden="true"></i>',
            '<i class="fa fa-chevron-circle-right nav-icon" aria-hidden="true"></i>']
    });
    </script>
    <script type="text/javascript">
        function delete_compare(id){
           
                 if(localStorage.getItem('compare')!=null){
    
                     var data = JSON.parse(localStorage.getItem('compare'));
    
                     var index = data.findIndex(item => item.id === id);
    
                     data.splice(index, 1);
    
                    localStorage.setItem('compare', JSON.stringify(data)); 
                    //remove element by id
                    document.getElementById("row_compare"+id).remove();
            
            }
        }
       sosanh();
    
        function sosanh(){
                
    
             if(localStorage.getItem('compare')!=null){
    
                 var data = JSON.parse(localStorage.getItem('compare'));
    
    
                 for(i=0;i<data.length;i++){
    
                    var name = data[i].name;
                    var price = data[i].price;
                    var image = data[i].image;
                    var url = data[i].url;
                    var id = data[i].id;
                    var ram = data[i].CPU;
                    var ram = data[i].screen;
                    var ram = data[i].storage;
                    var ram = data[i].card;
                    var ram = data[i].ram;
                     $('#row_compare').find('tbody').append(`
                                                             <tr id="row_compare`+id+`">
                                                                <td><img width="100px" height="100px" src="`+image+`"></td>
                                                                <td>`+name+`</td>
                                                                <td>`+price+`</td>
                                                                <td>`+CPU+`</td>
                                                                <td>`+screen+`</td>
                                                                <td>`+storage+`</td>
                                                                <td>`+card+`</td>
                                                                <td>`+ram+`</td>
                                                                <td><a href="`+url+`">Xem sản phẩm</a></td>
                                                                <td><a style="cursor:pointer" onclick="delete_compare(`+id+`)">Xóa so sánh</a></td>
                                                              </tr>
    
    
                    `);
                }
    
            }
    
        }
       
       
        function add_compare(product_id){
        
      
            document.getElementById('title-compare').innerText = 'Chỉ cho phép so sánh tối đa 4 sản phẩm';
    
            var id = product_id;
    
            var name = document.getElementById('wishlist_productname'+id).value;
            // var content = document.getElementById('wishlist_productcontent'+id).value;
            var price = document.getElementById('wishlist_productprice'+id).value;
            var CPU = document.getElementById('wishlist_CPU'+id).value;
            var screen = document.getElementById('wishlist_screen'+id).value;
            var storage = document.getElementById('wishlist_storage'+id).value;
            var card = document.getElementById('wishlist_card'+id).value;
            var ram = document.getElementById('wishlist_ram'+id).value;
            var image = document.getElementById('wishlist_productimage'+id).src;
            var url = document.getElementById('wishlist_producturl'+id).href;
    
            var newItem = {
                'url':url,
                'id' :id,
                'name': name,
                'price': price,
                'image': image,
                'CPU': CPU,
                'screen': screen,
                'storage': storage,
                'card': card,
                'ram': ram
                // 'content':content
            }
    
            if(localStorage.getItem('compare')==null){
               localStorage.setItem('compare', '[]');
            }
    
            var old_data = JSON.parse(localStorage.getItem('compare'));
    
            var matches = $.grep(old_data, function(obj){
                return obj.id == id;
            })
    
            if(matches.length){
                
            }else{
                if(old_data.length<=3){
    
                    old_data.push(newItem);
    
                    $('#row_compare').find('tbody').append(`
                                                             <tr id="row_compare`+id+`">
                                                                <td><img width="100px" height="100px" src="`+newItem.image+`"></td>
                                                                <td>`+newItem.name+`</td>
                                                                <td>`+newItem.price+`</td>
                                                                <td>`+newItem.CPU+`</td>
                                                                <td>`+newItem.screen+`</td>
                                                                <td>`+newItem.storage+`</td>
                                                                <td>`+newItem.card+`</td>
                                                                <td>`+newItem.ram+`</td>
                                                                <td><a href="`+url+`">Xem sản phẩm</a></td>
                                                                <td><a style="cursor:pointer" onclick="delete_compare(`+id+`)">Xóa so sánh</a></td>
                                                              </tr>
    
    
                    `);
                }
    
    
            }
           
            localStorage.setItem('compare', JSON.stringify(old_data));
            $('#sosanh').modal();
        }
    </script>
     
     @section('script')
     <script>
        $(function(){
            $.('.order').change(function(){
                $("#form_order").submit();
            });
        });
        </script>
     @stop
  </body>
</html>