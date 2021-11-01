<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Category;
class movieController extends Controller
{
     public function showMovie()
    {
        $movie = Movie::all();
        return view('admin/movie/all', ['movie' => $movie]);
    }
      public function addMovie()
    {
        $movie = Movie::all();
        $category = Category::all();
        return view('admin/movie/add', ['movie' => $movie],['category'=>$category]);
    }
   public function insertMovie(Request $request)
    {
        $movie = new Movie;
        $movie->id = $request->id;
        $movie->name = $request->name;
        $movie->trailer = $request->trailer;
        $movie->description = $request->description;
        $movie->duration = $request->duration;
        $movie->release_date = $request->release_date;
        $movie->id_category = $request->id_category;
        $get_img = $request->file('image');
        if (isset($get_img)) {
            $get_name_img =uniqid(). '.' . $get_img->getClientOriginalExtension();
            $get_img->move(public_path('/upload'), $get_name_img);
            $movie->image = $get_name_img;
        }
        $movie->save();
        return redirect('admin/movie');
    }

     public function editMovie($id)
    {
        $movie = Movie::find($id);
        $category = Category::all();
        return view("admin/movie/edit", ['movie' => $movie, 'category' => $category]);
    }
     public function updateMovie(Request $request, $id)
    {
        $movie = Movie::find($id);
        $movie->id = $request->id;
        $movie->name = $request->name;
        $movie->trailer = $request->trailer;
        $movie->description = $request->description;
        $movie->duration = $request->duration;
        $movie->release_date = $request->release_date;
        $movie->id_category = $request->id_category;
        $get_img = $request->file('image');
        if (isset($get_img)) {
            $get_name_img =uniqid(). '.' . $get_img->getClientOriginalExtension();
            $get_img->move(public_path('/upload'), $get_name_img);
            $movie->image = $get_name_img;
        }
        $movie->save();
        return redirect('admin/movie');
    }
      public function deleteMovie($id)
    {
        $movie = Movie::find($id)->delete();
        return redirect("admin/movie");
    }
}
