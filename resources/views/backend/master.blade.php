<!DOCTYPE html
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="Vu Quoc Tuan">
    <title>Admin - Khoa Phạm</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('public/admin/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ url('public/admin/css/mystyle.css')}}">
    <!-- MetisMenu CSS -->
   <!--  <link href="{{ url('public/admin/css/metisMenu.min.css') }}" rel="stylesheet"/> -->

    <!-- Custom CSS -->
   <!--  <link href="{{ url('public/admin/css/sb-admin-2.css') }}" rel="stylesheet"/> -->

    <!-- Custom Fonts -->
    <link href="{{ url('public/admin/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- DataTables CSS -->
   <!--  <link href="{{ url('public/admin/css/dataTables.bootstrap.css') }}" rel="stylesheet"/> -->

    <!-- DataTables Responsive CSS -->
<!--     <link href="{{ url('public/admin/css/dataTables.responsive.css') }}" rel="stylesheet"/>
    <link href="{{ url('public/admin/css/responsive.bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ url('public/admin/css/nifty.min.css') }}" rel="stylesheet"/>
    <link href="{{ url('public/admin/css/mystyle.css') }}" rel="stylesheet"/> -->
</head>
<body>
<div class="container">
<div id="wrapper">
    <div class="row">
    <div class="col-xs-3">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-brand">Admin Area - Thuê xe</a>
        </div>
        <!-- /.navbar-header -->

        
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-angle-double-right"></i>List Category</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-double-right"></i>Add Category</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cube fa-fw"></i> Product<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-angle-double-right"></i>List Product</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-angle-double-right"></i>Add Product</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('user.index') }}"><i class="fa fa-angle-double-right"></i>List User</a>
                            </li>
                            <li>
                                <a href="{{ route('user.create') }}"><i class="fa fa-angle-double-right"></i>Add User</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->

    </nav>
    </div>
    
    <!-- Page Content -->
    <div class="col-xs-9">
    <div class="settingBt">

    <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <h2>Tài khoản</h2>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="{{ url('user', Auth::user()->id) }}"><i class="fa fa-user fa-fw"></i>{{ Auth::user()->fullname }}</a>

                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Profiles</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{!! route('logout')!!}"><i class="fa fa-sign-out fa-fw">Logout</i></a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        </div>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
    <div class="col-lg-12">
        @if(Session::has('flash_message'))
            <div class="alert alert-{!! Session::get('flash_level') !!}">
                {!! Session::get('flash_message') !!}
            </div>
        @endif
    </div>
    
    <!-- Page Content -->
        @yield('content')
    <!-- /#page-wrapper -->
   
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
     </div>
     </div> <!-- end row -->
</div>
<!-- /#wrapper -->
</div>  <!-- end container -->
<!-- jQuery -->
<script src="{{ url('public/admin/js/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ url('public/admin/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<!-- <script src="{{ url('public/admin/js/metisMenu.min.js') }}"></script> -->

<!-- Custom Theme JavaScript -->
<!-- <script src="{{ url('public/admin/js/sb-admin-2.js') }}"></script> -->

<!-- DataTables JavaScript -->
<!-- <script src="{{ url('public/admin/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('public/admin/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ url('public/admin/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('public/admin/js/responsive.bootstrap.min.js') }}"></script> -->
<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<!-- myscript -->
<script src="{{ url('public/admin/js/myscript.js') }}"></script>
</body>
</html>