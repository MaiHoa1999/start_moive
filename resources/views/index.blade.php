<!DOCTYPE html>
<!--
Template Name: Movie Pro
Version: 1.0.0
Author: Webstrot

-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--[endif]-->


<!-- Mirrored from www.webstrot.com/html/moviepro/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Nov 2020 11:35:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8" />
	<title>Movie Pro Responsive HTML Template</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta name="description" content="Movie Pro" />
	<meta name="keywords" content="Movie Pro" />
	<meta name="author" content="" />
	<meta name="MobileOptimized" content="320" />
	<!--Template style -->
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/animate.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/bootstrap.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/font-awesome.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/fonts.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/flaticon.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/owl.carousel.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/owl.theme.default.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/dl-menu.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/nice-select.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/magnific-popup.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/venobox.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend/js/plugin/rs_slider/layers.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend/js/plugin/rs_slider/navigation.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend/js/plugin/rs_slider/settings.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/style.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/responsive.css')}}" />
	<link rel="stylesheet" id="theme-color" type="text/css" href="#"/>
	<!-- favicon links -->
	<link rel="shortcut icon" type="image/png" href="{{asset('frontend/images/header/favicon.ico')}}" />
<script src='../../../google_analytics_auto.js'></script>
</head>

<body>
	<!-- preloader Start -->
	<div id="preloader">
		<div id="status">
			<img src="{{asset('frontend/images/header/horoscope.gif')}}" id="preloader_image" alt="loader">
		</div>
	</div>
	<!-- prs navigation Start -->
	<div class="prs_navigation_main_wrapper">
		<div class="container-fluid">
			<div id="search_open" class="gc_search_box">
				<input type="text" placeholder="Search here">
				<button><i class="fa fa-search" aria-hidden="true"></i>
				</button>
			</div>
			<div class="prs_navi_left_main_wrapper">
				<div class="prs_logo_main_wrapper">
					<a href="index.html">
						<img src="{{asset('frontend/images/header/logo.png')}}" alt="logo" />
					</a>
				</div>
				<div class="prs_menu_main_wrapper">
					<nav class="navbar navbar-default">
						<div id="dl-menu" class="xv-menuwrapper responsive-menu">
							<button class="dl-trigger">
								<img src="{{asset('frontend/images/header/bars.png')}}" alt="bar_png">
							</button>
							<div class="prs_mobail_searchbar_wrapper" id="search_button">	<i class="fa fa-search"></i>
							</div>
							<div class="clearfix"></div>
							<ul class="dl-menu">
								<li class="parent"><a href="{{URL::to('/home')}}">Trang Chủ</a></li>
								<li class="parent"><a href="{{URL::to('/about')}}">Giới thiệu</a>
								<li class="parent"><a href="{{URL::to('/movie')}}">Phim</a>
								</li>

								<li class="parent"><a href="{{URL::to('/blog')}}">Tin tức</a>
								<!-- <li class="parent"><a href="#">pages</a>
									<ul class="lg-submenu">
										<li class="parent"><a href="#">Blog</a>
											<ul class="lg-submenu">
												<li><a href="blog_category.html">Blog-Category</a>
												</li>
												<li><a href="blog_single.html">Blog-Single</a>
												</li>
											</ul>
										</li>
										<li class="parent"><a href="#">Event</a>
											<ul class="lg-submenu">
												<li><a href="event_category.html">Event-Category</a>
												</li>
												<li><a href="event_single.html">Event-Single</a>
												</li>
											</ul>
										</li>
										<li class="parent"><a href="#">Movie</a>
											<ul class="lg-submenu">
												<li><a href="movie_category.html">Movie-Category</a>
												</li>
												<li><a href="movie_single.html">Movie-Single</a>
												</li>
												<li><a href="movie_single_second.html">Movie-Single-II</a>
												</li>
											</ul>
										</li>
										<li><a href="gallery.html">gallery</a>
										</li>
										<li><a href="booking_type.html">Booking-Type</a>
										</li>
										<li><a href="confirmation_screen.html">Confirmation-Screen</a>
										</li>
										<li><a href="movie_booking.html">Movie-Booking</a>
										</li>
										<li><a href="seat_booking.html">Seat-Booking</a>
										</li>
									</ul>
								</li> -->
								<li class="parent"><a href="{{URL::to('/contact')}}">liên hệ</a>
								</li>
							</ul>
						</div>
						<!-- /dl-menuwrapper -->
					</nav>
				</div>
			</div>
			<div class="prs_navi_right_main_wrapper">
				<div class="prs_top_login_btn_wrapper">
					<div class="prs_animate_btn1">
						<ul>
							<li><a href="{{URL::to('/user/login')}}" class="button button--tamaya" data-text="đăng nhập" data-toggle="modal"><span>Đăng nhập</span></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="product-heading">
					<div class="con">
						<select>
							<option>Phim</option>
							<option>Video</option>
							<option>Music</option>
							<option>TV-Show</option>
						</select>
                        <div>
                            <form action="{{URL::to('/search')}}" method="POST">
                                @csrf
                            <input type="text" name="keywords_submit" placeholder="Tìm kiếm">
                            <button type="submit" name= search_items value="tìm kiếm"><i class="fa fa-search" ></i>

                            </form>
                        </div>
						{{-- <input type="text" placeholder="Tìm  ...">
						<button type="submit"><i class="flaticon-tool"></i>
						</button> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- prs navigation End -->
	@yield('content')
	<!-- prs footer Wrapper Start -->
	<div class="prs_footer_main_section_wrapper">
		<div class="container">
			<div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="prs_footer_cont1_wrapper prs_footer_cont1_wrapper_3">
						<h2>startcinema</h2>

						<ul>
							<li><i class="fa fa-circle"></i>  Liên hệ: 1900 6017
							</li>
							<li><i class="fa fa-circle"></i>   Thời gian: 8:00 - 22:00
							</li>
							<li><i class="fa fa-circle"></i> Email: startcinema@cgv.vn
							</li>

						</ul>
					</div>
				</div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="prs_footer_cont1_wrapper prs_footer_cont1_wrapper_3">
						<h2>Danh Mục</h2>
						<ul>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="{{URL::to('/home')}}">Trang chủ</a>
							</li>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="{{URL::to('/about')}}">Giới Thiệu</a>
							</li>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="{{URL::to('/movie')}}">Phim</a>
							</li>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="{{URL::to('/blog')}}">Tin Tức </a>
							</li>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="{{URL::to('/contact')}}">Liên hệ</a>
							</li>

						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="prs_footer_cont1_wrapper prs_footer_cont1_wrapper_2">
						<h2>Thể Loại Phim</h2>
                        <ul>
                        @php
                        use App\Category;
                        $category = Category::all();


                            foreach ($category as $item) {
                                echo'<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="'.$item->url.'">'.$item->name.'</a>
							</li>';
                            }

                        @endphp
                        </ul>

					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="prs_footer_cont1_wrapper prs_footer_cont1_wrapper_4">
						<h2>App available on</h2>
						<p>Tải xuống ứng dụng và nhận vé xem phim miễn phí! !</p>
						<ul>
							<li>
								<a href="#">
									<img src="{{asset('frontend/images/content/f1.jpg')}}" alt="footer_img">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="{{asset('frontend/images/content/f2.jpg')}}" alt="footer_img">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade st_pop_form_wrapper" id="myModa2" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="st_pop_form_heading_wrapper st_pop_form_heading_wrapper_fpass float_left">
					<h3>Forgot Password</h3>
					<p>We can help! All you need to do is enter your email ID and follow the instructions!</p>
				</div>
				<div class="st_profile_input float_left">
					<label>Email Address</label>
					<input type="text">
				</div>
				<div class="st_form_pop_fpass_btn float_left">	<a href="#">Verify</a>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade st_pop_form_wrapper" id="myModa3" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="st_pop_form_heading_wrapper float_left">
					<h3>Sign Up</h3>
				</div>
				<div class="st_profile_input float_left">
					<label>Email / Mobile Number</label>
					<input type="text">
				</div>
				<div class="st_profile__pass_input st_profile__pass_input_pop float_left">
					<input type="password" placeholder="Password">
				</div>
				<div class="st_form_pop_fp float_left">
					<h3><a href="#" data-toggle="modal" data-target="#myModa2" target="_blank">Forgot Password?</a></h3>
				</div>
				<div class="st_form_pop_login_btn float_left">	<a href="http://webstrot.com/html/moviepro/html/page-1-7_profile_settings.html">LOGIN</a>
				</div>
				<div class="st_form_pop_or_btn float_left">
					<h4>or</h4>
				</div>
				<div class="st_form_pop_facebook_btn float_left">	<a href="#"><i class="fab fa-facebook-f"></i> Connect with Facebook</a>
				</div>
				<div class="st_form_pop_gmail_btn float_left">	<a href="#"><i class="fab fa-google-plus-g"></i> Connect with Google</a>
				</div>
				<div class="st_form_pop_signin_btn st_form_pop_signin_btn_signup float_left">
					<h5>I agree to the <a href="#">Terms & Conditions</a> & <a href="#">Privacy Policy</a></h5>
				</div>
			</div>
		</div>
	</div>
	<!-- st login wrapper End -->
	<!--main js file start-->
    <script src="{{asset('/frontend/js/jquery_min.js')}}"></script>
    <script src="{{asset('/frontend/js/modernizr.js')}}"></script>
    <script src="{{asset('/frontend/js/bootstrap.js')}}"></script>
    <script src="{{asset('/frontend/js/owl.carousel.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.dlmenu.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.bxslider.min.js')}}"></script>
    <script src="{{asset('/frontend/js/venobox.min.js')}}"></script>
    <script src="{{asset('/frontend/js/smothscroll_part1.js')}}"></script>
    <script src="{{asset('/frontend/js/smothscroll_part2.js')}}"></script>
    <script src="{{asset('/frontend/js/plugin/rs_slider/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('/frontend/js/plugin/rs_slider/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('/frontend/js/plugin/rs_slider/revolution.addon.snow.min.js')}}"></script>
    <script src="{{asset('/frontend/js/plugin/rs_slider/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('/frontend/js/plugin/rs_slider/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('/frontend/js/plugin/rs_slider/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('/frontend/js/plugin/rs_slider/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('/frontend/js/plugin/rs_slider/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('/frontend/js/plugin/rs_slider/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('/frontend/js/plugin/rs_slider/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('/frontend/js/plugin/rs_slider/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('/frontend/js/plugin/rs_slider/revolution.extension.video.min.js')}}"></script>
    <script src="{{asset('/frontend/js/custom.js')}}"></script>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="NG0q8hFW"></script>
	<!--main js file end-->
</body>


<!-- Mirrored from www.webstrot.com/html/moviepro/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Nov 2020 11:37:36 GMT -->
</html>
