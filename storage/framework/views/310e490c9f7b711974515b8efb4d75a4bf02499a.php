<?php $__env->startSection('content'); ?>
    <div style="background-color: #f8f9fa; min-height: 100vh; padding: 20px;">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12 d-flex justify-content-between align-items-center">
                    <h2 class="text-primary" style="color: #3498db;">Product Management</h2>
                    <a class="btn btn-success" href="<?php echo e(route('products.create')); ?>" style="background-color: #28a745; color: white;">Create New Product</a>
                </div>
            </div>

            <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success">
                    <strong>Success!</strong> <?php echo e($message); ?>

                </div>
            <?php endif; ?>

            <div class="table-responsive">
                <table class="table table-striped table-hover" style="background-color: #ffffff;">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Details</th>
                            <th>Price</th>
                            <th width="280px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($product->id); ?></td>
                                <td><?php echo e($product->name); ?></td>
                                <td><?php echo e($product->detail); ?></td>
                                <td>$<?php echo e(number_format($product->price, 2)); ?></td>
                                <td>
                                    <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST">
                                        <a class="btn btn-info btn-sm" href="<?php echo e(route('products.show', $product->id)); ?>" style="background-color: #17a2b8;">Show</a>
                                        <a class="btn btn-primary btn-sm" href="<?php echo e(route('products.edit', $product->id)); ?>" style="background-color: #007bff;">Edit</a>
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm" style="background-color: #dc3545;">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center">
                <?php echo e($products->links()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/products/index.blade.php ENDPATH**/ ?>