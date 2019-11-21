<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    public function index()
    {
          return view('pages.home_content');

//        $all_product_info = DB::table('tbl_product')
//            ->join('tbl_category', 'tbl_product.category_id', '=', 'tbl_category.category_id')
//            ->join('tbl_manufacture', 'tbl_product.manufacture_id', '=', 'tbl_manufacture.manufacture_id')
//            ->select('tbl_product.*','tbl_category.category_name','tbl_manufacture.manufacture_name')
//            ->get();
//
//        return view('admin.all_product',compact('all_product_info'));
////        $manage_product = view('admin.all_product')
////            ->with('all_product_info', $all_product_info);
//
//        return view('admin_layout')
//            ->with('admin.all_product', $manage_product);
    }
}
