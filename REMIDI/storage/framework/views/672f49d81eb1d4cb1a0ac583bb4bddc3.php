
<?php $__env->startSection('title','hal produk'); ?>
<?php $__env->startSection('content'); ?>
<h1>
    <?php echo e($product['id']); ?> <br>
    <?php echo e($product['barang']); ?> <br>
    Rp. <?php echo e($product['harga']); ?> <br>
</h1>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.masterlayout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\asust\Herd\bclass\resources\views/product.blade.php ENDPATH**/ ?>