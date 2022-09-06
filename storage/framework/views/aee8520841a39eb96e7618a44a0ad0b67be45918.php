

<?php $__env->startSection('content'); ?>

<h3>Masuk kedalam aplikasi</h3>
<?php if(session('error')): ?>
<p><?php echo e(session('error')); ?></p>
<?php endif; ?>

<form action="/login/submit" method="post">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <input class="form-control" type="email" name="email" placeholder="Enter email address" required>
    </div>

    <div class="form-group">
        <input class="form-control" type="password" name="password" placeholder="Enter password" required>
    </div>
    <div class="form-group">
        <button class="form-bottom" type="submit">Login</button>
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\PWPB\XII_RPL_B\laravel-artikel-rplb\resources\views/auth/login.blade.php ENDPATH**/ ?>