<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buy Pro | Stockyard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4fbf7;
        }
        .pricing-card {
            border: 1px solid #d1e7dd;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .pricing-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }
        .price {
            font-size: 40px;
            font-weight: 700;
            color: #198754;
        }
        .btn-primary {
            background-color: #198754;
            border-color: #198754;
        }
        .btn-primary:hover {
            background-color: #146c43;
            border-color: #146c43;
        }
        .badge-pro {
            background: #198754;
        }
    </style>
</head>
<body>

<div class="container py-5">

    <!-- Heading -->
    <div class="text-center mb-5">
        <h5 class="text-success">Upgrade Your Plan</h5>
        <h1 class="fw-bold">Choose the Right Pro Version</h1>
        <p class="text-muted mt-2">
            Access research-driven insights, disciplined strategies, and structured advisory services.
        </p>
    </div>

    <!-- Pricing Cards -->
    <div class="row g-4 justify-content-center">

        <!-- Basic Plan -->
        <div class="col-md-4">
            <div class="pricing-card bg-light p-4 rounded h-100 text-center">
                <h4>Basic</h4>
                <p class="text-muted">For beginners</p>
                <div class="price">₹999</div>
                <p class="text-muted">per month</p>

                <ul class="list-unstyled my-4">
                    <li>✔ Market Insights</li>
                    <li>✔ Educational Content</li>
                    <li>✔ Weekly Updates</li>
                    <li class="text-muted">✖ Portfolio Review</li>
                </ul>

                <a href="<?php echo e(url('/contact')); ?>" class="btn btn-outline-success w-100">
                    Choose Basic
                </a>
            </div>
        </div>

        <!-- Pro Plan -->
        <div class="col-md-4">
            <div class="pricing-card bg-light p-4 rounded h-100 text-center border-success">
                <span class="badge badge-pro text-white mb-2">Most Popular</span>
                <h4 class="mt-2">Pro</h4>
                <p class="text-muted">For active investors</p>
                <div class="price">₹2,499</div>
                <p class="text-muted">per month</p>

                <ul class="list-unstyled my-4">
                    <li>✔ Advanced Market Research</li>
                    <li>✔ Portfolio Review</li>
                    <li>✔ Risk Management Guidance</li>
                    <li>✔ Priority Support</li>
                </ul>

                <a href="<?php echo e(url('/contact')); ?>" class="btn btn-primary w-100">
                    Buy Pro
                </a>
            </div>
        </div>

        <!-- Premium Plan -->
        <div class="col-md-4">
            <div class="pricing-card bg-light p-4 rounded h-100 text-center">
                <h4>Premium</h4>
                <p class="text-muted">For serious investors</p>
                <div class="price">₹4,999</div>
                <p class="text-muted">per month</p>

                <ul class="list-unstyled my-4">
                    <li>✔ Personalized Advisory</li>
                    <li>✔ Portfolio Optimization</li>
                    <li>✔ Direct Expert Access</li>
                    <li>✔ Detailed Reports</li>
                </ul>

                <a href="<?php echo e(url('/contact')); ?>" class="btn btn-outline-success w-100">
                    Choose Premium
                </a>
            </div>
        </div>

    </div>

    <!-- Disclaimer -->
    <div class="text-center mt-5">
        <small class="text-muted">
            Investments are subject to market risks. Past performance does not guarantee future results.
            All services are provided for informational and educational purposes only.
        </small>
    </div>

</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Stockyard\resources\views/frontend/pricing.blade.php ENDPATH**/ ?>