<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid custom-nav">
        <a class="navbar-brand" href="<?php echo e(url('/home')); ?>">HOME</a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/about')); ?>">ABOUT</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        2301010084_RAHARDI RAHMAT PAISAL
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        2301010082_I KETUT BAGUS PURNAJAYA
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>


<!-- HALAMAN UTAMA -->
<div class="container mt-5">
    <?php echo $__env->yieldContent('content'); ?>
</div>

<!-- FOOTER -->
<footer class="mt-5 py-4 bg-white border-top">
    <div class="container text-center">

        <div class="mb-3">
            <a href="<?php echo e(url('/home')); ?>" class="text-decoration-none mx-2">Home</a>
            <a href="<?php echo e(url('/about')); ?>" class="text-decoration-none mx-2">About</a>
            <a href="#" class="text-decoration-none mx-2">2301010084 RAHARDI RAHMAT PAISAL</a>
            <a href="#" class="text-decoration-none mx-2">feat</a>
            <a href="#" class="text-decoration-none mx-2">2301010082 IKETUT BAGUS PURNAJAYA</a>
        </div>

        <p class="text-muted small mb-0">© 2025 Company, Inc</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php /**PATH D:\repogit\REMIDI\REMIDI\resources\views/layouts/layout2.blade.php ENDPATH**/ ?>