<!-- Page header -->
<section class="content-header">
    <h1><?php echo e($title); ?></h1>
</section>
<!-- /page header -->

<!-- Content area -->
<div class="content">
    <!-- Hover rows -->
    <div class="card">
        <form class="table-responsive"  enctype="multipart/form-data" method="post" action="<?php echo e(route('permissions.store')); ?>">

            <?php echo csrf_field(); ?>
            <?php if($perms): ?>
                <table class="table table-hover">
                    <thead>
                    <th><?php echo e(__('Permissions')); ?></th>
                    <?php if(!$roles->isEmpty()): ?>
                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <th><?php echo e($item->title); ?></th>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    </thead>
                    <tbody>
                    <?php if(!$perms->isEmpty()): ?>
                        <?php $__currentLoopData = $perms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($val->title); ?></td>
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td>
                                        <label class="checkbox-label">
                                            <?php if($role->hasPermission($val->alias)): ?>
                                                <input checked name="<?php echo e($role->id); ?>[]" type="checkbox"
                                                       class="checkbox-input" value="<?php echo e($val->id); ?>">
                                            <?php else: ?>
                                                <input class="checkbox-input" name="<?php echo e($role->id); ?>[]" type="checkbox"
                                                       value="<?php echo e($val->id); ?>">
                                            <?php endif; ?>
                                            <span></span>
                                        </label>
                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    </tbody>
                </table>
                <div>
                </div>

                <button type="submit" class="btn btn-success"><?php echo e(__('Submit')); ?></button>

        </form>
        <?php endif; ?>
    </div>
</div>
<!-- /hover rows -->

</div>
<!-- /content area -->
<?php /**PATH C:\Users\hask777\Desktop\projects\PHP\laravel10-api-passport/resources/views/Admin/Permission/index.blade.php ENDPATH**/ ?>