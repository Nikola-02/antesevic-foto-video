
<?php $__env->startSection('content'); ?>
    <h2 class="text-2xl fw-bolder text-center mt-8 mb-5">Napravi novu kategoriju</h2>

    <form class="max-w-sm mx-auto mb-12" action="/admin/categories" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="mb-4">
            <label for="cat" class="block mb-2 text-sm font-medium text-gray-900">Naziv</label>
            <input type="text" id="cat" value="<?php echo e(old('name')); ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:!ring-indigo-500 focus:!border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="18. rodjendani" name="name" />
            <p class="mt-1 ml-1">Kategoriju upiši u množini</p>
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="alert alert-danger mt-3"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-4">

            <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Thumbnail slika</label>
            <input name="primary_image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
            <p class="mt-1 text-sm text-gray-500" id="file_input_help">Dozvoljen format slike: PNG, JPG</p>
            <?php $__errorArgs = ['primary_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="alert alert-danger mt-3"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kreiraj</button>
        <?php if(session('error')): ?>
            <div class="bg-red-100 border-0 border-solid border-red-300 text-red-700 mt-2 px-3 py-3 rounded" role="alert">
                <span class="block sm:inline"><?php echo e(session('error')); ?></span>
            </div>
        <?php endif; ?>
    </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\antesevic-foto-video\resources\views/pages/admin/categories/create.blade.php ENDPATH**/ ?>