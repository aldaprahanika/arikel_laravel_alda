

<?php $__env->startSection('content'); ?>
<h3>Data Articles</h3>
<a href="/admin/articles/add">+ Add Articles</a>

<table class="table-data">
    <tr>
        <td>No</td>
        <td>Author</td>
        <td>Title</td>
        <td>Date</td>
        <td>Body</td>
        <td>Action</td>
    </tr>
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($i+1); ?></td>
        <td><?php echo e($data->user->nama); ?></td>
        <td><?php echo e($data->title); ?></td>
        <td><?php echo e($data->date); ?></td>
        <td><?php echo e($data->body); ?></td>
        <td>
            <?php if(Auth::user()->id == $data->user_id): ?>
            <a href="/admin/articles/edit/<?php echo e($data->id); ?>">Edit</a>
            <a href="/admin/articles/delete/<?php echo e($data->id); ?>">Delete</a>
            <?php endif; ?>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PWPB\XII_RPL_B\laravel-artikel-rplb\resources\views/admin/articles.blade.php ENDPATH**/ ?>