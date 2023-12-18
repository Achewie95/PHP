<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Dashboard</h2>
                <?php if(request()->has('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(request()->get('success')); ?>

                    </div>
                <?php endif; ?>
                <p>Session started by: <?php echo e(session('name')); ?></p>
                <a href="<?php echo e(url('api/allProducts')); ?>" class="btn btn-primary">Show All Products</a>
                <br>
                <br>
                <a href="<?php echo e(url('api/products/create')); ?>" class="btn btn-success">Add a Product</a>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\amosc\OneDrive\Desktop\PhP\Project\laravel\resources\views/dashboard.blade.php ENDPATH**/ ?>