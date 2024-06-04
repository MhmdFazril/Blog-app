

<?php $__env->startSection('container'); ?>
    <h1>Halamam about</h1>
    <h3>about me</h3>
    <p><?php echo e($name); ?></p>
    <img src="img/<?php echo e($image); ?>" alt="<?php echo e($name); ?>" width="200" class="img-thumbnail rounded-circle">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php Laravel\coba-laravel\resources\views/about.blade.php ENDPATH**/ ?>