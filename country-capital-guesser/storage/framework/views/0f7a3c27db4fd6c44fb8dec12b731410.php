<?php $__env->startSection('content'); ?>
<h1><?php echo e($set['country']); ?> and <?php echo e($set['capital']); ?></h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/naderrahhal/Documents/GitHub/country-capital-guesser/country-capital-guesser/resources/views/main.blade.php ENDPATH**/ ?>