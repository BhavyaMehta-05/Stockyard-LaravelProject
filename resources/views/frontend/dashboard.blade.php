<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | Stockyard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4fbf7;
        }
        .navbar {
            background-color: #198754;
        }
        .navbar-brand, .nav-link, .navbar-text {
            color: #fff !important;
        }
        .dashboard-card {
            border-radius: 12px;
        }
    </style>
</head>
<body>

<!-- Top Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <span class="navbar-brand fw-semibold">Stockyard Dashboard</span>

        <div class="ms-auto">
            <span class="navbar-text me-3">
                {{ auth()->user()->name }}
            </span>

            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-light btn-sm">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card dashboard-card shadow-sm">
                <div class="card-body p-4">
                    <h4 class="text-success mb-2">
                        Welcome, {{ auth()->user()->name }} 👋
                    </h4>
                    <p class="text-muted mb-0">
                        You have successfully logged in to your dashboard.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mt-4 p-4 rounded bg-light d-flex align-items-center justify-content-between flex-wrap">
    <div class="mb-2 mb-md-0">
        <h6 class="fw-semibold text-success mb-1">
            Continue to Main Website
        </h6>
        <p class="text-muted mb-0">
            Explore services, pricing, blogs, and more from the main site.
        </p>
    </div>

    <a href="{{ url('/') }}" class="btn btn-success px-4 py-2">
        Go to Main Website
    </a>
</div>



</body>
</html>
