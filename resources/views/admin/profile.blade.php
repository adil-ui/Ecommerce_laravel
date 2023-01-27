@extends('main')
@section('title', 'Profile')
<style>
    body{
        background-color: rgb(243, 243, 243) !important;
    }
    aside{
        height: 240px;
    }
</style>
@section('content')
  <div class='new_article container mx-auto d-flex justify-content-between  row  py-4'>
    <aside class="col-3 bg-white px-0 py-1 rounded-2 shadow-sm">
      <div class='aside_item'>
        <a href="{{route('profile')}}" class='aside_link px-5'><i class="bi bi-person align-middle fs-4 me-3"></i> My Informations</a>
      </div>
      <div class='aside_item '>
        <a href="{{route('all-product')}}" class='aside_link px-5'><i class="bi bi-list-task align-middle fs-4 me-3"></i> List of product</a>
      </div>
      <div class='aside_item'>
        <a href="{{route('add-product')}}" class='aside_link px-5'><i class="bi bi-plus-lg align-middle fs-4 me-3"></i> Add Product</a>
      </div>
      <div class='aside_item'>
        <a href="#" class='aside_link px-5'> <i class="bi bi-box2 align-middle fs-4 me-3"></i> My orders</a>
      </div>
    </aside>
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
</div>

@endsection

