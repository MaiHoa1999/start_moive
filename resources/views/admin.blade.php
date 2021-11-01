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
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/backend/images/favicon.png')}}">
    <title>Admin LMS</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/backend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Morries chart CSS -->
    <link href="{{asset('/backend/plugins/morrisjs/morris.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('/backend/css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('/backend/css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <link rel="stylesheet" href="{{asset('/backend//plugins/dropify/dist/css/dropify.min.css')}}">
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css"
          rel="stylesheet" type="text/css"/>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <![endif]-->
</head>
@php
    use \App\User;
    $admin = User::userByID(session('id'));
@endphp


<body class="fix-header card-no-border logo-center">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="{{URL::to('/admin')}}">
                    <!-- Logo icon --><b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Light Logo icon -->
                        <img src="{{asset('/backend/images/logo-light-icon.png')}}" alt="homepage" class="light-logo"/>
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text --><span>
                            <!-- Light Logo text -->
                            <img src="{{asset('/backend/images/logo-light-text.png')}}" class="light-logo"
                                 alt="homepage"/></span> </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto mt-md-0">
                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect" href=""
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                src="{{asset('/upload/'.$admin->image)}}" alt="user" class="profile-pic"/></a>
                        <div class="dropdown-menu dropdown-menu-right scale-up">
                            <ul class="dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><img src="{{asset('/upload/'.$admin->image)}}"
                                                                alt="user"></div>
                                        <div class="u-text">
                                            <h4>{{$admin->name}}</h4>
                                            <p class="text-muted">{{$admin->mail}}</p>
                                            <a href="{{URL::to('/admin/profile/'.$admin->id)}}"
                                               class="btn btn-rounded btn-danger btn-sm">Trang cá nhân</a>
                                        </div>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{URL::to('/user/logout')}}"><i class="fa fa-power-off"></i> Đăng xuất</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li><a class="has-arrow waves-effect" href="#" aria-expanded="false"><i
                                class="mdi mdi-movie"></i><span class="hide-menu">Phim</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{URL::to('/admin/movie')}}">Tất cả phim</a></li>
                            <li><a href="{{URL::to('/admin/category')}}">Danh mục phim</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow waves-effect" href="{{URL::to('/admin/blog')}}" aria-expanded="false"><i
                                class="mdi mdi-animation"></i><span class="hide-menu">Quản lý tin tức</span></a></li>
                    <li><a class="has-arrow waves-effect"href="{{URL::to('/admin/banner')}}" aria-expanded="false"><i
                                class="mdi mdi-calendar-today"></i><span class="hide-menu">Quản lý banner</span></a>                    </li>

                    <li><a class="has-arrow waves-effect" href="{{URL::to('/admin/account')}}" aria-expanded="false"><i
                                class="mdi mdi-account-multiple"></i><span class="hide-menu">Tài khoản</span></a>
                    </li>

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        @yield('content')
        <footer class="footer">
            © 2020
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('/backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('/backend/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('/backend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('/backend/js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('/backend/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('/backend/js/sidebarmenu.js')}}"></script>
<!--stickey kit -->
<script src="{{asset('/backend/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
<script src="{{asset('/backend/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('/backend/js/custom.min.js')}}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="{{asset('/backend/plugins/raphael/raphael-min.js')}}"></script>
<script src="{{asset('/backend/plugins/morrisjs/morris.min.js')}}"></script>
<!-- sparkline chart -->
<script src="{{asset('/backend/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('/backend/js/dashboard4.js')}}"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="{{asset('/backend/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
<!-- dropify -->
<script src="{{asset('/backend/plugins/dropify/dist/js/dropify.min.js')}}"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
</head>
<script>
    $(document).ready(function () {
        // Basic
        $('.dropify').dropify();
        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function (event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function (event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function (event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function (e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>
<!-- ============================================================== -->
<!-- unikey -->
<script>
    $(document).ready(function () {
        $('#name').change(function () {
            var text = xoa_dau($(this).val())
            $('#uri').val(text);
        });
    });

    function xoa_dau(str) {
        str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
        str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
        str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
        str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
        str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
        str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
        str = str.replace(/đ/g, "d");
        str = str.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "a");
        str = str.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "e");
        str = str.replace(/Ì|Í|Ị|Ỉ|Ĩ/g, "i");
        str = str.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "o");
        str = str.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "u");
        str = str.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "y");
        str = str.replace(/Đ|D/g, "d");
        str = str.replace(/B/g, "b");
        str = str.replace(/C/g, "c");
        str = str.replace(/F/g, "f");
        str = str.replace(/J/g, "j");
        str = str.replace(/H/g, "h");
        str = str.replace(/G/g, "g");
        str = str.replace(/K/g, "k");
        str = str.replace(/L/g, "l");
        str = str.replace(/M/g, "m");
        str = str.replace(/N/g, "n");
        str = str.replace(/P/g, "p");
        str = str.replace(/Q/g, "q");
        str = str.replace(/R/g, "r");
        str = str.replace(/S/g, "s");
        str = str.replace(/T/g, "t");
        str = str.replace(/V/g, "v");
        str = str.replace(/W/g, "w");
        str = str.replace(/X/g, "x");
        str = str.replace(/Z/g, "z");
        str = str.replace(/ /g, "-");
        return str;
    }
</script>
<!-- ============================================================== -->

<script>
    $(document).ready(function () {
        $('#trailer').change(function () {
            $('#src').attr('src', $(this).val());
        });
    });
</script>
{{-- vacation  --}}
<script>
$(document).ready(function() {

    //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
    $("#formvaca").validate({
        rules: {
            name: "required",
            id_category:"required",
            trailer:"required",
            duration:"required",
            release_date:"required",
            description:"required"

        },
        messages: {
          name: "Vui lòng không bỏ trống",
          id_category: "Vui lòng không bỏ trống",
          trailer: "Vui lòng không bỏ trống",
          duration: "Vui lòng không bỏ trống",
          release_date: "Vui lòng không bỏ trống",
          description: "Vui lòng không bỏ trống"

        }
    });
});
</script>
</body>

</html>
