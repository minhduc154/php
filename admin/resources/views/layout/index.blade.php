<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Trang chủ</title>
    
    <base href="{{asset('')}}">

    <!-- Bootstrap -->
    <link href="admin_asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="admin_asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="admin_asset/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="admin_asset/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="admin_asset/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="admin_asset/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="admin_asset/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="admin_asset/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        @include('layout.menu')
        @include('layout.top')
        @yield('content')


        @include('layout.footer')

      </div>
    </div>

    <!-- jQuery -->
    <script src="admin_asset/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="admin_asset/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="admin_asset/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="admin_asset/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="admin_asset/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="admin_asset/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="admin_asset/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="admin_asset/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="admin_asset/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="admin_asset/vendors/Flot/jquery.flot.js"></script>
    <script src="admin_asset/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="admin_asset/vendors/Flot/jquery.flot.time.js"></script>
    <script src="admin_asset/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="admin_asset/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="admin_asset/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="admin_asset/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="admin_asset/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="admin_asset/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="admin_asset/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="admin_asset/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="admin_asset/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="admin_asset/vendors/moment/min/moment.min.js"></script>
    <script src="admin_asset/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="admin_asset/build/js/custom.min.js"></script>
	
  </body>
</html>
