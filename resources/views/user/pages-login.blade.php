<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../backend/images/favicon.png">
    <title>Admin Login</title>
    <!-- Bootstrap Core CSS -->
    <link href="../backend/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../backend/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../backend/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    {{--  --}}
    <section id="wrapper">
        <div class="login-register" style="background-image:url(../backend/images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" id="loginform" action="" method="POST" id="fromdk">
                        @csrf
                        <h3 class="box-title m-b-20">????ng nh???p</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="T??n ????ng nh???p" name="user"> </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="" placeholder="M???t kh???u" name="password"> </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 font-14">
                                <div class="checkbox checkbox-primary pull-left p-t-0">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup"> L??u m???t kh???u </label>
                                </div> <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right">
                                    <!-- <i class="fa fa-lock m-r-5"></i> --> Qu??n m???t kh???u?</a>
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                                    type="submit">????ng nh???p</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                <div class="social">
                                    <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip"
                                        title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip"
                                        title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                <div>B???n ch??a c?? t??i kho???n? <a href="{{URL::to('/user/signup')}}"
                                        class="text-info m-l-5"><b>????ng K?? Ngay</b></a></div>
                            </div>
                        </div>
                    </form>
                    <form class="form-horizontal" id="recoverform" action="index.html" id="fromdk">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>L???y l???i m???t kh???u</h3>
                                <p class="text-muted">Nh???p email c???a b???n! </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Email"> </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light"
                                    type="submit">L???y m???t kh???u</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../backend/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../backend/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../backend/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../backend/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../backend/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../backend/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../backend/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../backend/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="../backend/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../backend/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script >

        $(document).ready(function() {

            //Khi b??n ph??m ???????c nh???n v?? th??? ra th?? s??? ch???y ph????ng th???c n??y
            $("#fromdk").validate({
                        rules: {
                            user: "required",

                            password: {
                                required: true,
                                minlength: 5
                            },

                        },
                        messages: {

                            user: "Vui l??ng nh???p t??n",

                            password: {
                                required: 'Vui l??ng nh???p m???t kh???u',
                                minlength: 'Vui l??ng nh???p ??t nh???t 5 k?? t???'
                            },
                        }

                    });
                });
        </script>
</body>

</html>
