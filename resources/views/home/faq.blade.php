@extends('layouts.home')

@section('title',"Sık Sorulan Sorular")
@section('keywords',"Sık Sorulan Sorular")
@section('description',"Sık Sorulan Sorular")
@section('content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Sık Sorulan Sorular</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Contact Start -->
    <div class="contact">
        <div class="container-fluid">
            <div class="row">
                @foreach($data as $rs)
                    <button class="accordionn">{{$rs->question}}</button>
                    <div class="panel">
                        <p>
                            {{$rs->answer}}
                        </p>
                    </div>
                @endforeach



                <script>
                    var acc = document.getElementsByClassName("accordionn");
                    var i;

                    for (i = 0; i < acc.length; i++) {
                        acc[i].addEventListener("click", function() {
                            this.classList.toggle("activee");
                            var panel = this.nextElementSibling;
                            if (panel.style.display === "block") {
                                panel.style.display = "none";
                            } else {
                                panel.style.display = "block";
                            }
                        });
                    }
                </script>
            </div>
        </div>
    </div>




@endsection
@section("js")
    <style>
        .accordionn {
            background-color: #222;
            color: #fff;
            cursor: pointer;
            padding: 8px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .activee, .accordionn:hover {
            background-color: skyblue;
            color: black;
        }

        .panel {
            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
        }
    </style>
@endsection