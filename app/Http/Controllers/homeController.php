<?php

namespace App\Http\Controllers;
use App\Booking;
use App\Category;
use App\Blog;
use App\Movie;
use App\Screen;
use Carbon\Carbon;
use App\Banner;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home()
    {
        //phim sapchieu
        $movie_upcoming = Movie::all()->where('release_date', '>' , Carbon::today()->addMonth());
        //phim dang chieu
        $movie_all = Movie::all();
        //phim noi bat
        $movie_special =  Movie::all()->where('rating', '>', 3);
         //show banner
         $banner = Banner::all();
        return view('client/home',  ['movie_upcoming' => $movie_upcoming, 'movie_all' => $movie_all, 'movie_special' => $movie_special],['banner'=>$banner] );


    }
    public function about()
    {
        return view('client/about');
    }
    public function contact()
    {
        return view('client/contact');
    }
    public function blog()
    {
        $blog = Blog::all();
        //blog
        return view('client/blog_category',['blog'=>$blog]);
    }
    public function blog_single($id)
    {
        $blog = Blog::find($id);
        //blog mới nhất
        $blognew = Blog::all();
        return view('client/blog_single',['blog'=>$blog], ['blognew'=>$blognew]);
    }
    public function movie_booking()
    {
//        $room = Room::all();
        $category = Category::all();

        return view('client/movie_booking', ['category'=>$category]);
    }
    public function movie()
    {
//        $date=Carbon::today();
        $category = Category::all();
        $movie = Movie::all();
//        $screens = Screen::all();
        $banner = Banner::all();
        return view('client/movie_category', ['category'=>$category, 'movie'=>$movie],['banner'=>$banner] );

    }
    public function movie_single($id)
    {
        $movie = Movie::find($id);
        $movie_relative = Movie::all()->where('id_category',$movie['id_category']);
        return view('client/movie_single_second', ['movie' => $movie, 'movie_relative' => $movie_relative]);
    }
    public function seat_booking($id)
    {
        $screen = Screen::find($id);
        return view('client/seat_booking', ['screen' => $screen]);
    }
    public function booking_type($id)
    {
        $screen = Screen::find($id);
        return view('client/booking_type', ['screen' => $screen]);
    }
    public function confirmation_screen($id)
    {
//        $screen = Screen::find($id);
        $booking = Booking::find($id);
        return view('client/confirmation_screen', ['booking' => $booking]);
    }
    public function searchMovie( Request $request)
    {
        $keywords = $request->keywords_submit;
        $search_pro= Movie::where('name','LIKE','%'.$keywords.'%')->get();
        return view('client/search',['search_pro'=> $search_pro]);
    }

}
