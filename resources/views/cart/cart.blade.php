@extends('main')
@section('title', 'Cart')
<style>
    body {
        background-color: rgb(243, 243, 243) !important;
    }

    .cart_img {
        width: 150px;
        height: 150px;
    }

    .cart_command {
        height: 200px;
    }

    .description {
        text-align: justify
    }
</style>
@section('content')
    <section class="my-4 container mx-auto row d-flex justify-content-between">
        @foreach (Cart::content() as $item)
        @endforeach
        <div class="col-8 bg-white rounded-1 py-2 shadow-sm">
            @if (Cart::count() == 0)
                <div class="d-flex justify-content-center align-items-center">
                    <h4 class="mb-4">Your cart is empty</h4>
                    <a href="{{ route('home') }}" class="btn btn-warning px-4">Purchase Now</a>
                </div>
            @else
                @foreach (Cart::content() as $item)
                    @if (Cart::count() > 1)
                        <div class="col-12 mt-2 p-4 shadow-sm">
                        @else
                            <div class="col-12 mt-2 p-4">
                    @endif
                    <div class="row">
                        <div class="col-3">
                            <img src="/{{ $item->options->picture }}" alt="" class="cart_img">
                        </div>
                        <div class="col-6">
                            <h5 class="fw-bolder mb-3">{{ $item->name }}</h5>
                            <small
                                class="col-11 description">{{ Str::substr($item->options->description, 0, 110) }}...</small>
                        </div>
                        <div class="col-3 text-end">
                            <h4 class="text-warning ">{{ $item->price }}.00 Dh</h4>
                            <h5 class="text-success ">- {{ $item->options->discount_rate }}%</h5>
                            <h6 class="text-danger "><del>{{ $item->options->ancient_price }}.00 Dh</del> </h6>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <div>
                            <a href="{{ route('cart-delete-item', ['rowId' => $item->rowId]) }}"
                                class="btn btn-danger px-4"><i class="bi bi-trash3-fill me-1 align-midlle"></i> Delete</a>
                        </div>
                        <div>
                            <a href="{{ route('decrement', ['rowId' => $item->rowId]) }}" class="btn btn-warning">-</a>
                            <span class="px-3">{{ $item->qty }}</span>
                            <a href="{{ route('increment', ['rowId' => $item->rowId]) }}" class="btn btn-warning">+</a>
                        </div>

                    </div>
        </div>
        @endforeach
        @endif
        </div>
        <div class="cart_command col-3 bg-white rounded-1 p-4 shadow-sm">
            <h5 class="fw-bolder mb-4">Cart Summary </h5>
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="my-4 fw-semibold">Total: </h5>
                <h4 class="text-warning">{{ Cart::priceTotal() }} Dh</h4>
            </div>
            <a href="{{ route('checkout') }}" class="btn btn-warning">Command</a>
        </div>
    </section>

@endsection
