<!DOCTYPE html>
<html>
<head>
    <title>Profile Details</title>
</head>
<body>
    <h1>Profile Details</h1>
    <p><strong>Name:</strong> <?php echo e($profile['name']); ?></p>
    <p><strong>Age:</strong> <?php echo e($profile['age']); ?></p>
    <p><strong>Email:</strong> <?php echo e($profile['email']); ?></p>
    <a href="<?php echo e(url('/profiles')); ?>">← Back to All Profiles</a>
</body>
</html>
<?php /**PATH E:\Full Stack\GDG\TASK 11\resources\views/profiles/show.blade.php ENDPATH**/ ?>