@extends('layouts.home')

@section('title',"Checkout")
@section('keywords',"Checkout")
@section('description',"Checkout")
@section('content')
    @php
        $sepet=\App\Http\Controllers\HomeController::countsepet();
    @endphp
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Checkout</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Contact Start -->
    <div class="contact">
        <div class="container-fluid">
            <div class="row">
                <!-- Checkout Start -->
                <div class="checkout">
                    <div class="container-fluid">
                        <div class="row">
                            <form action="{{route("user_order_store")}}" method="post">
                                @csrf
                            <div class="col-lg-8">
                                <div class="checkout-inner">
                                    <div class="billing-address">
                                        <h2>Billing Address</h2>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Full Name</label>
                                                <input name="name" value="{{Auth::user()->name}}" class="form-control" type="text" placeholder="First Name">
                                            </div>
                                            <div class="col-md-6">
                                                <label>E-mail</label>
                                                <input name="email" value="{{Auth::user()->email}}" class="form-control" type="text" placeholder="E-mail">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Mobile No</label>
                                                <input name="phone" value="{{Auth::user()->phone}}" class="form-control" type="text" placeholder="Mobile No">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Address</label>
                                                <input name="adress" value="{{Auth::user()->adress}}" class="form-control" type="text" placeholder="Address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="checkout-inner">
                                    <div class="checkout-summary">
                                        <h5>Toplam Araba Sayısı</h5>
                                        <span style="color:darkred">{{$sepet}} Adet</span>
                                        <hr>
                                        <h6 style="color: red">Arabaların ödünç süresi sipariş verdiğiniz günden başlar.</h6>
                                    </div>

                                    <div>
                                        <div class="checkout-btn">
                                            <button type="submit" class="btn btn-success">Ödünç Al</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Checkout End -->


            </div>
        </div>
    </div>




@endsection