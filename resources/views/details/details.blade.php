@extends('main')
@section('title', 'Details')

@section("content")
    <section class="details row d-flex justify-content-around container mx-auto my-5 py-5">
        <div class="col-4">
            <img src="/{{$product->picture}}" alt="" style='width: 400px; height:400px;'>
        </div>
        <div class="col-6 d-flex flex-column justify-content-center">
            <h3 class="fw-bold ">{{$product->title}}</h3>
            <p class="my-4 lh-lg">{{$product->description}}</p>
            <h3 class="text-warning mb-3">{{$product->promotion_price}}.00 Dh</h3>
            <h5 class="text-danger"><del>{{$product->price}}.00 Dh</del></h5>
            <div class="mt-4">
                <a href="{{ route('add-cart', ['productId' => $product->id])}}" class="btn btn-warning fw-semibold">Add To Cart <i class="ms-2 bi bi-cart-plus-fill"></i></a>
            </div>
        </div>

    </section>

@endsection
