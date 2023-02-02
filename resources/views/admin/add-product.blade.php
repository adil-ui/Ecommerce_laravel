@extends('admin.admin_layout')
@section('title', 'Add Article')

@section('form')
    <div class="col-8 bg-white  py-4 rounded-2 shadow-sm">
        <form class="row g-3 col-10 mx-auto mt-1" action='{{ route('post-product') }}' method='POST'
            enctype="multipart/form-data">
            @csrf
            <div class="col-md-6 mb-2">
                <label class="form-label">Title <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name='title' required>
            </div>
            <div class="col-md-6 ">
                <label class="form-label"> Category <span class="text-danger">*</span></label>
                <select class="form-select" aria-label="Default select example" name='category'>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
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
                <input type="number" class="form-control" name='price' required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Discount rate (%)</label>
                <input type="number" class="form-control" name='discount'>
            </div>
            <div class="col-md-4">
                <label class="form-label">Stock <span class="text-danger">*</span></label>
                <input type="number" class="form-control" name='stock' required>
            </div>
            <div class="col-12 d-flex justify-content-end mt-4">
                <button type="submit" class="btn btn-primary ">Submit</button>
            </div>
        </form>
    </div>



@endsection
