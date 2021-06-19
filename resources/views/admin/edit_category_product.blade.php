@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                   Cập nhật danh mục sản phẩm
                </header>
                <div class="panel-body">
                    @foreach ($edit_category_product as $key => $edit_value )
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/update-category-product/'.$edit_value->category_id)}}" method="POST">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" value="{{ $edit_value->category_name }}" name="category_product_name" class="form-control" >
                            @if($errors->has('category_product_name'))
                                <div class="error-text">
                                    {{$errors->first('category_product_name')}}
                                 </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục</label>
                            <textarea style="resize: none" rows="5" name="category_product_desc" class="form-control">{{ $edit_value->category_desc }}</textarea>
                            @if($errors->has('category_product_desc'))
                                <div class="error-text">
                                    {{$errors->first('category_product_desc')}}
                                 </div>
                            @endif
                        </div>
                       
                        <button type="submit" name="update_category_product" class="btn btn-info">Cập nhật danh mục</button>
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
                    @endforeach
                </div>
            </section>
    </div>
</div>
@endsection 

