<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="float-start">
                <h2>Show Product</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-primary" href="<?php echo e(route('products.edit', $product->id)); ?>">Edit</a>
                <a class="btn btn-secondary" href="<?php echo e(route('products.index')); ?>">Back</a>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="name">Name:</label>
        <p><?php echo e($product->name); ?></p>
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <p>$<?php echo e(number_format($product->price, 2)); ?></p>
    </div>
    <div class="form-group">
        <label for="details">Details:</label>
        <p><?php echo e($product->details); ?></p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/products/show.blade.php ENDPATH**/ ?>