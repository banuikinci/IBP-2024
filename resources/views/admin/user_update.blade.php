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
<h3 style="margin: 10px;text-align: center;">User Detail</h3>
<form style="margin:20px;" enctype="multipart/form-data" action="{{ route('admin_user_update',['id'=>$data->id]) }}" method="post" class="form-horizontal">
    @csrf
    <div class="control-group">
        <label class="control-label">Name</label>
        <div class="controls">
            <input value="{{$data->name}}" required type="text" name="name" class="form-control" placeholder="Name" />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Email</label>
        <div class="controls">
            <input required value="{{$data->email}}" type="text" name="email" class="form-control" placeholder="Email" />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Phone</label>
        <div class="controls">
            <input value="{{$data->phone}}" type="text" name="phone" class="form-control" placeholder="Phone"  />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Adress</label>
        <div class="controls">

            <input value="{{$data->adress}}" type="text" name="adress" class="form-control" placeholder="Adress"  />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Image</label>
        <div class="controls">
            <input  name="profile_photo_path" class="form-control" type="file" />
        </div>
        <div class="controls">
            @if($data->profile_photo_path)
                <img width="150px" style="margin:10px;" src="{{ Storage::url($data->profile_photo_path) }}" alt="">
            @endif
        </div>
    </div>
    <div class="control-group">
        <label class="control-label"><b>Roles</b></label>
        <div class="controls">
            <table>
                @foreach($data->roles as $rl)
                    <tr>
                        <td>{{$rl->name}}</td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>
    <br>
    <div class="form-actions">
        <button style="margin-bottom:10px;" type="submit" class="btn btn-success">User Update</button>
    </div>
</form>

