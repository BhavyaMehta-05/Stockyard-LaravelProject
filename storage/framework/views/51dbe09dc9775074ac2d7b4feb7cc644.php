<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Stockyard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4fbf7;
        }
        .auth-card {
            max-width: 450px;
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
        <h4 class="text-primary text-center mb-2">Welcome Back</h4>
        <h2 class="text-center mb-4">Login to Your Account</h2>

        <?php if($errors->any() || session('error')): ?>
            <div class="alert alert-danger text-center mb-3">
                <?php echo e($errors->any() ? $errors->first() : session('error')); ?>

            </div>
        <?php endif; ?>




        <!-- ✅ FIXED FORM -->
        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            <!-- Email -->
            <div class="form-floating mb-3">
                <input 
                    type="email" 
                    class="form-control" 
                    id="email" 
                    name="email"
                    placeholder="Email"
                    required
                >
                <label for="email">Email Address</label>
            </div>

            <!-- Password -->
            <div class="form-floating mb-3">
                <input 
                    type="password" 
                    class="form-control" 
                    id="password" 
                    name="password"
                    placeholder="Password"
                    required
                >
                <label for="password">Password</label>
            </div>

            <!-- Remember -->
            <div class="d-flex justify-content-between mb-3">
                <div class="form-check">
                    <input 
                        class="form-check-input" 
                        type="checkbox" 
                        id="remember" 
                        name="remember"
                    >
                    <label class="form-check-label" for="remember">
                        Remember me
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100 py-2">
                Login
            </button>
        </form>

        <p class="text-center mt-4 mb-0">
            Don’t have an account?
            <a href="<?php echo e(url('register')); ?>" class="text-primary fw-semibold">Register</a>
        </p>
    </div>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Stockyard\resources\views/frontend/login.blade.php ENDPATH**/ ?>