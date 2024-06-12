<meta name="description" content="overview &amp; stats" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

<!-- bootstrap & fontawesome -->
<link rel="stylesheet" href="{{asset("assets/admin")}}/assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="{{asset("assets/admin")}}/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

<!-- page specific plugin styles -->

<!-- text fonts -->
<link rel="stylesheet" href="{{asset("assets/admin")}}/assets/css/fonts.googleapis.com.css" />

<!-- ace styles -->
<link rel="stylesheet" href="{{asset("assets/admin")}}/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

<!--[if lte IE 9]>
    <link rel="stylesheet" href="{{asset("assets/admin")}}/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
<link rel="stylesheet" href="{{asset("assets/admin")}}/assets/css/ace-skins.min.css" />
<link rel="stylesheet" href="{{asset("assets/admin")}}/assets/css/ace-rtl.min.css" />

<!--[if lte IE 9]>
    <link rel="stylesheet" href="{{asset("assets/admin")}}/assets/css/ace-ie.min.css" />
    <![endif]-->

<!-- inline styles related to this page -->

<!-- ace settings handler -->
<script src="{{asset("assets/admin")}}/assets/js/ace-extra.min.js"></script>

<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

<!--[if lte IE 8]>
    <script src="{{asset("assets/admin")}}/assets/js/html5shiv.min.js"></script>
    <script src="{{asset("assets/admin")}}/assets/js/respond.min.js"></script>
    <![endif]-->
@include("home.message")
<h3 style="margin: 10px;text-align: center;">Order Detail</h3>
<form style="margin:20px;" enctype="multipart/form-data" action="{{ route('admin_order_update',['id'=>$data->id]) }}" method="post" class="form-horizontal">
    @csrf
    <div class="control-group">
        <label class="control-label">Name</label>
        <div class="controls">
            <input value="{{ $data->name }}"  type="text" disabled class="form-control" placeholder="Name" />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Email</label>
        <div class="controls">
            <input  value="{{ $data->email }}" type="text" disabled class="form-control" placeholder="email"  />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Phone</label>
        <div class="controls">
            <input  value="{{ $data->phone }}" type="text" disabled class="form-control" placeholder="phone"  />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Adress</label>
        <div class="controls">
            <input  value="{{ $data->adress }}" type="text" disabled class="form-control" placeholder="Adress"  />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Note</label>
        <div class="controls">
            <input  value="{{ $data->note }}" type="text" name="note" class="form-control" placeholder="note"  />
        </div>
    </div>
    <div class="control-group" >
        <label class="control-label">Status</label>
        <div class="controls">
            <select class="form-control" name="status" >
                <option value="Accepted">Accepted</option>
                <option value="Cancelled">Cancelled</option>
                <option value="Finished">Finished</option>
                <option value="Delayed">Delayed</option>
                @if($data->status=="New")
                    <option selected value="New">New</option>
                @else
                    <option value="New">New</option>
                @endif
            </select>
        </div>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-success">Update Order</button>
    </div>


</form>

<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="thead-dark">
        <tr>
            <th>Araba</th>
            <th>Resim</th>
            <th>Süre </th>
            <th>Süre Bitiş</th>
            <th>Tarih</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data->orderitem()->get() as $rs)
            <tr>
                <td>{{$rs->product->title}}</td>
                <td><img width="80px" height="80px"
                         src="{{Storage::url($rs->product->image) }}"
                         alt="Image"></td>
                <td>{{$rs->time}}</td>
                <td>{{$rs->created_at->addDays($rs->time)->format("Y/m/d")}}</td>
                <td>{{$rs->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>