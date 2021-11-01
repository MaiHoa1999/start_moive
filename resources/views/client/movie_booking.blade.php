@extends('index')
@section('content')
    <!-- prs title wrapper Start -->
    <div class="prs_title_main_sec_wrapper">
        <div class="prs_title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="prs_title_heading_wrapper">
                        <h2>Đặt vé</h2>
                        <ul>
                            <li><a href="#">Trang chủ</a>
                            </li>
                            <li>&nbsp;&nbsp; >&nbsp;&nbsp; Đặt vé</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- prs title wrapper End -->
    <!-- prs video top Start -->
    <div class="prs_booking_main_div_section_wrapper">
        <!-- st slider rating wrapper Start -->
        <div class="st_slider_rating_main_wrapper float_left">
            <div class="container">
                <div class="st_calender_tabs">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#home"><span>{{date('D', strtotime('now'))}}</span>
                                <br> {{date('d', strtotime('now'))}}</a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="tab" href="#menu1"> <span>{{date('D', strtotime('now + 1day'))}}</span>
                                <br>{{date('d', strtotime('now + 1day'))}}</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#menu2"> <span>{{date('D', strtotime('now + 2day'))}}</span>
                                <br>{{date('d', strtotime('now + 2day'))}}</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#menu3"> <span>{{date('D', strtotime('now + 3day'))}}</span>
                                <br>{{date('d', strtotime('now + 3day'))}}</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#menu4"> <span>{{date('D', strtotime('now + 4day'))}}</span>
                                <br>{{date('d', strtotime('now + 4day'))}}</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#menu5"> <span>{{date('D', strtotime('now + 5day'))}}</span>
                                <br>{{date('d', strtotime('now + 5day'))}}</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#menu6"> <span>{{date('D', strtotime('now + 6day'))}}</span>
                                <br>{{date('d', strtotime('now + 6day'))}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- st slider rating wrapper End -->
        <!-- st slider sidebar wrapper Start -->
        <div class="st_slider_index_sidebar_main_wrapper st_slider_index_sidebar_main_wrapper_booking float_left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="st_indx_slider_main_container float_left">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="tab-content">
                                        <div id="home" class="tab-pane active">
                                            @php
                                                use App\Screen; use App\Movie;
                                                use Carbon\Carbon;
                                                $date=Carbon::today();
                                                $movie = Movie::all();
                                                $screens = Screen::all()->where('start_date', '>=' , $date)->where('start_date', '<' , $date);                                        $screenByMovie = Screen::groupByMovie($screens,'id_movie');
                                            @endphp
                                            @foreach($screenByMovie as $id_movie => $items)
                                                @php
                                                    $getMovie = Movie::all()->find($id_movie);
                                                @endphp
                                                <div class="st_calender_contant_main_wrapper float_left">
                                                    <div class="st_calender_row_cont st_calender_row_cont2 float_left">
                                                        <div class="st_calender_asc">
                                                            <div class="st_calen_asc_heart"><a href="#"> <i
                                                                        class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="st_calen_asc_heart_cont">
                                                                <h3>{{$getMovie->name}}</h3>
                                                                <ul>
                                                                    <li>
                                                                        <img
                                                                            src="{{asset('frontend/images/content/ticket.png')}}">
                                                                    </li>
                                                                    <li>
                                                                        <img
                                                                            src="{{asset('frontend/images/content/bill.png')}}">
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="st_calen_asc_tecket_time_select">
                                                            <ul>
                                                                @foreach($items as $item)
                                                                    <li>
                                                                        <span>
															<h4>150.000VND</h4>
															<p class="asc_pera1">{{$item->getRoom?$item->getRoom->name:""}}</p>
															<p class="asc_pera2">ĐẶT NGAY</p>
															</span>
                                                                        <a href="{{URL::to('/seat_booking/'.$item->id)}}">{{Carbon::parse($item->start_date)->format('H:i')}}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div id="menu1" class="tab-pane fade">
                                            @php
                                                $screens1 = Screen::all()->where('start_date', '>=' , $date)->where('start_date', '<' , $date->addDay(1));
                                                $screenByMovie1 = Screen::groupByMovie($screens1,'id_movie');
                                            @endphp
                                            @foreach($screenByMovie1 as $id_movie => $items)
                                                @php
                                                    $getMovie = Movie::all()->find($id_movie);
                                                @endphp
                                                <div class="st_calender_contant_main_wrapper float_left">
                                                    <div class="st_calender_row_cont st_calender_row_cont2 float_left">
                                                        <div class="st_calender_asc">
                                                            <div class="st_calen_asc_heart"><a href="#"> <i
                                                                        class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="st_calen_asc_heart_cont">
                                                                <h3>{{$getMovie->name}}</h3>
                                                                <ul>
                                                                    <li>
                                                                        <img
                                                                            src="{{asset('frontend/images/content/ticket.png')}}">
                                                                    </li>
                                                                    <li>
                                                                        <img
                                                                            src="{{asset('frontend/images/content/bill.png')}}">
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="st_calen_asc_tecket_time_select">
                                                            <ul>
                                                                @foreach($items as $item)
                                                                    <li>
                                                                        <span>
															<h4>150.000VND</h4>
															<p class="asc_pera1">{{$item->getRoom?$item->getRoom->name:""}}</p>
															<p class="asc_pera2">ĐẶT NGAY</p>
															</span>
                                                                        <a href="{{URL::to('/seat_booking/'.$item->id)}}">{{Carbon::parse($item->start_date)->format('H:i')}}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div id="menu2" class="tab-pane fade">
                                            @php
                                                $screens2 = Screen::all()->where('start_date', '>=' , $date)->where('start_date', '<' , $date->addDay(1));
                                                $screenByMovie2 = Screen::groupByMovie($screens2,'id_movie');
                                            @endphp
                                            @foreach($screenByMovie2 as $id_movie => $items)
                                                @php
                                                    $getMovie = Movie::all()->find($id_movie);
                                                @endphp
                                                <div class="st_calender_contant_main_wrapper float_left">
                                                    <div class="st_calender_row_cont st_calender_row_cont2 float_left">
                                                        <div class="st_calender_asc">
                                                            <div class="st_calen_asc_heart"><a href="#"> <i
                                                                        class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="st_calen_asc_heart_cont">
                                                                <h3>{{$getMovie->name}}</h3>
                                                                <ul>
                                                                    <li>
                                                                        <img
                                                                            src="{{asset('frontend/images/content/ticket.png')}}">
                                                                    </li>
                                                                    <li>
                                                                        <img
                                                                            src="{{asset('frontend/images/content/bill.png')}}">
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="st_calen_asc_tecket_time_select">
                                                            <ul>
                                                                @foreach($items as $item)
                                                                    <li>
                                                                        <span>
															<h4>150.000VND</h4>
															<p class="asc_pera1">{{$item->getRoom?$item->getRoom->name:""}}</p>
															<p class="asc_pera2">ĐẶT NGAY</p>
															</span>
                                                                        <a href="{{URL::to('/seat_booking/'.$item->id)}}">{{Carbon::parse($item->start_date)->format('H:i')}}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach                                        </div>
                                        <div id="menu3" class="tab-pane fade">
                                            @php
                                                $screens3 = Screen::all()->where('start_date', '>=' , $date)->where('start_date', '<' , $date->addDay(1));
                                                $screenByMovie3 = Screen::groupByMovie($screens3,'id_movie');
                                            @endphp
                                            @foreach($screenByMovie3 as $id_movie => $items)
                                                @php
                                                    $getMovie = Movie::all()->find($id_movie);
                                                @endphp
                                                <div class="st_calender_contant_main_wrapper float_left">
                                                    <div class="st_calender_row_cont st_calender_row_cont2 float_left">
                                                        <div class="st_calender_asc">
                                                            <div class="st_calen_asc_heart"><a href="#"> <i
                                                                        class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="st_calen_asc_heart_cont">
                                                                <h3>{{$getMovie->name}}</h3>
                                                                <ul>
                                                                    <li>
                                                                        <img
                                                                            src="{{asset('frontend/images/content/ticket.png')}}">
                                                                    </li>
                                                                    <li>
                                                                        <img
                                                                            src="{{asset('frontend/images/content/bill.png')}}">
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="st_calen_asc_tecket_time_select">
                                                            <ul>
                                                                @foreach($items as $item)
                                                                    <li>
                                                                        <span>
															<h4>150.000VND</h4>
															<p class="asc_pera1">{{$item->getRoom?$item->getRoom->name:""}}</p>
															<p class="asc_pera2">ĐẶT NGAY</p>
															</span>
                                                                        <a href="{{URL::to('/seat_booking/'.$item->id)}}">{{Carbon::parse($item->start_date)->format('H:i')}}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach                                        </div>
                                        <div id="menu4" class="tab-pane fade">
                                            @php
                                                $screens4 = Screen::all()->where('start_date', '>=' , $date)->where('start_date', '<' , $date->addDay(1));
                                                $screenByMovie4 = Screen::groupByMovie($screens4,'id_movie');
                                            @endphp
                                            @foreach($screenByMovie4 as $id_movie => $items)
                                                @php
                                                    $getMovie = Movie::all()->find($id_movie);
                                                @endphp
                                                <div class="st_calender_contant_main_wrapper float_left">
                                                    <div class="st_calender_row_cont st_calender_row_cont2 float_left">
                                                        <div class="st_calender_asc">
                                                            <div class="st_calen_asc_heart"><a href="#"> <i
                                                                        class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="st_calen_asc_heart_cont">
                                                                <h3>{{$getMovie->name}}</h3>
                                                                <ul>
                                                                    <li>
                                                                        <img
                                                                            src="{{asset('frontend/images/content/ticket.png')}}">
                                                                    </li>
                                                                    <li>
                                                                        <img
                                                                            src="{{asset('frontend/images/content/bill.png')}}">
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="st_calen_asc_tecket_time_select">
                                                            <ul>
                                                                @foreach($items as $item)
                                                                    <li>
                                                                        <span>
															<h4>150.000VND</h4>
															<p class="asc_pera1">{{$item->getRoom?$item->getRoom->name:""}}</p>
															<p class="asc_pera2">ĐẶT NGAY</p>
															</span>
                                                                        <a href="{{URL::to('/seat_booking/'.$item->id)}}">{{Carbon::parse($item->start_date)->format('H:i')}}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach                                        </div>
                                        <div id="menu5" class="tab-pane fade">
                                            @php
                                                $screens5 = Screen::all()->where('start_date', '>=' , $date)->where('start_date', '<' , $date->addDay(1));
                                                $screenByMovie5 = Screen::groupByMovie($screens5,'id_movie');
                                            @endphp
                                            @foreach($screenByMovie5 as $id_movie => $items)
                                                @php
                                                    $getMovie = Movie::all()->find($id_movie);
                                                @endphp
                                                <div class="st_calender_contant_main_wrapper float_left">
                                                    <div class="st_calender_row_cont st_calender_row_cont2 float_left">
                                                        <div class="st_calender_asc">
                                                            <div class="st_calen_asc_heart"><a href="#"> <i
                                                                        class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="st_calen_asc_heart_cont">
                                                                <h3>{{$getMovie->name}}</h3>
                                                                <ul>
                                                                    <li>
                                                                        <img
                                                                            src="{{asset('frontend/images/content/ticket.png')}}">
                                                                    </li>
                                                                    <li>
                                                                        <img
                                                                            src="{{asset('frontend/images/content/bill.png')}}">
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="st_calen_asc_tecket_time_select">
                                                            <ul>
                                                                @foreach($items as $item)
                                                                    <li>
                                                                        <span>
															<h4>150.000VND</h4>
															<p class="asc_pera1">{{$item->getRoom?$item->getRoom->name:""}}</p>
															<p class="asc_pera2">ĐẶT NGAY</p>
															</span>
                                                                        <a href="{{URL::to('/seat_booking/'.$item->id)}}">{{Carbon::parse($item->start_date)->format('H:i')}}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach                                        </div>
                                        <div id="menu6" class="tab-pane fade">
                                            @php
                                                $screens6 = Screen::all()->where('start_date', '>=' , $date)->where('start_date', '<' , $date->addDay(1));
                                                $screenByMovie6 = Screen::groupByMovie($screens6,'id_movie');
                                            @endphp
                                            @foreach($screenByMovie6 as $id_movie => $items)
                                                @php
                                                    $getMovie = Movie::all()->find($id_movie);
                                                @endphp
                                                <div class="st_calender_contant_main_wrapper float_left">
                                                    <div class="st_calender_row_cont st_calender_row_cont2 float_left">
                                                        <div class="st_calender_asc">
                                                            <div class="st_calen_asc_heart"><a href="#"> <i
                                                                        class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="st_calen_asc_heart_cont">
                                                                <h3>{{$getMovie->name}}</h3>
                                                                <ul>
                                                                    <li>
                                                                        <img
                                                                            src="{{asset('frontend/images/content/ticket.png')}}">
                                                                    </li>
                                                                    <li>
                                                                        <img
                                                                            src="{{asset('frontend/images/content/bill.png')}}">
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="st_calen_asc_tecket_time_select">
                                                            <ul>
                                                                @foreach($items as $item)
                                                                    <li>
                                                                        <span>
															<h4>150.000VND</h4>
															<p class="asc_pera1">{{$item->getRoom?$item->getRoom->name:""}}</p>
															<p class="asc_pera2">ĐẶT NGAY</p>
															</span>
                                                                        <a href="{{URL::to('/seat_booking/'.$item->id)}}">{{Carbon::parse($item->start_date)->format('H:i')}}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="prs_mcc_left_side_wrapper">
                            <div class="prs_mcc_left_searchbar_wrapper">
                                <input type="text" placeholder="Tìm kiếm">
                                <button><i class="flaticon-tool"></i>
                                </button>
                            </div>
                            <div class="prs_mcc_bro_title_wrapper">
                                <h2>Thể loại</h2>
                                <ul>
                                    @foreach($category as $item)
                                        <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a
                                                href="{{URL::to('/movie/'.$item->id)}}">{{$item->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="prs_mcc_event_title_wrapper">
                                <h2>Top Events</h2>
                                <img src="{{asset('frontend/images/content/movie_category/event_img.jpg')}}"
                                     alt="event_img">
                                <h3><a href="#">Music Event in india</a></h3>
                                <p>Pune <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                            class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i
                                            class="fa fa-star-o"></i></span>
                                </p>
                                <h4>June 07 <span>08:00-12:00 pm</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- st slider sidebar wrapper End -->
    <!-- prs patner slider Start -->
    <div class="prs_patner_main_section_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="prs_heading_section_wrapper">
                        <h2>Các đối tác</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="prs_pn_slider_wraper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{asset('frontend/images/content/p1.jpg')}}" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{asset('frontend/images/content/p2.jpg')}}" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{asset('frontend/images/content/p3.jpg')}}" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{asset('frontend/images/content/p4.jpg')}}" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{asset('frontend/images/content/p5.jpg')}}" alt="patner_img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="prs_pn_img_wrapper">
                                    <img src="{{asset('frontend/images/content/p6.jpg')}}" alt="patner_img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- prs patner slider End -->
    <!-- prs Newsletter Wrapper Start -->
    <div class="prs_newsletter_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="prs_newsletter_text">
                        <h3>Đăng ký cập nhật thông tin</h3>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="prs_newsletter_field">
                        <input type="text" placeholder="Nhập Email">
                        <button type="submit">Đăng Ký</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- prs Newsletter Wrapper End -->

@endsection
