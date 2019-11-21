<?php


//frontEnd site route

use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@index');


















//Backend site route.................
Route::get('/logout','SuperAdminController@logout');
Route::get('/admin','AdminController@index');

Route::get('/dashboard','AdminController@show_dashboard');

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
Route::get('/delete_image/{product_id}','ProductController@delete_image');


