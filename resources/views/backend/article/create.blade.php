@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Thêm Bài viết <a href="{{route('admin.article.index')}}" class="btn btn-primary">Danh sách </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Quản lý Bài viết</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thông tin Bài viết</h3>
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
                <form role="form" action="{{route('admin.article.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputSupplier">Tiêu đề</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title ...">
                                    @if ($errors->has('title'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('title') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Ảnh bài viết</label>
                                    <input type="file" id="image" name="image">
                                    @if ($errors->has('image'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('image') }}</label>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Danh mục bài viết</label>
                                    <select class="form-control" name="category_id" id="category_id">
                                        <option value>--chọn--</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Vị trí</label>
                                    <input type="number" class="form-control" id="position" name="position"
                                           value="1">
                                </div>
                            </div>
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="1" name="is_active"><b>Trạng thái hiển thị</b>
                                        </label>
                                    </div>
                                </div>

                        </div>

                        <div class="form-group">
                            <label>Tóm tắt</label>
                            <textarea id="editor1" name="summary" class="form-control" rows="3"
                                      placeholder="Enter ..."></textarea>
                        </div>

                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea id="editor2" name="description" class="form-control" rows="3"
                                      placeholder="Enter ..."></textarea>
                        </div>


                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Tạo</button>
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
                var _ckeditor1 = CKEDITOR.replace('summary');
                _ckeditor1.config.height = 150;
                var _ckeditor2 = CKEDITOR.replace('description');
                _ckeditor2.config.height = 400;
            })
        })
    </script>
@endsection
