@extends('admin_layout')

@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê danh mục sản phẩm
       </div>
   

    <table class="table table-striped">
      <?php
      $message = Session::get('message');
      if($message){
          echo '<span style="color: red ; font-weight: bold;">'.$message.'</span>';
          Session::put('message',null);
      }
      ?>      
        <thead>
            <tr>
                <th style="font: bold">Tên danh mục</th>
                <th>Nội dung</th>
                <th>Control</th>
            </tr>
        </thead>
    
        <tbody>
            @foreach ($all_category_product as $key =>$cate_pro)
                <tr>
                    <td>{{ $cate_pro->category_name }}</td>
                    <td>{{ $cate_pro->category_desc }}</td>
                    <td>
                      <a href="{{ URL::to('/edit-category-product/'.$cate_pro->category_id) }}" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-pencil-square-o text-success text-active"></i>
                      </a>
                      <a onclick="return confirm('Bạn chắc là xoá chứ ?')" href="{{ URL::to('/delete-category-product/'.$cate_pro->category_id) }}" class="active styling-edit" ui-toggle-class="">
                        <i class="fa fa-times text-danger text"></i>
                      </a>
                    </td>
                </tr>
            @endforeach 
        </tbody>
    </table>
      
    </div>
  </div>
@endsection