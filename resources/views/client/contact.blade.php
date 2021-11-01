@extends('index')
@section('content')
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Kanit', sans-serif;
            line-height: 1.6em;
        }
        .align-default{
            margin: 40px 0;
        }
        .align-default span{
            margin: 20px;
            color: #d34836;
            font-size: larger;
        }

        .icon-bar a {
            color: #333;
        }

        .icon-bar .social:hover {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -o-transform: scale(1.1);
        }

        .icon-bar .social {
            -webkit-transform: scale(0.8);
            /* Browser Variations: */

            -moz-transform: scale(0.8);
            -o-transform: scale(0.8);
            -webkit-transition-duration: 0.5s;
            -moz-transition-duration: 0.5s;
            -o-transition-duration: 0.5s;
        }
        /*
            Multicoloured Hover Variations
        */

        .icon-bar #social-fb:hover {
            color: #3B5998;
        }

        .icon-bar #social-tw:hover {
            color: #4099FF;
        }

        .icon-bar #social-gp:hover {
            color: #d34836;
        }

        .icon-bar #social-em:hover {
            color: #f39c12;
        }

        table{
            font-weight: 530;
            padding-left: 50px;
        }
        .table td{
            width: 33%;
            padding: 10px 0;
        }

        .row-middle{
            border-bottom: lightgray solid 1px !important;
            flex-grow: 1;
        }
        .row-right{
            text-align: right;
        }
        .send-message-wraper{
            background-color: #f0f0f3;
            padding: 50px;
        }
        .send-message-wraper h3{
            text-align: center;
            margin: 50px 0;
        }

        .contact-form input[type=text],
        .contact-form input[type=email],
        .contact-form textarea {
            width: 100%;
            border: none;
            background: #ffffff;
            height: 52px;
            margin-bottom: 23px;
            color: #414141;
            padding: 5px 20px;
            font-size: 16px;
            border-radius: 32px;
        }

        .contact-form textarea {
            margin-top: 5px;
            height: 197px;
            padding: 20px 20px;
        }

        .contact-form .site-btn {
            min-width: 215px;
            line-height: 50px;
            background-color: #dc2751;
            color: #fff;
            border-radius: 32px;
        }
        textarea:focus, input:focus{
            outline: none;
        }


        .map-area {
            height: 500px;
            background: #ddd;
            position: relative;
        }
        .map-area iframe{
            position: absolute;
            top: 0;
        }

        .contact-info-warp {
            position: relative;
            z-index: 99;
        }

        .contact-warp {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            display: table;
            z-index: 99;
        }

        .contact-warp .cw-center {
            display: table-cell;
            vertical-align: middle;
        }

        .contact-card {
            width: 350px;
            padding: 30px 54px 5px;
            background: #dc2751;
            margin-left: auto;
        }

        .contact-info {
            margin-bottom: 30px;
        }

        .contact-info h4 {
            font-weight: 400;
            color: #fff;
            margin-bottom: 25px;
        }

        .contact-info p {
            color: #fff;
            margin-bottom: 0;
        }

        .contact-text{
            font-weight: bolder;
        }

        /* Responsive */
        @media only screen and (min-width: 1200px) {
            .container {
                max-width: 1170px;
            }
        }

        /* Medium Device = 1200px */
        @media only screen and (min-width: 992px) and (max-width: 1199px) {
            #contact-row-1-2{
                display: none;
            }
            .contact-row-1{
                flex: 0 0 50%;
                max-width: 50%;
            }
        }
        @media only screen and (max-width: 991px) {
            #contact-row-1-1{
                text-align: center;
            }
            #contact-row-1-2{
                display: none;
            }
            .contact-row-1{
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
    </style>
    <section id=contact>
        <div class="container">
            <div class="row">
                <div class="col-md-4 contact-row-1" id="contact-row-1-1">
                    <div class="align-default">
                        <h3 class="contact-text">Phòng thu âm giá rẻ</h3>
                        <p>Chuyên thu âm bài hát, mix nhạc, hòa âm phối khí, sáng tác, quay MV ca nhạc...v..v Đào tạo
                            các khóa thu âm, Mix, Master.v.v.</p>
                    </div>
                    <div class="align-default">
                        <p><span><i class="fas fa-phone"></i></span>0(800) 890-90-609</p>
                        <p><span><i class="fas fa-envelope"></i></span>info@like-themes.com</p>
                        <p><span><i class="fas fa-map-marker-alt"></i></span>79 Trần Văn Đang</p>
                    </div>
                    <div class="icon-bar align-default">
                        <a href="#"><i id="social-fb" class="fab fa-facebook-square fa-3x social"></i></a>
                        <a href="#"><i id="social-tw" class="fab fa-twitter-square fa-3x social"></i></a>
                        <a href="#"><i id="social-gp" class="fab fa-google-plus-square fa-3x social"></i></a>
                        <a href="#"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
                    </div>
                </div>
                <div class="col-md-4 contact-row-1" id="contact-row-1-2">
                    <img src="vendor/img/contact/image1.jpg" alt="" width="100%">
                </div>
                <div class="col-md-4 contact-row-1 align-default">
                    <h3 class="contact-text">Giờ mở cửa</h3>
                    <table class="table table-borderless">
                        <tr>
                            <td>Thứ hai:</td>
                            <td class="row-middle"></td>
                            <td class="row-right">9:00 – 19:00</td>
                        </tr>
                        <tr>
                            <td>Thứ ba:</td>
                            <td class="row-middle"></td>
                            <td class="row-right">9:00 – 19:00</td>
                        </tr>
                        <tr>
                            <td>Thứ tư:</td>
                            <td class="row-middle"></td>
                            <td class="row-right">9:00 – 19:00</td>
                        </tr>
                        <tr>
                            <td>Thứ năm:</td>
                            <td class="row-middle"></td>
                            <td class="row-right">9:00 – 19:00</td>
                        </tr>
                        <tr>
                            <td>Thứ sáu:</td>
                            <td class="row-middle"></td>
                            <td class="row-right">9:00 – 19:00</td>
                        </tr>
                        <tr>
                            <td>Thứ bảy:</td>
                            <td class="row-middle"></td>
                            <td class="row-right">11:00 – 16:00</td>
                        </tr>
                        <tr>
                            <td>Chủ nhật:</td>
                            <td class="row-middle"></td>
                            <td class="row-right">ĐÓNG CỬA</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="send-message-wraper">
            <div class="container">
                <h3 class="contact-text">Liên hệ</h3>
                <form class="contact-form" method="post" action="{{URL::to('/send-mail')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" placeholder="Nhập tên của bạn *" value="{{old('name')}}"  name="name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Nhập email của bạn *" value="{{old('email')}}"  name="email">
                        </div>
                        <div class="col-md-12">
                            <textarea placeholder="Lời nhắn" value="{{old('content')}}"  name="content"></textarea>
                            <div class="col text-center">
                                <button class="site-btn"  name="send">Gửi</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="map-area">
        <div class="container contact-info-warp">
            <div class="contact-card">
                <div class="contact-info">
                    <h4>Giao hàng miễn phí</h4>
                    <p>Phone: +84 968 854 260</p>
                    <p>Email: thietke24h@gmail.com</p>
                </div>
                <div class="contact-info">
                    <h4>Thông tin chi tiết</h4>
                    <p>Facebook: Thietke24h</p>
                    <p>Email: yourmail@gmail.com</p>
                </div>
            </div>
        </div>
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.36199956322!2d106.67413551465528!3d10.783561792316714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ed6207e252b%3A0xec9b575f65eb4925!2zNzkgVHLhuqduIFbEg24gxJBhbmcsIFBoxrDhu51uZyAxMSwgUXXhuq1uIDMsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1600154382537!5m2!1svi!2s" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </section>
@endsection
