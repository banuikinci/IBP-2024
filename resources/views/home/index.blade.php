@extends('layouts.home')

@section('title',$setting->title)
@section('keywords',$setting->keywords)
@section('description',$setting->description)

@section('slider')
@include('home._slider')
@endsection

@section('content')



    <!-- Feature Start-->
    <div class="feature">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fab fa-cc-discover"></i>
                        <h2>Daima yenilikler</h2>
                        <p>
                            Araba daima yeni içeriklerle zengindir.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fa fa-truck"></i>
                        <h2>Kolay Ulaşım</h2>
                        <p>
                            Kolay Şekilde ve zamanında size ulaşırız.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fa fa-sync-alt"></i>
                        <h2>90 gün Ödünç Süresi</h2>
                        <p>
                            Arabaları 3 aylık bir uzun süre boyunca ödünç ala bilirsiniz.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fa fa-comments"></i>
                        <h2>24/7 İletişim</h2>
                        <p>
                            Gün boyunca istediğiniz saatlerde iletişime geçe bilir ve destek ala bilirsiniz.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End-->


    <!-- Call to Action Start -->
    <div class="call-to-action">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Bizi araya bilirsiniz.</h1>
                </div>
                <div class="col-md-6">
                    <a href="tel:{{$setting->phone}}">{{$setting->phone}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->

    <!-- Featured Car Start -->
    <div class="featured-product product">
        <div class="container-fluid">
            <div class="section-header">
                <h1>Popüler Arabalar </h1>
            </div>
            <div class="row align-items-center product-slider product-slider-4">
                @foreach($populer as $pop)
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-title">
                            <a href="{{ route('product_detail',['id'=>$pop->id ,'slug'=>$pop->slug])}}">{{$pop->title}}</a>
                            @php
                                $average=\App\Http\Controllers\HomeController::averageview($pop->id);
                                $count_rw=\App\Http\Controllers\HomeController::countview($pop->id);
                            @endphp
                            <div class="ratting">
                                <i @if($average>0) class="fa fa-star" @else class="fa fa-star-o"  @endif></i>
                                <i @if($average>1) class="fa fa-star" @else class="fa fa-star-o"  @endif></i>
                                <i @if($average>2) class="fa fa-star" @else class="fa fa-star-o"  @endif></i>
                                <i @if($average>3) class="fa fa-star" @else class="fa fa-star-o"  @endif></i>
                                <i @if($average>4) class="fa fa-star" @else class="fa fa-star-o"  @endif></i>
                            </div>
                        </div>
                        <div class="product-image">
                            <a href="{{ route('product_detail',['id'=>$pop->id ,'slug'=>$pop->slug])}}">
                                <img height="300px" src="{{ Storage::url($pop->image) }}" alt="Product Image">
                            </a>
                            <div class="product-action">

                                <a href="{{ route("user_shopcart_edit",['id'=>$pop->id]) }}"><i class="fa fa-cart-plus"></i></a>
                                <a href="{{ route('product_detail',['id'=>$pop->id ,'slug'=>$pop->slug])}}"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Featured Car End -->


    <!-- Recent Car Start -->
    <div class="recent-product product">
        <div class="container-fluid">
            <div class="section-header">
                <h1>Sizin İçin Seçilenler</h1>
            </div>
            <div class="row align-items-center product-slider product-slider-4">
                @foreach($picked as $pop)
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="{{ route('product_detail',['id'=>$pop->id ,'slug'=>$pop->slug])}}">{{$pop->title}}</a>
                                @php
                                    $average=\App\Http\Controllers\HomeController::averageview($pop->id);
                                    $count_rw=\App\Http\Controllers\HomeController::countview($pop->id);
                                @endphp
                                <div class="ratting">
                                    <i @if($average>0) class="fa fa-star" @else class="fa fa-star-o"  @endif></i>
                                    <i @if($average>1) class="fa fa-star" @else class="fa fa-star-o"  @endif></i>
                                    <i @if($average>2) class="fa fa-star" @else class="fa fa-star-o"  @endif></i>
                                    <i @if($average>3) class="fa fa-star" @else class="fa fa-star-o"  @endif></i>
                                    <i @if($average>4) class="fa fa-star" @else class="fa fa-star-o"  @endif></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="{{ route('product_detail',['id'=>$pop->id ,'slug'=>$pop->slug])}}">
                                    <img height="300px" src="{{ Storage::url($pop->image) }}" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="{{ route("user_shopcart_edit",['id'=>$pop->id]) }}"><i class="fa fa-cart-plus"></i></a>
                                    <a href="{{ route('product_detail',['id'=>$pop->id ,'slug'=>$pop->slug])}}"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Recent Car End -->



@endsection
