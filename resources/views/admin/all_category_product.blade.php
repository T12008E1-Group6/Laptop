@extends('admin_layout')

@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê danh mục sản phẩm
       </div>
      {{-- <div class="row w3-res-tb">
        <div class="col-sm-5 m-b-xs">
          <select class="input-sm form-control w-sm inline v-middle">
            <option value="0">Acer</option>
            <option value="1">Hp</option>
            <option value="2">Dell</option>
            <option value="3">Asus</option>
            <option value="3">MSI</option>
            <option value="3">Samsung</option>
            <option value="3">Apple</option>
          </select>
          <button class="btn btn-sm btn-default">Apply</button>                
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-3">
          <div class="input-group">
            <input type="text" class="input-sm form-control" placeholder="Search">
            <span class="input-group-btn">
              <button class="btn btn-sm btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div> --}}

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
      <footer class="panel-footer">
        <div class="row">
          
          <div class="col-sm-5 text-center">
            
          </div>
          <div class="col-sm-7 text-right text-center-xs">                
            <ul class="pagination pagination-sm m-t-none m-b-none">
              <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
              <li><a href="">1</a></li>
              <li><a href="">2</a></li>
              <li><a href="">3</a></li>
              <li><a href="">4</a></li>
              <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
@endsection