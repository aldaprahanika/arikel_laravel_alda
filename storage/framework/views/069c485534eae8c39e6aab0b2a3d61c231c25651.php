

<?php $__env->startSection('content'); ?>
<h3>Add User</h3>
<form action="/admin/users/store" method="post">
    <?php echo csrf_field(); ?> 
    <div class="form-group">
        <input type="text" name="nama" placeholder="Enter User Name">
    </div>

    <div class="form-group">
        <input type="email" name="email" placeholder="Enter Email">
    </div>

    <div class="form-group">
        <input type="passwoard" name="password" placeholder="Enter Password">
    </div>

    <div class="form-group">
        <select name="role" class="form-control">
            <option value="admin">Admin</option>
            <option value="editor">Editor</option>
        </select>
    </div>

    <div class="form-group">
    <button class="form-bottom">Create User</button>
    </div>

</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PWPB\XII_RPL_B\laravel-artikel-rplb\resources\views/admin/users_add.blade.php ENDPATH**/ ?>