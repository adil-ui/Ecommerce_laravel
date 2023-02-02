@extends('admin.admin_layout')
@section('title', 'All Product')

@section('form')
    <div class="col-8 bg-white  py-4 rounded-2 shadow-sm">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" class="fs-6">#</th>
                    <th scope="col" class="fs-6">Picture</th>
                    <th scope="col" class="fs-6">Title</th>
                    <th scope="col" class="fs-6">Price</th>
                    <th scope="col" class="fs-6">Discount</th>
                    <th scope="col" class="fs-6">Promo Price</th>
                    <th scope="col" class="fs-6">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="">
                        <th class='pt-4' scope="row">{{ $product->id }}</th>
                        <td class='pt-3'><img src="{{ $product->picture }}" alt="product_img" width="50" height="50" class="rounded-circle mx-auto"></td>
                        <td class='pt-4'>{{ $product->title }}</td>
                        <td class='pt-4'>{{ $product->price }} Dh</td>
                        <td class='pt-4'>{{ $product->discount_rate }}%</td>
                        <td class='pt-4'>{{ $product->promotion_price }} Dh</td>
                        <td>
                            <a href="{{ route('edit-product', ['id' => $product->id]) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('delete-product', ['id' => $product->id]) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
