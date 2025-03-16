<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="nav-item">
        <a href="<?php echo e($item->url()); ?>" class="nav-link">
            <p>
                <?php echo e($item->title); ?>

            </p>
            <?php if($item->hasChildren()): ?>
                <i class="fas fa-angle-left right"></i>
            <?php endif; ?>
        </a>
        <?php if($item->hasChildren()): ?>
            <ul class="nav nav-treeview" style="margin-left: 10px">
                <?php echo $__env->make('Admin::layouts.parts.menuItems',['items'=>$item->children()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </ul>
        <?php endif; ?>
    </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\Users\hask777\Desktop\projects\PHP\laravel10-api-passport/resources/views/Admin/layouts/parts/menuItems.blade.php ENDPATH**/ ?>