<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
</head>
<body >
    <header>
        <nav class="navbar navbar-expand-lg bg-white shadow-sm">
            <div class="container">
              <a class="navbar-brand fw-bolder d-flex align-items-end" href="/home" style="color:#fcb500"><img src="{{ asset('images/logo.png') }}" alt="logo" width="35px" class="me-2"> Online <span style="color:#eb8233">Shope</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav my-2 my-lg-0 ms-auto d-flex align-items-center">
                  <li class="nav-item me-2">
                    <a class="nav-link fw-semibold"  href="{{ route('home') }}">Home</a>
                  </li>
                  <li class="nav-item me-2">
                    <a class="nav-link fw-semibold" href="{{ route('our-product') }}">Our Product</a>
                  </li>
                    <li class="nav-item me-2">
                        <a class="nav-link fw-semibold" href="{{ route('men-product') }}">Men's</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link fw-semibold" href="{{ route('women-product') }}">Woman's</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link fw-semibold" href="{{ route('kid-product') }}">Kids's</a>
                    </li>
                  <li class="nav-item dropdown me-2">
                        @if (Auth::check())
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/{{Auth::user()->picture}}" alt="" class="rouded-circle " widht='40' height='40' style='border'>
                            <span>Hi, {{Auth::user()->name}}</span>
                        </a>
                        @else
                            <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle fs-4  align-middle"></i>
                            </a>
                        @endif

                    <ul class="dropdown-menu">
                        @if (Auth::check())
                            <li><a class="dropdown-item  py-2 px-4" href="{{ route('logout')}}"><i class="bi bi-box-arrow-left align-middle fs-5 me-2"></i> Log Out</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item py-2 px-4" href="{{ route('profile')}}"><i class="bi bi-person align-middle fs-5 me-2"></i> profile</a></li>
                        @else
                            <li><a class="dropdown-item py-2 px-4" href="{{ route('login')}}"><i class="bi bi-box-arrow-in-right align-middle fs-5 me-2"></i> Login</a></li>
                            <li><a class="dropdown-item py-2 px-4" href="{{ route('register')}}"><i class="bi bi-person-plus align-middle fs-5 me-2"></i> Register</a></li>
                        @endif

                    </ul>
                  </li>

                  <li class="nav-item position-relative">
                    <a class="nav-link" href="{{ route('cart')}}"><i class="bi bi-cart3 fs-4"></i></a>
                    <div class="rounded-circle position-absolute  text-white cart">{{ Cart::count() }}</div>
                </li>
                </ul>
              </div>
            </div>
        </nav>
    </header>

    @yield("content")

    <footer class='d-flex justify-content-center align-items-center w-100 bg-transparent pt-3'>
        <p>Onlineshop &copy; 2023 Copyright  Designed By <a href="https://adil-ui.github.io/Portfolio/" target="_blank" class="text-warning fw-semibold">KingAdil</a> </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
