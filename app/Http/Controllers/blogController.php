<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class blogController extends Controller
{
    public function showBlog(){
        $blog = Blog::all();
        return view('admin/blog/all', ['blog'=>$blog]);
    }
      public function addBlog()
    {
        return view('admin/blog/add');
    }
     public function insertBlog(Request $request)
    {

        $blog = new Blog;
        $blog->id = $request->id;
        $blog->title = $request->title;
        $blog->preview = $request->preview;
        $blog->content = $request->content;

        $get_img = $request->file('image');
        if (isset($get_img)) {
            $get_name_img =uniqid(). '.' . $get_img->getClientOriginalExtension();
            $get_img->move(public_path('/upload'), $get_name_img);
            $blog->image = $get_name_img;
        }
        $blog->save();
        return redirect('admin/blog');
    }
      public function editBlog(Request $request, $id)
    {
        $blog = Blog::find($id);
        return view("admin/blog/edit", ['blog' => $blog]);
    }
    public function updateBlog(Request $request,$id)
    {
        $blog = Blog::find($id);
        $blog->id = $request->id;
        $blog->title = $request->title;
        $blog->preview = $request->preview;
        $blog->content = $request->content;

        $get_img = $request->file('image');
        if (isset($get_img)) {
            $get_name_img =uniqid(). '.' . $get_img->getClientOriginalExtension();
            $get_img->move(public_path('/upload'), $get_name_img);
            $blog->image = $get_name_img;
        }
        $blog->save();
        return redirect('admin/blog');
    }
    public function deleteBlog($id)
    {
        $blog = Blog::find($id)->delete();
        return redirect("admin/blog");
    }
}
