

<?php $__env->startSection('content'); ?>
<h3>Data Users</h3>
<a href="/admin/users/add">+ Add Users</a>

<table class="table-data">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Email</td>
        <td>Role</td>
        <td>Action</td>
    </tr>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($i+1); ?></td>
        <td><?php echo e($data->nama); ?></td>
        <td><?php echo e($data->email); ?></td>
        <td><?php echo e($data->role); ?></td>
        <td>
            <a href="/admin/users/edit/<?php echo e($data->id); ?>">Edit</a>
            <?php if(Auth::user()->id != $data->id): ?>
            <a href="/admin/users/delete/<?php echo e($data->id); ?>">Delete</a>
            <?php endif; ?>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PWPB\XII_RPL_B\laravel-artikel-rplb\resources\views/admin/users.blade.php ENDPATH**/ ?>