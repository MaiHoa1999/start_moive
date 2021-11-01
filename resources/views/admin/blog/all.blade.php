
<!-- column -->
@extends('admin')
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Quản lí phim</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                <li class="breadcrumb-item active">PHIM</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách Tin Tức</h4>
                        <a href="{{URL::to('/admin/blog/add')}}" class="btn btn-success">Thêm Tin Tức</a>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tiêu đề</th>
                                    <th>Mô Tả Ngắn</th>
                                    <th>Hình ảnh</th>
                                    <th>Nội dung</th>
                                    <th>Ngày phát hành</th>

                                </tr>
                                </thead>
                                @foreach ($blog as $item)
                                    <tbody>
                                    <tr style="max-height: 200px; padding-bottom:20px;">
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->title}}</td>
                                        <td style="max-height: 150px; width:350px;ext-overflow: ellipsis;white-space:
                                        normal;display: block;overflow: hidden;">{{$item->preview}}</td>
                                        <td>
                                            <img src="{{asset('/upload/'.$item->image)}}" style="width: 100px " alt="">
                                        </td>
                                        <td style="max-height: 150px; width:350px;ext-overflow: ellipsis;white-space:
                                         normal;display: block;overflow: hidden;">{{$item->content}}</td>

                                        <td>{{$item->release_date}}</td>

                                        <td class="text-nowrap">
                                            <a href="{{URL::to('/admin/blog/edit/'.$item->id)}}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="{{URL::to('/admin/blog/delete/'.$item->id)}}" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a>
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
