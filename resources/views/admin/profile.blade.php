@extends('admin.admin_layout')
@section('title', 'Profile')

@section('form')
    <div class="col-8 bg-white  py-4 rounded-2 shadow-sm">
        <form class="row g-3 col-11 mx-auto " action='{{route('post-profile')}}' method='POST' enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
              <label class="form-label">Name</label>
              <input type="text" class="form-control" name='name' value='{{Auth::user()->name}}'>
            </div>
            <div class="col-md-6">
                <label class="form-label">Phone</label>
                <input type="number" class="form-control"  name='phone' value='{{Auth::user()->phone}}'>
            </div>
            <div class="col-md-12">
                <label class="form-label">Address</label>
                <input type="text" class="form-control"  name='address' value='{{Auth::user()->adress}}'>
            </div>
            <div class="">
                <label for="formFile" class="form-label">Picture</label>
                <input class="form-control" type="file" id="formFile" name="picture" >
                <img src="{{Auth::user()->picture}}" alt="" class="profile_img ">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control"  name='email' value='{{Auth::user()->email}}'>
              </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control"  name='password' value='{{Auth::user()->password}}'>
            </div>
            <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn btn-success px-4 fw-semibold">Update</button>
            </div>
        </form>
    </div>


@endsection

