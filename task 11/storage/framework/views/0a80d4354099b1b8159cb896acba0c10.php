<!DOCTYPE html>
<html>
<head>
    <title>All Profiles</title>
</head>
<body>
    <h1>All Profiles</h1>
    <ul>
        <?php $__currentLoopData = $profiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e(url('/profiles/' . $id)); ?>">
                    <?php echo e($profile['name']); ?>

                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html>
<?php /**PATH E:\Full Stack\GDG\TASK 11\task 11\resources\views/profiles/index.blade.php ENDPATH**/ ?>