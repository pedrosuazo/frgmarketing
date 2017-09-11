<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

    <!-- App CSS -->
    <link href="<?php echo e(URL::to('assets/css/style.css')); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>


6        <div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-2">
            <div class="jumbotron">
    <div class="row">
            <div class="col-md-8">
                <?php echo $__env->yieldContent('content'); ?>
            </div>

            <div class="col-md-4">
                <img src="images/login_bg.jpg" class="img-responsive" alt="">
            </div>
    </div>
            </div>
        </div>
    </div>
        </div>



</body>
</html>