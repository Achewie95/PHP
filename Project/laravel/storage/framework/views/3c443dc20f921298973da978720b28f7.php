<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('login.submit')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="username">Username / Email</label>
                                <input type="text" id="login" name="login" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>

                            <div>
                            Need to sign up? <a href="<?php echo e(route('register')); ?>"> Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>       
            <div>
                <?php if($errors): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-danger" role="alert">
                    <?php echo e($error); ?>

                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>  
    </div>
</body>
</html>
<?php /**PATH C:\Users\amosc\OneDrive\Desktop\PhP\Project\laravel\resources\views/login.blade.php ENDPATH**/ ?>