@extends('main')
@section('title', "Woman's")

@section("content")
    <section class="Product_category container mx-auto mt-5 mb-4 d-flex justify-content-center align-items-center " >
        <h2 style="font-size: 46px" class="text-white fw-bolder">Check Women's Products</h2>
    </section>
    <section class="container mx-auto py-5 row gx-4 gy-5">
        <h2 class="fw-bolder text-center">Women's Products</h2>
        @foreach ($womens as $women)
            <div class="col-md-3 mt-4 mb-5">
                <div class="product_card shadow position-relative" >
                    <div class="position-absolute bg-warning px-3 py-1 rounded-5 discount">-{{$women->discount_rate}}%</div>
                    <div class="product_img">
                        <a href="{{ route('details', ['id' => $women->id])}}"><img src="/{{$women->picture}}" class="" alt="product_img"></a>
                    </div>
                    <div class="p-4">
                        <a href="{{ route('details', ['id' => $women->id])}}"><h5 class="fw-semibold mb-3">{{$women->title}}</h5></a>
                        <small class="">{{Str::substr($women->description, 0, 40)}}...</small>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <h6 class="text-danger"><del>{{$women->price}}.00 Dh</del> </h6>
                            <h5 class="text-bold" style="color:#FFB100; font-size:22px">{{$women->promotion_price}}.00 Dh</h5>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <a href="{{ route('add-cart', ['productId' => $women->id])}}" class="btn btn-warning fw-semibold">Add To Cart <i class="ms-2 bi bi-cart-plus-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endsection
