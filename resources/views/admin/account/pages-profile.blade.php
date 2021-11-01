@extends('admin')
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Trang cá nhân</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                <li class="breadcrumb-item active">Trang cá nhân</li>
            </ol>
        </div>
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30">
                        <img src="{{asset('/upload/'.$user->image)}}" class="img-circle" width="150"/>
                        <h4 class="card-title m-t-10">{{$user->name}}</h4>
                    </center>
                </div>
                <div>
                    <hr>
                </div>
                <div class="card-body">
                    <small class="text-muted">Email </small>
                    <h6>{{$user->mail}}</h6>
                    <small class="text-muted p-t-30 db">Số điện thoại</small>
                    <h6>{{$user->phone}}</h6>
                    <small class="text-muted p-t-30 db">Địa chỉ</small>
                    <h6>{{$user->address}}</h6>
                    <small class="text-muted p-t-30 db">Mạng xã hội</small>
                    <br/>
                    <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>
                    <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>
                    <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material"  method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-12">Họ tên</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{$user->name}}" name="name" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" value="{{$user->mail}}" class="form-control form-control-line" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Tên đăng nhập</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{$user->user}}" class="form-control form-control-line" name="user">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Mật khẩu</label>
                                <div class="col-md-12">
                                    <input type="password" value="{{$user->password}}" class="form-control form-control-line" name="pass">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Số điện thoại</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{$user->phone}}" class="form-control form-control-line" name="phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Địa chỉ</label>
                                <div class="col-md-12">
                                    <input type="text" value="{{$user->address}}" class="form-control form-control-line" name="address">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Ngày sinh</label>
                                <div class="col-md-12">
                                    <input type="date" value="{{$user->birthday}}" class="form-control form-control-line" name="birthday">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Hình ảnh</label>
                                <div class="col-md-12">
                                    <input type="hidden" name="image_hidden"  value="{{$user->image}}"/>
                                    <input type="file" id="input-file-now-custom-1" name="image" class="dropify" data-default-file="{{asset('/upload/'.$user->image)}}"/>
                                </div>
                            </div>
                            @php
                                use \App\User;
                                $admin = User::userByID(session('id'));
                                    if ($admin->permission<$user->permission){
                                        $permission = 'disabled';
                                    }else{$permission = '';}
                            @endphp
                            <div class="form-group">
                                <label class="col-md-12">Ngày sinh</label>
                                <div class="col-md-12">
                                    <select name="permission" class="form-control" required
                                            data-validation-required-message="This field is required" value="{{$user->permission}}">
                                        {{--                                            use \App\User;--}}
                                        {{--                                            $admin = User::userByID(session('id'));--}}
                                        @php

                                                if ($admin->permission<=1){
                                                    $permission = 'disabled';
                                                }else{$permission = '';}


                                        for ($i=0;$i<=2;$i++){
                                            if($i == $user->permission) {$selected = "selected";}else{$selected='';}
                                            switch ($i)
                                                {
                                                case 1:
                                                $name = 'Biên tập viên';
                                                break;
                                                case 2:
                                                $name = 'Quản trị viên';
                                                break;
                                                case 0:
                                                $name = 'Người dùng';
                                                break;
                                                }
                                            echo '<option value="'.$i.'"'.$selected.$permission.'>'.$name.'</option>';
                                        }

                                        @endphp
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success" {{$permission}}>Cập nhật hồ sơ</button>
                                </div>
                            </div>
                        </form>
                    </div>

            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
@endsection
