@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                   Thêm danh mục sản phẩm
                </header>
               
                <div class="panel-body">
                    <div class="position-center">
                        
                        <form role="form" action="{{URL::to('/save-category-product')}}" method="POST">
                            @csrf
                        <div class="form-group">
                            <label for="">Tên danh mục</label>
                            <input type="text" name="category_product_name" class="form-control" value="{{ old('category_product_name')}}" >
                            @if($errors->has('category_product_name'))
                                <div class="error-text">
                                    {{$errors->first('category_product_name')}}
                                 </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả danh mục</label>
                            <textarea style="resize: none" rows="5" name="category_product_desc" class="form-control" value="{{ old('category_product_desc') }}"></textarea>
                            @if($errors->has('category_product_desc'))
                            <div class="error-text">
                                {{$errors->first('category_product_desc')}}
                             </div>
                        @endif
                        </div>
                       
                        <div class="form-group">
                            <label for="" >Hiển thị</label>
                                <select name="category_product_status" class="form-control input-sm m-bot15">
                                    <option value="0"> Ẩn </option>
                                    <option value="1"> Hiển thị </option>
                                </select>
                         </div>

                        <button type="submit" name="add_category_product" class="btn btn-info">Thêm danh mục</button>
                        
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