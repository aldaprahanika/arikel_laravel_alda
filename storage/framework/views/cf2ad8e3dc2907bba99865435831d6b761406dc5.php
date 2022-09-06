

<?php $__env->startSection('content'); ?>

<h3>Article by : <?php echo e($user->nama); ?></h3>

<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="article-data">
    <a href="/article/<?php echo e($data->id); ?>">
        <h3 class="article-title"><?php echo e($data->title); ?></h3>
    </a>
    <small><?php echo e($data->date); ?>, Author : <a href="/author/<?php echo e($data->user->id); ?>"><?php echo e($data->user->nama); ?></a></small>
    <p class="article-body"><?php echo e($data->body); ?></p>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PWPB\XII_RPL_B\laravel-artikel-rplb\resources\views/author_article.blade.php ENDPATH**/ ?>