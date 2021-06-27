<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\DescriptionRequest;
use Illuminate\Support\Facades\Session;

class DescriptionController extends Controller
{
    //
    public function add_desc(){
        $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();
        $product_id = DB::table('tbl_product')->get();
        return view('admin.add_desc')->with('brand_product',$brand_product)->with('product_id',$product_id);
    }


    public function all_desc(){
        $all_desc = DB::table('tbl_description')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_description.brand_id')
        ->join('tbl_product','tbl_product.product_id','=','tbl_description.product_id')
        ->get();
        $manager_desc = view('admin.all_desc')->with('all_desc',$all_desc);
        return view('admin_layout')->with('admin.all_desc',$manager_desc);
    }

    public function save_desc(DescriptionRequest $request) {
        $data = array();
        $data['brand_id'] = $request->product_brand;
        $data['desc_guarantee'] = $request->desc_guarantee;
        $data['desc_warranty'] = $request->desc_warranty;
        $data['desc_color'] = $request->desc_color;
        $data['desc_serieslaptop'] = $request->desc_serieslaptop;
        $data['desc_partnumber'] = $request->desc_partnumber;
        $data['desc_CPUgeneration'] = $request->desc_CPUgeneration;
        $data['desc_CPU'] = $request->desc_CPU;
        $data['desc_card'] = $request->desc_card;
        $data['desc_ram'] = $request->desc_ram;
        $data['desc_screen'] = $request->desc_screen;
        $data['desc_storage'] = $request->desc_storage;
        $data['desc_maxstorage'] = $request->desc_maxstorage;
        $data['desc_supported'] = $request->desc_supported;
        $data['desc_output'] = $request->desc_output;
        $data['desc_connector'] = $request->desc_connector;
        $data['desc_wireless'] = $request->desc_wireless;
        $data['desc_keyboard'] = $request->desc_keyboard;
        $data['desc_window'] = $request->desc_window;
        $data['desc_size'] = $request->desc_size;
        $data['desc_battery'] = $request->desc_battery;
        $data['desc_weight'] = $request->desc_weight;
        $data['desc_security'] = $request->desc_security;
        $data['desc_accessories'] = $request->desc_accessories;
        $data['desc_led'] = $request->desc_led;
        $data['product_id'] = $request->product_id;
        $data = DB::table('tbl_description')->insert($data);
        Session::put('message','Thêm thông số kỹ thuật sản phẩm thành công');
        return redirect::to('add-desc');
    }

    public function edit_desc($desc_id){
        $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();

        $edit_desc = DB::table('tbl_description')->where('product_id',$desc_id)->get();
        $manager_desc = view('admin.edit_desc')->with('edit_desc',$edit_desc)->with('brand_product',$brand_product);
        return view('admin_layout')->with('admin.edit_desc',$manager_desc);
    }

    public function update_desc(DescriptionRequest $request,$desc_id){
        $data = array();
        $data['brand_id'] = $request->product_brand;
        $data['desc_guarantee'] = $request->desc_guarantee;
        $data['desc_warranty'] = $request->desc_warranty;
        $data['desc_color'] = $request->desc_color;
        $data['desc_serieslaptop'] = $request->desc_serieslaptop;
        $data['desc_partnumber'] = $request->desc_partnumber;
        $data['desc_CPUgeneration'] = $request->desc_CPUgeneration;
        $data['desc_CPU'] = $request->desc_CPU;
        $data['desc_card'] = $request->desc_card;
        $data['desc_ram'] = $request->desc_ram;
        $data['desc_screen'] = $request->desc_screen;
        $data['desc_storage'] = $request->desc_storage;
        $data['desc_maxstorage'] = $request->desc_maxstorage;
        $data['desc_supported'] = $request->desc_supported;
        $data['desc_output'] = $request->desc_output;
        $data['desc_connector'] = $request->desc_connector;
        $data['desc_wireless'] = $request->desc_wireless;
        $data['desc_keyboard'] = $request->desc_keyboard;
        $data['desc_window'] = $request->desc_window;
        $data['desc_size'] = $request->desc_size;
        $data['desc_battery'] = $request->desc_battery;
        $data['desc_weight'] = $request->desc_weight;
        $data['desc_security'] = $request->desc_security;
        $data['desc_accessories'] = $request->desc_accessories;
        $data['desc_led'] = $request->desc_led;
        DB::table('tbl_description')->where('product_id',$desc_id)->update($data);
        Session::put('message','Cập nhật thông tin kỹ thuật sản phẩm thành công');
        return redirect::to('all-desc');   
    }

    public function delete_desc($desc_id){
        DB::table('tbl_description')->where('product_id',$desc_id)->delete();
        Session::put('message','Xoá thông số kỹ thuật sản phẩm thành công');
        return Redirect::to('all-desc');
    }

    public function show($desc_id){
        $show_desc = DB::table('tbl_description')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_description.brand_id')
        ->join('tbl_product','tbl_product.product_id','=','tbl_description.product_id')
        ->where('tbl_description.product_id',$desc_id)
        ->get();
        $manager_desc = view('admin.show')->with('show_desc',$show_desc);
        return view('admin_layout')->with('admin.show',$manager_desc);
    }

}
