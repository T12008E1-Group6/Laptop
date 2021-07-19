@extends('admin_layout')

@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
     Liệt kê thương hiệu sản phẩm
      </div>
     
      <table class="table table-striped">
        <?php
        $message = Session::get('message');
        if($message){
            echo '<span style="color: red ; font-weight: bold">'.$message.'</span>';
            Session::put('message',null);
        }
        ?>      
          <thead>
              <tr>
                  <th>Tên thương hiệu</th>
                  <th>Nội dung</th>
                  <th>Hình ảnh</th>
                  <th>Control</th>
              </tr>
          </thead>
      
          <tbody>
            @foreach ($all_brand_product as $key =>$brand_pro)  
                  <tr>
                      <td>{{ $brand_pro->brand_name }}</td>
                      <td>{{ $brand_pro->brand_desc }}</td>
                      <td><img src="uploads/product/{{ $brand_pro->brand_image }}" height="100" width="100"></td>
                      <td>
                        <a href="{{ URL::to('/edit-brand-product/'.$brand_pro->brand_id) }}" class="active styling-edit" 
                          ui-toggle-class=""><i 
                          class="fa fa-pencil-square-o text-success text-active"></i></a>
      
                        <a onclick="return confirm('Bạn chắc là xoá chứ ?')" href="{{ URL::to('/delete-brand-product/'.$brand_pro->brand_id)
                         }}" class="active styling-edit" ui-toggle-class=""><i class="fa fa-times
                          text-danger text"></i></a>
                      </td>
                  </tr>
              @endforeach 
          </tbody>
      </table>

    </div>
  </div>
@endsection