@extends('main')
@section('title', 'Add Article')
<style>
    body{
        background-color: rgb(243, 243, 243) !important;
    }
    aside{
        height: 240px;
    }
</style>
@section("content")
<div class=" bg-opacity-25">
    <div class='new_article container mx-auto d-flex justify-content-between  row  py-4'>
        <aside class="col-3 bg-white px-0 py-1 rounded-2">
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
        <div class="col-8 bg-white  py-4 rounded-2">
            <form class="row g-3 col-10 mx-auto mt-1" action='{{route('post-product')}}' method='POST' enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 mb-2">
                  <label class="form-label">Title <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name='title' required>
                </div>
                <div class="col-md-6 ">
                  <label class="form-label"> Category <span class="text-danger">*</span></label>
                  <select class="form-select" aria-label="Default select example" name='category'>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>                     
                    @endforeach 
                  </select>
                </div>
                <div class="mb-2">
                    <label for="formFile" class="form-label">Picture <span class="text-danger">*</span></label>
                    <input class="form-control" type="file" id="formFile" name="picture" required>
                </div>
                <div class="mb-2">
                  <label class="form-label">Description <span class="text-danger">*</span></label>
                  <textarea name="description" class="form-control" rows="4" required></textarea>
                </div>
                
                <div class="col-md-4">
                  <label class="form-label">price (dh) <span class="text-danger">*</span></label>
                  <input type="number" class="form-control"  name='price' required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Discount rate (%)</label>
                    <input type="number" class="form-control"  name='discount'>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Stock <span class="text-danger">*</span></label>
                    <input type="number" class="form-control"  name='stock' required>
                </div>
                <div class="col-12 d-flex justify-content-end mt-4">
                  <button type="submit" class="btn btn-primary ">Submit</button>
                </div>
              </form>
        </div>
    </div>
</div>


@endsection
