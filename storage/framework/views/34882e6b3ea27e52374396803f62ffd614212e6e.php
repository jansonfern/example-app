<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="float-start">
                <h2>Edit Product</h2>
            </div>
        </div>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('products.update', $product->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" id="name" value="<?php echo e(old('name', $product->name)); ?>" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" step="0.01" name="price" class="form-control" id="price" value="<?php echo e(old('price', $product->price)); ?>" required>
        </div>
        <div class="form-group">
            <label for="details">Details (e.g., Brand: Nike, Color: Red, Size: M, Price: $100):</label>
            <input type="text" name="details" class="form-control" id="details" value="<?php echo e(old('details', $product->details)); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Product</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/products/edit.blade.php ENDPATH**/ ?>