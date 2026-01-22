<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | Stockyard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4fbf7;
        }
        .auth-card {
            max-width: 500px;
            margin: auto;
        }
        .btn-primary {
            background-color: #198754;
            border-color: #198754;
        }
        .btn-primary:hover {
            background-color: #146c43;
            border-color: #146c43;
        }
        .text-primary {
            color: #198754 !important;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="auth-card bg-light p-5 rounded shadow-sm">
        <h4 class="text-primary text-center mb-2">Create Account</h4>
        <h2 class="text-center mb-4">Join Stockyard</h2>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul class="mb-0">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?php echo e(url('/register')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                <label for="name">Full Name</label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                <label for="email">Email Address</label>
            </div>

            <div class="form-floating mb-3">
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                <label for="phone">Mobile Number</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>

            <div class="form-floating mb-4">
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" required>
                <label for="password_confirmation">Confirm Password</label>
            </div>

            <button type="submit" class="btn btn-primary w-100 py-2">
                Create Account
            </button>
        </form>

        <p class="text-center mt-4 mb-0">
            Already have an account?
            <a href="<?php echo e(url('login')); ?>" class="text-primary fw-semibold">Login</a>
        </p>

        <small class="text-muted d-block text-center mt-3">
            By registering, you agree to our Terms & Privacy Policy.
        </small>
    </div>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Stockyard\resources\views/frontend/register.blade.php ENDPATH**/ ?>