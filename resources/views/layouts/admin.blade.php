<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Rent a Car Admin</title>

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
    @yield("css")
    @yield("jss")
</head>

<body class="no-skin">

<div class="main-container ace-save-state" id="main-container">
@include("admin._header")
@include("admin._sidebar")
@yield("content")
@include("admin._footer")




</div>


<!-- basic scripts -->

<!--[if !IE]> -->
<script src="{{asset("assets/admin")}}/assets/js/jquery-2.1.4.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="{{asset("assets/admin")}}/assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="{{asset("assets/admin")}}/assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="{{asset("assets/admin")}}/assets/js/excanvas.min.js"></script>
<![endif]-->
<script src="{{asset("assets/admin")}}/assets/js/jquery-ui.custom.min.js"></script>
<script src="{{asset("assets/admin")}}/assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="{{asset("assets/admin")}}/assets/js/jquery.easypiechart.min.js"></script>
<script src="{{asset("assets/admin")}}/assets/js/jquery.sparkline.index.min.js"></script>
<script src="{{asset("assets/admin")}}/assets/js/jquery.flot.min.js"></script>
<script src="{{asset("assets/admin")}}/assets/js/jquery.flot.pie.min.js"></script>
<script src="{{asset("assets/admin")}}/assets/js/jquery.flot.resize.min.js"></script>

<!-- ace scripts -->
<script src="{{asset("assets/admin")}}/assets/js/ace-elements.min.js"></script>
<script src="{{asset("assets/admin")}}/assets/js/ace.min.js"></script>

@yield("cs")
@yield("js")
</body>
</html>
