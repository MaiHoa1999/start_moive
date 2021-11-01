@extends('index')
@section('content')
	<!-- prs title wrapper Start -->
	<div class="prs_title_main_sec_wrapper">
		<div class="prs_title_img_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="prs_title_heading_wrapper">
						<h2>Tin tức chi tiết</h2>
						<ul>
							<li><a href="#">Trang chủ</a>
							</li>
							<li>&nbsp;&nbsp; >&nbsp;&nbsp; Tin tức chi tiết</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- prs title wrapper End -->
	<!-- hs sidebar Start -->
	<div class="hs_blog_categories_main_wrapper hs_blog_categories_main_wrapper2">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="hs_blog_left_sidebar_main_wrapper">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="hs_blog_box1_main_wrapper">
									<div class="hs_blog_box1_img_wrapper">
										<img src="{{asset('/upload/'.$blog->image)}}" alt="blog_img">
									</div>
									<div class="hs_blog_box1_cont_main_wrapper">
										<div class="hs_blog_cont_heading_wrapper">
											<ul>
												<li>{{$blog->release_date}}</li>
												<li>by Admin</li>
											</ul>
											<h2>{{$blog->title}}</h2>
											<p>{{$blog->content}}</p>
										</div>

										</div>
									<div class="hs_blog_box1_bottom_cont_main_wrapper">
										<div class="hs_blog_box1_bottom_cont_left">
											<ul>
												<li><i class="fa fa-thumbs-up"></i> &nbsp;&nbsp;<a href="#">1244 Likes</a>
												</li>
												<li><i class="fa fa-comments"></i> &nbsp;&nbsp;<a href="#">256 Comments</a>
												</li>
												<li><i class="fa fa-tags"></i> &nbsp;&nbsp;<a href="#">Presenter Movie</a>
												</li>
											</ul>
										</div>
										<div class="hs_blog_box1_bottom_cont_right">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a>
												</li>
												<li><a href="#"><i class="fa fa-youtube-play"></i></a>
												</li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a>
												</li>
												<li><a href="#"><i class="fa fa-twitter"></i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>




						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="hs_blog_right_sidebar_main_wrapper">
						<div class="prs_mcc_left_searchbar_wrapper">
							<input type="text" placeholder="Search Movie">
							<button><i class="flaticon-tool"></i>
							</button>
						</div>


					

						<div class="prs_blog_right_sub_btn_wrapper">
							<h2>Subscribe</h2>
							<input type="text" placeholder="Your email id">
							<ul>
								<li><a href="#">Subscribe</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- hs sidebar End -->
	<!-- prs Newsletter Wrapper Start -->
	<div class="prs_newsletter_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
					<div class="prs_newsletter_text">
						<h3>Get update sign up now !</h3>
					</div>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
					<div class="prs_newsletter_field">
						<input type="text" placeholder="Enter Your Email">
						<button type="submit">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- prs Newsletter Wrapper End -->
	@endsection
