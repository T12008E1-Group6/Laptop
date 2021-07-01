<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/userInfo/{user}','UserInfoController@userInfo')->name('userInfo.show');

Route::put('/userInfo/{id}/update','UserInfoController@update')->name('userInfo.update');

Route::get('/about', 'AboutUsController@index');
Route::get('/index', function(){return view("/index");});
Route::post('/index', 'ContactFormController@store');











































































































































































//admin
Route::get('admin', 'AdminController@show_admin');
//Category
Route::get('/add-category-product', 'CategoryProduct@add_category_product');
Route::get('/all-category-product', 'CategoryProduct@all_category_product'); 
Route::post('/save-category-product', 'CategoryProduct@save_category_product'); 

// Route::get('/unactive-category-product/{category_product_id}','CategoryProduct@unactive_category_product'); 
// Route::get('/active-category-product/{category_product_id}','CategoryProduct@active_category_product'); 

Route::get('/edit-category-product/{category_product_id}', 'CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}', 'CategoryProduct@delete_category_product');

Route::post('/update-category-product/{category_product_id}', 'CategoryProduct@update_category_product'); 

//Brand

Route::get('/add-brand-product', 'BrandProduct@add_brand_product');
Route::get('/all-brand-product', 'BrandProduct@all_brand_product'); 
Route::post('/save-brand-product', 'BrandProduct@save_brand_product'); 

// Route::get('/unactive-brand-product/{brand_product_id}','BrandProduct@unactive_brand_product'); 
// Route::get('/active-brand-product/{brand_product_id}','BrandProduct@active_brand_product'); 

Route::get('/edit-brand-product/{brand_product_id}', 'BrandProduct@edit_brand_product');
Route::get('/delete-brand-product/{brand_product_id}', 'BrandProduct@delete_brand_product');

Route::post('/update-brand-product/{brand_product_id}', 'BrandProduct@update_brand_product');

//AdminProduct

Route::get('/add-product', 'ProductController@add_product');
Route::get('/all-product', 'ProductController@all_product'); 
Route::post('/save-product', 'ProductController@save_product'); 


// Route::get('/unactive-product/{product_id}','ProductController@unactive_product'); 
// Route::get('/active-product/{product_id}','ProductController@active_product'); 

Route::get('/edit-product/{product_id}', 'ProductController@edit_product');
Route::get('/delete-product/{product_id}', 'ProductController@delete_product');

Route::post('/update-product/{product_id}', 'ProductController@update_product'); 

// Description

Route::get('/add-desc/{desc_id}', 'DescriptionController@add_desc');
Route::get('/all-desc', 'DescriptionController@all_desc'); 

Route::post('/save-desc/{desc_id}', 'DescriptionController@save_desc'); 
Route::get('/show/{desc_id}', 'DescriptionController@show');
 
Route::get('/edit-desc/{desc_id}', 'DescriptionController@edit_desc');
Route::get('/delete-desc/{desc_id}', 'DescriptionController@delete_desc');

Route::post('/update-desc/{desc_id}', 'DescriptionController@update_desc'); 

//danh mục sản phẩm trang product
Route::get('/danh-muc-san-pham/{category_id}', 'ProductController@show_category_product'); 

//thương hiệu sản phẩm trang product
Route::get('/thuong-hieu-san-pham/{brand_id}', 'ProductController@show_brand_product'); 


//show Product
Route::get('product', 'ProductController@show_product');


//Details Product
Route::get('/chi-tiet-san-pham/{product_id}', 'ProductController@details_product');

//Gallery
Route::get('add-gallery/{product_id}', 'GalleryController@add_gallery');
Route::post('select-gallery', 'GalleryController@select_gallery');
Route::post('insert-gallery/{pro_id}', 'GalleryController@insert_gallery');
Route::post('update-gallery-name', 'GalleryController@update_gallery_name');
Route::post('delete-gallery', 'GalleryController@delete_gallery');
Route::post('update-gallery', 'GalleryController@update_gallery');