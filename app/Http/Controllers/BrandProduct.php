<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\BrandRequest;
use App\Http\Requests\BrandRequestIMG;


class BrandProduct extends Controller
{
    public function add_brand_product(){
        return view('admin.add_brand_product');
    }
    public function all_brand_product(){
        $all_brand_product = DB::table('tbl_brand')->get();
        return view('admin.all_brand_product')->with('all_brand_product',$all_brand_product);
    }

    public function save_brand_product(BrandRequest $request){
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;
        $data['brand_image'] = $request->brand_image;
        $get_image = $request->file('brand_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalExtension();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $get_name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('uploads/product',$new_image);
            $data['brand_image'] = $new_image;
            $data = DB::table('tbl_brand')->insert($data);
            Session::put('message','Thêm thương hiệu thành công');
            return redirect::to('all-brand-product');
            }
    $data['brand_image'] = '';
       $data = DB::table('tbl_brand')->insert($data);
       Session::put('message','Thêm thương hiệu thành công');
       return redirect::to('all-brand-product');
    }


    public function edit_brand_product($brand_product_id){
        $edit_brand_product = DB::table('tbl_brand')->where('brand_id',$brand_product_id)->get();
        $manager_brand_product = view('admin.edit_brand_product')->with('edit_brand_product',$edit_brand_product);
        return view('admin_layout')->with('admin.edit_brand_product',$manager_brand_product);
    }

    public function update_brand_product(BrandRequestIMG $request,$brand_product_id){
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;
       
        $get_image = $request->file('brand_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalExtension();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $get_name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('uploads/product',$new_image);
            $data['brand_image'] = $new_image;
            $data = DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update($data);
            Session::put('message','Cập nhật thương hiệu thành công');
            return redirect::to('add-brand-product');
            }
            $data = DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update($data);
       Session::put('message','Cập nhật thương hiệu thành công');
       return redirect::to('all-brand-product');
    }

    public function delete_brand_product($brand_product_id){
        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->delete();
        Session::put('message','Xoá thương hiệu thành công');
        return Redirect::to('all-brand-product');
    }

}
