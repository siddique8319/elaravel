<?php


//frontEnd site route

use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@index');


















//Backend site route.................
Route::get('/logout','SuperAdminController@logout');
Route::get('/admin','AdminController@index');

Route::get('/dashboard','SuperAdminController@index');

Route::post('/admin-dashboard','AdminController@dashboard');


// category related

Route::get('/add-category','CategoryController@index');
Route::get('/all-category','CategoryController@all_category');
Route::post('/save-category','CategoryController@save_category');
Route::get('/unactive_category/{category_id}','CategoryController@unactive_category');
Route::get('/active_category/{category_id}','CategoryController@active_category');
Route::get('/edit_category/{category_id}','CategoryController@edit_category');
Route::get('/delete_category/{category_id}','CategoryController@delete_category');
Route::post('/update_category/{category_id}','CategoryController@update_category');



//manufacture or brand

Route::get('/add-manufacture','ManufactureController@index');

Route::post('/save-manufacture','ManufactureController@save_manufacture');

Route::get('/all-manufacture','ManufactureController@all_manufacture');

Route::get('/delete_manufacture/{manufacture_id}','ManufactureController@delete_manufacture');

Route::get('/unactive_manufacture/{manufacture_id}','ManufactureController@unactive_manufacture');
Route::get('/active_manufacture/{manufacture_id}','ManufactureController@active_manufacture');

Route::get('/edit_manufacture/{manufacture_id}','ManufactureController@edit_manufacture');

Route::post('/update_manufacture/{manufacture_id}','ManufactureController@update_manufacture');


//product Route

Route::get('/add-product','ProductController@index');

Route::post('/save-product','ProductController@save_product');

Route::get('/all-product','ProductController@all_product');

Route::get('/unactive_product/{product_id}','ProductController@unactive_product');

Route::get('/active_product/{product_id}','ProductController@active_product');

Route::get('/delete_product/{product_id}','ProductController@delete_product');

Route::get('/edit_product/{product_id}','ProductController@edit_product');
Route::get('/','ProductController@index1');

Route::post('/update_product/{product_id}','ProductController@update_product');






//slider route

Route::get('/add-slider','SliderController@index');
Route::post('/save-slider','SliderController@save_slider');

Route::get('/all-slider','SliderController@all_slider');

Route::get('/unactive_slider/{slider_id}','SliderController@unactive_slider');

Route::get('/active_slider/{slider_id}','SliderController@active_slider');
Route::get('/delete_slider/{slider_id}','SliderController@delete_slider');





