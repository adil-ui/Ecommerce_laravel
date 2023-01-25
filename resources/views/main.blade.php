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
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-transparent shadow-sm">
            <div class="container">
              <a class="navbar-brand fw-semibold" href="home">AdilStore</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <form class="d-flex mx-sm-0 mx-md-auto pt-2" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
                <ul class="navbar-nav  my-2 my-lg-0 pt-1">
                  <li class="nav-item pt-1 me-2">
                    <a class="nav-link active" href="home">Home</a>
                  </li>

                  <li class="nav-item dropdown pt-1 me-2">
                    <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Category
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                    </ul>
                  </li>
                  <li class="nav-item pt-1 me-2">
                    <a class="nav-link active" href="home">Our Product</a>
                  </li>
                  <li class="nav-item dropdown me-2">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle fs-4 text-dark text-opacity-75"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="login">Login</a></li>
                      <li><a class="dropdown-item" href="register">Register</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="dashboard">profile</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-cart3 fs-4"></i></a>
                </li>
                </ul>
              </div>
            </div>
        </nav>
    </header>
    
    @yield("content")

    <footer class='d-flex justify-content-center align-items-center pt-3'>
        <p>Blog &copy; 2022 Copyright  Designed By KingAdil</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
