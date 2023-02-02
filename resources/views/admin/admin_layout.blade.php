@extends('main')
<style>
    body {
        background-color: rgb(243, 243, 243) !important;
    }

    aside {
        height: 240px;
    }
    .edit_img {
        width: 130px;
        height: 130px;
    }
</style>
@section('content')
    <div class=" bg-opacity-25">
        <div class='container mx-auto d-flex justify-content-between row py-4'>
            <aside class="col-3 bg-white px-0 py-1 rounded-2 shadow-sm">
                <div class='aside_item'>
                <a href="{{route('profile')}}" class='aside_link px-5'><i class="bi bi-person align-middle fs-4 me-3"></i> My Account</a>
                </div>
                <div class='aside_item '>
                <a href="{{route('all-product')}}" class='aside_link px-5'><i class="bi bi-list-task align-middle fs-4 me-3"></i> List of product</a>
                </div>
                <div class='aside_item'>
                <a href="{{route('add-product')}}" class='aside_link px-5'><i class="bi bi-plus-lg align-middle fs-4 me-3"></i> Add Product</a>
                </div>
                <div class='aside_item'>
                <a href="{{route('all-orders')}}" class='aside_link px-5'> <i class="bi bi-box2 align-middle fs-4 me-3"></i> My orders</a>
                </div>
            </aside>

            @yield('form')
        </div>
    </div>
@endsection
