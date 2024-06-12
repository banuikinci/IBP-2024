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
                        <a href="/admin/faq">Faq</a>
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
                        FAQ Panel
                        @include("home.message")
                    </h1>
                </div><!-- /.page-header -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-12">


                                <div class="table-header">
                                    FAQ List
                                    <a href="{{route("admin_faq_create")}}" class="btn btn-success" style="margin:5px;"> FAQ Add</a>

                                </div>

                                <!-- div.table-responsive -->

                                <!-- div.dataTables_borderWrap -->
                                <div>
                                    <table  id="datatable" class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Question</th>
                                            <th>Answer</th>
                                            <th>Position</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($datalist as $rs)
                                            <tr class="gradeX">
                                                <td>{{$rs->id}}</td>
                                                <td>{{$rs->question}}</td>
                                                <td>{{$rs->answer}}</td>
                                                <td>{{$rs->position}}</td>
                                                <td>{{$rs->status}}</td>
                                                <td style="width:180px;">
                                                    <a href="{{ route("admin_faq_edit",['id'=>$rs->id]) }}" class="btn btn-primary btn-mini">Edit</a>
                                                    <a href="{{ route("admin_faq_destroy",['id'=>$rs->id]) }}" onclick="return confirm('Are You Sure To Delete')" class="btn btn-danger btn-mini" style="float: right;">Delete</a>
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

