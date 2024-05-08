<?php echo $__env->make('fixed.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<?php echo $__env->make('fixed.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('fixed.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('script'); ?>

<script src="https://kit.fontawesome.com/231b95a13a.js" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\Users\Nikola\Desktop\Laravel projects\antesevic-foto-video\resources\views/layouts/layout.blade.php ENDPATH**/ ?>