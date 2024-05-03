
<?php $__env->startSection('title'); ?>
    Products Page
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="bg-white">
        <div class="card border-0 shadow-sm rounded">
            <div class="card-body">
                <a href="<?php echo e(route('products.create')); ?>" class="btn btn-md btn-success mb-3">ADD PRODUCT</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">IMAGE</th>
                            <th scope="col">NAME</th>
                            <th scope="col">PRICE</th>
                            <th scope="col">STOCK</th>
                            <th scope="col">UNIT ID</th>
                            <th scope="col" style="width: 20%">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="text-center">
                                    <img src="<?php echo e(asset('/storage/products/' . $product->image)); ?>" class="rounded"
                                        style="width: 150px">
                                </td>
                                <td><?php echo e($product->name); ?></td>
                                <td><?php echo e('Rp ' . number_format($product->price, 2, ',', '.')); ?></td>
                                <td><?php echo e($product->stock); ?></td>
                                <td><?php echo e($product->unitId); ?></td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST">
                                        <a href="<?php echo e(route('products.show', $product->id)); ?>"
                                            class="btn btn-sm btn-dark">SHOW</a>
                                        <a href="<?php echo e(route('products.edit', $product->id)); ?>"
                                            class="btn btn-sm btn-primary">EDIT</a>
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="alert alert-danger">
                                Data Products belum Tersedia.
                            </div>
                        <?php endif; ?>
                    </tbody>
                </table>
                <?php echo e($products->links()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MIG12998\Herd\zahra\resources\views/products/index.blade.php ENDPATH**/ ?>