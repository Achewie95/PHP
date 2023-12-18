<!DOCTYPE html>
<html>
<head>
    <title>All Products</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h2>All Products</h2>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Product ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Weight</th>
                            <th>Manufacturer</th>
                            <th>Stock Quantity</th>
                            <th>SKU</th>
                            <th>Image URL</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($product->ProductID); ?></td>
                            <td><?php echo e($product->Name); ?></td>
                            <td><?php echo e($product->Description); ?></td>
                            <td><?php echo e($product->Price); ?></td>
                            <td><?php echo e($product->Category); ?></td>
                            <td><?php echo e($product->Weight); ?></td>
                            <td><?php echo e($product->Manufacturer); ?></td>
                            <td><?php echo e($product->{'Stock Quantity'}); ?></td>
                            <td><?php echo e($product->SKU); ?></td>
                            <td><?php echo e($product->ImageURL); ?></td>
                            <td>
                            <a href="<?php echo e(route('products.edit', ['allProduct' => $product->id])); ?>" class="btn btn-primary btn-sm">Edit</a>
                            <form action="<?php echo e(route('products.destroy', ['id' => $product->id])); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                            </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

                <br>
                <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\amosc\OneDrive\Desktop\PhP\Project\laravel\resources\views/allProducts.blade.php ENDPATH**/ ?>