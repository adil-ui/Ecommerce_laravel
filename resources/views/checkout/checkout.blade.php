@extends('main')
@section('title', 'Command')
<style>
    body{
        background-color: rgb(243, 243, 243) !important;
    }
    .cart_img{
        width: 150px;
        height: 150px;
    }

    .cart_command{
        height: 200px;
    }
    .description{
        text-align: justify
    }

</style>
@section("content")
    <section class="my-4 container mx-auto row d-flex justify-content-between">
        <div class="col-7 bg-white shadow-sm rounded-1 py-4" style="height: 100%">
            <form class="row g-3 col-10 mx-auto " action='{{route('post-checkout')}}' method='POST' enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 mb-3">
                  <label class="form-label fw-semibold">Name</label>
                  <input type="text" class="form-control" name='name' value='{{Auth::user()->name}}'>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label fw-semibold">Phone</label>
                    <input type="number" class="form-control"  name='phone' value='{{Auth::user()->phone}}'>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label fw-semibold">Address</label>
                    <input type="text" class="form-control"  name='address' value='{{Auth::user()->adress}}'>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label fw-semibold">Shipping Method</label>
                    <select class="form-select" aria-label="Default select example" name='checkout_method'>
                        <option value="cash">Cash</option>
                        <option value="paypal">Paypal</option>
                        <option value="carte">Card</option>
                      </select>
                </div>
                <div class="col-md-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-warning px-4 fw-semibold  py-2 shadow-sm">Checkout</button>
                </div>
                @if (session('success'))
                <p class="alert alert-success text-center">{{ session('success')}}</p>
                @endif

            </form>
        </div>
        <div class="col-4 bg-white shadow-sm rounded-1 px-4" style="height: 100%">
            <div class="pt-4">
                <h5 class="fw-bolder mb-2">Order Summary </h5>
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="my-4 fw-semibold">Total: </h5>
                    <h4 class="text-warning fw-bold"> {{ Cart::priceTotal() }} Dh </h4>
                </div>

            </div>
            <hr class="pb-3">
            @foreach (Cart::content() as $item)
                <div class="row pb-4">
                    <div class="col-4">
                        <img src="/{{ $item->options->picture }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h6 class="fw-semibold mb-2">{{ $item->name }}</h6>
                        <h6 class="text-warning fw-semibold">{{ $item->price }}.00 Dh</h6>
                        <p class="fw-semibold text-success">Qty: {{ $item->qty }}</p>
                        <a href="{{ route('cart-delete-item', ['rowId' => $item->rowId ]) }}" class="btn btn-white p-0 m-0"><i class="bi bi-trash3-fill me-1 align-midlle"></i> Delete </a>
                    </div>
                </div>
            @endforeach


        </div>
    </section>

@endsection



