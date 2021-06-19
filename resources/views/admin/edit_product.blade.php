@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                   Cập nhật sản phẩm
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        @foreach ($edit_product as $key =>$pro)
                        <form role="form" action="{{URL::to('/update-product/'.$pro->product_id)}}" method="POST" enctype="multipart/form-data">
                            <div>
                                <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span style="color: red ; font-weight : bold">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                            </div>
                            @csrf
                        <div class="form-group">
                            <label for="">Tên sản phẩm</label>
                            <input type="text" name="product_name" class="form-control" value="{{ $pro->product_name }}">
                            @if($errors->has('product_name'))
                            <div class="error-text">
                                {{$errors->first('product_name')}}
                             </div>
                        @endif
                        </div>
                        <div class="form-group">
                            <label for="">Hình ảnh sản phẩm</label>
                            <input type="file" name="product_image" class="form-control">
                            <img src="{{URL::to('/uploads/product/'.$pro->product_image)}}" height="100" width="100">
                            @if($errors->has('product_image'))
                            <div class="error-text">
                                {{$errors->first('product_image')}}
                             </div>
                        @endif
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả sản phẩm</label>
                            <textarea style="resize: none" rows="5" name="product_desc" class="form-control" id="">{{ $pro->product_desc }}</textarea>
                            @if($errors->has('product_desc'))
                            <div class="error-text">
                                {{$errors->first('product_desc')}}
                             </div>
                        @endif
                        </div>

                        <div class="form-group">
                            <label for="">Nội dung sản phẩm</label>
                            <textarea style="resize: none" rows="5" name="product_content" class="form-control" id="" >{{ $pro->product_content }}</textarea>
                            @if($errors->has('product_content'))
                            <div class="error-text">
                                {{$errors->first('product_content')}}
                             </div>
                        @endif
                        </div>

                        <div class="form-group">
                            <label for="">Giá sản phẩm</label>
                            <input type="text" name="product_price" class="form-control" id="" value="{{ $pro->product_price }}">
                            @if($errors->has('product_price'))
                            <div class="error-text">
                                {{$errors->first('product_price')}}
                             </div>
                        @endif
                        </div>

                        <div class="form-group">
                            <label for="">Số lượng sản phẩm</label>
                            <input type="text" name="product_amount" class="form-control" id="" value="{{ $pro->product_amount }}">
                            @if($errors->has('product_amount'))
                            <div class="error-text">
                                {{$errors->first('product_amount')}}
                             </div>
                        @endif
                        </div>

                        <div class="form-group">
                            <label for="" > Danh mục sản phẩm</label>
                            <select name="product_cate" class="form-control input-sm m-bot15">
                                @foreach ($cate_product as $key =>$cate)
                                    @if($cate->category_id==$pro->category_id)
                                <option selected value=" {{ $cate ->category_id }} "> {{ $cate ->category_name }} </option>
                                    @else
                                    <option value=" {{ $cate ->category_id }} "> {{ $cate ->category_name }} </option>
                                    @endif
                                @endforeach
                            </select>
                          </div>
                     <div class="form-group">
                        <label for="" >Thương hiệu</label>
                        <select name="product_brand" class="form-control input-sm m-bot15">
                            @foreach ($brand_product as $key =>$brand)
                            @if($brand->brand_id==$pro->brand_id)
                            <option selected value="{{ $brand ->brand_id }}">{{ $brand ->brand_name }}</option>
                            @else
                            <option value="{{ $brand ->brand_id }}">{{ $brand ->brand_name }}</option>
                            @endif
                            @endforeach
                        </select>
                           </div>
                        
                        
                       
                        <div class="form-group">
                            <label for="" >Hiển thị</label>
                                <select name="product_status" class="form-control input-sm m-bot15">
                                    <option value="0"> Ẩn </option>
                                    <option value="1"> Hiển thị </option>
                                </select>
                         </div>

                        <button type="submit" name="add_product" class="btn btn-info">Cập nhật sản phẩm</button>
                        
                      
                    </form>
                    @endforeach
                    </div>

                </div>
            </section>

    </div>

</div>
@endsection