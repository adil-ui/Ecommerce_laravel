@extends('admin.admin_layout')
@section('title', 'Edit Product')

@section('form')
    <div class="col-8 bg-white  py-4 rounded-2 shadow-sm">
        <form class="row g-3 col-10 mx-auto mt-1" action='{{ route('post-edit', ['id' => $product->id]) }}' method='POST'
            enctype="multipart/form-data">
            @csrf
            <div class="col-md-6 mb-2">
                <label class="form-label">Title <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name='title' value='{{ $product->title }}' required>
            </div>
            <div class="col-md-6 ">
                <label class="form-label"> Category <span class="text-danger">*</span></label>
                <select class="form-select" aria-label="Default select example" name='category'>
                    <option value="{{ $product->category->id }}">{{ $product->category->title }}</option>
                    @foreach ($categories as $category)
                        @if ($category->id != $product->category->id)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-2">
                <label for="formFile" class="form-label">Picture</label>
                <input class="form-control mb-1" type="file" id="formFile" name="picture">
                <img src="/{{ $product->picture }}" alt="" class="edit_img">
            </div>
            <div class="mb-1">
                <label class="form-label">Description <span class="text-danger">*</span></label>
                <textarea name="description" class="form-control" rows="4" required>{{ $product->description }}</textarea>
            </div>
            <div class="col-md-4">
                <label class="form-label">price (dh) <span class="text-danger">*</span></label>
                <input type="number" class="form-control" name='price' value="{{ $product->price }}" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Discount Rate (%)</label>
                <input type="number" class="form-control" value="{{ $product->discount_rate }}" name='discount'>
            </div>
            <div class="col-md-4">
                <label class="form-label">Stock <span class="text-danger">*</span></label>
                <input type="number" class="form-control" name='stock' value="{{ $product->stock }}" required>
            </div>
            <div class="col-12 d-flex justify-content-end mt-4">
                <button type="submit" class="btn btn-success px-4">Update</button>
            </div>
        </form>
    </div>
@endsection
