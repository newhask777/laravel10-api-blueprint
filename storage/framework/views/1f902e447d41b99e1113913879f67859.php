<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome-free/css/all.min.css')); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/adminlte.min.css')); ?>">

</head>
<body class="hold-transition sidebar-mini layout-fixed">

    <div class="page-content">

        <!-- Content Wrapper. Contains page content -->
        <div class="wrapper">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- /.content-wrapper -->
        <?php echo $__env->make('Pub::layouts.parts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>

</body>
</html>

<?php /**PATH C:\Users\hask777\Desktop\projects\PHP\laravel10-api-passport/resources/views/Pub/layouts/layout.blade.php ENDPATH**/ ?>