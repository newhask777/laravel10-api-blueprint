<!-- Page header -->
<section class="content-header">
    <h1><?php echo e($title); ?></h1>
    <a href="<?php echo e(route('users.create')); ?>" class="btn btn-success"><?php echo e(__('Create')); ?></a>

</section>
<!-- /page header -->

<!-- Content area -->
<div class="content">
    <!-- Hover rows -->

    <form action="<?php echo e(route('users.index')); ?>">
        <div class="form-group row">
            <div class="col-lg-2">
                <div class="input-group">
                    <input type="text" name="search"  class="form-control"
                           value="<?php echo e($search ?? old('firstname')); ?>"
                           placeholder="<?php echo e(__('User name')); ?>">
                </div>
            </div>

            <?php if($roles): ?>
                <div class="col-lg-2">
                    <div class="input-group">
                        <select name="role" class="form-control multiselect"  data-fouc>
                            <option  value=""><?php echo e(__('User role')); ?></option>
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option
                                    <?php if(isset($roleId) && $roleId == $role->id): ?>
                                        selected
                                    <?php endif; ?>
                                    value="<?php echo e($role->id); ?>"><?php echo e($role->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            <?php endif; ?>

            <div class="col-lg-2">
                <div class="input-group">
                    <button type="submit"
                            class="btn bg-transparent border-teal text-teal border-2 btn-icon mr-3"><?php echo e(__('Filter')); ?></button>
                    <a href="<?php echo e(route('users.index')); ?>" id="users_page_search_clear"
                       class="btn"><?php echo e(__('Clear')); ?></a>
                </div>
            </div>
        </div>
    </form>



    <div class="card">
        <div class="table-responsive">
            <?php if($items): ?>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th><?php echo e(__('ID')); ?></th>
                        <th><?php echo e(__('Fullname')); ?></th>
                        <th><?php echo e(__('email')); ?></th>
                        <th><?php echo e(__('status')); ?></th>
                        <th><?php echo e(__('Actions')); ?></th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($item->id); ?></td>
                            <td><?php echo e($item->fullname); ?></td>
                            <td><?php echo e($item->email); ?></td>
                            <td><?php echo e($item->status); ?></td>
                            <td>
                                <div class="row">
                                    <a href="<?php echo e(route('users.edit',['user'=>$item->id])); ?>"
                                       class="btn btn-primary btn-labeled"><?php echo e(__('Edit')); ?>

                                    </a>
                                    &nbsp;
                                    <form method="post"  action="<?php echo e(route('users.delete',['user'=>$item->id])); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button  type="submit" class="btn btn-danger"><?php echo e(__('Delete')); ?>

                                        </button>
                                    </form>
                                </div>
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
<?php /**PATH C:\Users\hask777\Desktop\projects\PHP\laravel10-api-passport/resources/views/Admin/User/index.blade.php ENDPATH**/ ?>