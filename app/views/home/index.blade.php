<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">



    <title>Sistem Informasi Rumah Susun Sederhawa Sewa Gunung Sari Surabaya</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('packages/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('packages/css/plugins/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
    <!--Datepicker -->
    <link href="{{ asset('packages/js/datepicker/css/datepicker.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('packages/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('datetime/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="{{ asset('packages/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color:rgba(76, 155, 22, 0.5);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{ URL::to('home/pilihan') }}">Rusunawa Gunung Sari Surabaya</a>
</div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">

<!-- /.dropdown -->
@if(Sentry::check())
<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        {{$nama->nama}}  <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
    </a>
    <ul class="dropdown-menu dropdown-user">

        <li><a href="{{ URL::to('penghuni/'.Sentry::getUser()->id)}}"><i class="fa fa-user fa-fw"></i> User Profile</a>
        </li>
        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
        </li>
        <li class="divider"></li>
        <li><a href="{{URL::to('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
        </li>

    </ul>
    <!-- /.dropdown-user -->
</li>
@endif
<!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->

<div class="navbar-default sidebar" role="navigation" style="">
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
                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Home</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Fasilitas<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="flot.html">Flot Charts</a>
                    </li>
                    <li>
                        <a href="morris.html">Morris.js Charts</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Lokasi</a>
            </li>
            <li>
                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Informasi Harga Sewa</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> Hubungi Kami<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="panels-wells.html">Panels and Wells</a>
                    </li>
                    <li>
                        <a href="buttons.html">Buttons</a>
                    </li>
                    <li>
                        <a href="notifications.html">Notifications</a>
                    </li>
                    <li>
                        <a href="typography.html">Typography</a>
                    </li>
                    <li>
                        <a href="icons.html"> Icons</a>
                    </li>
                    <li>
                        <a href="grid.html">Grid</a>
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

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                @yield('content')
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
    <div id="footer" class="section footer">
        <div class="container" style="padding-top: 10px; padding-bottom: 15px;">

            <div class="row align-center copyright" style="text-align: center">
                <div class="col-sm-12"><p>Copyright &copy; {{date("Y")}} Rusunawa - by  Dinas PU Cipta Karya Dan Tata Ruang</p></div>
            </div>
        </div>

    </div>

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{ asset('packages/js/jquery.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('packages/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('packages/js/collapse.js') }}"></script>
<script src="{{ asset('packages/js/moment.js') }}"></script>
<script src="{{ asset('packages/js/transition.js') }}"></script>
<script src="{{ asset('datetime/js/bootstrap-datetimepicker.js') }}"></script>
<script src="{{ asset('datetime/js/locales/bootstrap-datetimepicker.fr.js') }}"></script>


<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('packages/js/plugins/metisMenu/metisMenu.min.js') }}"></script>
<!--Datepicker -->
<link href="{{ asset('packages/js/datepicker/js/bootstrap-datepicker.js') }}" rel="stylesheet">
<!-- Custom Theme JavaScript -->
<script src="{{ asset('packages/js/sb-admin-2.js') }}"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
</script>


<script type="text/javascript">
    $(document).ready(function () {
        $("#datepicker").datepicker();
    });
</script>
</body>

</html>
