@extends("layouts.admin")
@section("jss")

    <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
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
                        <a href="/admin/car">Cars</a>
                    </li>
                </ul><!-- /.breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
								<span class="input-icon">
									<input type="text"  />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                    </form>
                </div><!-- /.nav-search -->
            </div>

            <div class="page-content">
                <div class="page-header">
                    <h1>
                        Car Add

                    </h1>
                </div><!-- /.page-header -->
                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <form enctype="multipart/form-data" action="{{ route("admin_car_store") }}" method="post" class="form-horizontal">
                            @csrf
                            <div class="control-group">
                                <label class="control-label">Category</label>
                                <div class="controls">
                                    <select name="category_id">
                                        @foreach($category_list as $rs)
                                            <option value="{{ $rs->id }}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Title</label>
                                <div class="controls">
                                    <input required type="text" name="title" class="form-control"  />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Keywords</label>
                                <div class="controls">
                                    <input type="text" name="keywords" class="form-control"  />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Description</label>
                                <div class="controls">
                                    <input type="text" name="description" class="form-control"   />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Quantity</label>
                                <div class="controls">
                                    <input type="number" name="quantity" class="form-control"   />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Model</label>
                                <div class="controls">
                                    <input type="text" name="model" class="form-control"   />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Year</label>
                                <div class="controls">
                                    <input type="number" name="yil" class="form-control"   />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Color</label>
                                <div class="controls">
                                    <input type="text" name="renk" class="form-control"   />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Motor</label>
                                <div class="controls">
                                    <input type="text" name="motor_hacmi" class="form-control"   />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Price</label>
                                <div class="controls">
                                    <input type="number" step="any" name="price" class="form-control"   />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Detail</label>
                                <div class="controls">
                                    <textarea class="form-control"name="detail"  >

                                    </textarea>
                                    <script>
                                        CKEDITOR.replace( 'detail' );
                                    </script>
                                </div>
                            </div>
                            <div class="control-group" >
                                <label class="control-label">Status</label>
                                <div class="controls">
                                    <select name="status" >
                                        <option value="True">True</option>
                                        <option value="False">False</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Image</label>
                                <div class="controls">
                                    <input required name="image" type="file" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Slug</label>
                                <div class="controls">
                                    <input type="text" name="slug" class="form-control"  />
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Add Car</button>
                            </div>
                        </form>
                    </div>
                </div>



            </div>

        </div>
    </div>


@endsection
@section("cs")
    <link rel="stylesheet" href="{{ asset("assets/admin") }}/assets/css/jquery-ui.custom.min.css" />
    <link rel="stylesheet" href="{{ asset("assets/admin") }}/assets/css/chosen.min.css" />
    <link rel="stylesheet" href="{{ asset("assets/admin") }}/assets/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="{{ asset("assets/admin") }}/assets/css/bootstrap-timepicker.min.css" />
    <link rel="stylesheet" href="{{ asset("assets/admin") }}/assets/css/daterangepicker.min.css" />
    <link rel="stylesheet" href="{{ asset("assets/admin") }}/assets/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="{{ asset("assets/admin") }}/assets/css/bootstrap-colorpicker.min.css" />

@endsection
@section("js")


@endsection

