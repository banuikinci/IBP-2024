@extends('layouts.home')

@section('title',$search)
@section('keywords',$search)
@section('description',$search)
@section('content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">
                    {{$search}}
                </li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Car List Start -->
    <div class="product-view">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-view-top">
                                <div class="row">
                                    <h3>"{{$search}}" &nbsp;Arama Sonçları</h3>

                                </div>
                            </div>
                        </div>

                        @foreach($datalist as $rs)
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="{{ route('product_detail',['id'=>$rs->id ,'slug'=>$rs->slug])}}">{{$rs->title}}</a>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img height="250px" src="{{ Storage::url($rs->image) }}" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="{{ route("user_shopcart_edit",['id'=>$rs->id]) }}"><i class="fa fa-cart-plus"></i></a>
                                            <a href="{{ route('product_detail',['id'=>$rs->id ,'slug'=>$rs->slug])}}"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>Sayı: </span>{{$rs->quantity}}</h3>
                                        <a class="btn" href="{{ route("user_shopcart_edit",['id'=>$rs->id]) }}"><i class="fa fa-shopping-cart"></i>Sepete Ekle</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

                <!-- Side Bar Start -->
                <div class="col-lg-4 sidebar">
                    <div class="sidebar-widget category">
                        @include("home._category")
                    </div>
                </div>
                <!-- Side Bar End -->
            </div>
        </div>
    </div>
    <!-- Car List End -->

@endsection
