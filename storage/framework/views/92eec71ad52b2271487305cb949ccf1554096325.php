

<?php $__env->startSection('content'); ?>



<h2><?php echo e($article->title); ?></h2>
<p>Date : <?php echo e($article->date); ?>, Author : <?php echo e($article->user->nama); ?></p>
<p><?php echo e($article->body); ?></p>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PWPB\XII_RPL_B\laravel-artikel-rplb\resources\views/detail_article.blade.php ENDPATH**/ ?>