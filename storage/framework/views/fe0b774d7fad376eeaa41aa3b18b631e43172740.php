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
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?php echo e(URL::to('assets/plugins/morris/morris.css')); ?>">

    <!-- Switchery css -->
    <link href="<?php echo e(URL::to('assets/plugins/switchery/switchery.min.css')); ?>" rel="stylesheet" />

    <!--calendar css-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.css" rel="stylesheet" />

    <!-- App CSS -->
    <link href="<?php echo e(URL::to('assets/css/style.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- Modernizr js -->
    <script src="<?php echo e(URL::to('assets/js/modernizr.min.js')); ?>"></script>

</head>

<body>

<!-- Navigation Bar-->
<?php echo $__env->make('inc.topbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- //Navigation Bar-->

<div class="wrapper">
    <div class="container">
    <?php echo $__env->yieldContent('content'); ?>


        <!-- Footer -->
<?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- End Footer -->


    </div>

    <!-- Right Sidebar -->
<?php echo $__env->make('inc.right_side_bar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- /Right-bar -->

</div>



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo e(URL::to('assets/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('assets/js/tether.min.js')); ?>"></script><!-- Tether for Bootstrap -->
        <script src="<?php echo e(URL::to('assets/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(URL::to('assets/js/waves.js')); ?>"></script>
        <script src="<?php echo e(URL::to('assets/js/jquery.nicescroll.js')); ?>"></script>
        <script src="<?php echo e(URL::to('assets/plugins/switchery/switchery.min.js')); ?>"></script>

        <!--Morris Chart-->
        
        

        <!-- Counter Up  -->
        
        

        <!-- App js -->
        <script src="<?php echo e(URL::to('assets/js/jquery.core.js')); ?>"></script>
        <script src="<?php echo e(URL::to('assets/js/jquery.app.js')); ?>"></script>

<!-- BEGIN PAGE SCRIPTS -->
<script src="<?php echo e(URL::to('assets/plugins/moment/moment.js')); ?>"></script>
<script src="<?php echo e(URL::to('assets/plugins/fullcalendar/3.4/fullcalendar.min.js')); ?>"></script>
<script src="<?php echo e(URL::to('assets/pages/jquery.dashboardcalendar.js')); ?>"></script>


        <!-- Page specific js -->
        <script src="<?php echo e(URL::to('assets/pages/jquery.dashboard.js')); ?>"></script>
</body>
</html>
