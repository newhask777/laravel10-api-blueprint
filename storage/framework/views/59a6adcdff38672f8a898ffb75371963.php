<!-- Page header -->
<section class="content-header">
    <h1><?php echo e($title); ?></h1>
</section>
<!-- /page header -->


<!-- Content area -->
<div class="content">

    <!-- Input group addons -->
    <div class="box card">
        <form role="form" enctype="multipart/form-data" method="post" action="<?php echo e(route('roles.update',['role' => $item->id ])); ?>">

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="card-body">

                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php echo csrf_field(); ?>
                <fieldset class="mb-3">
                    <legend class=""><?php echo e(__('Common info')); ?></legend>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2"><?php echo e(__('Title')); ?><span
                                class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                <input type="text" name="title" required class="form-control"
                                       value="<?php echo e($item->title ?? ""); ?>"
                                       placeholder="<?php echo e(__('Title')); ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2"><?php echo e(__('Alias')); ?><span
                                class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                <input type="text" name="alias" class="form-control"
                                       value="<?php echo e($item->alias ?? ""); ?>"
                                       placeholder="<?php echo e(__('Alias')); ?>">
                            </div>
                        </div>
                    </div>


                </fieldset>
                <button type="submit" class="btn btn-success"><?php echo e(__('Submit')); ?></button>


            </div>
        </form>
    </div>
    <!-- /input group addons -->

</div>

<!-- /content area -->
<?php /**PATH C:\Users\hask777\Desktop\projects\PHP\laravel10-api-passport\resources\views/Admin/Role/edit.blade.php ENDPATH**/ ?>