<?php echo $__env->make('fixed.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
    <?php echo $__env->make('fixed.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('fixed.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH D:\Laravel\filip_portfolio\resources\views/layouts/layout.blade.php ENDPATH**/ ?>