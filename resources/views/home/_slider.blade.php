
<!-- Main Slider Start -->
<div class="header">
    <div class="container-fluid">
        <div class="row">
            @include("home._category")
            <div class="col-md-6">
                <div class="header-slider normal-slider">
                    @foreach($slider as $rs)
                    <div class="header-slider-item">
                        <img height="300px" src="{{Storage::url($rs->image)}}" alt="Slider Image" />
                        <div class="header-slider-caption">
                            <p>{{$rs->title}}</p>
                            <a class="btn" href="{{ route('product_detail',['id'=>$rs->id ,'slug'=>$rs->slug])}}">Detaylı Bak</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Slider End -->
