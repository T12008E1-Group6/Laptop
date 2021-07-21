<!doctype html>
<html lang="en">
  <head>
    <title></title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/lightgallery.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/lightslider.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/prettify.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('icon_font/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('owl/assets/owl.carousel.min.css') }}">
    <link href="{{ asset('css/sanpham.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sanpham2.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('owl/assets/owl.theme.default.css') }}">


    
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

   
  </head> 
  <style>
  .style a:link, .style a:visited {
      background-color: #f44336;
      color: white;
      font-weight: bold;
      padding: 15px 25px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      width: 200px;
      border-radius: 8px;
    }
    
  .style a:hover,.style a:active {
      background-color: red;  
    }
  
  .ten{
      width: 100%;
      float: left;
    }
  .ten div{
      font-size: 14px;
      line-height: 28px;
      height: 60px;
      overflow: hidden;
      margin-left: 10px;
      font-size: 12px
  }
  
    .box{
      width: 100%;
      float: left;
      margin: 10px 1px;
      padding: 15px;
      border-radius: 8px;
    }
    .box div{
      font-size: 14px;
      line-height: 28px;
      height: 680px;
      overflow: hidden;
    
    }
    .box a{
      display: inline-block;
      color: #FFF;
      background-color: #2196f3;
      text-decoration: none;
      padding: 10px 15px;
      border-radius: 8xp;
      margin-top: 15px;
      border-radius: 8px;
      font-size: 14px;
    }
    .box a:hover{
      box-shadow: 0 5px 5px rgba(0,0,0,0.2);
    }
    .box.showContent div{
      height: auto;
    }
    .box.showContent a.readmore-btn{
      background-color: red;
    }
    .lSSlideOuter .lSPager.lSGallery img {
    display: block;
    height: 65px;
    max-width: 100%;
}
li.active {
    border: 2px solid black;
}

.csbh div{
  margin-top: 10px;
}
.slider {
  width: 100%;
  height: 200px;
  position: relative;
  margin: auto;
  overflow-x: scroll;
  overflow-y: hidden;
}

.slider::-webkit-scrollbar {
  display: none;
}

.slider .slide {
  display: flex;
  position: absolute;
  left: 0;
  transition: 0.3s left ease-in-out;
}

.slider .item {
  margin-right: 10px;
}

.slider .item:last-child {
  margin-right: 0;
}

.ctrl {
  text-align: center;
  margin-top: 5px;
}
.ctrl-btn {
  padding: 20px 20px;
  min-width: 50px;
  background: #fff;
  border: none;
  font-weight: 600;
  text-align: center;
  cursor: pointer;
  outline: none;

  position: absolute;
  top: 50%;
  margin-top: -27.5px;
}
.ctrl-btn.pro-prev {
  left: 0;
}
.ctrl-btn.pro-next {
  right: 0;
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
.icon {
  margin-top: 60px;
  border:1px solid rgb(145, 116, 116);
  border-radius: 8px; 
}
.icon a{
color: black
}

.icon:hover{
  margin-top: 35px;
  border-radius: 8px;
  border: 2px solid black;
  transition: 0.6s
}
.fa-home {
  font-size: 30px
}
    </style>
  <body>
          <nav class="navbar navbar-expand-md shadow-sm">
            <div class="container">
                <a href="{{ url('/') }}" style="padding-right:3%">
                    <img src="{{asset('images/logo.svg')}}" alt="" style="height:40px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto" style="font-weight:bold">
                        <li class='navbar-nav'>
                            <a href="/product" class="nav-link active">Trang chủ</a>
                        </li>
                        <li class='navbar-nav'>
                            <a href="/product" class="nav-link  ">Sản phẩm</a>
                        </li>
                        <li class='navbar-nav'>
                            <a href="/blog" class="nav-link ">Bài viết</a>
                        </li>
                        <li class='navbar-nav'>
                            <a href="/about" class="nav-link ">Thông tin</a>
                        </li>
                        <li class='navbar-nav'>
                            <a href="/contact" class="nav-link ">Hỗ trợ</a>
                        </li>
                    </ul>
    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="navbar-nav">
                          <a class="nav-link" style="font-weight:bold" href="{{ route('cart.shoppingCart') }}" tabindex="-1" aria-disabled="true">
                      Giỏ hàng
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span class="badge rounded-circle" id="cartTotalQty" style="background-color: gold; position: relative; top: -10px; left: -10px">
                                  {{ Session::has('cart') ? Session::get('cart')->sum_qty() : '' }}
                              </span>
                            </a>
                      </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item" style="font-weight:bold">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                                </li>
                            @endif
    
                            @if (Route::has('register'))
                                <li class="nav-item" style="font-weight:bold">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown" style="font-weight:bold"> 
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
    
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a href="/userInfo/{{ Auth::user()->id}}" class="dropdown-item">Thông tin cá nhân</a>      
                                  @if(Auth::user()->role == 'admin')
                                  <a href="{{ ('/admin') }}" class="dropdown-item">Trang Admin</a>   
                                  @endif                         
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Đăng xuất') }}
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
    <div style="background-color: rgb(241 240 241)">
      <div class="container" >
          <div class="row" style="margin-bottom: 15px ; padding-top: 15px ;">
            <span style="background-color: white ; border-radius:50% ; border: 1px solid rgb(223, 211, 211) " >
            
              <a href="{{ URL::to('/product/') }}">
                <i class="fa fa-home" aria-hidden="true"></i>
              </a>
            </span>
            <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
            @foreach ($product_details as $key =>$value)
          <span style="background-color: white ; font-size: 15px; border-radius:20px ; padding-left: 10px ; padding-right: 10px ;padding-top: 4px ; border: 1px solid rgb(223, 211, 211)">{{ $value->product_name }}</span>
            @endforeach
        </div>
      
          <div class="row" style="height: 700px;">
            <article class="col-sm-9" style="height: 670px; padding: 0; background-color: white ;  border-radius: 8px" >
              <div class="row" style=" height: 500px;">
                <article class="col-sm-5" style=" height: 700px;">
                    <div class="row" style="height: 350px;padding: 0;">
                      <div class="col" >
                        <ul id="image" style="margin-top: 40px">
                          @foreach ($gallery as $key =>$gal)
                          <li data-thumb="{{ asset('uploads/gallery/'.$gal->gallery_image) }}" data-src="{{ asset('uploads/gallery/'.$gal->gallery_image) }}">
                            <img alt="{{ $gal->gallery_name }}" width="95%" height="250px" src="{{ asset('uploads/gallery/'.$gal->gallery_image) }}" />
                          </li>
                          @endforeach
                        </ul> 
                      </div>
                    </div>
                    @foreach ($product_details as $key =>$value)
                  <div style="margin-top: 1px"><hr></div>
                    <div class="row" style=" height: 450px; ">
                      <div style="margin-left: 30px ; ">{!! $value->product_content !!} </div>
                    </div>
                </article>
                <aside class="col-sm-7" style="height: 700px;" >
                  <div class="row">
                    <div class="col" style="padding-top: 30px; font-weight: bold; font-size: 22px;">
                     {{ $value->product_name }}
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      <label>Danh mục</label>
                      <a href="{{ url::to('/danh-muc-san-pham/'.$value->product_id) }}">
                         <span style="color:rgb(26, 104, 194) ; font-weight: bold;">{{ $value->category_name }}</span> 
                      </a>
                      <br>        
                    
                      <label>Thương hiệu</label>
                      <a href="{{ url::to('/thuong-hieu-san-pham/'.$value->product_id) }}">   
                      <span style="color:rgb(26, 104, 194) ; font-weight: bold;">{{ $value->brand_name }}</span>
                    </a>
                    </div>
      
                  </div>

                  <div class="row">
                    <div class="col" style="padding-top: 30px; color: rgb(26, 104, 194); font-size: 30px; font-weight: bold;" >
                      {{ number_format($value->product_price,0,',','.').'đ' }}
                    </div>
                  </div>

                  <div class="row">
                    <div class="style" style="margin-left: 12px ; margin-top: 20px">
                      <a href="">Mua ngay</a> 
                      <a href="{{ route('cart.addToCart', ['id' => $value->product_id]) }}" style="background-color: blue;">Thêm vào giỏ hàng</a>
                    </div>  
                  </div>
                </aside>
              </div>
            </article>
            @endforeach
            <div class="col-sm-3" style="height: 500px ; padding: 0%">
              <div  style="padding-top: 30px; background-color: white ;height: 450px ; border-radius:8px ; margin-left: 5% ">
                <div class="row"> 
                  <div class="col">
                     <div  style="font-weight: bold; font-size: 18px ; padding-left: 10px">Chính sách bán hàng</div> 
                  </div>
                </div> 
                <div class="row">
                  <div class="col csbh">
                    <div class="row" >
                      <div class="col-sm-2">
                        <i class="fa fa-car" aria-hidden="true"></i>
                      </div>
                      <div class="col-sm-10">
                         Miễn phí giao hàng cho đơn hàng từ 800K
                      </div>
                    </div>

                    <div class="row" >
                      <div class="col-sm-2">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                      </div>
                      <div class="col-sm-10">
                        Cam kết hàng chính hãng 100%
                      </div>
                    </div>

                    <div class="row" >
                      <div class="col-sm-2">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                      </div>
                      <div class="col-sm-10">
                        Đổi trả trong vòng 10 ngày
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                  <div class="row" style="margin-top: 20px">
                    <div class="col">
                        <div  style="font-weight: bold; font-size: 18px ; padding-left: 10px">Dịch vụ khác</div> 
                    </div>
                  </div>

                  <div class="row">
                    <div class="col csbh">
                      <div class="row" >
                        <div class="col-sm-2">
                          <i class="fa fa-wrench" aria-hidden="true"></i>
                        </div>
                        <div class="col-sm-10">
                          Sửa chữa đồng giá 150.000đ
                        </div>
                      </div>
  
                      <div class="row" >
                        <div class="col-sm-2">
                          <i class="fa fa-laptop" aria-hidden="true"></i>
                        </div>
                        <div class="col-sm-10">
                          Vệ sinh máy tính,laptop
                        </div>
                      </div>
  
                      <div class="row" >
                        <div class="col-sm-2">
                          <i class="fa fa-check-circle" aria-hidden="true"></i>
                        </div>
                        <div class="col-sm-10">
                          Bảo hành tại nhà
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
              </div>
            </div>
          </div>
          @foreach ($product_details as $key =>$value)
          <div class="container">
          <div class="row" style="background-color: white ; border-radius:8px ">
            <article class="col-sm-8" style="">
              <div class="row" style="font-weight: bold ; font-size: 20px ; padding-top: 10px">
               | Mô tả sản phẩm
              </div>
              <div class="box">
                <div>
                  {!! $value->product_desc !!}                   
                </div>
                  <a href="javascript:void();" class="readmore-btn">Xem thêm thông tin</a>
              </div>
            </article>
            <aside class="col-sm-4" >
              <div class="row">
                <div class="col" style="font-weight: bold ; font-size: 20px ;padding-top: 10px ">
                | Thông số kỹ thuật
                </div>
              </div>
              <div class="row">
                <div class="col box">
                    <div >
                 <table class="table table-striped" style="margin-top: 15px" >
                  @foreach ( $product_desc as $key => $desc )
                    <tr>
                      <th style="width: 140px ;">Thương hiệu</th>
                      <td style="word-break: break-word;">{{ $desc->brand_name }}</td>
                    </td>
                    <tr>
                      <th style="">Bảo hành</th>
                      <td style="word-break: break-word;">{{ $desc->desc_guarantee }}</td>
                    </tr>
                    <tr>
                      <th style="">Mô tả bảo hành</th>
                      <td style="word-break: break-word;">{{ $desc->desc_warranty }}</td>
                    </tr>
                    <tr>
                      <th style="">Series laptop</th>
                      <td style="word-break: break-word;">{{ $desc->desc_serieslaptop }}</td>
                    </tr>
                    <tr>
                      <th style="">Part-number</th>
                      <td style="word-break: break-word;">{{ $desc->desc_partnumber }}</td>
                    </tr>
                    <tr>
                      <th >Thế hệ CPU</th>
                      <td style="word-break: break-word;">{{ $desc->desc_CPUgeneration }}</td>
                    </tr>
                    <tr>
                      <th >CPU</th>
                      <td style="word-break: break-word;">{{ $desc->desc_CPU}}</td>
                    </tr>
                    <tr>
                      <th>Chip đồ họa</th>
                      <td style="word-break: break-word;">{{ $desc->desc_card}}</td>
                    </tr>
                    <tr>
                      <th>RAM</th>
                      <td style="word-break: break-word;">{{ $desc->desc_ram}}</td>
                    </tr>
                    @endforeach
                  </table> 
                </div>
                </div>
              </div>
              {{-- Start: Xem thêm thông số kỹ thuật --}}
              <div class="row"> 
                <div class="col" >
                  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId" style="font-size: 15px">
                    Xem thêm thông số kỹ thuật
                  </button>
      <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true" >
        <div class="modal-dialog " role="document" style="padding-top: 5px ;padding-right: 1100px;">
            <div class="modal-content " style="width: 1150px ">
                    <div class="modal-header" >
                            <h5 class="modal-title">Thông số kỹ thuật</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                    </div>
                <div class="modal-body" >
                    <div class="container-fluid" >
                      @foreach ( $product_desc as $key => $desc )
                      <table class="table table-striped" border="1" style="width: 1100px ; height: 300px;">
                        <tr>
                            <th style="text-align: center ; width: 15% " >Mục</th>
                            <th style="text-align: center ; width: 35%;">Nội dung</th>
                            <th style="text-align: center ; width: 15%" >Mục</th>
                            <th style="text-align: center ; width: 35%" >Nội dung</th>
                        </tr>
                        <tr>
                            <th style="word-break: break-word;">Thương hiệu</th> 
                            <td style="word-break: break-word;">{{ $desc->brand_name }}</td> 
                            <th style="word-break: break-word;">Kiểu khe M.2 hỗ trợ</th>
                            <td style="word-break: break-word;">{{ $desc->desc_supported}}</td>
                        </tr>
                        <tr>
                            <th>Bảo hành</th>
                            <td style="word-break: break-word;">{{ $desc->desc_guarantee }}</td>
                            <th >Cổng xuất hình</th>
                            <td style="word-break: break-word;">{{ $desc->desc_output}}</td>
                        </tr>
                        <tr>
                            <th>Mô tả bảo hành</th>
                            <td style="word-break: break-word;">{{ $desc->desc_warranty }}</td>
                            <th >Cổng kết nối</th>
                            <td style="word-break: break-word;">{{ $desc->desc_connector}}</td>
                        </tr>
                        <tr>
                            <th>Series laptop</th>
                            <td style="word-break: break-word;">{{ $desc->desc_serieslaptop }}</td>
                            <th >Kết nối không dây</th>
                            <td style="word-break: break-word;">{{ $desc->desc_wireless}}</td>
                        </tr>
                        <tr>
                            <th>Part-number</th>
                            <td style="word-break: break-word;">{{ $desc->desc_partnumber }}</td>
                            <th >Bàn phím</th>
                            <td style="word-break: break-word;">{{ $desc->desc_keyboard}}</td>
                        </tr>
                        <tr>
                            <th>Thế hệ CPU</th>
                            <td style="word-break: break-word;">{{ $desc->desc_CPUgeneration }}</td>
                            <th >Hệ điều hành</th>
                            <td style="word-break: break-word;">{{ $desc->desc_window}}</td>
                        </tr>
                        <tr>
                            <th>CPU</th>
                            <td style="word-break: break-word;">{{ $desc->desc_CPU}}</td>
                            <th >Kích thước</th>
                            <td style="word-break: break-word;">{{ $desc->desc_size}}</td>
                        </tr>
                        <tr>
                            <th>Chip đồ họa</th>
                            <td style="word-break: break-word;">{{ $desc->desc_card}}</td>
                            <th >Pin</th>
                            <td style="word-break: break-word;">{{ $desc->desc_battery}}</td>
                        </tr>
                        <tr>
                            <th>RAM</th>
                            <td style="word-break: break-word;">{{ $desc->desc_ram}}</td>
                            <th >Khối lượng</th>
                            <td style="word-break: break-word;">{{ $desc->desc_weight}}</td>
                        </tr>
                        <tr>
                            <th>Màn hình</th>
                            <td style="word-break: break-word;">{{ $desc->desc_screen}}</td>
                            <th>Bảo mật</th>
                            <td style="word-break: break-word;">{{ $desc->desc_security}}</td>
                        </tr>
                        <tr>
                            <th>Lưu trữ</th>
                            <td style="word-break: break-word;">{{ $desc->desc_storage}}</td>
                            <th >Đèn LED trên máy</th>
                            <td style="word-break: break-word;">{{ $desc->desc_accessories}}</td>
                        </tr>
                        <tr>
                            <th>Số cổng lưu trữ tối đa</th>
                            <td style="word-break: break-word;">{{ $desc->desc_maxstorage}}</td>
                            <th >Phụ kiện đi kèm</th>
                            <td style="word-break: break-word;">{{ $desc->desc_led}}</td>
                        </tr>
                </table>
                @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div>
              </div>  {{-- //end Xem thêm thông số kỹ thuật --}}
            </aside>
          </div>
        </div>

        <div class="container" style="background-color: white ; margin-top: 30px ; border-radius:8px ; height: 400px;" >
          <div class="row" style="font-weight: bold ; font-size: 18px; padding-top: 10px">
            <div class="col">
            | Sản phẩm cùng thương hiệu {{ $value->brand_name }}
             </div>
             <a href="{{ url::to('/thuong-hieu-san-pham/'.$value->brand_id) }}">   
            <div class="col" style="text-align: right">
             Xem tất cả 
            </a>
            </div>
          </div>
         
            <div class="owl-carousel owl-theme">
              @foreach ($ralate as $key =>$lienquan )
                <div class="col icon" >
                  <a href="{{ URL::to('/chi-tiet-san-pham/'.$lienquan->product_id)}}">
                    <div class="item" style="word-break: break-all">  
                      <img src="{{ URL::to('uploads/product/'.$lienquan->product_image) }}" height="150px" width="150px"> 
                      <div class="row">
                          <div class="ten">
                            <div style="font-weight: bold">{{ $lienquan->product_name }}</div>
                            <div style="font-weight: bold ; color: #2196f3">{{ number_format($lienquan->product_price,0,',','.') }}đ</div>
                          </div>
                      </div>
                    </div>
                  </a> 
                </div>
              @endforeach
            </div>
      </div>
    </div>
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
              <div class="col-md-4 mx-auto mb-4">
                  <h6 class="text-uppercase font-weight-bold">Dvice</h6>
                  <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width:125px;height:2px">
                  <p class="mt-2">© 2018. Công ty cổ phần DVICE. GPDKKD: 0303217354 do sở KH & ĐT TP.HCM cấp ngày 02/01/2007. GPMXH: 238/GP-BTTTT do Bộ Thông Tin và Truyền Thông cấp ngày 04/06/2020.
                      </p>
              </div>
              
          <div class="col-md-4 mx-auto mb-4">
              <h6 class="text-uppercase font-weight-bold">Hữu ích</h6>
              <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width:125px;height:2px">
              <ul class="list-unstyled">
                  <li class="my-2"><a href="{{ ('/product') }}">Sản phẩm</a></li>
                  <li class="my-2"><a href="">Thông tin</a></li>
                  <li class="my-2"><a href="">Bài viết</a></li>
              </ul>
          </div>
          <div class="col-md-4 mx-auto mb-4">
              <h6 class="text-uppercase font-weight-bold">Địa chỉ </h6>
              <hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto" style="width:125px;height:2px">
              <ul class="list-unstyled">
                  <li class="my-2"><i class="fas fa-home"></i> 590 Cách Mạng tháng 8, Quận 3, Thành phố Hồ Chí Minh</li>
                  <li class="my-2"><i class="far fa-envelope"></i> Dvice@gmail.com</li>
                  <li class="my-2"><i class="fas fa-phone"></i> +84 912345678</li>
              </ul>
          </div>
  </footer>
        @endforeach
    {{-- <script src="{{ asset('ckeditor/ckeditor.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('owl/owl.carousel.min.js') }}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            items:4,
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
      <script src="{{ asset('js/lightgallery-all.min.js') }}"></script>
      <script src="{{ asset('js/lightslider.js') }}"></script>
      <script src="{{ asset('js/prettify.js') }}"></script>
         <script >
          $(document).ready(function() {
        $('#image').lightSlider({
            gallery:true,
            item:1,
            loop:true,
            thumbItem:3,
            slideMargin:0,
            enableDrag: false,
            nav:true,
            currentPagerPosition:'left',
            onSliderLoad: function(el) {
                el.lightGallery({
                    selector: '#image .lslide'
                });
            }   
        });  
      });
        </script>
    {{-- <script>
    CKEDITOR.replace('ckeditor');
    CKEDITOR.replace('ckeditor1');
    </script> --}}
    <script>
      $(".readmore-btn").on('click', function(){
        $(this).parent().toggleClass("showContent");
        var replaceText = $(this).parent().hasClass("showContent") ? "Thu gọn nội dung " : "Xem thêm nội dung";
        $(this).text(replaceText);
      });
    </script>
  </body>
</html>
