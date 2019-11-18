<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>EOMS</title>

    <!-- Bootstrap -->

    <link href="{{ asset('gentel/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href=" {{ asset('gentel/font-awesome/css/font-awesome.min.css')}} " rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('gentel/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('gentel/iCheck/skins/flat/green.css')}} " rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('gentel/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('gentel/jqvmap/dist/jqvmap.min.css')}} " rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('gentel/bootstrap-daterangepicker/daterangepicker.css')}} " rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('gentel/css/custom.min.css')}} " rel="stylesheet">
</head>

<body class="nav-md" >
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">

            @include('staff.staff-leftnav')

        </div>

        <!-- top navigation -->
        <div class="top_nav">

            @include('staff.staff-topnav')

        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

            @yield('staff-content')

        </div>

        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right"style="color: #1b4b72">
                ECHASE Online Management System  <a href="#">EOMS</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>
</body>
<!-- jQuery -->
<script src="{{asset('gentel/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('gentel/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('gentel/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('gentel/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{asset('gentel/Chart.js/dist/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{asset('gentel/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{asset('gentel/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('gentel/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{asset('gentel/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{asset('gentel/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('gentel/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('gentel/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('gentel/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{asset('gentel/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{asset('gentel/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('gentel/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{asset('gentel/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{asset('gentel/DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('gentel/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{asset('gentel/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('gentel/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('gentel/moment/min/moment.min.js')}}"></script>
<script src="{{asset('gentel/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{('gentel/js/custom.min.js')}}"></script>

</body>
</html>


