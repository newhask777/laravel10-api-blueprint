<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome-free/css/all.min.css')); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/adminlte.min.css')); ?>">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    <?php echo $__env->yieldContent('header'); ?>

    <?php echo $__env->yieldContent('navigation'); ?>
</div>


<div class="page-content">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <?php echo $__env->yieldContent('content'); ?>

    </div>
    <!-- /.content-wrapper -->
</div>

<?php echo $__env->yieldContent('footer'); ?>

<!-- jQuery -->
<script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

<!-- daterangepicker -->
<script src="<?php echo e(asset('plugins/moment/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/daterangepicker/daterangepicker.js')); ?>"></script>

<!-- Summernote -->
<script src="<?php echo e(asset('plugins/summernote/summernote-bs4.min.js')); ?>"></script>

<!-- AdminLTE App -->
<script src="<?php echo e(asset('dist/js/adminlte.js')); ?>"></script>



</body>
</html>
<?php /**PATH C:\Users\hask777\Desktop\projects\PHP\laravel10-api-passport/resources/views/Admin/layouts/layout.blade.php ENDPATH**/ ?>