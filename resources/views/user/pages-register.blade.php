<!doctype html>
<html lang="en">


<!-- Mirrored from demo.foxthemes.net/courseplusv3.3/default/form-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2020 15:58:17 GMT -->

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Courseplus Learning HTML Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus - Professional Learning Management HTML Template">

    <!-- Favicon -->
    <link href="{{asset('frontend/images/favicon.png')}}" rel="icon" type="image/png">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('frontend/css/style1.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/night-mode.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/framework.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="{{asset('frontend/css/icons.css')}}">


</head>
<style>
    label.error {
		display: inline-block;
		color:red;
		width: 200px;
	}
</style>

<body>



<!-- Content
 ================================================== -->
<div uk-height-viewport="expand: true" class="uk-flex uk-flex-middle">
    <div class="uk-width-1-3@m uk-width-1-2@s" style="margin: 0 auto">
        <div class="uk-card-default p-5 rounded" style="padding: 20px">
            <div class="mb-4 uk-text-center">
                <h3 class="mb-0"> Tạo tài khoản mới</h3>
            </div>
            <form class="uk-child-width-1-1 uk-grid-small" action="signup" method="POST" uk-grid enctype="multipart/form-data" id="formdk">
                @csrf
                <div>
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Tên</label>

                        <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-user"></i>
                                </span>
                            <input class="uk-input" type="text" name="name" placeholder="Nguyễn Văn A">
                        </div>

                    </div>
                </div>
                <div>
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Email</label>

                        <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-mail"></i>
                                </span>
                            <input class="uk-input" type="email" name="email" placeholder="name@example.com">
                        </div>

                    </div>
                </div>


                <div>
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Tên đăng nhập</label>

                        <div class="uk-position-relative w-100">
                                <span class="uk-form-icon">
                                    <i class="icon-feather-user"></i>
                                </span>
                            <input class="uk-input" type="text" name="user" placeholder="blablabla" required>
                        </div>

                    </div>
                </div>
                <div>
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Mật khẩu</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                    <i class="icon-feather-lock"></i>
                            </span>
                            <input class="uk-input" type="password" name="pass" placeholder="**********">
                        </div>

                    </div>
                </div>
                <div>
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Số điện thoại</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                    <i class="icon-feather-phone"></i>
                            </span>
                            <input class="uk-input" type="text" name="phone" placeholder="098765321">
                        </div>

                    </div>
                </div>
                <div>
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Địa chỉ</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                    <i class="icon-feather-home"></i>
                            </span>
                            <input class="uk-input" type="text" name="address" placeholder="123 Aloola">
                        </div>

                    </div>
                </div>
                <div>
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Ngày sinh</label>

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                    <i class="icon-feather-phone"></i>
                            </span>
                            <input class="uk-input" type="date" name="birthday">
                        </div>

                    </div>
                </div>
                <div>
                    <div class="uk-form-group">
                        <label class="uk-form-label"> Hình ảnh</label>
                        <div class="uk-position-relative w-100">
                            <input class="uk-input" type="file" name="image">
                        </div>

                    </div>
                </div>

                <div>
                    <div class="mt-4 uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-expand@s">
                            <p> You had account? <a href="{{URL::to('/user/login')}}">Đăng Nhập Ngay</a></p>
                        </div>
                        <div class="uk-width-auto@s">
                            <input type="submit" class="btn btn-default" value="Tạo tài khoản"></input>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- Content -End
================================================== -->


<script>
    (function(window, document, undefined) {
        'use strict';
        if (!('localStorage' in window)) return;
        var nightMode = localStorage.getItem('gmtNightMode');
        if (nightMode) {
            document.documentElement.className += ' night-mode';
        }
    })(window, document);


    (function(window, document, undefined) {

        'use strict';

        // Feature test
        if (!('localStorage' in window)) return;

        // Get our newly insert toggle
        var nightMode = document.querySelector('#night-mode');
        if (!nightMode) return;

        // When clicked, toggle night mode on or off
        nightMode.addEventListener('click', function(event) {
            event.preventDefault();
            document.documentElement.classList.toggle('night-mode');
            if (document.documentElement.classList.contains('night-mode')) {
                localStorage.setItem('gmtNightMode', true);
                return;
            }
            localStorage.removeItem('gmtNightMode');
        }, false);

    })(window, document);
</script>


<!-- javaScripts
================================================== -->
<script src="{{asset('frontend/js/framework.js')}}"></script>
<script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('frontend/js/simplebar.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap-select.min.js')}}"></script>

<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
<script type="text/javascript">

	$(document).ready(function() {

		//Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
		$("#formdk").validate({
					rules: {
						name: "required",

						user: "required",
						address: {
							required: true,
							minlength: 2
						},
						phone: {
							required: true,

							length: 10,

						},
						pass: {
							required: true,
							minlength: 5
						},

						email: {
							required: true,
							email: true
						},

					},
					messages: {
						name: "Vui lòng nhập họ tên",
						user: "Vui lòng nhập tên đăng nhập",

						address: {
							required: "Vui lòng nhập địa chỉ",
							minlength: "Địa chỉ ngắn vậy, chém gió ah?"
						},
						phone: {
							required: "Vui lòng nhập số điện thoại",
							minlength: "Số máy quý khách vừa nhập là số không có thực"
						},
						pass: {
							required: 'Vui lòng nhập mật khẩu',
							minlength: 'Vui lòng nhập ít nhất 5 kí tự'
						},

						email: {
							required: "Vui lòng nhập Email",
							minlength: "Vui lòng nhập ít nhất 5 kí tự",
						},

					}
				});
	});
	</script>

</head>

</body>


<!-- Mirrored from demo.foxthemes.net/courseplusv3.3/default/form-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2020 15:58:17 GMT -->

</html>
