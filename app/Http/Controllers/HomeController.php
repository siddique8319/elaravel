<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use DB;

class HomeController extends Controller
{
    public function index()
    {

        $published_product= DB::table('tbl_product')
            ->join('tbl_category', 'tbl_product.category_id', '=', 'tbl_category.category_id')
            ->join('tbl_manufacture', 'tbl_product.manufacture_id', '=', 'tbl_manufacture.manufacture_id')
            ->select('tbl_product.*','tbl_category.category_name','tbl_manufacture.manufacture_name')
            ->where('tbl_product.publication_status',1)
            ->limit(9)
            ->get();

        $manage_published_product = view('pages.home_content')
            ->with('published_product', $published_product);

        return view('layout')
            ->with('pages.home_content', $manage_published_product);
    }
}
