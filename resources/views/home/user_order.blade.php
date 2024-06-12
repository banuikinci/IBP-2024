@extends('layouts.home')

@section('title',"User Panel")
@section('content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">My Orders</li>
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
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                            <tr>
                                <th>İsim</th>
                                <th>Email</th>
                                <th>Telefon</th>
                                <th>Adress</th>
                                <th>Toplam Araba</th>
                                <th>Durum</th>
                                <th>Tarih</th>
                                <th>İşlem</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                                <tr>
                                    <td>{{$rs->user->name}}</td>
                                    <td>{{$rs->user->email}}</td>
                                    <td>{{$rs->user->phone}}</td>
                                    <td>{{$rs->user->adress}}</td>
                                    <td>{{$rs->orderitem()->count()}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td>{{$rs->created_at}}</td>
                                    <td ><a href="{{ route("user_order_show",['id'=>$rs->id]) }}"
                                           onclick=" return  !window.open(this.href,'targetWindow',
                                               'toolbar=no,location=center,status=no,menubar=no,scrollbars=yes,' +
                                                'resizable=no,width=600,height=500,top=100px,left=100px')"
                                           class="btn-primary " title="Görüntüle"><i class="fa fa-shopping-basket"></i></a>

                                        <a href="{{ route("user_order_destroy",['id'=>$rs->id]) }}"
                                           onclick="return confirm('Are You Sure To Cancel')"
                                           class="btn-danger" style="float: right;" title="Cancel">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection