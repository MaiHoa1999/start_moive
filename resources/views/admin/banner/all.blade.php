
<!-- column -->
@extends('admin')
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Quản lí banner</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                <li class="breadcrumb-item active">Banner</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách banner</h4>
                        <a href="{{URL::to('/admin/banner/add')}}" class="btn btn-success">Thêm banner</a>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>STT</th>

                                    <th>Hình ảnh</th>
                                    <th>status</th>
                                    <th class="text-nowrap">Tùy chọn</th>
                                </tr>
                                </thead>
                                @foreach ($banner as $item)
                                    <tbody>
                                    <tr>
                                        <td>{{$item->id}}</td>

                                        <td><img src="{{asset('/upload/'.$item->image)}}" alt="" width="50px"></td>
                                        @php
                                            if($item->status==1)

                                                {
                                                    $status = "Kích hoạt";
                                                }else {
                                                    $status = "ẩn";
                                                }
                                        @endphp
                                        <td>{{$status}}</td>


                                        <td class="text-nowrap">
                                            <a href="{{URL::to('/admin/banner/edit/'.$item->id)}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="{{URL::to('/admin/banner/delete/'.$item->id)}}" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a>
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
