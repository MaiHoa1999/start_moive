<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class categoryController extends Controller
{
    public function showCategory(){
        $category = Category::all();
        return view('admin/category/all', ['category'=>$category]);
    }
      public function addCategory()
    {
        return view('admin/category/add');
    }
     public function insertCategory(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
        ]);
        $category = new Category;
        $category->id = $request->id;
        $category->name = $request->name;
        $category->uri = $request->uri;
        $get_img = $request->file('image');
        if (isset($get_img)) {
            $get_name_img =uniqid(). '.' . $get_img->getClientOriginalExtension();
            $get_img->move(public_path('/upload'), $get_name_img);
            $category->image = $get_name_img;
        }
        $category->save();
        return redirect('admin/category');
    }
      public function editCategory(Request $request, $id)
    {
        $category = Category::find($id);
        return view("admin/category/edit", ['category' => $category]);
    }
    public function updateCategory(Request $request,$id)
    {
        $category = Category::find($id);
        $category->id = $request->id;
        $category->name = $request->name;
        $category->uri = $request->uri;
        $get_img = $request->file('image');
        if (isset($get_img)) {
            $get_name_img =uniqid(). '.' . $get_img->getClientOriginalExtension();
            $get_img->move(public_path('/upload'), $get_name_img);
            $category->image = $get_name_img;
        }
        $category->save();
        return redirect('admin/category');
    }
    public function deleteCategory($id)
    {
        $category = Category::find($id)->delete();
        return redirect("admin/category");
    }
}
