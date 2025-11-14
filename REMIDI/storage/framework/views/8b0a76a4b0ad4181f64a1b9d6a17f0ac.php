

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

<div class="row g-4">

    <!-- CARD 1 -->
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <img src="<?php echo e(asset('images/carte.png')); ?>" class="card-img-top" alt="isal">

            <div class="card-body">
                <h5 class="card-title fw-bold">RAHARDI RAHMAT PAISAL</h5>
                <p class="card-text">
                    begandang is in my blood cause all the projects wont solve itself 😎
                </p>
                <p class="text-muted small mb-0">2301010084</p>
            </div>
        </div>
    </div>

    <!-- CARD 2 -->
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <img src="https://i.ibb.co/jTrpyMh/cowboy.jpg" class="card-img-top" alt="IMAM RRR">

            <div class="card-body">
                <h5 class="card-title fw-bold"> I KETUT BAGUS PURNAJAYA</h5>
                <p class="card-text">professional front end designer</p>
                <p class="text-muted small mb-0">2301010082</p>
            </div>
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout2', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\repogit\REMIDI\REMIDI\resources\views/about.blade.php ENDPATH**/ ?>