@extends('main')
@section('title', 'Login')

@section("content")
    <div class="login">
        <form action='' method='POST' class="row g-3 col-3 mx-auto mt-5 pt-5"  enctype="multipart/form-data">
            <div class="mb-2 ">
                <label class="form-label">Email</label>
                <input type="email" class="form-control"  name='email' required>
            </div>
            <div class="">
                <label class="form-label">Password</label>
                <input type="password" class="form-control"  name='password' required>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Connect</button>
            </div>
        </form>
    </div>


@endsection
