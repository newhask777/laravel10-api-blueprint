<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/dashboard" class="brand-link">
        <img src="<?php echo e(asset('dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="info">
                <?php if(isset($user->firstname)): ?>
                    <a href=""><?php echo e($user->firstname); ?></a>
                <?php endif; ?>
                <?php if(isset($user->lastname)): ?>
                    <a href=""><?php echo e($user->lastname); ?></a>
                <?php endif; ?>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <?php echo $__env->make('Admin::layouts.parts.menuItems',['items'=>$menu->roots()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?php /**PATH C:\Users\hask777\Desktop\projects\PHP\laravel10-api-passport/resources/views/Admin/layouts/parts/sidebar.blade.php ENDPATH**/ ?>