

<?php $__env->startSection('title', 'Blog Home'); ?>

<?php $__env->startSection('content'); ?>
    <h1>My Blog</h1>
    
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="post">
            <h2><?php echo e($post['title']); ?></h2>
            <p><?php echo e($post['content']); ?></p>
            <a href="/post/<?php echo e($post['id']); ?>">Read More →</a>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout2', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\asust\Herd\asli\resources\views/home.blade.php ENDPATH**/ ?>