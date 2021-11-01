@extends('index')
@section('content')
	<!-- prs title wrapper Start -->
	<div class="prs_title_main_sec_wrapper">
		<div class="prs_title_img_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="prs_title_heading_wrapper">
						<h2>Danh sách phim</h2>
						<ul>
							<li><a href="#">Trang chủ</a>
							</li>
							<li>&nbsp;&nbsp; >&nbsp;&nbsp; Danh sách phim</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- prs title wrapper End -->
	<!-- prs mc slider wrapper Start -->
	<div class="prs_mc_slider_main_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="prs_heading_section_wrapper">
						<h2>Comming soon</h2>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="prs_mc_slider_wrapper">
						<div class="owl-carousel owl-theme">
                            @foreach ($banner as $item)


							<div class="item fiximage">
								<img src="{{asset('/upload/'.$item->image)}}" alt="about_img">
							</div>

                            @endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- prs mc slider wrapper End -->
	<!-- prs mc category slidebar Start -->
	<div class="prs_mc_category_sidebar_main_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-sm hidden-xs">
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

                                    <li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="{{URL::to('/movie/'.$item->id)}}">{{$item->name}}</a>
                                    </li>
                                @endforeach
							</ul>
						</div>
						<div class="prs_mcc_event_title_wrapper">
							<h2>Top Events</h2>
							<img src="{{asset('frontend/images/content/movie_category/event_img.jpg')}}" alt="event_img">
							<h3><a href="#">Music Event in india</a></h3>
							<p>Pune <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span>
							</p>
							<h4>June 07 <span>08:00-12:00 pm</span></h4>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="prs_mcc_right_side_wrapper">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="prs_mcc_right_side_heading_wrapper">
									<h2>Phim đang chiếu</h2>
									<ul class="nav nav-pills">
										<li class="active"><a data-toggle="pill" href="#grid"><i class="fa fa-th-large"></i></a>
										</li>
										<li><a data-toggle="pill" href="#list"><i class="fa fa-list"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="tab-content">
									<div id="grid" class="tab-pane fade in active">
										<div class="row">
                                            @foreach ($movie as $item)

                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 prs_upcom_slide_first">
                                                    <div class="prs_upcom_movie_box_wrapper prs_mcc_movie_box_wrapper">
                                                        <div class="prs_upcom_movie_img_box">
                                                            <img src="{{asset('/upload/'.$item->image)}}" alt="movie_img" />
                                                            <div class="prs_upcom_movie_img_overlay"></div>
                                                            <div class="prs_upcom_movie_img_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#">Xem Trailer</a>
                                                                    </li>
                                                                    <li><a href="{{url::to('/movie/'.$item->id)}}">Xem Chi tiết</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="prs_upcom_movie_content_box">
                                                            <div class="prs_upcom_movie_content_box_inner">
                                                                <h2 class="textone"><a href="#">{{$item->name}}</a></h2>
                                                                <p>{{$item->category?$item->category->name:'blank'}}</p>	<i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="prs_upcom_movie_content_box_inner_icon">
                                                                <ul>
                                                                    <li><a href="movie_booking.html"><i class="flaticon-cart-of-ecommerce"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="pager_wrapper gc_blog_pagination">
													<ul class="pagination">
														<li><a href="#"><i class="flaticon-left-arrow"></i></a>
														</li>
														<li><a href="#">1</a>
														</li>
														<li><a href="#">2</a>
														</li>
														<li class="prs_third_page"><a href="#">3</a>
														</li>
														<li class="hidden-xs"><a href="#">4</a>
														</li>
														<li><a href="#"><i class="flaticon-right-arrow"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div id="list" class="tab-pane fade">
										<div class="row">
                                            @foreach ($movie as $item)


                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="prs_mcc_list_movie_main_wrapper">
                                                        <div class="prs_mcc_list_movie_img_wrapper">
                                                            <img src="{{asset('/upload/'.$item->image)}}" alt="categoty_img">
                                                        </div>
                                                        <div class="prs_mcc_list_movie_img_cont_wrapper">
                                                            <div class="prs_mcc_list_left_cont_wrapper">
                                                                <h2>{{$item->name}}</h2>
                                                                <p>{{$item->category?$item->category->name:'blank'}} &nbsp;&nbsp;&nbsp;<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
                                                                </p>
                                                                <h4>Movie Director - Jhon Doe</h4>
                                                            </div>
                                                            <div class="prs_mcc_list_right_cont_wrapper">	<a href="#"><i class="flaticon-cart-of-ecommerce"></i></a>
                                                            </div>
                                                            <div class="prs_mcc_list_bottom_cont_wrapper">
                                                                <p>{{$item->description}}</p>
                                                                <ul>
                                                                    <li><a href="#">Xem Trailer</a>
                                                                    </li>
                                                                    <li><a href="{{URL::to('/movie/'.$item->id)}}git remote add origin https://github.com/xxxibqtaz/starcinema.git">Xem Chi tiết</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="pager_wrapper gc_blog_pagination">
													<ul class="pagination">
														<li><a href="#"><i class="flaticon-left-arrow"></i></a>
														</li>
														<li><a href="#">1</a>
														</li>
														<li><a href="#">2</a>
														</li>
														<li class="prs_third_page"><a href="#">3</a>
														</li>
														<li class="hidden-xs"><a href="#">4</a>
														</li>
														<li><a href="#"><i class="flaticon-right-arrow"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 visible-sm visible-xs">
					<div class="prs_mcc_left_side_wrapper">
						<div class="prs_mcc_left_searchbar_wrapper">
							<input type="text" placeholder="Tìm kiếm">
							<button><i class="flaticon-tool"></i>
							</button>
						</div>
						<div class="prs_mcc_bro_title_wrapper">
							<h2>thể loại</h2>
							<ul>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Tất cả <span>23,124</span></a>
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Hành động <span>512</span></a>
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Lãng mạn <span>548</span></a>
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Tình yêu <span>557</span></a>
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Nhạc kịch <span>554</span></a>
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Truyền hình <span>567</span></a>
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Kinh dị <span>478</span></a>
								</li>
							</ul>
						</div>
						<div class="prs_mcc_event_title_wrapper">
							<h2>Top Events</h2>
							<img src="{{asset('frontend/images/content/movie_category/event_img.jpg')}}" alt="event_img">
							<h3><a href="#">Music Event in india</a></h3>
							<p>Mumbai & Pune <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span>
							</p>
							<h4>June 07 <span>08:00-12:00 pm</span></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- prs mc category slidebar End -->
	<!-- prs theater Slider Start -->
	<div class="prs_theater_main_slider_wrapper">
		<div class="prs_theater_img_overlay"></div>
		<div class="prs_theater_sec_heading_wrapper">
			<h2>Phim thịnh hành</h2>
		</div>
		<div class="wrap-album-slider">
			<ul class="album-slider">
				<li class="album-slider__item">
					<figure class="album">
						<div class="prs_upcom_movie_box_wrapper">
							<div class="prs_upcom_movie_img_box">
								<img src="{{asset('frontend/images/content/up1.jpg')}}" alt="movie_img" />
								<div class="prs_upcom_movie_img_overlay"></div>
								<div class="prs_upcom_movie_img_btn_wrapper">
									<ul>
										<li><a href="#">Xem Trailer</a>
										</li>
										<li><a href="#">Xem Chi tiết</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="prs_upcom_movie_content_box">
								<div class="prs_upcom_movie_content_box_inner">
									<h2 class="textone"><a href="#">Busting Car</a></h2>
									<p>Drama , Acation</p>	<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<div class="prs_upcom_movie_content_box_inner_icon">
									<ul>
										<li><a href="movie_booking.html"><i class="flaticon-cart-of-ecommerce"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End album body -->
					</figure>
					<!-- End album -->
				</li>
				<!-- End album slider item -->
				<li class="album-slider__item">
					<figure class="album">
						<div class="prs_upcom_movie_box_wrapper">
							<div class="prs_upcom_movie_img_box">
								<img src="{{asset('frontend/images/content/up2.jpg')}}" alt="movie_img" />
								<div class="prs_upcom_movie_img_overlay"></div>
								<div class="prs_upcom_movie_img_btn_wrapper">
									<ul>
										<li><a href="#">Xem Trailer</a>
										</li>
										<li><a href="#">Xem Chi tiết</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="prs_upcom_movie_content_box">
								<div class="prs_upcom_movie_content_box_inner">
									<h2><a href="#">Busting Car</a></h2>
									<p>Drama , Acation</p>	<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<div class="prs_upcom_movie_content_box_inner_icon">
									<ul>
										<li><a href="movie_booking.html"><i class="flaticon-cart-of-ecommerce"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End album body -->
					</figure>
					<!-- End album -->
				</li>
				<!-- End album slider item -->
				<li class="album-slider__item">
					<figure class="album">
						<div class="prs_upcom_movie_box_wrapper">
							<div class="prs_upcom_movie_img_box">
								<img src="{{asset('frontend/images/content/up3.jpg')}}" alt="movie_img" />
								<div class="prs_upcom_movie_img_overlay"></div>
								<div class="prs_upcom_movie_img_btn_wrapper">
									<ul>
										<li><a href="#">Xem Trailer</a>
										</li>
										<li><a href="#">Xem Chi tiết</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="prs_upcom_movie_content_box">
								<div class="prs_upcom_movie_content_box_inner">
									<h2><a href="#">Busting Car</a></h2>
									<p>Drama , Acation</p>	<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<div class="prs_upcom_movie_content_box_inner_icon">
									<ul>
										<li><a href="movie_booking.html"><i class="flaticon-cart-of-ecommerce"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End album body -->
					</figure>
					<!-- End album -->
				</li>
				<!-- End album slider item -->
				<li class="album-slider__item">
					<figure class="album">
						<div class="prs_upcom_movie_box_wrapper">
							<div class="prs_upcom_movie_img_box">
								<img src="{{asset('frontend/images/content/up4.jpg')}}" alt="movie_img" />
								<div class="prs_upcom_movie_img_overlay"></div>
								<div class="prs_upcom_movie_img_btn_wrapper">
									<ul>
										<li><a href="#">Xem Trailer</a>
										</li>
										<li><a href="#">Xem Chi tiết</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="prs_upcom_movie_content_box">
								<div class="prs_upcom_movie_content_box_inner">
									<h2><a href="#">Busting Car</a></h2>
									<p>Drama , Acation</p>	<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<div class="prs_upcom_movie_content_box_inner_icon">
									<ul>
										<li><a href="movie_booking.html"><i class="flaticon-cart-of-ecommerce"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End album body -->
					</figure>
					<!-- End album -->
				</li>
				<!-- End album slider item -->
				<li class="album-slider__item">
					<figure class="album">
						<div class="prs_upcom_movie_box_wrapper">
							<div class="prs_upcom_movie_img_box">
								<img src="{{asset('frontend/images/content/up5.jpg')}}" alt="movie_img" />
								<div class="prs_upcom_movie_img_overlay"></div>
								<div class="prs_upcom_movie_img_btn_wrapper">
									<ul>
										<li><a href="#">Xem Trailer</a>
										</li>
										<li><a href="#">Xem Chi tiết</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="prs_upcom_movie_content_box">
								<div class="prs_upcom_movie_content_box_inner">
									<h2><a href="#">Busting Car</a></h2>
									<p>Drama , Acation</p>	<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<div class="prs_upcom_movie_content_box_inner_icon">
									<ul>
										<li><a href="movie_booking.html"><i class="flaticon-cart-of-ecommerce"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End album body -->
					</figure>
					<!-- End album -->
				</li>
				<!-- End album slider item -->
				<li class="album-slider__item">
					<figure class="album">
						<div class="prs_upcom_movie_box_wrapper">
							<div class="prs_upcom_movie_img_box">
								<img src="{{asset('frontend/images/content/up6.jpg')}}" alt="movie_img" />
								<div class="prs_upcom_movie_img_overlay"></div>
								<div class="prs_upcom_movie_img_btn_wrapper">
									<ul>
										<li><a href="#">Xem Trailer</a>
										</li>
										<li><a href="#">Xem Chi tiết</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="prs_upcom_movie_content_box">
								<div class="prs_upcom_movie_content_box_inner">
									<h2><a href="#">Busting Car</a></h2>
									<p>Drama , Acation</p>	<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<div class="prs_upcom_movie_content_box_inner_icon">
									<ul>
										<li><a href="movie_booking.html"><i class="flaticon-cart-of-ecommerce"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End album body -->
					</figure>
					<!-- End album -->
				</li>
				<!-- End album slider item -->
				<li class="album-slider__item">
					<figure class="album">
						<div class="prs_upcom_movie_box_wrapper">
							<div class="prs_upcom_movie_img_box">
								<img src="{{asset('frontend/images/content/up7.jpg')}}" alt="movie_img" />
								<div class="prs_upcom_movie_img_overlay"></div>
								<div class="prs_upcom_movie_img_btn_wrapper">
									<ul>
										<li><a href="#">Xem Trailer</a>
										</li>
										<li><a href="#">Xem Chi tiết</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="prs_upcom_movie_content_box">
								<div class="prs_upcom_movie_content_box_inner">
									<h2><a href="#">Busting Car</a></h2>
									<p>Drama , Acation</p>	<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<div class="prs_upcom_movie_content_box_inner_icon">
									<ul>
										<li><a href="movie_booking.html"><i class="flaticon-cart-of-ecommerce"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End album body -->
					</figure>
					<!-- End album -->
				</li>
				<!-- End album slider item -->
			</ul>
			<!-- End slider -->
		</div>
	</div>
	<!-- prs theater Slider End -->
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
