@extends('main')
@section('title', 'All Product')
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
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col" class="fs-6">#</th>
                        <th scope="col" class="fs-6">Title</th>
                        <th scope="col" class="fs-6">Picture</th>
                        <th scope="col" class="fs-6">Price</th>
                        <th scope="col" class="fs-6">Discount</th>
                        <th scope="col" class="fs-6">Promo Price</th>
                        <th scope="col" class="fs-6">action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                    <tr class="">
                        <th class='pt-4' scope="row">{{$product->id }}</th>
                        <td class='pt-4'>{{$product->title }}</td>
                        <td class='pt-3'><img src="{{$product->picture }}" alt="product_img" width="50" height="50" class="rounded-circle mx-auto"></td>
                        <td class='pt-4'>{{$product->price }} Dh</td>
                        <td class='pt-4'>{{$product->discount_rate }}%</td>
                        <td class='pt-4'>{{$product->promotion_price }} Dh</td>
                        <td>
                        <a href="{{ route('edit-product', ['id' => $product->id])}}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('delete-product', ['id' => $product->id])}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

