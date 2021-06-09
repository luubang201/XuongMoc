@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Sửa thông tin Banner <a href="{{route('admin.banner.index')}}" class="btn btn-primary">Danh sách </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Quản lý Banner</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thông tin Banner</h3>
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
                <form role="form" action="{{route('admin.banner.update',['id' => $data->id ])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputSupplier">Tiêu đề</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{$data->title}}">
                                    @if ($errors->has('title'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('title') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Ảnh banner</label>
                                    <input type="file" id="image" name="image">
                                    <img src="{{ asset($data->image) }}" alt="" width="100" style="margin-top: 10px;">
                                    @if ($errors->has('image'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('image') }}</label>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kiểu hiển thị</label>
                                    <select class="form-control" name="target" id="target">
                                        <option value>--chọn--</option>
                                        <option value="1" {{ ($data->target == 1) ? 'selected' : '' }}>_blank</option>
                                        <option value="2" {{ ($data->target == 2) ? 'selected' : '' }}>_self</option>
                                        <option value="3" {{ ($data->target == 3) ? 'selected' : '' }}>_parent</option>
                                        <option value="4" {{ ($data->target == 4) ? 'selected' : '' }}>_top</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Vị trí</label>
                                    <input type="number" class="form-control" id="position" name="position"
                                           value="{{$data->position}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kiểu Banner</label>
                                    <select class="form-control" name="target" id="target">
                                        <option value>--chọn--</option>
                                        <option value="1">banner_index</option>
                                        <option value="1">banner_product</option>
                                    </select>
                                    <input type="number" class="form-control" id="type" name="type"
                                           value="{{$data->type}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Điều hướng Url</label>
                                    <input type="text" class="form-control" id="url" name="url" value="{{$data->url}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="1" {{($data->is_active == 1) ? 'checked' : '' }} name="is_active"><b>Trạng thái hiển thị</b>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea id="editor2" name="description" class="form-control" rows="3">{{$data->description}}</textarea>
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
        </div>
        <!-- /.row -->
    </section>
@endsection
@section('ckeditor_js')
    <script type="text/javascript">
        $(function () {
            $(function () {
                var _ckeditor2 = CKEDITOR.replace('description');
                _ckeditor2.config.height = 200;
            })
        })
    </script>
@endsection

