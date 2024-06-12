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
<h3 style="margin: 10px;text-align: center;">Message Detail</h3>
<form style="margin:20px;" enctype="multipart/form-data" action="{{ route('admin_message_update',['id'=>$data->id]) }}" method="post" class="form-horizontal">
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
        <label class="control-label">Subject</label>
        <div class="controls">
            <input  value="{{ $data->subject }}" type="text" disabled class="form-control" placeholder="subject"  />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">IP Adress</label>
        <div class="controls">
            <input  value="{{ $data->ip }}" type="text" disabled class="form-control" placeholder="ip adress"  />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Message</label>
        <div class="controls">
            <textarea disabled class="form-control"  > {{ $data->message }}
            </textarea>
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
                <option value="Read">Read</option>
                @if($data->status=="New")
                    <option selected value="New">New</option>
                @else
                    <option value="New">New</option>
                @endif
            </select>
        </div>
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-success">Update</button>
    </div>


</form>