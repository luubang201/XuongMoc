@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Sửa thông tin liên hệ <a href="{{route('admin.contact.index')}}" class="btn btn-primary">Danh sách </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Quản lý Liên hệ</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Sửa thông tin Đặt tour</h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        @if ($errors->any())
                            <div class="alert alert-warning alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-warning"></i> Cảnh báo !</h4>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('admin.contact.update', ['id' => $data->id ])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputSupplier">Họ và tên</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}">
                                    @if ($errors->has('name'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('name') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputSupplier">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{$data->email}}">
                                    @if ($errors->has('email'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('email') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputSupplier">Số điện thoại</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{$data->phone}}">
                                    @if ($errors->has('phone'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('phone') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputSupplier">Địa chỉ</label>
                                    <input type="text" class="form-control" id="address" name="address" value="{{$data->address}}">
                                    @if ($errors->has('address'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('address') }}</label>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputSupplier">Yêu cầu</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$data->title}}">
                            @if ($errors->has('title'))
                                <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('title') }}</label>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea id="content" name="content" class="form-control" rows="5"
                            >{{$data->content}}</textarea>
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
        <!-- /.row -->
    </section>
@endsection


