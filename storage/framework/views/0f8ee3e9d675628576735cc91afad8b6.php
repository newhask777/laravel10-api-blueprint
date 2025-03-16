<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('Admin::layouts.parts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navigation'); ?>
    <?php echo $sidebar; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $content; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('Admin::layouts.parts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin::layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hask777\Desktop\projects\PHP\laravel10-api-passport/resources/views/Admin/Dashboard/dashboard.blade.php ENDPATH**/ ?>