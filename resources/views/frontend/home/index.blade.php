@extends('frontend.layouts.main')
@section('content')
    <div class="banner">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <img src="/frontend/images/AnhCat/banner.png" class="d-block w-100" alt="...">
                    <div class="content-box-banner">
                        <h2 class="text-uppercase header-banner">
                            THẾ GIỚI NỘI THẤT SỐ 1 VIỆT NAM <br> <span> Hoàng Hoan </span>
                        </h2>
                        <div class="sapo-banner">
                            <p>Sứ mệnh của chúng tôi là kết hợp hài hòa giữa ý tưởng và mong muốn của khách
                                hàng, đem lại những phút giây thư giãn tuyệt vời bên gia đình và những người
                                thân yêu.</p>
                        </div>
                        <a href="/frontend/#" class="text-uppercase btn-banner"> Liên hệ ngay </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/frontend/images/AnhCat/banner.png" class="d-block w-100" alt="...">
                    <div class="content-box-banner">
                        <h2 class="text-uppercase header-banner">
                            THẾ GIỚI NỘI THẤT SỐ 1 VIỆT NAM <br> <span> Hoàng Hoan </span>
                        </h2>
                        <div class="sapo-banner">
                            <p>Sứ mệnh của chúng tôi là kết hợp hài hòa giữa ý tưởng và mong muốn của khách
                                hàng, đem lại những phút giây thư giãn tuyệt vời bên gia đình và những người
                                thân yêu.</p>
                        </div>
                        <a href="/frontend/#" class="text-uppercase btn-banner"> Liên hệ ngay </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/frontend/images/AnhCat/banner.png" class="d-block w-100" alt="...">
                    <div class="content-box-banner">
                        <h2 class="text-uppercase header-banner">
                            THẾ GIỚI NỘI THẤT SỐ 1 VIỆT NAM <br> <span> Hoàng Hoan </span>
                        </h2>
                        <div class="sapo-banner">
                            <p>Sứ mệnh của chúng tôi là kết hợp hài hòa giữa ý tưởng và mong muốn của khách
                                hàng, đem lại những phút giây thư giãn tuyệt vời bên gia đình và những người
                                thân yêu.</p>
                        </div>
                        <a href="/frontend/#" class="text-uppercase btn-banner"> Liên hệ ngay </a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="/frontend/#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="/frontend/#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <div class="categories">
        @foreach($categories as $key => $item )
            <div class="category-item">
                <a href="/frontend/#">
                    <div class="category-img">
                        <img src="{{asset($item->image)}}" alt="PHÒNG KHÁCH" class="img-cate">
                    </div>
                    <p> {{$item->name}} </p>
                </a>
            </div>
        @endforeach
    </div>

    <!-- HOT PRODUCT -->
    <div class="hot-product-wrap">
        <h2 class="header-prd"> Sản phẩm nổi bật </h2>
        <div class="slide-prd">
            @foreach($hot_Product as $item)
                <div class="product">
                    <div class="img">
                        <img src="{{asset($item->image)}}" class="img-fluid">
                    </div>
                    <div class="info">
                        <p class="name"><a href="/frontend/#">{{$item->name}}</a></p>
                        <p class="vote">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </p>
                        <p class="price">
                            <span class="mr-2 price-dc">{{ number_format($item -> price,0,",",".") }} đ</span>
                            <span>{{ number_format($item -> sale,0,",",".") }} đ</span></p>

                        <p class="desc"> (Size lớn, trắng sữa)</p>
                        {{--                    //@if($item->number)--}}
                        {{--                        <a href="">giá gốc</a>--}}
                        {{--                        <a href="">giá km</a>--}}
                        {{--                    @else--}}
                        {{--                        <a href="">giá gốc</a>--}}
                        {{--                    @endif--}}
                        <span>

                    </span>

                    </div>
                </div>
            @endforeach


        </div>
    </div>

    <!-- ABOUT US -->
    <div class="about-us">
        <div class="container">
            <h2 class="header-abt"> Về chúng tôi </h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="img h-100">
                        <img src="/frontend/images/AnhCat/tintuc-0.png" alt="NỘI THẤT HOÀNG HOAN UY TÍN SONG HÀNH CHẤT LƯỢNG"
                             class="w-100 h-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content h-100">
                        <h3> NỘI THẤT HOÀNG HOAN UY TÍN SONG HÀNH CHẤT LƯỢNG </h3>
                        <div>
                            <p>Nội thất Hoàng Hoan chúng tôi tự hào là đứa con tinh thần ra đời sau hơn 30 năm
                                hoạt động trong lĩnh vực kinh doanh đồ gỗ nội thất với thương hiệu ĐỒ GỖ HOÀNG
                                HOAN nổi tiếng.</p>

                            <p>Tài nguyên của chúng tôi là đội ngũ kiến trúc sư tốt nghiệp ĐH Kiến Trúc Hà Nội
                                với nhiều năm kinh nghiệm, luôn tràn đầy nhiệt huyết và sức sáng tạo của tuổi
                                trẻ. Thế mạnh của chúng tôi là sở hữu xưởng nội thất hơn 10.000m2 tại Hà Nội sản
                                xuất đa dạng các sản phẩm với giá cả luôn cạnh tranh.</p>
                        </div>
                        <div>
                            <p><img alt="giới thiệu" src="/frontend/images/AnhCat/tintuc-1.png">&nbsp;
                                <img alt="giới thiệu "
                                     src="/frontend/images/AnhCat/tintuc-2.png">&nbsp;<img alt="giới thiệu"
                                                                                           src="/frontend/images/AnhCat/tintuc-3.png">&nbsp;<a href="/frontend/#"><img alt=""
                                                                                                                                                                       src="/frontend/images/AnhCat/tintuc-4.png"></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <h2 class="header-abt"> Tại sao nên chọn hoàng hoan?</h2>
            <div class="row reason">
                <div class="col-md-6">
                    <div class="reason-index-item d-flex">
                        <div class="img">
                            <img src="/frontend/images/AnhCat/money.png" alt="lý do 1">
                        </div>
                        <div class="content">
                            <h3 class="title"> Chính sách giá </h3>
                            <p class="desc"> Tốt nhất và công khai giá trên website</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="reason-index-item d-flex">
                        <div class="img">
                            <img src="/frontend/images/AnhCat/product.png" alt="lý do 1">
                        </div>
                        <div class="content">
                            <h3 class="title"> Sản xuất </h3>
                            <p class="desc"> Trực tiếp sản xuất bởi đội ngũ nhân viên hàng đầu</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="reason-index-item d-flex">
                        <div class="img">
                            <img src="/frontend/images/AnhCat/medal.png" alt="lý do 1">
                        </div>
                        <div class="content">
                            <h3 class="title"> Chất lượng </h3>
                            <p class="desc"> Cam kết chất lượng sản phẩm và tốc độ thi công </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="reason-index-item d-flex">
                        <div class="img">
                            <img src="/frontend/images/AnhCat/open-24-h.png" alt="lý do 1">
                        </div>
                        <div class="content">
                            <h3 class="title"> Bảo hành </h3>
                            <p class="desc"> Dịch vụ bảo hành tốt nhất khu vực</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="news">
        <div class="container">
            @foreach($hot_news as $item)
            <h2 class="header-news"> Tin tức </h2>
            <div class="row">
                    <div class="col-lg-7">
                        <div class="box">
                            <div class="img">
                                <img src="{{asset($item->image)}}"
                                     alt="Cách chọn Sofa cho phòng khách nhà bạn thêm phần sang trọng" class="w-100">
                            </div>
                            <div class="news-content">
                                <p class="title">
                                    <a href="/frontend/#">
                                        Cách chọn Sofa cho phòng khách nhà bạn thêm phần sang trọng
                                    </a>
                                </p>
                                <div class="desc">
                                    <p>Độ tuổi khởi nghiệp và tự lập ngày càng trẻ hóa trong xã hội hiện đại thời
                                        nay, thế nên việc “thiết kế căn hộ chung cư mini 2 phòng ngủ”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- PARTNER -->
        <div class="partner">
            <div class="container">
                <h2 class="header-ptn"> Thương Hiệu </h2>
                <div class="slide-partner">
                    @foreach($hot_partner as $item)
                    <div class="ptn-item">
                        <div class="img">
                            <img src="{{asset($item->image)}}" alt="">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    <!-- CONTACT -->
    <div class="contact contact-index">
        <span><img src="/frontend/images/AnhCat/ghe.png" alt="Trải nghiệm cùng hoàng hoan"></span>
        <div class="container">
            <div class="row contact-row">
                <div class="col-lg-6 col-md-5 ">
                    <h2 class="title"> Trải nghiệm dịch vụ <br> <strong> cùng Hoàng hoan ngay </strong></h2>
                </div>
                <div class="col-lg-6 col-md-7">
                    <p class="mb-1 text-white"> Thông tin liên hệ </p>
                    <div class="form-group">
                        <input type="text" placeholder="Email/Số điện thoại">
                        <button class="savePhone"> Gửi </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
