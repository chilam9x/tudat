@extends('layouts.admin')
@section('content')

<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Hàng hóa mới</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Hàng hóa</a></li>
                                <li class="breadcrumb-item active">Mới</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Quản lý Hàng hóa mới</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Mã hàng</th>
                                            <th>Hình ảnh</th>
                                            <th>Ngày tạo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($products as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->code}}</td>
                                            <td><img src="{{url('/') .'/' . $item->image_thumbnail ?? '' }}" width="150"> </td>
                                            <td>{{($item->created_at==null) || ($item->created_at=='0000-00-00 00:00:00')?'':date('d/m/Y H:i:s', strtotime($item->created_at))}}
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>

@endsection
