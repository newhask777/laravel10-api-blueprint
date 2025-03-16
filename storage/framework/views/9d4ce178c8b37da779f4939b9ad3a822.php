<!-- Page header -->
<section class="content-header">
    <h1><?php echo e($title); ?></h1>
    <a href="<?php echo e(route('roles.create')); ?>" class="btn btn-success"><?php echo e(__('Create')); ?></a>

</section>
<!-- /page header -->

<!-- Content area -->
<div class="content">
    <!-- Hover rows -->
    <div class="card">
        <div class="table-responsive">
            <?php if($roles): ?>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th><?php echo e(__('ID')); ?></th>
                        <th><?php echo e(__('Title')); ?></th>
                        <th><?php echo e(__('Alias')); ?></th>
                        <th><?php echo e(__('Actions')); ?></th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($role->id); ?></td>
                            <td><?php echo e($role->title); ?></td>
                            <td><?php echo e($role->alias); ?></td>
                            <td>
                                <a href="<?php echo e(route('roles.edit',['role'=>$role->id])); ?>"
                                   class="btn btn-primary btn-labeled"><?php echo e(__('Edit')); ?>

                                </a>


                                <form method="post"  action="<?php echo e(route('roles.delete',['role'=>$role->id])); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button  type="submit" class="btn btn-danger"><?php echo e(__('Delete')); ?>

                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <div style="display:none">
                        <form method="post" id="contact-applications-delete" action="">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                        </form>
                    </div>

                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
    <!-- /hover rows -->

</div>
<!-- /content area -->
<?php /**PATH C:\Users\hask777\Desktop\projects\PHP\laravel10-api-passport\resources\views/Admin/Role/index.blade.php ENDPATH**/ ?>