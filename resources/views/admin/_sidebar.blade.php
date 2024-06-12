<script type="text/javascript">
    try{ace.settings.loadState('main-container')}catch(e){}
</script>

<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
    <script type="text/javascript">
        try{ace.settings.loadState('sidebar')}catch(e){}
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="ace-icon fa fa-signal"></i>
            </button>

            <button class="btn btn-info">
                <i class="ace-icon fa fa-pencil"></i>
            </button>

            <button class="btn btn-warning">
                <i class="ace-icon fa fa-users"></i>
            </button>

            <button class="btn btn-danger">
                <i class="ace-icon fa fa-cogs"></i>
            </button>
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- /.sidebar-shortcuts -->

    <ul class="nav nav-list">
        <li >
            <a href="{{ route("admin_category") }}">
                <i class="menu-icon fa fa-archive"></i>
                <span class="menu-text"> Category </span>
            </a>

            <b class="arrow"></b>
        </li>
        <li>
                    <a href="{{ route("admin_car") }}">
                        <i class="menu-icon fa fa-product-hunt"></i>
                        <span class="menu-text"> Car Panel </span>
                    </a>

                    <b class="arrow"></b>
                </li>
        <li>
        <li>
                    <a href="{{ route("admin_message") }}">
                        <i class="menu-icon fa fa-comment"></i>
                        <span class="menu-text">Contact Messages </span>
                    </a>

                    <b class="arrow"></b>
                </li>
        <li>
        <li>
                    <a href="{{ route("admin_review") }}">
                        <i class="menu-icon fa fa-comments-o"></i>
                        <span class="menu-text">Reviews </span>
                    </a>

                    <b class="arrow"></b>
                </li>
        <li>
        <li>
                    <a href="{{ route("admin_faq") }}">
                        <i class="menu-icon fa fa-question"></i>
                        <span class="menu-text">FAQ </span>
                    </a>

                    <b class="arrow"></b>
                </li>
        <li>
                    <a href="{{ route("admin_setting") }}">
                        <i class="menu-icon fa fa-edit"></i>
                        <span class="menu-text"> Setting </span>
                    </a>

                    <b class="arrow"></b>
                </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-file-o"></i>

                <span class="menu-text">
								Orders

								<span class="badge badge-primary">5</span>
							</span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{{route('admin_order')}}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        All
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="">
                    <a href="{{route('admin_order_new')}}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        New
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{route('admin_order_accepted')}}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Accepted
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{route('admin_order_cancelled')}}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Cancelled
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{route('admin_order_finished')}}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Finished
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{route('admin_order_delayed')}}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Dealyed
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>
