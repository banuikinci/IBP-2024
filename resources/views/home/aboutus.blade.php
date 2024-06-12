@extends('layouts.home')

@section('title',"About Us")
@section('keywords',"About Us")
@section('description',"About Us")
@section('content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">About Us</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Contact Start -->
    <div class="contact">
        <div class="container-fluid">
            <div class="row">
                {!! $setting->aboutus !!}


            </div>
        </div>
    </div>




@endsection