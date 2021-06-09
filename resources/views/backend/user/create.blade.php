@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Thêm Người dùng <a href="{{route('admin.user.index')}}" class="btn btn-primary">Danh sách </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Quản lý Người dùng</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin Người dùng</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{route('admin.user.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Phân quyền</label>
                                    <select class="form-control" name="role_id" id="role_id">
                                        <option>--Chọn--</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Manager</option>
                                        <option value="3">Member</option>
                                    </select>
                                </div>
                                @if ($errors->has('role_id'))
                                    <label class="text-red"> <i class="fa fa-info"></i> {{$errors->first('role_id')}} </label>
                                @endif
                                <div class="form-group">
                                    <label for="name">Họ tên</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Họ tên">
                                </div>
                                @if ($errors->has('name'))
                                    <label class="text-red"> <i class="fa fa-info"></i> {{$errors->first('name')}} </label>
                                    @endif
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Nhập email">
                                </div>
                                @if ($errors->has('email'))
                                    <label class="text-red"> <i class="fa fa-info"></i> {{$errors->first('email')}} </label>
                                @endif
                                <div class="form-group">
                                    <label for="password">Mật khẩu</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Nhập password" >
                                </div>
                                @if ($errors->has('password'))
                                    <label class="text-red"> <i class="fa fa-info"></i> {{$errors->first('password')}} </label>
                                @endif
                                <div class="form-group">
                                    <label for="avatar">Avatar</label>
                                    <input type="file" name="avatar" id="avatar">

                                </div>
                                @if ($errors->has('avatar'))
                                    <label class="text-red"> <i class="fa fa-info"></i> {{$errors->first('avatar')}} </label>
                                @endif
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="is_active" id="is_active" value="1"> Kích hoạt tài khoản
                                    </label>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Thêm</button>
                                </div>
                            </div>


                        </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->


        </div>
        <!--/.col (left) -->
        <!-- right column -->


        <!-- /.row -->
    </section>
@endsection
