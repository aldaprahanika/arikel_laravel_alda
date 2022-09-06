

<?php $__env->startSection('content'); ?>
<h3>Edit Article</h3>
<form action="/admin/articles/update/<?php echo e($article->id); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <input type="text" class="form-control" name="title" value="<?php echo e($article->title); ?>" placeholder="Masukan Judul">
    </div>

    <div class="form-grop">
        <textarea name="body" class="from-control" rows="10" placeholder="Masukan Isi"><?php echo e($article->body); ?></textarea>
    </div>

    <div class="form-group">
        <input type="date" name="date" value="<?php echo e($article->date); ?>" class="form-control">
    </div>

    <div class="form-group">
        <button class="form-bottom">Update</button>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PWPB\XII_RPL_B\laravel-artikel-rplb\resources\views/admin/articles_edit.blade.php ENDPATH**/ ?>