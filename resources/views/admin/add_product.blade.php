@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                   Thêm sản phẩm
                </header>
               
                <div class="panel-body">
                    <div class="position-center">
                        
                        <form role="form" action="{{URL::to('/save-product')}}" method="POST" enctype="multipart/form-data">
                            <div>
                                <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span style="color: red ;font-weight: bold;">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                            </div>
                            @csrf
                        <div class="form-group">
                            <label for="">Tên sản phẩm</label>
                            <input type="text" name="product_name" class="form-control" value="{{ old('product_name') }}" >
                            @if($errors->has('product_name'))
                            <div class="error-text">
                                {{$errors->first('product_name')}}
                            </div>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="">Hình ảnh sản phẩm</label>
                            <input type="file" name="product_image" class="form-control" value="{{ old('product_image') }}">
                            
                            @if($errors->has('product_image'))
                            <div class="error-text">
                                {{$errors->first('product_image')}}
                             </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả sản phẩm</label>
                            {{-- id="ckeditor" --}}
                            <textarea style="resize: none" rows="5" name="product_desc" class="form-control" id="ckeditor" >{{ old('product_desc') }}</textarea>
                            @if($errors->has('product_desc'))
                            <div class="error-text">
                                {{$errors->first('product_desc')}}
                             </div>
                             @endif
                        </div>

                        <div class="form-group">
                            <label for="">Nội dung sản phẩm</label>
                            <textarea style="resize: none" rows="5" name="product_content" class="form-control" id="ckeditor1" >{{ old('product_content') }}</textarea>
                            {{-- id="ckeditor1" --}}
                            @if($errors->has('product_content'))
                            <div class="error-text">
                                {{$errors->first('product_content')}}
                             </div>
                        @endif
                        </div>

                        <div class="form-group">
                            <label for="">Giá sản phẩm</label>
                            <input type="text" name="product_price" class="form-control" value="{{ old('product_price') }}">
                            @if($errors->has('product_price'))
                            <div class="error-text">
                                {{$errors->first('product_price')}}
                             </div>
                        @endif
                        </div>

                        <div class="form-group">
                            <label for="">Số lượng sản phẩm</label>
                            <input type="text" name="product_amount" class="form-control" value="{{ old('product_amount') }}" >
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
                                <option value=" {{ $cate ->category_id }} "> {{ $cate ->category_name }} </option>
                                @endforeach
                            </select>
                          </div>
                          
                     <div class="form-group">
                        <label for="" >Thương hiệu</label>
                        <select name="product_brand" class="form-control input-sm m-bot15">
                            @foreach ($brand_product as $key =>$brand)
                            <option value="{{ $brand ->brand_id }}">{{ $brand ->brand_name }}</option>
                            @endforeach
                        </select>
                           </div>
                        

                        <button type="submit" name="add_product" class="btn btn-info">Thêm sản phẩm</button>
                        
                      
                    </form>
                    </div>

                </div>
            </section>

    </div>

</div>
@endsection