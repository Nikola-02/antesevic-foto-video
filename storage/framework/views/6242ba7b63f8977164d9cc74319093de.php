<?php echo $__env->make('fixed.admin.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php echo $__env->make('fixed.admin.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        <?php echo $__env->make('fixed.admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--  Header End -->
        <div class="container-fluid">
            <?php echo $__env->yieldContent('content'); ?>
            <?php echo $__env->make('fixed.admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>

<?php echo $__env->yieldContent('script'); ?>

<script src="https://kit.fontawesome.com/231b95a13a.js" crossorigin="anonymous"></script>
<script src="<?php echo e(asset('assets/js/admin/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/admin/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/admin/sidebarmenu.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/admin/app.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/admin/simplebar.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/admin/dashboard.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>
</html>
<?php /**PATH D:\Laravel\antesevic-foto-video\resources\views/layouts/admin-layout.blade.php ENDPATH**/ ?>