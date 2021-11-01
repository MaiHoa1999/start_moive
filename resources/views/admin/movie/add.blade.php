@extends('admin')
@section('content')
    <style>
        .table-striped {
            height: 200px;
        }

        .table-striped td {
            max-width: fit-content;
            max-height: 100%;
            text-overflow: ellipsis;
            white-space: normal;
            display: block;
        }
    </style>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Thêm Phim</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
                <li class="breadcrumb-item">Phim</li>
                <li class="breadcrumb-item active">Thêm phim</li>
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
                                <div class="form-group col-md-6">
                                    <h5>Tên Phim<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="name" class="form-control" required
                                               data-validation-required-message="This field is required">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <h5>Loại phim<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="id_category" class="form-control" required
                                                data-validation-required-message="This field is required">
                                            <option value="">Chọn thể loại</option>
                                            @foreach ($category as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <h5>Hình ảnh<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="file" id="input-file-now-custom-1" name="image" class="form-control dropify"/>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <h5>Trailer<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="trailer" class="form-control" required id="trailer">
                                        <iframe width="100%" id="src" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-md-6">
                                <h5>Thời lượng<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="number" name="duration" class="form-control" required
                                           data-validation-required-message="This field is required">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <h5>Ngày phát hành<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="date" name="release_date" class="form-control" required
                                           data-validation-required-message="This field is required">
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                                <h5>Mô tả<span class="text-danger">*</span></h5>
                                <div class="controls">
                                        <textarea name="description" class="form-control" required rows="5"
                                                  data-validation-required-message="This field is required"></textarea>
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-info">Thêm</button>
                                <button type="reset" class="btn btn-inverse">Nhập lại</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
