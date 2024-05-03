
<?php $__env->startSection('title'); ?>
    Products Page
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="float-end" style="margin-right: 10pt; margin-top:10pt">
        <a href="<?php echo e(route('products.index')); ?>" style="margin-right: 10pt" class="btn btn-outline-danger">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg"
                viewBox="0 0 16 16">
                <path
                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
            </svg></a>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="<?php echo e(asset('/storage/products/' . $product->image)); ?>" class="rounded" style="width: 100%">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3><?php echo e($product->name); ?></h3>
                        <hr />
                        <p><?php echo e('Rp ' . number_format($product->price, 2, ',', '.')); ?></p>
                        <code>
                            <p><?php echo $product->description; ?></p>
                        </code>
                        <hr />
                        <p>Stock : <?php echo e($product->stock); ?> <?php echo e($product->satuan); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MIG12998\Herd\zahra\resources\views/products/show.blade.php ENDPATH**/ ?>