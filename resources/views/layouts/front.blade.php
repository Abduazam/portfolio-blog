<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>John Doe's blog | @yield('title')</title>
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/css/style.css">
    <link rel="stylesheet" href="/frontend/css/media.css">
    <link rel="stylesheet" href="/frontend/font-awesome/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-expand-md px-5 py-4 {{ request()->is('/') ? '' : 'border-bottom sticky-top shadow-sm' }}">
    <div class="container px-md-5">
        <a class="navbar-brand font-2 bold" href="{{ url('/') }}">John Doe's blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item px-3">
                    <a class="nav-link font-3 {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link font-3 {{ request()->is('portfolio*') ? 'active' : '' }}" href="{{ url('/portfolio') }}">Portfolio</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link font-3 {{ request()->is('blog*') ? 'active' : '' }}" href="{{ url('/blog') }}">Blog</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link font-3 {{ request()->is('course*') ? 'active' : '' }}" href="{{ url('/course') }}">Course</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="footer container-fluid pt-5 pb-3">
    <p class="text-muted text-center mb-0 small font-2">© 2022 johndoe.io</p>
</footer>

<script src="/frontend/js/bootstrap.min.js"></script>
</body>
</html>
