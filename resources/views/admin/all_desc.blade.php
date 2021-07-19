@extends('admin_layout')

@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
     Liệt kê thông số kỹ thuật sản phẩm
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

    <div class="container">
      <div class="row">
        <div class="col">    
         <?php
            $message = Session::get('message');
            if($message){
                echo '<span style="color: red ; font-weight: bold">'.$message.'</span>';
                Session::put('message',null);
            }
            ?> <br>


@foreach ($all_desc as $key =>$desc) 
<table class="table table-striped" border="1" style="width: 1100px ; height: 300px;">
        <div style="color: red ; font-weight: bold ;display: inline-block;" >ID: </div>
        <div style="font-weight: bold ;display: inline-block;">{{ $desc->product_id }}</div> <br>
        <div style="color: red ; font-weight: bold ;display: inline-block;" >Tên sản phẩm:</div>
        <div style="font-weight: bold ; display: inline-block;">{{ $desc->product_name }}</div>
        <tr>
            <th style="text-align: center ; width: 15% " >Mục</th>
            <th style="text-align: center ; width: 35%;">Nội dung</th>
            <th style="text-align: center ; width: 15%" >Mục</th>
            <th style="text-align: center ; width: 35%" >Nội dung</th>
        </tr>
        <tr>
            <th style="word-break: break-word;">Thương hiệu</th> 
            <td style="word-break: break-word;">{{ $desc->brand_name }}</td> 
            <th style="word-break: break-word;">Kiểu khe M.2 hỗ trợ</th>
            <td style="word-break: break-word;">{{ $desc->desc_supported}}</td>
        </tr>
        <tr>
            <th>Bảo hành</th>
            <td style="word-break: break-word;">{{ $desc->desc_guarantee }}</td>
            <th >Cổng xuất hình</th>
            <td style="word-break: break-word;">{{ $desc->desc_output}}</td>
        </tr>
        <tr>
            <th>Mô tả bảo hành</th>
            <td style="word-break: break-word;">{{ $desc->desc_warranty }}</td>
            <th >Cổng kết nối</th>
            <td style="word-break: break-word;">{{ $desc->desc_connector}}</td>
        </tr>
        <tr>
            <th>Series laptop</th>
            <td style="word-break: break-word;">{{ $desc->desc_serieslaptop }}</td>
            <th >Kết nối không dây</th>
            <td style="word-break: break-word;">{{ $desc->desc_wireless}}</td>
        </tr>
        <tr>
            <th>Part-number</th>
            <td style="word-break: break-word;">{{ $desc->desc_partnumber }}</td>
            <th >Bàn phím</th>
            <td style="word-break: break-word;">{{ $desc->desc_keyboard}}</td>
        </tr>
        <tr>
            <th>Thế hệ CPU</th>
            <td style="word-break: break-word;">{{ $desc->desc_CPUgeneration }}</td>
            <th >Hệ điều hành</th>
            <td style="word-break: break-word;">{{ $desc->desc_window}}</td>
        </tr>
        <tr>
            <th>CPU</th>
            <td style="word-break: break-word;">{{ $desc->desc_CPU}}</td>
            <th >Kích thước</th>
            <td style="word-break: break-word;">{{ $desc->desc_size}}</td>
        </tr>
        <tr>
            <th>Chip đồ họa</th>
            <td style="word-break: break-word;">{{ $desc->desc_card}}</td>
            <th >Pin</th>
            <td style="word-break: break-word;">{{ $desc->desc_battery}}</td>
        </tr>

        <tr>
            <th>RAM</th>
            <td style="word-break: break-word;">{{ $desc->desc_ram}}</td>
            <th >Khối lượng</th>
            <td style="word-break: break-word;">{{ $desc->desc_weight}}</td>
        </tr>

        <tr>
            <th>Màn hình</th>
            <td style="word-break: break-word;">{{ $desc->desc_screen}}</td>
            <th>Bảo mật</th>
            <td style="word-break: break-word;">{{ $desc->desc_security}}</td>
        </tr>
        <tr>
            <th>Lưu trữ</th>
            <td style="word-break: break-word;">{{ $desc->desc_storage}}</td>
            <th >Đèn LED trên máy</th>
            <td style="word-break: break-word;">{{ $desc->desc_accessories}}</td>
        </tr>
  

        <tr>
            <th>Số cổng lưu trữ tối đa</th>
            <td style="word-break: break-word;">{{ $desc->desc_maxstorage}}</td>
            <th >Phụ kiện đi kèm</th>
            <td style="word-break: break-word;">{{ $desc->desc_led}}</td>
        </tr>
        <tr>
            <th >Control</th>
            <td>
                <a href="{{ URL::to('/edit-desc/'.$desc->product_id) }}" class="active styling-edit" ui-toggle-class="">
                    <i class="fa fa-pencil-square-o text-success text-active">
                    </i>
                </a>

                <a onclick="return confirm('Bạn chắc là xoá chứ ?')" href="{{ URL::to('/delete-desc/'.$desc->product_id) }}" class="active styling-edit" ui-toggle-class="">
                    <i class="fa fa-times text-danger text"></i>
                </a>
            </td>
        </tr>   
</table>
@endforeach


        </div>
      </div>
    </div>


    </div>
  </div>
@endsection