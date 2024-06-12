@extends("layouts.admin")
@section("css")
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" />

@endsection
@section("content")
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="/admin">Home</a>
                    </li>

                    <li>
                        <a href="/admin/user">Users</a>
                    </li>
                </ul><!-- /.breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                    </form>
                </div><!-- /.nav-search -->
            </div>

            <div class="page-content">
                <div class="page-header">
                    <h1>
                        User Panel
                    </h1>
                </div><!-- /.page-header -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-12">


                                <div class="table-header">
                                    User List
                                </div>

                                <!-- div.table-responsive -->

                                <!-- div.dataTables_borderWrap -->
                                <div>
                                    <table  id="datatable" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Adress</th>
                                            <th>Roles</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($datalist as $rs)
                                            <tr class="gradeX">
                                                <td>{{$rs->id}}</td>
                                                <td>@if($rs->profile_photo_path)
                                                        <img style="width:60px; height:60px;border:1px solid black;border-radius: 4px;" src="{{Storage::url($rs->profile_photo_path)}}">
                                                    @endif
                                                </td>
                                                <td>{{$rs->name}}</td>
                                                <td>{{$rs->email}}</td>
                                                <td>{{$rs->phone}}</td>
                                                <td>{{$rs->adress}}</td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            @foreach($rs->roles as $rl)
                                                                <td >{{$rl->name}}</td>

                                                            @endforeach
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" style="text-align: center">
                                                                <a href="{{ route("admin_user_role_edit",['user_id'=>$rs->id]) }}"
                                                                   onclick=" return  !window.open(this.href,'targetWindow',
                                               'toolbar=no,location=center,status=no,menubar=no,scrollbars=yes,' +
                                                'resizable=no,width=600,height=400,top=200px,left=300px')" >
                                                                    <i class="fa fa-plus"></i></a> </td>
                                                        </tr>
                                                    </table>

                                                </td>
                                                <td style="width:150px;">
                                                    <a href="{{ route("admin_user_edit",['id'=>$rs->id]) }}"
                                                       onclick=" return  !window.open(this.href,'targetWindow',
                                               'toolbar=no,location=center,status=no,menubar=no,scrollbars=yes,' +
                                                'resizable=no,width=600,height=500,top=100px,left=100px')" class="btn btn-primary btn-mini">Edit</a>
                                                    <a href="{{ route("admin_user_destroy",['id'=>$rs->id]) }}" onclick="return confirm('Are You Sure To Delete')" class="btn btn-danger btn-mini" style="float: right;">Delete</a>
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

            </div>

        </div>
    </div>


@endsection
@section("cs")
@endsection
@section("js")

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').dataTable({});
        });
    </script>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js" type="text/javascript"></script>
@endsection

