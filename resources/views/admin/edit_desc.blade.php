@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                   Cập nhật thông tin kỹ thuật sản phẩm
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        @foreach ($edit_desc as $key =>$desc)
                        <form role="form" action="{{URL::to('/update-desc/'.$desc->product_id)}}" method="POST">
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
                            {{-- <div class="form-group">
                                <label for="" >Id</label>
                                <select name="product_id" class="form-control input-sm m-bot15">
                                    @foreach ($id_product as $key =>$id)
                                        @if($id->product_id==$id->product_id)
                                          <option selected value="{{ $id ->product_id }}">{{ $id ->product_id }}</option>
                                        @else
                                          <option value="{{ $id ->product_id }}">{{ $id ->product_id }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @if($errors->has('product_id'))
                                <div class="error-text">
                                    {{$errors->first('product_id')}}
                                 </div>
                                 @endif
                            </div> --}}
                            <div class="form-group">
                                <label for="">ID</label>
                                <input type="text" name="product_id" class="form-control" readonly value="{{ $desc->product_id }}">
                                @if($errors->has('product_id'))
                            <div class="error-text">
                                {{$errors->first('product_id')}}
                             </div>
                        @endif
                            </div>


                            <div class="form-group">
                                <label for="" >Thương hiệu</label>
                                <select name="product_brand" class="form-control input-sm m-bot15">
                                 @foreach ($brand_product as $key =>$brand)
                                @if($brand->brand_id==$desc->brand_id)
                                <option selected value="{{ $brand ->brand_id }}">{{ $brand ->brand_name }}</option>
                                @else
                                <option value="{{ $brand ->brand_id }}">{{ $brand ->brand_name }}</option>
                                @endif
                                @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Bảo hành</label>
                                <select name="desc_guarantee" class="form-control input-sm m-bot15" value="{{ $desc->desc_guarantee }} ">
                                    <option> 12 tháng</option>                                          
                                    <option> 24 tháng </option>
                                    <option> 36 tháng </option>
                                </select>
                            </div>
                                
                            <div class="form-group">
                                <label for="">Series laptop</label>
                                <input type="text" name="desc_serieslaptop" class="form-control" autofocus value="{{ $desc->desc_serieslaptop }}">
                                @if($errors->has('desc_serieslaptop'))
                            <div class="error-text">
                                {{$errors->first('desc_serieslaptop')}}
                             </div>
                        @endif
                            </div>
    
                            <div class="form-group">
                                <label for="">Mô tả bảo hành</label>
                                <input type="text" name="desc_warranty" class="form-control" id="" value="{{ $desc->desc_warranty }}">
                                @if($errors->has('desc_warranty'))
                                <div class="error-text">
                                    {{$errors->first('desc_warranty')}}
                                 </div>
                                 @endif
                        </div>
    
                            <div class="form-group">
                                <label for="">Part-number</label>
                                <input type="text" name="desc_partnumber" class="form-control" id=""  value="{{ $desc->desc_partnumber }}" >
                                @if($errors->has('desc_partnumber'))
                                <div class="error-text">
                                    {{$errors->first('desc_partnumber')}}
                                 </div>
                            @endif</div>
    
                            <div class="form-group">
                                <label for="">Thế hệ CPU</label>
                                <input type="text" name="desc_CPUgeneration" class="form-control" id=""  value="{{ $desc->desc_CPUgeneration }}">
                                @if($errors->has('desc_CPUgeneration'))
                                <div class="error-text">
                                    {{$errors->first('desc_CPUgeneration')}}
                                 </div>
                            @endif</div>
    
                            <div class="form-group">
                                <label for="">CPU</label>
                                <input type="text" name="desc_CPU" class="form-control" id=""  value="{{ $desc->desc_CPU }}">
                                @if($errors->has('desc_CPU'))
                                <div class="error-text">
                                    {{$errors->first('desc_CPU')}}
                                 </div>
                            @endif</div>
    
                            <div class="form-group">
                                <label for="">Chip đồ họa</label>
                                <input type="text" name="desc_card" class="form-control" id=""  value="{{ $desc->desc_card }}">
                                @if($errors->has('desc_card'))
                                <div class="error-text">
                                    {{$errors->first('desc_card')}}
                                 </div>
                            @endif</div>
    
                            <div class="form-group">
                                <label for="">RAM</label>
                                <input type="text" name="desc_ram" class="form-control" id=""  value="{{ $desc->desc_ram }}" >
                                @if($errors->has('desc_ram'))
                                <div class="error-text">
                                    {{$errors->first('desc_ram')}}
                                 </div>
                            @endif</div>
    
                            <div class="form-group">
                                <label for="">Màn hình</label>
                                <input type="text" name="desc_screen" class="form-control" id=""  value="{{ $desc->desc_screen }}" >
                                @if($errors->has('desc_screen'))
                                <div class="error-text">
                                    {{$errors->first('desc_screen')}}
                                 </div>
                            @endif</div>
    
                            <div class="form-group">
                                <label for="">lưu trữ</label>
                                <input type="text" name="desc_storage" class="form-control" id=""  value="{{ $desc->desc_storage }}" >
                                @if($errors->has('desc_storage'))
                                <div class="error-text">
                                    {{$errors->first('desc_storage')}}
                                 </div>
                            @endif</div>
    
                            <div class="form-group">
                                <label for="">Số cổng lưu trữ tối đa</label>
                                <input type="text" name="desc_maxstorage" class="form-control" id=""  value="{{ $desc->desc_maxstorage }}"  >
                                @if($errors->has('desc_maxstorage'))
                                <div class="error-text">
                                    {{$errors->first('desc_maxstorage')}}
                                 </div>
                            @endif</div>
    
                            <div class="form-group">
                                <label for="">Kiểu khe M.2 hỗ trợ</label>
                                <input type="text" name="desc_supported" class="form-control" id=""  value="{{ $desc->desc_supported }}" >
                                @if($errors->has('desc_supported'))
                                <div class="error-text">
                                    {{$errors->first('desc_supported')}}
                                 </div>
                            @endif</div>
    
                            <div class="form-group">
                                <label for="">Cổng xuất hình</label>
                                <input type="text" name="desc_output" class="form-control" id=""   value="{{ $desc->desc_output }}" >
                                @if($errors->has('desc_output'))
                                <div class="error-text">
                                    {{$errors->first('desc_output')}}
                                 </div>
                            @endif</div>
    
                            <div class="form-group">
                                <label for="">Cổng kết nối</label>
                                <input type="text" name="desc_connector" class="form-control" id=""  value="{{ $desc->desc_connector }}" >
                                @if($errors->has('desc_connector'))
                                <div class="error-text">
                                    {{$errors->first('desc_connector')}}
                                 </div>
                            @endif</div>
    
                            <div class="form-group">
                                <label for="">Kết nối không dây</label>
                                <input type="text" name="desc_wireless" class="form-control" id=""  value="{{ $desc->desc_wireless }}" >
                                @if($errors->has('desc_wireless'))
                                <div class="error-text">
                                    {{$errors->first('desc_wireless')}}
                                 </div>
                            @endif</div>
    
                            <div class="form-group">
                                <label for="">Bàn phím</label>
                                <input type="text" name="desc_keyboard" class="form-control" id=""  value="{{ $desc->desc_keyboard }}" >
                                @if($errors->has('desc_keyboard'))
                                <div class="error-text">
                                    {{$errors->first('desc_keyboard')}}
                                 </div>
                            @endif</div>
    
                            <div class="form-group">
                                <label for="">Hệ điều hành</label>
                                <input type="text" name="desc_window" class="form-control" id=""  value="{{ $desc->desc_window }}" >
                                @if($errors->has('desc_window'))
                                <div class="error-text">
                                    {{$errors->first('desc_window')}}
                                 </div>
                            @endif</div>
    
                            <div class="form-group">
                                <label for="">Kích thước</label>
                                <input type="text" name="desc_size" class="form-control" id=""  value="{{ $desc->desc_size }}" >
                                @if($errors->has('desc_size'))
                                <div class="error-text">
                                    {{$errors->first('desc_size')}}
                                 </div>
                            @endif</div>
    
                            <div class="form-group">
                                <label for="">Pin</label>
                                <input type="text" name="desc_battery" class="form-control" id="" value="{{ $desc->desc_battery }}"  >
                                @if($errors->has('desc_battery'))
                                <div class="error-text">
                                    {{$errors->first('desc_battery')}}
                                 </div>
                            @endif</div>
    
                            <div class="form-group">
                                <label for="">Khối lượng</label>
                                <input type="text" name="desc_weight" class="form-control" id="" value="{{ $desc->desc_weight }}"  >
                                @if($errors->has('desc_weight'))
                                <div class="error-text">
                                    {{$errors->first('desc_weight')}}
                                 </div>
                            @endif</div>
    
                            <div class="form-group">
                                <label for="">Màu sắc</label>
                                <input type="text" name="desc_color" class="form-control" id=""  value="{{ $desc->desc_color }}" >
                                @if($errors->has('desc_color'))
                                <div class="error-text">
                                    {{$errors->first('desc_color')}}
                                 </div>
                            @endif</div>
                            
                            <div class="form-group">
                                <label for="">Bảo mật</label>
                                <input type="text" name="desc_security" class="form-control" id="" value="{{ $desc->desc_security }}"  >
                                @if($errors->has('desc_security'))
                                <div class="error-text">
                                    {{$errors->first('desc_security')}}
                                 </div>
                            @endif</div>
    
                            <div class="form-group">
                                <label for="">Đèn LED trên máy</label>
                                <input type="text" name="desc_led" class="form-control" id="" value="{{ $desc->desc_led }}"  >
                                @if($errors->has('desc_led'))
                                <div class="error-text">
                                    {{$errors->first('desc_led')}}
                                 </div>
                            @endif</div>
    
                            <div class="form-group">
                                <label for="">Phụ kiện đi kèm</label>
                                <input type="text" name="desc_accessories" class="form-control" id="" value="{{ $desc->desc_accessories }}"  >
                                @if($errors->has('desc_accessories'))
                                <div class="error-text">
                                    {{$errors->first('desc_accessories')}}
                                 </div>
                            @endif</div>



                        <button type="submit" name="edit_desc" class="btn btn-info">Cập nhật thông số kỹ thuật sản phẩm</button>
                        
                      
                    </form>
                    @endforeach
                    </div>

                </div>
            </section>

    </div>

</div>
@endsection