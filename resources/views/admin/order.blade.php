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
                        <a href="/admin/message">Borrows</a>
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
                        Borrows Panel
                    </h1>
                </div><!-- /.page-header -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-12">


                                <div class="table-header">
                                    {{$table_name}} Borrows
                                </div>

                                <!-- div.table-responsive -->

                                <!-- div.dataTables_borderWrap -->
                                <div>
                                    <table  id="datatable" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Adress</th>
                                            <th>Total Books</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($datalist as $rs)
                                            <tr>
                                                <td>{{$rs->id}}</td>
                                                <td>{{$rs->user->name}}</td>
                                                <td>{{$rs->user->email}}</td>
                                                <td>{{$rs->user->phone}}</td>
                                                <td>{{$rs->user->adress}}</td>
                                                <td>{{$rs->orderitem()->count()}}</td>
                                                <td>{{$rs->status}}</td>
                                                <td>{{$rs->created_at}}</td>
                                                <td ><a href="{{ route("admin_order_show",['id'=>$rs->id]) }}"
                                                        onclick=" return  !window.open(this.href,'targetWindow',
                                               'toolbar=no,location=center,status=no,menubar=no,scrollbars=yes,' +
                                                'resizable=no,width=700,height=500,top=100px,left=100px')"
                                                        class="btn-primary " title="Görüntüle"><i class="fa fa-shopping-basket"></i></a>

                                                    <a href="{{ route("admin_order_destroy",['id'=>$rs->id]) }}"
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

