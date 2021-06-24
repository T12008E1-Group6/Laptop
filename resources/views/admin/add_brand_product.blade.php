@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                   Thêm thương hiệu sản phẩm
                </header>
               
                <div class="panel-body">
                    <div class="position-center">
                        
                        <form role="form" action="{{URL::to('/save-brand-product')}}" method="POST">
                            @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên thương hiệu</label>
                            <input type="text" name="brand_product_name" class="form-control"  value="{{ old('brand_product_name') }}">
                            @if($errors->has('brand_product_name'))
                            <div class="error-text">
                                {{$errors->first('brand_product_name')}}
                             </div>
                        @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả thương hiệu</label>
                            <textarea style="resize: none" rows="5" name="brand_product_desc" class="form-control" value="{{ old('brand_product_desc') }}">
                            </textarea>
                            @if($errors->has('brand_product_desc'))
                            <div class="error-text">
                                {{$errors->first('brand_product_desc')}}
                             </div>
                              @endif
                        </div>
                        {{-- <div class="form-group">
                            <label for="" >Hiển thị</label>
                                <select name="brand_product_status" class="form-control input-sm m-bot15">
                                    <option value="0"> Ẩn </option>
                                    <option value="1"> Hiển thị </option>
                                </select>
                         </div> --}}
                        <button type="submit" name="add_brand_product" class="btn btn-info">Thêm danh mục</button>
                        
                        <div>
                            <?php
                        $message = Session::get('message');
                        if($message){
                            echo '<span style="color: red ;font-weight: bold;">'.$message.'</span>';
                            Session::put('message',null);
                        }
                        ?>
                        </div>
                    </form>
                    </div>

                </div>
            </section>

    </div>

</div>
@endsection