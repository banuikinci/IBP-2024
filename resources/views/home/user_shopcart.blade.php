@extends('layouts.home')

@section('title',"User Panel")
@section('content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">My Account</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- My Account Start -->
    <div class="my-account">
        <div class="container-fluid">
            <div class="row">
                @include("home.userpanel")
                <div class="col-md-9">

                    <div class="cart-page-inner">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                <tr>
                                    <th>Araba</th>
                                    <th>Süre (gün)</th>
                                    <th>Tarih</th>
                                    <th>İşlem</th>
                                </tr>
                                </thead>
                                <tbody class="align-middle">
                                @if(count($datalist)==0)
                                    <tr>
                                        <td>
                                            <h3>Sepet Boş</h3></td>
                                    </tr>
                                @else
                                    @foreach($datalist as $rs)
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="{{route("product_detail",['id'=>$rs->product->id,'slug'=>$rs->product->slug.' ']) }}">
                                                        <img width="80px" height="80px"
                                                             src="{{Storage::url($rs->product->image) }}"
                                                             alt="Image"></a>
                                                    <p>{{$rs->product->title}}</p>
                                                </div>
                                            </td>
                                            <form method="post"
                                                  action="{{route('user_shopcart_update',['id'=>$rs->id])}}">
                                                @csrf
                                                <td style="width: 180px;">
                                                    <input name="time" type="number" value="{{$rs->time}}" min="1"
                                                           max="45">

                                                </td>
                                                <td>{{$rs->created_at}}</td>
                                                <td style="width: 150px;">
                                                    <button type="submit" class="btn btn-primary">Güncelle</button>
                                                    <a href="{{route("user_shopcart_destroy",['id'=>$rs->id])}}"
                                                       onclick="return confirm('Are You Sure To Delete')"
                                                    ><i class="fa fa-trash"></i></a>
                                                </td>
                                            </form>

                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-4">
                            <div class="cart-page-inner">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="cart-summary">
                                            @if(count($datalist)!=0)
                                            <form action="{{route('user_order_create')}}" method="post">
                                                @csrf
                                                <div class="cart-btn">
                                                    <button class="btn btn-primary" type="submit">Ödünç Al</button>
                                                </div>
                                            </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection