<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App title -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ URL::to('assets/plugins/morris/morris.css') }}">

    <!-- Switchery css -->
    <link href="{{ URL::to('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />

    <!-- App CSS -->
    <link href="{{ URL::to('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- Modernizr js -->
    <script src="{{ URL::to('assets/js/modernizr.min.js') }}"></script>

</head>

<body>

<!-- Navigation Bar-->
@include('inc.topbar')
<!-- //Navigation Bar-->

<div class="wrapper">
    <div class="container">
    @yield('content')


        <!-- Footer -->
@include('inc.footer')
        <!-- End Footer -->


    </div>

    <!-- Right Sidebar -->
@include('inc.right_side_bar')
    <!-- /Right-bar -->

</div>



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ URL::to('assets/js/jquery.min.js') }}"></script>
        <script src="{{ URL::to('assets/js/tether.min.js') }}"></script><!-- Tether for Bootstrap -->
        <script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::to('assets/js/waves.js') }}"></script>
        <script src="{{ URL::to('assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ URL::to('assets/plugins/switchery/switchery.min.js') }}"></script>

        <!--Morris Chart-->
        <script src="{{ URL::to('assets/plugins/morris/morris.min.js') }}"></script>
        <script src="{{ URL::to('assets/plugins/raphael/raphael-min.js') }}"></script>

        <!-- Counter Up  -->
        <script src="{{ URL::to('assets/plugins/waypoints/lib/jquery.waypoints.js') }}"></script>
        <script src="{{ URL::to('assets/plugins/counterup/jquery.counterup.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ URL::to('assets/js/jquery.core.js') }}"></script>
        <script src="{{ URL::to('assets/js/jquery.app.js') }}"></script>

        <!-- Page specific js -->
        <script src="{{ URL::to('assets/pages/jquery.dashboard.js') }}"></script>
</body>
</html>
