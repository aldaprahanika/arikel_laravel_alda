

<?php $__env->startSection('content'); ?>
<h3>Edit Users</h3>

<form action="/admin/users/update/<?php echo e($user->id); ?>" method="post">
    <?php echo csrf_field(); ?> 
    <div class="form-group">
        <input type="text" name="nama" value="<?php echo e($user->nama); ?>" placeholder="Enter User Name">
    </div>

    <div class="form-group">
        <input type="email" name="email" value="<?php echo e($user->email); ?>" placeholder="Enter Email">
    </div>

    <div class="form-group">
        <input type="passwoard" name="password" placeholder="Enter Password">
    </div>

    <div class="form-group">
        <select name="role" class="form-control">
            <option value="admin" <?php echo e($user->role != "admin" ?: "selected"); ?>>Admin</option>
            <option value="editor" <?php echo e($user->role != "admin" ?: "selected"); ?>>Editor</option>
        </select>
    </div>

    <div class="form-group">
    <button class="form-bottom">Update User</button>
    </div>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PWPB\XII_RPL_B\laravel-artikel-rplb\resources\views/admin/users_edit.blade.php ENDPATH**/ ?>