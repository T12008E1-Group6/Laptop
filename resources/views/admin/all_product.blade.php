@extends('admin_layout')

@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
     Liệt kê  sản phẩm
      </div>
     
        <table class="table table-striped b-t b-light">  
          <?php
        $message = Session::get('message');
        if($message){
            echo '<span style="color: red ; font-weight: bold">'.$message.'</span>';
            Session::put('message',null);
        }
        ?>         
          <thead>
            <tr>
              <th>ID</th>
              <th>Hình ảnh</th>
              <th>Thư viên ảnh</th>
              <th style="word-break: break-word; width: 230px">Tên Sản phẩm</th>
              <th style="word-break: break-word; width: 350px ">Nội dung</th>
              <th>Giá</th>
              <th>Danh mục</th>
              <th>Thương hiệu</th>
              <th>Số lượng</th>
              {{-- <th>Hiển thị</th> --}}
              <th style="width:30px;"></th>   
            </tr> 
          </thead>
          <label><a href="{{ URL::to('/all-product')}}">Trang sản phẩm</a></label>

  
          @foreach ($all_brand as $key=>$pro )
            <div style="display: inline-block ; margin-right: 30px ; padding-left: 50px">
            <a style="color: red ; font-weight: bold ;" href="{{ ('/thuong-hieu-san-pham-admin/'.$pro->brand_id) }}">{{ $pro->brand_name }}</a>
           </div>
          @endforeach
     
         
          
          <tbody>
            @foreach ($all_product as $key =>$pro)                               
            <tr>
              <td>{{ $pro->product_id }}</td>
                <td style="word-break: break-word; width: 100px ; height: 100px;" >
                   <img src="uploads/product/{{ $pro->product_image }}" height="100" width="100">
                   <a href="{{ URL::to('/show/'.$pro->product_id)}}">Xem thông số kỹ thuật </a> <br>
                   <a href="{{ URL::to('/add-desc/'.$pro->product_id)}}" style="font-weight: bold">Thêm thông số kỹ thuật </a><br>
                   <a href="{{ URL::to('/chi-tiet-san-pham/'.$pro->product_id)}}" style="color:red ; font-weight: bold">Chi tiết sản phẩm</a>
                </td>
              <td><a href="{{ ('/add-gallery/'.$pro->product_id) }}">Thêm thư viện ảnh</a></td>
              <td style="word-break: break-word; width: 230px"  >{{ $pro->product_name }}</td>
              <td style="word-break: break-word; width: 350px">{{ $pro->product_content }}</td>
              <td >{{ $pro->product_price }}</td>
              <td >{{ $pro->category_name }}</td>
              <td >{{ $pro->brand_name }}</td>
              <td >{{ $pro->product_amount }}</td>
             
              <td>
                  <a href="{{ URL::to('/edit-product/'.$pro->product_id) }}" class="active styling-edit" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>

                  <a onclick="return confirm('Bạn chắc là xoá chứ ?')" href="{{ URL::to('/delete-product/'.$pro->product_id) }}" class="active styling-edit" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
  </div>
@endsection