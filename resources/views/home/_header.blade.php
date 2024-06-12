@php
    $setting=\App\Http\Controllers\HomeController::settinglist();
    $sepet=\App\Http\Controllers\HomeController::countsepet();
@endphp
<!-- Top bar Start -->
<div class="top-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <i class="fa fa-envelope"></i>
                {{$setting->email}}
            </div>
            <div class="col-sm-6">
                <i class="fa fa-phone-alt"></i>
                {{$setting->phone}}
            </div>
        </div>
    </div>
</div>
<!-- Top bar End -->

<!-- Nav Bar Start -->
<div class="nav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="/" class="nav-item nav-link active">Ana Sayfa</a>
                    <a href="/aboutus" class="nav-item nav-link">HAKKIMIZDA</a>
                    <a href="/contact" class="nav-item nav-link">İLETİŞİM</a>
                    <a href="/faq" class="nav-item nav-link">SSS</a>

                </div>
                @auth
                <div class="navbar-nav ml-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Hesap</a>
                        <div class="dropdown-menu">
                            <a href="{{ route("profile.show") }}" class="dropdown-item">Profil</a>
                            <a href="{{route("user_order")}}" class="dropdown-item">Arabalarım</a>
                            <a href="{{route("user_shopcart")}}" class="dropdown-item">Sepetim</a>
                            <a href="{{route("myreview")}}" class="dropdown-item">Yorumlarım</a>
                            <a href="{{route("user_logout")}}" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
                @endauth
                @guest
                    <div class="navbar-nav ml-auto">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Login</a>
                            <div class="dropdown-menu">
                                <a href="/login" class="dropdown-item">Login</a>
                                <a href="/register" class="dropdown-item">Register</a>
                            </div>
                        </div>
                    </div>
                @endguest
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->

<!-- Bottom Bar Start -->
<div class="bottom-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="logo">
                    <a href="/">
                        <img src="{{Storage::url($setting->logo)}}" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="search">
                    <form action="{{ route('getproduct') }}" method="post">
                        @csrf
                        @livewire('search')
                        <button type="submit"><span class="fa fa-search"></span></button>
                    </form>
                    @livewireScripts
                </div>
            </div>
            <div class="col-md-3">
                @auth
                <div class="user">
                    <a href="{{route('user_shopcart')}}" class="btn cart">
                        <i class="fa fa-shopping-cart"></i>
                        <span>({{$sepet}})</span>
                    </a>
                </div>
                @endauth
            </div>
        </div>
    </div>
</div>
@include("home.message")
<!-- Bottom Bar End -->
