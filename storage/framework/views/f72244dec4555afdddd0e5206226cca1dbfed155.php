
<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($e->Tovar); ?>

<?php echo e($e->Price); ?>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<a href="#">Где нас найти?</a>
<a href="#">О нас</a>
<a href="#">Товары</a>
    <img class="content-image" src="<?php echo e($e->img); ?>" draggable="false"/>   </div>
  <div class="after">
    <img class="content-image"src="<?php echo e($e->Terraria); ?>" draggable="false"/>
    <img class="content-image"src="<?php echo e($e->Terraria); ?>" draggable="false"/>
    <img class="content-image"src="<?php echo e($e->Terraria); ?>" draggable="false"/>
    


 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/gdbxczen/kbfcyag-m1/resources/views/jjj.blade.php ENDPATH**/ ?>