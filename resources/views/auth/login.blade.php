@extends('main')
@section('title', 'Login')

@section("content")
<section class="container row  mx-auto ">
    <div class="hero_left col-5 d-flex align-items-center px-5 mt-3">
        <div>
            <div>
                <h2 class="text-white fw-bold mb-4 ">Welcome</h2>
                <h2 class="text-white fw-bold mb-4 hero_left_title stroke-text">We Are AdilStore</h2>
                <h4 class="text-white fw-bold mb-4 ">Login Now <i class="bi bi-arrow-right fs-4 ms-2 align-middle"></i></h4>
            </div>
        </div>
    </div>
    <div class="login col-5 mx-auto">
        <form action='{{route('log-user')}}' method='POST' class="row g-3 col-8 mx-auto mt-5 pt-5"  enctype="multipart/form-data">
            @csrf
            <div class="mb-2 ">
                <label class="form-label">Email</label>
                <input type="email" class="form-control"  name='email' required>
            </div>
            <div class="">
                <label class="form-label">Password</label>
                <input type="password" class="form-control"  name='password' required>
            </div>
            @if (Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif
            <div class="mt-4 d-flex justify-content-between align-items-center">
                <button type="submit" class="btn btn-primary">Connect</button>
                <a href="register" class="text-primary">Register ?</a>
            </div>
        </form>
    </div>
</section>

@endsection
