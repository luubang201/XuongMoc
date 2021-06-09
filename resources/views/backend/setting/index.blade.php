@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Thông tin cấu hình website
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <form role="form" action="{{ route('admin.setting.update', ['id' => $setting->id ]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Tên Công Ty</label>
                                <input value="{{ $setting->company }}" type="text" class="form-control" id="company"
                                       name="company" placeholder="">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputFile">Thay đổi Logo</label>
                                <input type="file" id="new_image" name="new_image"><br>
                                @if ($setting->image)
                                    <img src="{{ asset($setting->image) }}" width="200">
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Địa chỉ 1</label>
                                <input value="{{ $setting->address }}" type="text" class="form-control" id="address"
                                       name="address" placeholder="">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Địa chỉ 2</label>
                                <input value="{{ $setting->address2 }}" type="text" class="form-control" id="address2"
                                       name="address2" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">SĐT</label>
                                <input value="{{ $setting->phone }}" type="text" class="form-control" id="phone"
                                       name="phone" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Fax</label>
                                <input value="{{ $setting->fax }}" type="text" class="form-control" id="fax"
                                       name="fax" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Hotline</label>
                                <input value="{{ $setting->hotline }}" type="text" class="form-control" id="hotline"
                                       name="hotline" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">MST</label>
                                <input value="{{ $setting->tax }}" type="text" class="form-control" id="tax"
                                       name="tax" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Facebook</label>
                                <input value="{{ $setting->facebook }}" type="text" class="form-control" id="facebook"
                                       name="facebook" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Email</label>
                                <input value="{{ $setting->email }}" type="text" class="form-control" id="email"
                                       name="email" placeholder="">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Website</label>
                                <input value="{{ $setting->website }}" type="text" class="form-control" id="email"
                                       name="website" placeholder="">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Giới thiệu về công ty</label>
                                <textarea id="editor1" name="introduce" class="form-control" rows="10" >{{ $setting->introduce }}</textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Hướng dẫn thanh toán</label>
                                <textarea id="editor2" name="payment_guide" class="form-control" rows="10" >{{ $setting->payment_guide }}</textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Điều khoản</label>
                                <textarea id="editor3" name="policy" class="form-control" rows="10" >{{ $setting->policy }}</textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Bảo mật thông tin</label>
                                <textarea id="editor4" name="information_security" class="form-control" rows="10" >{{ $setting->information_security }}</textarea>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Lưu</button>
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
                var _ckeditor1 = CKEDITOR.replace('introduce');
                _ckeditor1.config.height = 150;
                var _ckeditor2 = CKEDITOR.replace('payment_guide');
                _ckeditor2.config.height = 150;
                var _ckeditor3 = CKEDITOR.replace('policy');
                _ckeditor3.config.height = 150;
                var _ckeditor4 = CKEDITOR.replace('information_security');
                _ckeditor4.config.height = 150;
                var _ckeditor5 = CKEDITOR.replace('travel_insurance');
                _ckeditor5.config.height = 150;
            })
        })
    </script>
@endsection
