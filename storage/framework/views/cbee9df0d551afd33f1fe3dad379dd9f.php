
<?php $__env->startSection('content'); ?>
    <div class="own-container gallery-title">
        <div class="title">
            <h3>GALERIJE</h3>
            <p>Ovde možete videti i izabrati neku od kategorija mojih projekata.</p>
            <p>Takodje, ovde možete videti za koje me sve prilike možete angažovati.</p>
        </div>
    </div>
    <div class="gallery-content">
        <div class="own-container content-grid">

            <a href="">
                <div class="image">
                    <div class="overlay-text">18. ROĐENDANI</div>
                    <img src="<?php echo e(asset('assets/images/18-birthday.jpg')); ?>" alt=""/></div>
            </a>
            <a href="">
                <div class="image">
                    <div class="overlay-text">1. ROĐENDANI</div>
                    <img src="<?php echo e(asset('assets/images/1-birthday.jpg')); ?>" alt=""/></div>
            </a>
            <a href="">
                <div class="image">
                    <div class="overlay-text">KRŠTENJA</div>
                    <img src="<?php echo e(asset('assets/images/gallery-category-3.jpg')); ?>" alt=""/></div>
            </a>
            <a href="">
                <div class="image">
                    <div class="overlay-text">SVADBE</div>
                    <img src="<?php echo e(asset('assets/images/gallery-category-4.jpg')); ?>" alt=""/></div>
            </a>
            <a href="">
                <div class="image">
                    <div class="overlay-text">REKLAMNI MATERIJALI</div>
                    <img src="<?php echo e(asset('assets/images/gallery-category-4.jpg')); ?>" alt=""/></div>
            </a>
            
            
            
            
            


        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\antesevic-foto-video\resources\views/pages/gallery.blade.php ENDPATH**/ ?>