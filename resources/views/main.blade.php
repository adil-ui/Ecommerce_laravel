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
              <a class="navbar-brand fw-semibold" href="/home">AdilStore</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <form class="d-flex mx-sm-0 mx-md-auto pt-2" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
                <ul class="navbar-nav  my-2 my-lg-0 pt-1 d-flex align-items-center">
                  <li class="nav-item pt-1 me-2">
                    <a class="nav-link active" href="/home">Home</a>
                  </li>
                  <li class="nav-item pt-1 me-2">
                    <a class="nav-link active" href="/home">Our Product</a>
                  </li>
                  <li class="nav-item dropdown pt-1 me-2">
                    <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Category
                    </a>
                    <ul class="dropdown-menu">
                      <li class=""><a class="dropdown-item fw-semibold py-2 ps-4 pe-5" href="#">Woman</a></li>
                      <li class=""><a class="dropdown-item fw-semibold py-2 ps-4 pe-5" href="#">Men</a></li>
                      <li class=""><a class="dropdown-item fw-semibold py-2 ps-4 pe-5" href="#">Kids</a></li>
                      <li class=""><a class="dropdown-item fw-semibold py-2 ps-4 pe-5" href="#">Accessories</a></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown me-2">
                        @if (Auth::check())
                        <a class="nav-link dropdown-toggle pt-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/{{Auth::user()->picture}}" alt="" class="rouded-circle" widht='40' height='40' style='border'>
                            <span>Hi, {{Auth::user()->name}}</span>
                        </a>
                        @else
                            <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle fs-4 text-dark"></i>
                            </a>
                        @endif

                    <ul class="dropdown-menu">
                        @if (Auth::check())
                            <li><a class="dropdown-item " href="{{ route('logout')}}">Log Out</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('profile')}}">profile</a></li>
                        @else
                            <li><a class="dropdown-item" href="{{ route('login')}}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register')}}">Register</a></li>
                        @endif

                    </ul>
                  </li>

                  <li class="nav-item position-relative">
                    <a class="nav-link" href="#"><i class="bi bi-cart3 fs-4"></i></a>
                    <div class="rounded-circle position-absolute  text-white cart">0</div>
                </li>
                </ul>
              </div>
            </div>
        </nav>
    </header>

    @yield("content")

    <footer class='d-flex justify-content-center align-items-center w-100 bg-transparent pt-3'>
        <p>AdilStore &copy; 2023 Copyright  Designed By <a href="https://adil-ui.github.io/Portfolio/" target="_blank" class="text-warning fw-semibold">KingAdil</a> </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
