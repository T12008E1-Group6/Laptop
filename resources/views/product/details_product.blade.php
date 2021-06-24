<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/lightgallery.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/lightslider.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/prettify.css') }}" rel="stylesheet"/>
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
  
    .box{
      width: 100%;
      float: left;
      margin: 10px 1px;
      padding: 15px;
      border-radius: 8px;
     
    }
    .box div{
      font-size: 15px;
      line-height: 28px;
      height: 450px;
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
    border: 2px solid blue;
}
    </style>
  <body>
       @foreach ($product_details as $key =>$value)
   
          <header style="height: 250px; background-color: red;"></header>
          <nav  style="height: 50px; background-color: yellowgreen ;"></nav>
    <div style="background-color: rgb(241 240 241)">
      <div class="container" >
          <div class="row" style="height: 700px;">
            <article class="col-sm-9" style="height: 650px; padding: 0; background-color: white ;  border-radius: 8px" >
              <div class="row" style=" height: 500px;">
                <article class="col-sm-5" style=" height: 700px;">
              

                    <div class="row" style="height: 400px;padding: 0;">
                      <div class="col" >
                        {{-- <img src="{{ URL::to('/uploads/product/'.$value->product_image) }}" height="300px" width="300px" style="padding-top:30px "> --}}
                        <ul id="imageGallery" style="margin-top: 40px">
                          @foreach ($gallery as $key =>$gal)
                          <li data-thumb="{{ asset('uploads/gallery/'.$gal->gallery_image) }}" data-src="{{ asset('uploads/gallery/'.$gal->gallery_image) }}">
                            <img alt="{{ $gal->gallery_name }}" width="100%" height="170px" src="{{ asset('uploads/gallery/'.$gal->gallery_image) }}" />
                          </li>
                          @endforeach
                       
                        </ul> 
                      </div>
                    </div>

                    <div class="row" style=" height: 300px;">
                      <div >{!! $value->product_content !!} </div>
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
                      <span style="color:rgb(26, 104, 194) ; font-weight: bold;">{{ $value->category_name }}</span> <br>           
                      <label>Thương hiệu</label>
                      <span style="color:rgb(26, 104, 194) ; font-weight: bold;">{{ $value->brand_name }}</span>
                    </div>
      
                  </div>

                  <div class="row">
                    <div class="col" style="padding-top: 30px; color: rgb(26, 104, 194); font-size: 30px; font-weight: bold;" >{{ number_format($value->product_price).'đ' }}</div>
                  </div>

                  <div class="row">
                    <div class="style">
                      <a href="">Mua ngay</a>
                      <a href="" style="background-color: blue;">Thêm vào giỏ hàng</a>
                    </div>
                  </div>
                </aside>
              </div>
            </article>

            <div class="col-sm-3" style="height: 500px">
              <div  style="padding-top: 30px; background-color: white ;height: 450px ; margin-left: 10px ;border-radius:8px ">
                  <div style="font-weight: bold; font-size: 18px">Chính sách bán hàng</div> 
                  <div style="margin-top: 10px;">Miễn phí giao hàng cho đơn hàng từ 800K</div>
                  <div>Cam kết hàng chính hãng 100%</div>
                  <div>Đổi trả trong vòng 10 ngày</div>
                  <div style="margin-top: 15px">
                    <div style="font-weight: bold; font-size: 18px">Dịch vụ khác</div> 
                    <div style="margin-top: 10px;">Sửa chữa đồng giá 150.000đ</div>
                    <div>Vệ sinh máy tính, laptop</div>
                    <div>Bảo hành tại nhà</div>
                  </div>
              </div>
            </div>

          </div>

          <div class="row" style="background-color: white ; border-radius:8px ">
            <article class="col-sm-8" style="">
              <div class="row" style="font-weight: bold ; font-size: 20px ; padding-top: 10px">
               | Mô tả sản phẩm
              </div>
              <div class="box">
                <div>
                  {!! $value->product_desc !!}                   
                </div>

                  <a href="javascript:void();" class="readmore-btn">Read More</a>
              </div>
            </article>
            <aside class="col-sm-4">
              <div class="row">
                <div class="col" style="font-weight: bold ; font-size: 20px ;padding-top: 10px">
                | Thông số kỹ thuật
                </div>
              </div>

            <div class="container">
              <div class="row">
                <div class="col">
          
                 <table class="table table-striped" style="margin-top: 15px">
                  @foreach ( $product_desc as $key => $desc )
                    <tr>
                      <th>Thương hiệu</th>
                      <td style="word-break: break-word;">{{ $desc->brand_name }}</td>
                    </td>
                    <tr>
                      <th>Bảo hành</th>
                      <td style="word-break: break-word;">{{ $desc->desc_guarantee }}</td>
                    </tr>
                    <tr>
                      <th>Mô tả bảo hành</th>
                      <td style="word-break: break-word;">{{ $desc->desc_warranty }}</td>
                    </tr>
                    <tr>
                      <th>Series laptop</th>
                      <td style="word-break: break-word;">{{ $desc->desc_serieslaptop }}</td>
                    </tr>
                    <tr>
                      <th>Part-number</th>
                      <td style="word-break: break-word;">{{ $desc->desc_partnumber }}</td>
                    </tr>
                    <tr>
                      <th>Thế hệ CPU</th>
                      <td style="word-break: break-word;">{{ $desc->desc_CPUgeneration }}</td>
                    </tr>
                    <tr>
                      <th>CPU</th>
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
                  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
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
      </div> 
         
       
        @endforeach
        <div class="row" style="background-color: lime; margin: 0;">
          <div class="col" style="color: white;">Sản phẩm liên quan</div>
        </div>
        <footer style="height: 200px; background-color: khaki;"></footer>
      
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
    CKEDITOR.replace('ckeditor');
    CKEDITOR.replace('ckeditor1');
    </script>
    <script>
      $(".readmore-btn").on('click', function(){
        $(this).parent().toggleClass("showContent");
        //Shorthand if-else statement
        var replaceText = $(this).parent().hasClass("showContent") ? "Read Less " : "Read More";
        $(this).text(replaceText);
      });
    </script>
    <script src="{{ asset('js/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('js/lightslider.js') }}"></script>
    <script src="{{ asset('js/prettify.js') }}"></script>
        <script type="text/javascript">
          $(document).ready(function() {
        $('#imageGallery').lightSlider({
            gallery:true,
            item:1,
            loop:true,
            thumbItem:3,
            slideMargin:0,
            enableDrag: false,
            currentPagerPosition:'left',
            onSliderLoad: function(el) {
                el.lightGallery({
                    selector: '#imageGallery .lslide'
                });
            }   
        });  
      });
        </script>
  </body>
</html>
