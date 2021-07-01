<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/index', function(){return view('/index');});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::post('/contactUs', 'ContactFormController@store');
Route::get('/contactUs','ContactFormController@index');

Route::get('/userInfo/{user}','UserInfoController@userInfo')->name('userInfo.show');

Route::put('/userInfo/{id}/update','UserInfoController@update')->name('userInfo.update');

Route::get('/about', 'AboutUsController@index');

Route::post('/index', 'ContactFormController@store');

Route::get('/userShow', 'AdminUserController@index');

Route::get('/adminDeleteUser/{id}','AdminUserController@delete');

Route::get('/adminUserChangeActive/{id}','AdminUserController@adminChangeActive');






































































































































































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
Route::get('/add-desc', 'DescriptionController@add_desc');
Route::get('/add-desc/{pro_id}', 'DescriptionController@add_desc');
Route::get('/all-desc', 'DescriptionController@all_desc'); 

Route::post('/save-desc', 'DescriptionController@save_desc'); 
Route::get('/show/{desc_id}', 'DescriptionController@show');
 
Route::get('/edit-desc/{product_id}', 'DescriptionController@edit_desc');
Route::get('/delete-desc/{product_id}', 'DescriptionController@delete_desc');

Route::post('/update-desc/{product_id}', 'DescriptionController@update_desc'); 

//Details Product
Route::get('/chi-tiet-san-pham/{product_id}', 'ProductController@details_product');

//Gallery
Route::get('add-gallery/{product_id}', 'GalleryController@add_gallery');
Route::post('select-gallery', 'GalleryController@select_gallery');
Route::post('insert-gallery/{pro_id}', 'GalleryController@insert_gallery');
Route::post('update-gallery-name', 'GalleryController@update_gallery_name');
Route::post('delete-gallery', 'GalleryController@delete_gallery');
Route::post('update-gallery', 'GalleryController@update_gallery');

































































































































//Quang thành Routes
Route::get('/laptops-show', 'ProductController@QTindex')->name('laptops.show');

Route::get('/add-to-cart/{id}', 'CartController@getAddToCart')->name('cart.addToCart');
Route::get('/cart', 'CartController@getCart')->name('cart.shoppingCart');
Route::get('/remove-from-card/{id}', 'CartController@getRemoveFromCart')->name('cart.removeFromCart');

Route::get('/checkout', 'CartController@getCheckout')->name('checkout');
Route::post('/checkout', 'CartController@postCheckout')->name('checkout');
