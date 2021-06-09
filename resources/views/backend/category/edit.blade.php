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
                    <form role="form" method="post" action="{{route('admin.category.update', ['id' => $data->id ], ['parent_id' => $data->parent_id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Danh mục cha</label>
                                    <select class="form-control" name="parent_id" id="parent_id">
                                        <option>--chọn--</option>
                                        @foreach($dataAll as $item)
                                            <option {{ $data ->parent_id == $item->id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Tên danh mục</label>
                                    <input value="{{ $data->name }}" type="text" name="name" class="form-control" id="name">
                                </div>
                                @if ($errors->has('name'))
                                    <label class="text-red"> <i class="fa fa-info"></i> {{$errors->first('name')}} </label>
                                @endif
                                <div class="form-group">
                                    <label for="imgage">Ảnh</label>
                                    <input type="file" name="image" id="image">
                                    <img src="{{ asset($data->image) }}" alt="" width="100" style="margin-top: 10px;">
                                </div>
                                @if ($errors->has('image'))
                                    <label class="text-red"> <i class="fa fa-info"></i> {{$errors->first('image')}} </label>
                                @endif
                                <div class="checkbox">
                                    <label>
                                        <input value="1" {{ ($data->is_active == 1) ? 'checked' : '' }} type="checkbox" name="is_active" id="is_active"> Hiển thị
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Loại danh mục</label>
                                    <select class="form-control" name="type" id="type">
                                        <option value>--chọn--</option>

                                        <option value="1" {{ ($data->type == 1) ? 'selected' : '' }}>Sản phẩm</option>
                                        <option value="2" {{ ($data->type == 2) ? 'selected' : '' }}>Dịch vụ</option>
                                        <option value="3" {{ ($data->type == 3) ? 'selected' : '' }}>Bài viết</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="position">Vị trí hiển thị</label>
                                    <input value="{{ $data->position }}" type="number" name="position" class="form-control" id="position" min="1">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea id="editor2" name="description" class="form-control" rows="3"
                                >{{$data->description}}</textarea>
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
