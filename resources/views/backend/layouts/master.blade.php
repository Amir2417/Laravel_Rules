<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield("title","Admin Dashboard")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('backend/assets/images/icon/favicon.ico') }}">
    {{-- All the Css  --}}
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/slicknav.min.css/') }}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/default-css.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/responsive.css') }}">
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- modernizr css -->
    <script src="{{ asset('backend/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        @include("backend.layouts.partials.sidebar")

        <div class="main-content">
           @include("backend.layouts.partials.header")

            @yield("admin_content")
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        @include("backend.layouts.partials.footer")
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->

    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="{{ asset('backend/assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('backend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="{{ asset('backend/assets/js/line-chart.js') }}"></script>
    <!-- all pie chart -->
    <script src="{{ asset('backend/assets/js/pie-chart.js') }}"></script>
    <!-- others plugins -->
    <script src="{{ asset('backend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('backend/assets/js/scripts.js') }}"></script>
    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

    <!-- others plugins -->
    <script src="{{ asset('backend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('backend/assets/js/scripts.js') }}"></script>
</body>

</html>
