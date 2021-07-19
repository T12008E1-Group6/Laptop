@extends('product.layout_product')
@section('product_content')
<div class="features_items"><!--features_items-->
    <h2 class="title text-center" style="margin-top: 5px">Tất cả sản phẩm </h2>
    @foreach ($show_product as $key =>$show)

        <div class="col-sm-4" >
            <div style="height: 310px">
                <div class="product-image-wrapper"> 
                    <form>
                        @csrf
                        <div class="single-products"> 
                                <div class="productinfo">
                            
                                      
                                        <input type="hidden"value="{{ $show->product_id }}" class="cart_product_id_{{ $show->product_id }}" >
                                        <input id="wishlist_productname{{ $show->product_id }}" type="hidden"value="{{ $show->product_name }}" class="cart_product_name_{{ $show->product_id }}" >
                                        <input id="wishlist_productprice{{ $show->product_id }}" type="hidden"value="{{ number_format($show->product_price) }}" class="cart_product_price_{{ $show->product_id }}" >
                                        <input id="wishlist_productimage" type="hidden"value="{{ $show->product_image }}" class="cart_product_image_{{ $show->product_id }}" >
                                      
                                        {{-- Compare Specification--}}
                                        @foreach ($show_desc as $key =>$desc)  
                                        <input id="wishlist_ram{{ $desc->product_id }}" type="hidden"value="{{ $desc->desc_ram }}" class="cart_product_ram_{{ $desc->product_id }}" >               
                                        <input id="wishlist_CPU{{ $desc->product_id }}" type="hidden"value="{{ $desc->desc_CPU }}" class="cart_product_CPU_{{ $desc->product_id }}" >
                                        <input id="wishlist_screen{{ $desc->product_id }}" type="hidden"value="{{ $desc->desc_screen }}" class="cart_product_screen_{{ $desc->product_id }}" >
                                        <input id="wishlist_storage{{ $desc->product_id }}" type="hidden"value="{{ $desc->desc_storage }}" class="cart_product_storage_{{ $desc->product_id }}" >
                                        <input id="wishlist_card{{ $desc->product_id }}" type="hidden"value="{{ $desc->desc_card }}" class="cart_product_card_{{ $desc->product_id }}" >
                                        @endforeach
                                        <input type="hidden"value="1" class="cart_product_qty_{{ $show->product_id }}" >
                                                    <a id="wishlist_producturl{{ $show->product_id }}" href="{{ URL::to('/chi-tiet-san-pham/'.$show->product_id)}}">
                                                        
                                                        <img id="wishlist_productimage{{ $show->product_id }}" src="{{ URL::to('uploads/product/'.$show->product_image) }}" height="150px" width="150px"/>
                                                        <div>
                                                            <div class="row ten" style="height: 60px;" >
                                                                <div style="font-weight: bold">{{ $show->product_name }}</div>
                                                                <div style="font-weight: bold ; color: #2196f3">{{ number_format($show->product_price,0,',','.') }}đ</div>
                                                            </div>
                                                        </div>
                                                        <div class="choose" style="padding: 0">
                                                            <ul class="nav nav-pills nav-justified">
                                                                <li><a href="{{ route('cart.addToCart', ['id' => $show->product_id]) }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Thêm vào giỏ</a></li>
                                                                <li style="padding-right: 15px">
                                                                    <a style="cursor: pointer;" data-toggle="modal" data-target="#sosanh" onclick="add_compare({{ $show->product_id }})">
                                                                        <i class="fa fa-plus-square"></i>So sánh
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <div class="container">
                                                              
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="sosanh" role="dialog">
                                                                  <div class="modal-dialog" style="padding-top: 5px ;padding-right: 1100px;">
                                                                  
                                                                    <!-- Modal content-->
                                                                    <div class="modal-content" style="width: 1150px" >
                                                                      <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        <h4 class="modal-title"><span id="title-compare"></span></h4>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                       {{-- <div id="row_compare"></div> --}}
                                                                       <table class="table table-striped" id="row_compare">
                                                                        <thead>
                                                                          <tr>
                                                                            <th width="100px" height="100px">Hình ảnh</th>
                                                                            <th width="200px">Tên sản phẩm</th>
                                                                            <th width="1px">Giá</th>
                                                                            <th>CPU</th>
                                                                            <th>Màn hình</th>
                                                                            <th>Lưu trữ</th>
                                                                            <th>Chip đồ hoạ</th>
                                                                            <th>Ram</th>
                                                                            <th width="50px">Xem sản phẩm</th>
                                                                            <th width="50px">Xoá</th>
                                                                          </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                        </tbody>
                                                                      </table>
                                                                      </div>
                                                                      <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                      </div>
                                                                    </div>
                                                                    
                                                                  </div>
                                                                </div>
                                                                
                                                              </div>
                                                        </div>
                                                    </a>  
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
   
</div><!--features_items-->		


@endsection
