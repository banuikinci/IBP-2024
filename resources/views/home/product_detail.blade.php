@extends('layouts.home')

@section('title',$data->title)
@section('keywords',$data->keywords)
@section('description',$data->description)
@section('content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">
                    {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category, $data->category->title) }}
                </li>
                <li class="breadcrumb-item active">
                    {{ $data->title }}
                </li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Car Detail Start -->
    <div class="product-detail">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="product-detail-top">
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="product-slider-single normal-slider">
                                    <img src="{{Storage::url($data->image)}}" alt="{{$data->title}}">
                                    @foreach($galery as $gl)
                                    <img src="{{Storage::url($gl->image)}}" alt="{{$gl->title}}">
                                    @endforeach
                                </div>
                                <div class="product-slider-single-nav normal-slider">
                                    <div class="slider-nav-img"><img src="{{Storage::url($data->image)}}" alt="{{$data->title}}"></div>
                                    @foreach($galery as $gl)
                                    <div class="slider-nav-img"><img src="{{Storage::url($gl->image)}}" alt="{{$gl->title}}"></div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="product-content">
                                    <div class="title"><h2>{{$data->title}}</h2></div>
                                    @php
                                        $average=\App\Http\Controllers\HomeController::averageview($data->id);
                                        $count_rw=\App\Http\Controllers\HomeController::countview($data->id);
                                    @endphp
                                    <div class="ratting">
                                        <i @if($average>0) class="fa fa-star" @else class="fa fa-star-o"  @endif></i>
                                        <i @if($average>1) class="fa fa-star" @else class="fa fa-star-o"  @endif></i>
                                        <i @if($average>2) class="fa fa-star" @else class="fa fa-star-o"  @endif></i>
                                        <i @if($average>3) class="fa fa-star" @else class="fa fa-star-o"  @endif></i>
                                        <i @if($average>4) class="fa fa-star" @else class="fa fa-star-o"  @endif></i>
                                    </div>
                                    <div class="price">
                                        <h4>Stok :</h4>
                                        <b>Adet-{{$data->quantity}}</b>
                                    </div>
                                    <form action="{{ route("user_shopcart_store",['id'=>$data->id]) }}" method="post">
                                        @csrf
                                    <div class="quantity">
                                        <h4>Süre-Gün:</h4>
                                        <div class="qty">
                                            <button class="btn-minus" type="button"><i class="fa fa-minus"></i></button>
                                            <input name="time" type="number" value="1" min="1" max="45">
                                            <button class="btn-plus" type="button"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="action">
                                        <button class="btn" type="submit"><i class="fa fa-shopping-cart"></i>Sepete Ekle </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row product-detail-bottom">
                        <div class="col-lg-12">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#description">Detay</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#reviews">Reviews ({{$count_rw}})</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="description" class="container tab-pane active">
                                    {!! $data->detail !!}
                                </div>
                                <div id="reviews" class="container tab-pane fade">
                                    <div class="reviews-submitted">
                                        @foreach($review as $rw)
                                        <div class="reviewer">{{$rw->user->name}} - <span>{{$rw->created_at}}</span></div>
                                        <div class="ratting">
                                            <i @if($rw->rate>0) class="fa fa-star" @else class="fa fa-star-o"  @endif></i>
                                            <i @if($rw->rate>1) class="fa fa-star" @else class="fa fa-star-o"  @endif></i>
                                            <i @if($rw->rate>2) class="fa fa-star" @else class="fa fa-star-o"  @endif></i>
                                            <i @if($rw->rate>3) class="fa fa-star" @else class="fa fa-star-o"  @endif></i>
                                            <i @if($rw->rate>4) class="fa fa-star" @else class="fa fa-star-o"  @endif></i>
                                        </div>
                                        <p>
                                            {{ $rw->review }}
                                        </p>
                                        @endforeach
                                    </div>
                                    <div class="reviews-submit">
                                        <h4>Yorum  Yaz</h4>
                                        <!-- review form -->
                                        @livewire('review',['id'=>$data->id])
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Side Bar Start -->
                <div class="col-lg-4 sidebar">
                    <div class="sidebar-widget category">
                        @include("home._category")
                    </div>

                    <div class="sidebar-widget widget-slider">
                        <div class="sidebar-slider normal-slider">
                            @foreach($popular as $pop)
                            <div class="product-item">
                                <div class="product-title">
                                    <a href="#">{{$pop->title}}</a>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <a href="{{ route('product_detail',['id'=>$pop->id ,'slug'=>$pop->slug])}}">
                                        <img height="250px;" src="{{ Storage::url($pop->image) }}" alt="Product Image">
                                    </a>
                                    <div class="product-action">
                                        <a href="{{ route("user_shopcart_edit",['id'=>$pop->id]) }}"><i class="fa fa-cart-plus"></i></a>
                                        <a href="{{ route('product_detail',['id'=>$pop->id ,'slug'=>$pop->slug])}}"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>

                            </div>
                                @endforeach

                        </div>
                    </div>

                </div>
                <!-- Side Bar End -->
            </div>
        </div>
    </div>
    <!-- Car Detail End -->

@endsection
