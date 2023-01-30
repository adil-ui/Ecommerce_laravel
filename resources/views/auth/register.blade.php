@extends('main')
@section('title', 'Register')

@section("content")
<section class="container row  mx-auto ">
    <div class="hero_left col-5 d-flex align-items-center px-5 mt-3">
        <div>
            <h2 class="text-white fw-bold mb-4 ">Welcome</h2>
            <h2 class="text-white fw-bold mb-4 hero_left_title stroke-text">We Are OnlineShop</h2>
            <h4 class="text-white fw-bold mb-4 ">Register Now <i class="bi bi-arrow-right fs-4 ms-2 align-middle"></i></h4>
        </div>
    </div>
    <form class="row g-3 col-6 ms-auto mt-0" action='{{ route('post-register') }}' method='POST' enctype="multipart/form-data">
        @csrf
        <div class="ms-auto col-md-11 ">
        <label class="form-label">Full Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name='name' required>
        </div>
        <div class="ms-auto col-md-11 ">
            <label class="form-label">Address <span class="text-danger">*</span></label>
            <input type="text" class="form-control"  name='address' required>
        </div>
        <div class="ms-auto col-md-11 ">
            <label class="form-label">Phone <span class="text-danger">*</span></label>
            <input type="number" class="form-control"  name='phone' required>
        </div>
        <div class="ms-auto col-md-11">
            <label for="formFile" class="form-label">Picture</label>
            <input class="form-control" type="file" id="formFile" name="picture">
        </div>
        <div class="ms-auto col-md-11 ">
            <label class="form-label">Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control"  name='email' required>
        </div>
        <div class="ms-auto col-md-11 ">
        <label class="form-label">Password <span class="text-danger">*</span></label>
        <input type="password" class="form-control"  name='password' required>
        </div>
        @if (Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif
        <div class="ms-auto col-11">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</section>

@endsection
