
<?php $__env->startSection('content'); ?>
    <div class="own-container gallery-title">
        <div class="title">
            <h3>KATEGORIJE</h3>
            <p>Ovde možete videti i izabrati neku od kategorija mojih projekata.</p>
            <p>Takodje, ovde možete videti za koje me sve prilike možete angažovati.</p>
        </div>
    </div>
    <div class="gallery-content">
        <div class="own-container content-grid">

            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('galleries', ['cat_id' => $cat->id])); ?>">
                    <div class="image">
                        <div class="overlay-text"><?php echo e(strtoupper($cat->name)); ?></div>
                        <img src="<?php echo e(asset('assets/images/categories/'. $cat-> primary_image)); ?>" alt="<?php echo e($cat->name); ?>"/></div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            
            
            
            
            
            


        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\antesevic-foto-video\resources\views/pages/categories.blade.php ENDPATH**/ ?>