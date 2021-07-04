<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductIMGRequest;
use App\Gallery;
use App\product;
use File;


class ProductController extends Controller
{
    //
    public function add_product(){
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();
        return view('admin.add_product')->with('cate_product',$cate_product)->with('brand_product',$brand_product);
    }
    public function all_product(){
        $all_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->orderby('tbl_product.product_id')
        ->get();
        return view('admin.all_product')->with('all_product',$all_product);
    }

    public function save_product(ProductRequest $request){
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_desc'] = $request->product_desc;
     
        $data['product_content'] = $request->product_content;
        $data['product_amount'] = $request->product_amount;
        $data['product_price'] = $request->product_price;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;

        $get_image = $request->file('product_image');
        $path = 'uploads/product/';
        $path_gallery = 'uploads/gallery/';
        if($get_image){
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);
        File::copy($path.$new_image,$path_gallery.$new_image);
        $data['product_image'] = $new_image;
        }
        $pro_id = DB::table('tbl_product')->insertGetId($data);
        
        $gallery = new Gallery();
        $gallery->gallery_image = $new_image;
        $gallery->product_id = $pro_id;
        $gallery->gallery_name = $new_image;
        $gallery->save();
        Session::put('message','Thêm sản phẩm thành công');
        return redirect::to('add-product');
    }

    public function edit_product($product_id){
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();

        $edit_product = DB::table('tbl_product')->where('product_id',$product_id)->get();
        $manager_product = view('admin.edit_product')->with('edit_product',$edit_product)
        ->with('cate_product',$cate_product)
        ->with('brand_product',$brand_product);
        return view('admin_layout')->with('admin.edit_product',$manager_product);
    }

    public function update_product(ProductIMGRequest $request,$product_id){
        $data=array();
        $data['product_name'] = $request->product_name;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['product_amount'] = $request->product_amount;
        $data['product_price'] = $request->product_price;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $get_image = $request->file('product_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('uploads/product',$new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->where('product_id',$product_id)->update($data);
           Session::put('message','Thêm sản phẩm thành công');
           return redirect::to('all-product');
            }
            DB::table('tbl_product')->where('product_id',$product_id)->update($data);
           Session::put('message','Cập nhật sản phẩm thành công');
           return redirect::to('all-product');  
    }

    public function delete_product($product_id){
        DB::table('tbl_product')->where('product_id',$product_id)->delete();
        Session::put('message','Xoá sản phẩm thành công');
        return Redirect::to('all-product');
    }

    public function show($product_id){
        $all_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')->orderby('tbl_product.product_id')->get();
        return view('admin.show');
    }

    public function details_product($product_id){
    $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
    $brand_product = DB::table('tbl_brand')->orderby('brand_id','desc')->get();
    $desc_product = DB::table('tbl_description')
    ->join('tbl_brand','tbl_brand.brand_id','=','tbl_description.brand_id')->where('product_id',$product_id)
    ->get();

    $details_product = DB::table('tbl_product')
    ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
    ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
    ->where('tbl_product.product_id',$product_id)->get();       
    
    foreach($details_product as $key =>$value){
        $product_id = $value->product_id;
        $brand_id = $value->brand_id;
    }

    $related_product = DB::table('tbl_product')
    ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
    ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
    ->where('tbl_brand.brand_id',$brand_id)->whereNotIn('tbl_product.product_id',[$product_id])->get();       
    
    //gallery
    $gallery = Gallery::where('product_id',$product_id)->get();

    return view('product.details_product')
    ->with('category',$cate_product)
    ->with('brand',$brand_product)
    ->with('product_details',$details_product)
    ->with('product_desc',$desc_product)
    ->with('gallery',$gallery)
    ->with('ralate',$related_product);
 }  

    public function show_product(){
        $show_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->Paginate(12);
        //  ->get();
    
        $show_category = DB::table('tbl_category_product')->get();
        $show_brand = DB::table('tbl_brand')->get();
        $show_desc = DB::table('tbl_description') ->join('tbl_product','tbl_product.product_id','=','tbl_description.product_id')->get();
        return view('product.show_product')
        ->with('show_product',$show_product)
        ->with('show_category',$show_category)
        ->with('show_desc',$show_desc)
        ->with('show_brand',$show_brand);
    }
    public function show_category_product($category_id){
        $show_category = DB::table('tbl_category_product')->get();
        $show_brand = DB::table('tbl_brand')->get();
        $show_category_id = DB::table('tbl_product')->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')
        ->where('tbl_product.category_id',$category_id)->Paginate(12);
        $show_desc = DB::table('tbl_description') ->join('tbl_product','tbl_product.product_id','=','tbl_description.product_id')->get();
        $category_name = DB::table('tbl_category_product')->where('tbl_category_product.category_id',$category_id)->limit(1)->get();
        return view('product.show_category_product')
        ->with('show_category',$show_category)
        ->with('show_brand',$show_brand)
        ->with('category_name',$category_name)
        ->with('show_desc',$show_desc)
        ->with('show_category_id',$show_category_id);   
    }

    public function show_brand_product($brand_id){
        $show_category = DB::table('tbl_category_product')->get();
        $show_brand = DB::table('tbl_brand')->get();
        $show_brand_id = DB::table('tbl_product')->join('tbl_brand','tbl_product.brand_id','=','tbl_brand.brand_id')
        ->where('tbl_product.brand_id',$brand_id)->get();
        $brand_name = DB::table('tbl_brand')->where('tbl_brand.brand_id',$brand_id)->limit(1)->get();
        $show_desc = DB::table('tbl_description') ->join('tbl_product','tbl_product.product_id','=','tbl_description.product_id')->get();
        return view('product.show_brand_product')
        ->with('show_category',$show_category)
        ->with('show_brand',$show_brand)
        ->with('show_desc',$show_desc)
        ->with('brand_name',$brand_name)
        ->with('show_brand_id',$show_brand_id);
    }



















































































































































































































































 //Quang Thành code
 public function QTindex() {
     $laptops = product::all();
     return view('product.QT_index', ['laptops' => $laptops]);
 }

}
