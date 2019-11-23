<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Session;
session_start();

class SliderController extends Controller
{
    public function index()
    {
        return view('admin.add_slider');
    }

    public function save_slider(Request $request)
    {

        $data=array();
        $data['publication_status'] = $request->publication_status;
        $image = $request->file('slider_image');
        if ($image) {
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'slider/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $data['slider_image'] = $image_url;
                \Illuminate\Support\Facades\DB::table('tbl_slider')->insert($data);
                Session::put('msg', 'Slider added successfully !!!');
                return Redirect::to('/add-slider');
                exit();

            }
            $data['slider_image'] = '';
            DB::table('tbl_slider')->insert($data);
            Session::put('msg', 'Slider added successfully without image ');
            return Redirect::to('/add-slider');

        }
    }


    public function all_slider()
    {
        $all_slider = DB::table('tbl_slider')->get();
        $manage_slider = view('admin.all_slider')
            ->with('all_slider1', $all_slider);

        return view('admin_layout')
            ->with('admin.all_slider', $manage_slider);

    }

    public function unactive_slider($id)
    {
        DB::table('tbl_slider')
            ->where('slider_id', $id)
            ->update(['publication_status' => 0]);
        Session::put('msg', 'Slider Unactivated Successfully !! ');
        return Redirect::to('/all-slider');

    }

    public function active_slider($id)
    {
        DB::table('tbl_slider')
            ->where('slider_id', $id)
            ->update(['publication_status' => 1]);
        Session::put('msg', 'Slider Activated Successfully !! ');
        return Redirect::to('/all-slider');

    }

    public function delete_slider($id)
    {
        DB::table('tbl_slider')
            ->where('slider_id',$id)
            ->delete();
        Session::put('msg', 'Slider Deleted Successfully !! ');
        return Redirect::to('/all-slider');
    }
}
