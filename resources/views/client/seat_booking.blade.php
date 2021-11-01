@extends('index')
@section('content')
    <!-- st top header Start -->
    <div class="st_bt_top_header_wrapper float_left">
        <div class="container container_seat">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="st_bt_top_back_btn st_bt_top_back_btn_seatl float_left"><a
                            href="{{URL::to('/movie_booking')}}"><i
                                class="fas fa-long-arrow-alt-left"></i> &nbsp;Quay lại</a>
                    </div>
                    <div class="cc_ps_quantily_info cc_ps_quantily_info_tecket">
                        <p>Số lượng </p>
                        <div class="select_number">
                            <button onclick="changeQty(1); return false;" class="increase"><i class="fa fa-plus"></i>
                            </button>
                            <input type="text" name="quantity" value="1" size="2" id="input-quantity"
                                   class="form-control"/>
                            <button onclick="changeQty(0); return false;" class="decrease"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <input type="hidden" name="product_id"/>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="st_bt_top_center_heading st_bt_top_center_heading_seat_book_page float_left">
                        <h3>{{$screen->movie?$screen->movie->name:''}}</h3>
                        <h4>{{$screen->start_date}}</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="st_bt_top_close_btn st_bt_top_close_btn2 float_left"><a href="#"><i
                                class="fa fa-times"></i></a>
                    </div>
                    <div class="st_seatlay_btn float_left"><a href="{{URL::to('/booking_type/'.$screen->id)}}" id="booking">Đặt vé</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- st top header Start -->
    <!-- st seat Layout Start -->
    <div class="st_seatlayout_main_wrapper float_left">
        <div class="container container_seat">
            <div class="st_seat_full_container">
                <div class="st_seat_lay_economy_wrapper float_left">
                    <div class="screen">
                        <img src="{{URL::to('frontend/images/content/screen.png')}}">
                    </div>
                    <div class="st_seat_lay_row float_left">
                        <ul>
                            <li class="st_seat_heading_row">E</li>
{{--                            <li><span>150.000 VND</span>--}}
{{--                                <input type="checkbox" id="c1" name="cb">--}}
{{--                                <label for="c1"></label>--}}
{{--                            </li>--}}
                            <li>
                                <span>150.000 VND</span>
                                <input type="checkbox" id="c1" name="cb" value="E01">
                                <label for="c1"></label>
                            </li>
                            <li>
                                <span>150.000 VND</span>
                                <input type="checkbox" id="c2" name="cb" value="E02">
                                <label for="c2"></label>
                            </li>
                            <li>
                                <span>150.000 VND</span>
                                <input type="checkbox" id="c3" name="cb" value="E03">
                                <label for="c3"></label>
                            </li>
                            <li>
                                <span>150.000 VND</span>
                                <input type="checkbox" id="c4" name="cb" value="E04">
                                <label for="c4"></label>
                            </li>
                            <li>
                                <span>150.000 VND</span>
                                <input type="checkbox" id="c5" name="cb" value="E05">
                                <label for="c5"></label>
                            </li>
                        </ul>
                        <ul class="st_eco_second_row">
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c6" name="cb" value="E06">
                                <label for="c6"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c7" name="cb" value="E07">
                                <label for="c7"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c8" name="cb" value="E08">
                                <label for="c8"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c9" name="cb" value="E09">
                                <label for="c9"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c10" name="cb" value="E10">
                                <label for="c10"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c11" name="cb" value="E11">
                                <label for="c11"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c12" name="cb" value="E12">
                                <label for="c12"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c13" name="cb" value="E13">
                                <label for="c13"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c14" name="cb" value="E14">
                                <label for="c14"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c15" name="cb" value="E15">
                                <label for="c15"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c16" name="cb" value="E16">
                                <label for="c16"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c17" name="cb" value="E17">
                                <label for="c17"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c18" name="cb" value="E18">
                                <label for="c18"></label>
                            </li>
                        </ul>
                        <ul class="st_eco_second_row">
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c19" name="cb" value="E19">
                                <label for="c19"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c20" name="cb" value="E20" placeholder="1">
                                <label for="c20"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c21" name="cb" value="E21">
                                <label for="c21"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c22" name="cb" value="E22">
                                <label for="c22"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c23" name="cb" value="E23">
                                <label for="c23"></label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="st_seat_lay_economy_wrapper st_seat_lay_economy_wrapperexicutive float_left">
                    <div class="st_seat_lay_row float_left">
                        <ul>
                            <li class="st_seat_heading_row">D</li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c24" name="cb" value="D01">
                                <label for="c24"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c25" name="cb" value="D02" placeholder="1">
                                <label for="c25"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c26" name="cb" value="D03">
                                <label for="c26"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c27" name="cb" value="D04">
                                <label for="c27"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c28" name="cb" value="D05">
                                <label for="c28"></label>
                            </li>
                        </ul>
                        <ul class="st_eco_second_row">
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c29" name="cb" value="D06">
                                <label for="c29"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c30" name="cb" value="D07" placeholder="1">
                                <label for="c30"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c31" name="cb" value="D08">
                                <label for="c31"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c32" name="cb" value="D09">
                                <label for="c32"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c33" name="cb" value="D10">
                                <label for="c33"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c34" name="cb" value="D11">
                                <label for="c34"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c35" name="cb" value="D12">
                                <label for="c35"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c36" name="cb" value="D13">
                                <label for="c36"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c37" name="cb" value="D14">
                                <label for="c37"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c38" name="cb" value="D15">
                                <label for="c38"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c39" name="cb" value="D16">
                                <label for="c39"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c40" name="cb" value="D17">
                                <label for="c40"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c41" name="cb" value="D18">
                                <label for="c41"></label>
                            </li>
                        </ul>
                        <ul class="st_eco_second_row">
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c42" name="cb" value="D19">
                                <label for="c42"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c43" name="cb" value="D20" placeholder="1">
                                <label for="c43"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c44" name="cb" value="D21">
                                <label for="c44"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c45" name="cb" value="D22">
                                <label for="c45"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c46" name="cb" value="D23">
                                <label for="c46"></label>
                            </li>
                        </ul>
                    </div>
                    <div class="st_seat_lay_row float_left">
                        <ul>
                            <li class="st_seat_heading_row">C</li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c47" name="cb" value="C01">
                                <label for="c47"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c48" name="cb" value="C02" placeholder="1">
                                <label for="c48"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c49" name="cb" value="C03">
                                <label for="c49"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c50" name="cb" value="C04">
                                <label for="c50"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c51" name="cb" value="C05">
                                <label for="c51"></label>
                            </li>
                        </ul>
                        <ul class="st_eco_second_row">
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c52" name="cb" value="C06">
                                <label for="c52"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c53" name="cb" value="C07" placeholder="1">
                                <label for="c53"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c54" name="cb" value="C08">
                                <label for="c54"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c55" name="cb" value="C09">
                                <label for="c55"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c56" name="cb" value="C10">
                                <label for="c56"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c57" name="cb" value="C11">
                                <label for="c57"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c58" name="cb" value="C12">
                                <label for="c58"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c59" name="cb" value="C13">
                                <label for="c59"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c60" name="cb" value="C14">
                                <label for="c60"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c61" name="cb" value="C15">
                                <label for="c61"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c62" name="cb" value="C16">
                                <label for="c62"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c63" name="cb" value="C17">
                                <label for="c63"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c64" name="cb" value="C18">
                                <label for="c64"></label>
                            </li>
                        </ul>
                        <ul class="st_eco_second_row">
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c65" name="cb" value="C19">
                                <label for="c65"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c66" name="cb" value="C20" placeholder="1">
                                <label for="c66"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c67" name="cb" value="C21">
                                <label for="c67"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c68" name="cb" value="C22">
                                <label for="c68"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c69" name="cb" value="C23">
                                <label for="c69"></label>
                            </li>
                        </ul>
                    </div>
                    <div class="st_seat_lay_row float_left">
                        <ul>
                            <li class="st_seat_heading_row">B</li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c70" name="cb" value="B01">
                                <label for="c70"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c71" name="cb" value="B02" placeholder="1">
                                <label for="c71"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c72" name="cb" value="B03">
                                <label for="c72"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c73" name="cb" value="B04">
                                <label for="c73"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c74" name="cb" value="B05">
                                <label for="c74"></label>
                            </li>
                        </ul>
                        <ul class="st_eco_second_row">
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c75" name="cb" value="B06">
                                <label for="c75"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c76" name="cb" value="B07" placeholder="1">
                                <label for="c76"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c77" name="cb" value="B08">
                                <label for="c77"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c78" name="cb" value="B09">
                                <label for="c78"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c79" name="cb" value="B10">
                                <label for="c79"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c80" name="cb" value="B11">
                                <label for="c80"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c81" name="cb" value="B12">
                                <label for="c81"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c82" name="cb" value="B13">
                                <label for="c82"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c83" name="cb" value="B14">
                                <label for="c83"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c84" name="cb" value="B15">
                                <label for="c84"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c85" name="cb" value="B16">
                                <label for="c85"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c86" name="cb" value="B17">
                                <label for="c86"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c87" name="cb" value="B18">
                                <label for="c87"></label>
                            </li>
                        </ul>
                        <ul class="st_eco_second_row">
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c88" name="cb" value="B19">
                                <label for="c88"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c89" name="cb" value="B20" placeholder="1">
                                <label for="c89"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c90" name="cb" value="B21">
                                <label for="c90"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c91" name="cb" value="B22">
                                <label for="c91"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c92" name="cb" value="B23">
                                <label for="c92"></label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="st_seat_lay_economy_wrapper float_left">
                    <div class="st_seat_lay_row float_left">
                        <ul>
                            <li class="st_seat_heading_row">A</li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c93" name="cb" value="A01">
                                <label for="c93"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c94" name="cb" value="A02" placeholder="1">
                                <label for="c94"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c95" name="cb" value="A03">
                                <label for="c95"></label>
                            </li>
                            <li>	<span>150.000 VND</span>
                                    <input type="checkbox" id="c96" name="cb" value="A04">
								<label for="c96"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c97" name="cb" value="A05">
                                <label for="c97"></label>
                            </li>
                        </ul>
                        <ul class="st_eco_second_row">
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c98" name="cb" value="A06">
                                <label for="c98"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c99" name="cb" value="A07" placeholder="1">
                                <label for="c99"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c100" name="cb" value="A08">
                                <label for="c100"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c101" name="cb" value="A09">
                                <label for="c101"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c102" name="cb" value="A10">
                                <label for="c102"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c103" name="cb" value="A11">
                                <label for="c103"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c104" name="cb" value="A12">
                                <label for="c104"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c105" name="cb" value="A13">
                                <label for="c105"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c106" name="cb" value="A14">
                                <label for="c106"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c107" name="cb" value="A15">
                                <label for="c107"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c108" name="cb" value="A16">
                                <label for="c108"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c109" name="cb" value="A17">
                                <label for="c109"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c110" name="cb" value="A18">
                                <label for="c110"></label>
                            </li>
                        </ul>
                        <ul class="st_eco_second_row">
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c111" name="cb" value="A19">
                                <label for="c111"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c112" name="cb" value="A20" placeholder="1">
                                <label for="c112"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="113" name="cb" value="A21">
                                <label for="113"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c114" name="cb" value="A22">
                                <label for="c114"></label>
                            </li>
                            <li><span>150.000 VND</span>
                                <input type="checkbox" id="c115" name="cb" value="A23">
                                <label for="c115"></label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- st seat Layout End -->
    <!-- main js file start
    <script src="js/jquery_min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.dlmenu.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/smothscroll_part1.js"></script>
    <script src="js/smothscroll_part2.js"></script>
    <script src="js/plugin/rs_slider/jquery.themepunch.revolution.min.js"></script>
    <script src="js/plugin/rs_slider/jquery.themepunch.tools.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.addon.snow.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.actions.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.carousel.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.kenburn.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.layeranimation.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.migration.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.navigation.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.parallax.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.slideanims.min.js"></script>
    <script src="js/plugin/rs_slider/revolution.extension.video.min.js"></script>
    <script src="js/custom.js"></script> -->
    <!--main js file end-->
    <script src="{{asset('/frontend/js/jquery_min.js')}}"></script>
    <script>
        //* Isotope js
        $(function() {
            $('body').on('click', '#booking', function () {
                var seats = [];
                $('input[name="cb"]:checkbox:checked').each(function() {
                    seats.push($(this).val());
                });
                localStorage.setItem('seats', JSON.stringify(seats));
                // window.location.href = '';
            });
        });
        //
        // function protfolioIsotope() {
        //     if ($('.st_fb_filter_left_box_wrapper').length) {
        //         // Activate isotope in container
        //         $(".protfoli_inner, .portfoli_inner").imagesLoaded(function () {
        //             $(".protfoli_inner, .portfoli_inner").isotope({
        //                 layoutMode: 'masonry',
        //             });
        //         });
        //
        //         // Add isotope click function
        //         $(".protfoli_filter li").on('click', function () {
        //             $(".protfoli_filter li").removeClass("active");
        //             $(this).addClass("active");
        //             var selector = $(this).attr("data-filter");
        //             $(".protfoli_inner, .portfoli_inner").isotope({
        //                 filter: selector,
        //                 animationOptions: {
        //                     duration: 450,
        //                     easing: "linear",
        //                     queue: false,
        //                 }
        //             });
        //             return false;
        //         });
        //     }
        //
        //
        //     ;
        // };
        // protfolioIsotope();

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


<!-- Mirrored from www.webstrot.com/html/moviepro/html/seat_booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Nov 2020 11:43:23 GMT -->
