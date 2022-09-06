<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Artikel</title>
    <link rel="stylesheet" href="<?php echo e(asset('web-content/css/style.css')); ?>">
</head>
<body>

    <div class="header">
        <div class="container">
            <div class="header-content">
                <h2>Website Artikel</h2>
                <ul class="header-nav">
                    <li>
                        <a href="/home">home</a>
                    </li>

                    <li>
                        <a href="/about">about</a>
                    </li>

                    <li>
                        <a href="/contact">contact</a>
                    </li>
            </ul>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
    
</body>
</html>

    <?php /**PATH E:\PWPB\XII_RPL_B\laravel-artikel-rplb\resources\views/layout.blade.php ENDPATH**/ ?>