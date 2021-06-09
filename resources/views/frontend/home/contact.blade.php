@extends('frontend.layouts.main')
@section('content')
    <div class="banner-abt-wrap">
        <div class="img">
            <img src="/frontend/images/AnhCat/banner-lien-he.png" alt="Liên hệ với xưởng mộc giá tốt" class="w-100">
        </div>
        <div class="banner-content">
            <h1 class="text-center">liên hệ</h1>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="container">
        <div class="contact-box">
            <div class="box px-0  px-md-4">
                <div class="cont-box d-flex">
                    <div class="row">
                        <div class="col-lg-6 ">
                            <div class="img d-none d-lg-block">
                                <img src="/frontend/images/AnhCat/lien-he-img1.png" alt="Liên hệ" class="w-100">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content">
                                <p class="title lien-he mb-2"> liên hệ với chúng tôi  </p>
                                <div class="form-group lien-he">
                                    <input type="text" name="TITLE" placeholder="Họ và tên">
                                    <input type="text" name="EMAIL" placeholder="Email">
                                    <input type="text" name="PHONE" placeholder="Số điện thoại">
                                    <input type="text" name="CONTENT" placeholder="Nội dung">
                                    <br>
                                    <button class="contact-send"> Gửi </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
