<?php $__env->startSection('content'); ?>

    <div class="content d-flex justify-content-center align-items-center">

        <!-- Login form -->
        <form method="POST" class="login-form" action="<?php echo e(route('login.post')); ?>">
            <?php echo csrf_field(); ?>
            <div class="card mb-0">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                        <h5 class="mb-0"><?php echo e(__('public.login_title')); ?></h5>
                        <span class="d-block text-muted">Enter your credentials below</span>
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <input id="email" type="email"
                               class="form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                               placeholder="<?php echo e(__('E-Mail Address')); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                        <div class="form-control-feedback">
                            <i class="icon-user text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <input id="password" type="password"
                               class="form-control <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                               name="password" placeholder="<?php echo e(__('Password')); ?>" required>
                        <div class="form-control-feedback">
                            <i class="icon-lock2 text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            <?php echo e(__('Login')); ?><i class="icon-circle-right2 ml-2"></i>
                        </button>
                    </div>

                </div>
            </div>
        </form>
        <!-- /login form -->

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Pub::layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hask777\Desktop\projects\PHP\laravel10-api-passport/resources/views/Pub/Auth/login.blade.php ENDPATH**/ ?>