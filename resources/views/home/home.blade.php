@extends('main')
@section('title', 'Home')

@section("content")
    <section class="container hero_section row  py-5 mx-auto">
            <div class="hero_left col-4 d-flex align-items-center px-5">
                <div>
                    <a href=""><h2 class="text-white fw-bold mb-4 hero_left_title">We Are AdilStore</h2></a>
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
@endsection
