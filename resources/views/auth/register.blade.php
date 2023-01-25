@extends('main')
@section('title', 'Register')

@section("content")
<form class="row g-3 col-4 mx-auto mt-2" action='' method='POST' enctype="multipart/form-data">
    <div class="col-md-12 ">
      <label class="form-label">Full Name <span class="text-danger">*</span></label>
      <input type="text" class="form-control" name='name' required>
    </div>
    <div class="col-md-12 ">
        <label class="form-label">Adress</label>
        <input type="text" class="form-control"  name='email'>
    </div>
    <div class="col-md-12 ">
        <label class="form-label">Phone</label>
        <input type="number" class="form-control"  name='phone'>
    </div>
    <div class="">
        <label for="formFile" class="form-label">Picture</label>
        <input class="form-control" type="file" id="formFile" name="picture">
    </div>
    <div class="col-md-12 ">
        <label class="form-label">Email <span class="text-danger">*</span></label>
        <input type="email" class="form-control"  name='email' required>
      </div>
    <div class="col-md-12 ">
      <label class="form-label">Password <span class="text-danger">*</span></label>
      <input type="password" class="form-control"  name='password' required>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection
