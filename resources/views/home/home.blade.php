@extends('main')
@section('title', 'Home')

@section("content")
    <section class="container hero_section row  py-5 mx-auto">
            <div class="hero_left col-4 d-flex align-items-center px-5 ">
                <div>
                    <h2 class="text-white fw-bold mb-4 hero_left_title">We Are OnlineShop</h2>
                    <button class="btn btn-outline-light px-4 py-2 fw-semibold">Purchase Now!</button>
                </div>
            </div>
            <div class="hero_right col-8 row gx-5 ms-auto">
                <div class="col-6 mb-2">
                    <div class="top_left d-flex align-items-center px-4" >
                        <div class="text-center mx-auto">
                            <a href=""><h3 class="text-white fw-bold mb-4 ">Women</h3></a>
                            <p class="text-white"><i>Best Clothes For Women</i></p>
                            <button class="btn btn-outline-light">Discover More</button>
                        </div>
                    </div>

                </div>
                <div class="col-6 mb-2">
                    <div class="top_right d-flex align-items-center px-4 ">
                        <div class="text-center mx-auto">
                            <a href=""><h3 class="text-white fw-bold mb-4 ">Men</h3></a>
                            <p class="text-white"><i>Best Clothes For Men</i></p>
                            <button class="btn btn-outline-light">Discover More</button>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="bottom_left d-flex align-items-center px-4 ">
                        <div class="text-center mx-auto">
                            <a href=""><h3 class="text-white fw-bold mb-4 ">Kids</h3></a>
                            <p class="text-white"><i>Best Clothes For Kids</i></p>

                            <button class="btn btn-outline-light">Discover More</button>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="bottom_right d-flex align-items-center px-4 ">
                        <div class="text-center mx-auto">
                            <a href=""><h3 class="text-white fw-bold mb-4 ">Accessories</h3></a>
                            <p class="text-white"><i>Best Trend Accessories</i></p>
                            <button class="btn btn-outline-light">Discover More</button>
                        </div>
                    </div>
                </div>

            </div>
    </section>
    <section class="container mx-auto py-5 row gx-4 gy-5">
        <h2 class="fw-bolder ">Women's Latest</h2>
        @foreach ($womens as $woman)
            <div class="col-md-3 mt-4 mb-5">
                <div class="product_card shadow position-relative" >
                    <div class="position-absolute bg-warning px-3 py-1 rounded-5 discount">-{{$woman->discount_rate}}%</div>
                    <div class="product_img">
                        <a href="{{ route('details', ['id' => $woman->id])}}"><img src="/{{$woman->picture}}" class="" alt="product_img"></a>
                    </div>
                    <div class="p-4">
                        <a href="{{ route('details', ['id' => $woman->id])}}"><h5 class="fw-semibold mb-3">{{$woman->title}}</h5></a>
                        <small class="">{{Str::substr($woman->description, 0, 40)}}...</small>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <h6 class="text-danger"><del>{{$woman->price}}.00 Dh</del> </h6>
                            <h5 class="text-bold" style="color:#FFB100; font-size:22px">{{$woman->promotion_price}}.00 Dh</h5>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <a href="{{ route('add-cart', ['productId' => $woman->id])}}" class="btn btn-warning fw-semibold">Add To Cart <i class="ms-2 bi bi-cart-plus-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <h2 class="fw-bolder mt-5 ">Men's Latest</h2>
        @foreach ($mens as $men)
            <div class="col-md-3 mt-4 mb-5">
                <div class="product_card shadow position-relative" >
                    <div class="position-absolute bg-warning px-3 py-1 rounded-5 discount">-{{$men->discount_rate}}%</div>
                    <div class="product_img">
                        <a href="{{ route('details', ['id' => $men->id])}}"><img src="/{{$men->picture}}" class="" alt="product_img"></a>
                    </div>
                    <div class="p-4">
                        <a href="{{ route('details', ['id' => $men->id])}}"><h5 class="fw-semibold mb-3">{{$men->title}}</h5></a>
                        <small class="">{{Str::substr($men->description, 0, 40)}}...</small>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <h6 class="text-danger"><del>{{$men->price}}.00 Dh</del> </h6>
                            <h5 class="text-bold" style="color:#FFB100; font-size:22px">{{$men->promotion_price}}.00 Dh</h5>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <a href="{{ route('add-cart', ['productId' => $men->id])}}" class="btn btn-warning fw-semibold">Add To Cart <i class="ms-2 bi bi-cart-plus-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <h2 class="fw-bolder mt-5 ">Kid's Latest</h2>
        @foreach ($kids as $kid)
            <div class="col-md-3 mt-4 mb-5">
                <div class="product_card shadow position-relative" >
                    <div class="position-absolute bg-warning px-3 py-1 rounded-5 discount">-{{$kid->discount_rate}}%</div>
                    <div class="product_img">
                        <a href="{{ route('details', ['id' => $kid->id])}}"><img src="/{{$kid->picture}}" class="" alt="product_img"></a>
                    </div>
                    <div class="p-4">
                        <a href="{{ route('details', ['id' => $kid->id])}}"><h5 class="fw-semibold mb-3">{{$kid->title}}</h5></a>
                        <small class="">{{Str::substr($kid->description, 0, 40)}}...</small>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <h6 class="text-danger"><del>{{$kid->price}}.00 Dh</del> </h6>
                            <h5 class="text-bold" style="color:#FFB100; font-size:22px">{{$kid->promotion_price}}.00 Dh</h5>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <a href="{{ route('add-cart', ['productId' => $kid->id])}}" class="btn btn-warning fw-semibold">Add To Cart <i class="ms-2 bi bi-cart-plus-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

@endsection
