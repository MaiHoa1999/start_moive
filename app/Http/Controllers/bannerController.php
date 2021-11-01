<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;

class bannerController extends Controller
{
    public function showBanner(){
        $banner = Banner::all();
        return view('admin/banner/all', ['banner'=>$banner]);
    }
      public function addBanner()
    {
        return view('admin/banner/add');
    }
     public function insertBanner(Request $request)
    {

        $banner = new Banner;
        $banner->status = $request->status;
        $get_img = $request->file('image');
        if (isset($get_img)) {
            $get_name_img =uniqid(). '.' . $get_img->getClientOriginalExtension();
            $get_img->move(public_path('/upload'), $get_name_img);
            $banner->image = $get_name_img;
        }
        $banner->save();
        return redirect('admin/banner');
    }
      public function editBanner(Request $request, $id)
    {
        $banner = Banner::find($id);
        return view("admin/banner/edit", ['banner' => $banner]);
    }
    public function updateBanner(Request $request,$id)
    {
        $banner = Banner::find($id);
        $banner->status = $request->status;
        $get_img = $request->file('image');
        if (isset($get_img)) {
            $get_name_img =uniqid(). '.' . $get_img->getClientOriginalExtension();
            $get_img->move(public_path('/upload'), $get_name_img);
            $banner->image = $get_name_img;
        }
        $banner->save();
        return redirect('admin/banner');
    }
    public function deleteBanner($id)
    {
        $banner = Banner::find($id)->delete();
        return redirect("admin/banner");
    }
}
