
<?php $__env->startSection('content'); ?>

    <div class="categories-admin">
        <div class="title-and-button d-flex align-content-center gap-3 mt-3 mb-5">
            <h3 class="text-2xl fw-bolder">Kategorije</h3>
            <a href="/admin/categories/create" class="btn btn-primary">Dodaj kategoriju</a>
        </div>

        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">

                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">#</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Name</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Image</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Created At</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Edit</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Delete</h6>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo e($index + 1); ?></h6></td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-bold"><?php echo e(strtoupper($cat->name)); ?></p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><img src="<?php echo e(asset('assets/images/categories/' . $cat->primary_image)); ?>" alt="<?php echo e($cat->name); ?>" width="80px"></p>
                                </td>
                                <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal"><?php echo e($cat->created_at); ?></p>

                                </td>
                                <td class="border-bottom-0">
                                    <a href="/admin/categories/<?php echo e($cat->id); ?>/edit" class="btn btn-primary mb-0"><i class="ti ti-pencil"></i></a>
                                </td>
                                <td class="border-bottom-0">
                                    <form action="/admin/categories/<?php echo e($cat->id); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button type="submit" class="btn btn-danger mb-0"><i class="ti ti-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\antesevic-foto-video\resources\views/pages/admin/categories/home.blade.php ENDPATH**/ ?>