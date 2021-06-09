@extends('frontend.layouts.main')
@section('content')
    <div class="container">
        <div class="box-news">

            <h1 class="header-news"> Tin tức </h1>

            <div class="row wrapper-news">
                @foreach($hot_news as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="new-item">
                        <div class="img">
                            <img src="{{asset($item->image)}}" class="img-fluid" alt="{{$item->title}}">
                        </div>
                        <div class="title">
                            <h4><a href="#">{{$item->title}}</a></h4>
                            <p class="desc">
                            </p>
                            <p>
                                {!! $item->summary !!}
{{--                                {!!  !!} bỏ các cặp thẻ html trongg ckediter--}}
                                </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="pagination d-flex justify-content-center">
                <ul class="d-flex"><li class="active" data-page="1"> 1 </li></ul>
            </div>
        </div>
    </div>
@endsection
