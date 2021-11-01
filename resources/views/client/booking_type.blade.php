@extends('index')
@section('content')
@php
use Carbon\Carbon;
        use \App\User;
        $user = User::userByID(session('id'));
@endphp
	<div class="st_bt_top_header_wrapper float_left">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
					<div class="st_bt_top_back_btn float_left">	<a href="{{URL::to('/')}}"><i class="fas fa-long-arrow-alt-left"></i> &nbsp;Trở lại</a>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="st_bt_top_center_heading float_left">
						<h3>{{$screen->movie?$screen->movie->name:''}} - {{$screen->movie?$screen->movie->duration:''}} phút</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- st top header Start -->
	<!-- st dtts section Start -->
	<div class="st_dtts_wrapper float_left">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
					<div class="st_dtts_left_main_wrapper float_left">
						<div class="row">
							<div class="col-md-12">
								<div class="st_dtts_ineer_box float_left">
									<ul>
										<li><span class="dtts1">Ngày chiếu</span>  <span class="dtts2">{{Carbon::parse($screen->start_date)->toDateString()}}</span>
										</li>
										<li><span class="dtts1">Giờ chiếu</span>  <span class="dtts2">{{Carbon::parse($screen->start_date)->toTimeString()}}</span>
										</li>
										<li><span class="dtts1">Phòng chiếu</span>  <span class="dtts2">{{$screen->getRoom?$screen->getRoom->name:""}}</span>
										</li>
										<li><span class="dtts1">Ghế</span>  <span class="dtts2" id="seat"> </span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-12">
								<div class="st_cherity_btn float_left">
									<h3>CÁC HÌNH THỨC GIẢM GIÁ</h3>
									<ul>
										<li><a href="#"><i class="flaticon-tickets"></i> Tích điểm</a>
										</li>
										<li><a href="#"><i class="flaticon-tickets"></i> &nbsp;Phiếu giảm giá </a>
										</li>
{{--										<li><a href="{{URL::to('/confirmation_screen')}}" id="paypal">Hoàn tất thanh toán </a>--}}
										<li><a href="#" id="paypal">Hoàn tất thanh toán </a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
					<div class="row">
						<div class="col-md-12">
							<div class="st_dtts_bs_wrapper float_left">
								<div class="st_dtts_bs_heading float_left">
									<p>Chi tiết đặt vé</p>
								</div>
								<div class="st_dtts_sb_ul float_left">
                                    <ul>
                                        <li>Tiền vé
                                            <br><span id="cost"></span>
                                        </li>
                                        <li>Giảm giá <span id="discount">0</span>
                                        </li>
                                    </ul>
									<p>Tích điểm <span>0</span>
									</p>
									<p>Phiếu giảm giá <span>-</span>
									</p>
								</div>
								<div class="st_dtts_sb_h2 float_left">
									<h3>Tổng tiền <span id="total"></span></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<form action="{{URL::to('/booking_type/'.$screen->id)}}" method="POST" id="form-create" hidden>
    {{ csrf_field() }}
    <input name="id_user" value="{{ $user->id }}">
    <input name="id_screen" value="{{ $screen->id }}">
{{--    <input name="id_coupon" value="{{ $coupon }}">--}}
    <input name="total" id="total_hidden">
    <input type="submit" id="submit_button">
</form>
	<!-- st dtts section End -->
	<!--main js file start-->
{{--	<script src="js/jquery_min.js"></script>--}}
{{--	<script src="js/modernizr.js"></script>--}}
{{--	<script src="js/bootstrap.js"></script>--}}
{{--	<script src="js/owl.carousel.js"></script>--}}
{{--	<script src="js/jquery.dlmenu.js"></script>--}}
{{--	<script src="js/jquery.sticky.js"></script>--}}
{{--	<script src="js/jquery.nice-select.min.js"></script>--}}
{{--	<script src="js/jquery.magnific-popup.js"></script>--}}
{{--	<script src="js/jquery.bxslider.min.js"></script>--}}
{{--	<script src="js/venobox.min.js"></script>--}}
{{--	<script src="js/smothscroll_part1.js"></script>--}}
{{--	<script src="js/smothscroll_part2.js"></script>--}}
{{--	<script src="js/plugin/rs_slider/jquery.themepunch.revolution.min.js"></script>--}}
{{--	<script src="js/plugin/rs_slider/jquery.themepunch.tools.min.js"></script>--}}
{{--	<script src="js/plugin/rs_slider/revolution.addon.snow.min.js"></script>--}}
{{--	<script src="js/plugin/rs_slider/revolution.extension.actions.min.js"></script>--}}
{{--	<script src="js/plugin/rs_slider/revolution.extension.carousel.min.js"></script>--}}
{{--	<script src="js/plugin/rs_slider/revolution.extension.kenburn.min.js"></script>--}}
{{--	<script src="js/plugin/rs_slider/revolution.extension.layeranimation.min.js"></script>--}}
{{--	<script src="js/plugin/rs_slider/revolution.extension.migration.min.js"></script>--}}
{{--	<script src="js/plugin/rs_slider/revolution.extension.navigation.min.js"></script>--}}
{{--	<script src="js/plugin/rs_slider/revolution.extension.parallax.min.js"></script>--}}
{{--	<script src="js/plugin/rs_slider/revolution.extension.slideanims.min.js"></script>--}}
{{--	<script src="js/plugin/rs_slider/revolution.extension.video.min.js"></script>--}}
{{--	<script src="js/custom.js"></script>--}}
	<!--main js file end-->
<script src="{{asset('/frontend/js/jquery_min.js')}}"></script>

	<script>
		//* Isotope js
        $(function (){
            var data = JSON.parse(localStorage.getItem('seats'));
            var seat = data.toString();
            $("#seat").html(seat);
            $("#cost").html((data.length*150000).toLocaleString('vi', {style : 'currency', currency : 'VND'}));
            $("#total").html((data.length*150000).toLocaleString('vi', {style : 'currency', currency : 'VND'}));
            $('#total_hidden').val(data.length*150000);

            $('body').on('click', '#paypal', function () {
                $("#submit_button").click();
                // window.location.href = 'tao-van-don';
            });
        });
		    function protfolioIsotope(){
		        if ( $('.st_fb_filter_left_box_wrapper').length ){
		            // Activate isotope in container
		            $(".protfoli_inner, .portfoli_inner").imagesLoaded( function() {
		                $(".protfoli_inner, .portfoli_inner").isotope({
		                    layoutMode: 'masonry',
		                });
		            });

		            // Add isotope click function
		            $(".protfoli_filter li").on('click',function(){
		                $(".protfoli_filter li").removeClass("active");
		                $(this).addClass("active");
		                var selector = $(this).attr("data-filter");
		                $(".protfoli_inner, .portfoli_inner").isotope({
		                    filter: selector,
		                    animationOptions: {
		                        duration: 450,
		                        easing: "linear",
		                        queue: false,
		                    }
		                });
		                return false;
		            });
		        };
		    };
		 protfolioIsotope ();

		  function changeQty(increase) {
				            var qty = parseInt($('.select_number').find("input").val());
				            if (!isNaN(qty)) {
				                qty = increase ? qty + 1 : (qty > 1 ? qty - 1 : 1);
				                $('.select_number').find("input").val(qty);
				            } else {
				                $('.select_number').find("input").val(1);
				            }
				        }
	</script>
@endsection
