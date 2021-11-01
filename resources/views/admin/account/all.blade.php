
<!-- column -->
@extends('admin')
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Quản lí Người dùng</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                <li class="breadcrumb-item active">Tài Khoản</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách Người dùng</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Ảnh đại diện</th>
                                    <th>Tên đăng nhập</th>
                                    <th>Tên người dùng</th>
                                    <th>Email</th>
                                    <th>Ngày sinh</th>
                                    <th>Địa chỉ</th>
                                    <th>Số điện thoại</th>
                                    <th>Ngày đăng kí</th>
                                    <th>Phân quyền</th>
                                    <th class="text-nowrap">Tùy chọn</th>
                                </tr>
                                </thead>
                                @foreach ($user as $item)
                                    <tbody>
                                    <tr style="max-height: 200px; padding-bottom:20px;">
                                        <td>{{$item->id}}</td>
                                        <td>
                                            <img src="{{asset('/upload/'.$item->image)}}" style="width: 100px " alt="">
                                        </td>
                                        <td>{{$item->user}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->mail}}</td>
                                        <td>{{$item->birthday}}</td>
                                        <td>{{$item->address}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->register_date}}</td>
                                        @php
                                            switch ($item->permission)
                                                {
                                                case '1':
                                                $permission = 'Biên tập viên';
                                                $label = 'label-danger';
                                                break;
                                                case '2':
                                                $permission = 'Quản trị viên';
                                                $label = 'label-info';
                                                break;
                                                case '0':
                                                $permission = 'Người dùng';
                                                $label = 'label-warning';
                                                break;
                                                }
                                        @endphp
                                        <td class="text-center"><span class="label {{$label}}">{{$permission}}</span></td>
                                        <td class="text-nowrap">
                                            <a href="{{URL::to('/admin/profile/'.$item->id)}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="{{URL::to('/admin/profile/delete/'.$item->id)}}" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
