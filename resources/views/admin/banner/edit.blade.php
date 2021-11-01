@extends('admin')
@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Cập nhât banner</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                <li class="breadcrumb-item">Banner</li>
                <li class="breadcrumb-item active">Cập nhât banner</li>
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="m-t-40" novalidate method="POST" action="" enctype="multipart/form-data" id="formvaca">
                            @csrf
                            <div class="row">

                                <div class="form-group col-md-12">
                                    <h5>Trạng thái<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="status" id="uri" class="form-control"  value="{{$banner->status}}" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Hình ảnh<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="file" id="input-file-now-custom-1" name="image" class="form-control dropify" data-default-file="{{asset('/upload/'.$banner->image)}}" />
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-info">Cập nhật</button>
                                <button type="reset" class="btn btn-inverse">Nhập lại</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
