@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Quản lý Danh mục<a href="{{ route('admin.category.index') }}" class="btn bg-purple btn-flat"><i class="fa fa-tasks"></i> Danh sách</a>

        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Danh mục</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin danh mục</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{route('admin.category.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="col-md-6">
<!--                                <div class="form-group">
                                    <label>Danh mục cha</label>
                                    <select class="form-control" name="parent_id" id="parent_id">
                                        <option>&#45;&#45;chọn&#45;&#45;</option>
                                        @foreach($data as $item)
                                        <option value="{{$item -> id}}">{{$item -> name}}</option>
                                        @endforeach
                                    </select>
                                </div>-->
                                @if ($errors->has('parent_id'))
                                    <label class="text-red"> <i class="fa fa-info"></i> {{$errors->first('parent_id')}} </label>
                                @endif
                                <div class="form-group">
                                    <label for="name">Tên danh mục</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Danh mục">
                                </div>
                                @if ($errors->has('name'))
                                    <label class="text-red"> <i class="fa fa-info"></i> {{$errors->first('name')}} </label>
                                @endif
                                <div class="form-group">
                                    <label for="imgage">Ảnh</label>
                                    <input type="file" name="image" id="image">
                                </div>
                                @if ($errors->has('image'))
                                    <label class="text-red"> <i class="fa fa-info"></i> {{$errors->first('image')}} </label>
                                @endif
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="is_active" id="is_active" value="1"> Hiển thị
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Loại danh mục</label>
                                    <select class="form-control" name="type" id="type">
                                        <option value>--chọn--</option>
                                        <option value="1">Sản phẩm</option>
                                        <option value="2">Dịch vụ</option>
                                        <option value="3">Bài viết</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="position">Vị trí hiển thị</label>
                                    <input type="number" name="position" class="form-control" id="position" min="1" value="1">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Mô tả</label>
                                <textarea id="editor2" name="description" class="form-control" rows="3" placeholder="Nhập mô tả"
                                ></textarea>
                            </div>
                        </div>

                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->


            </div>
            <!--/.col (left) -->
            <!-- right column -->

        </div>
        <!-- /.row -->
    </section>
@endsection
@section('ckeditor_js')
    <script type="text/javascript">
        $(function () {
            $(function () {
                var _ckeditor2 = CKEDITOR.replace('description');
                _ckeditor2.config.height = 250;
            })
        })
    </script>
@endsection
