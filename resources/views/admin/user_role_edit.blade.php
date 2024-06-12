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
<div class="col-lg-12" >
    <h3>User Role Panel</h3>
<table class="table table-bordered data-table">
    <tr>
        <td>ID</td>
        <td>{{ $data->id }}</td>
    </tr>
    <tr>
        <td>Name</td>
        <td>{{ $data->name }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{ $data->email }}</td>
    </tr>
    <div class="control-group">
        <div class="controls">
            <table>
                <tr>
                    <td style="text-align: center" colspan="2">Roles</td>
                </tr>
                @foreach($data->roles as $rl)
                    <tr>
                        <td style="width:200px;">{{$rl->name}}</td>
                        <td><a href="{{ route("admin_user_role_delete",['user_id'=>$data->id,'role_id'=>$rl->id]) }}"
                               onclick="return confirm('Are You Sure To Delete')"><i class="fa fa-remove"></i></a></td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>
    <form action="{{ route('admin_user_role_add',['user_id'=>$data->id]) }}" method="post">
        @csrf
        <select  class="form-control"  name="role_id" id="">
            @foreach($datalist as $rl)
                @if(!$data->roles->pluck('name')->contains($rl->name))
                    <option value="{{$rl->id}}">{{$rl->name}}</option>

                @else
                    <option disabled value="{{$rl->id}}">{{$rl->name}}</option>
                @endif
            @endforeach
        </select><br>
        <button class="btn btn-success">Add Role</button>
    </form>
</table>
</div>