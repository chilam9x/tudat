@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm mới</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Hàng hóa</a></li>
                        <li class="breadcrumb-item active">Thêm mới</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    @if (\Session::has('success'))
    <div class="alert alert-success">
        {!! \Session::get('success') !!}
    </div>
    @elseif((\Session::has('fail')))
    <div class="alert alert-error">
        {!! \Session::get('fail') !!}
    </div>
    @endif
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin hàng hóa</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url('post-create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã hàng</label>
                                    <input type="text" class="form-control" name="code" placeholder=" Nhập mã hàng hóa">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">
                                        Ảnh đại diện:
                                    </label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="image" onchange="readURL(event, 1)">
                                        <label class="custom-file-label" for="customFile">
                                            Chọn hình ảnh
                                        </label>
                                    </div>
                                    <img id="img1" width="200" height="200" src="">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Xác nhận</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    //hiển thị hình ảnh khi chọn file
    function readURL(event, id) {
        var output = document.getElementById('img' + id);
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
@endsection
