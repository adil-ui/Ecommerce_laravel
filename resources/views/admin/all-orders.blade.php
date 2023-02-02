@extends('admin.admin_layout')
@section('title', 'My Orders')

@section('form')
    <div class="col-8 bg-white  py-4 rounded-2 shadow-sm">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" class="fs-6">#</th>
                    <th scope="col" class="fs-6">Picture</th>
                    <th scope="col" class="fs-6">Title</th>
                    <th scope="col" class="fs-6">Quantity</th>
                    <th scope="col" class="fs-6">Price</th>
                    <th scope="col" class="fs-6">Total Price</th>
                    <th scope="col" class="fs-6">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orderItems as $orderItem)
                    <tr class="">
                        <th class='pt-4' scope="row">{{ $orderItem->id }}</th>
                        <td class='pt-3'><img src="{{ $orderItem->picture }}" alt="product_img" width="50" height="50" class="rounded-circle mx-auto"></td>
                        <td class='pt-4'>{{ $orderItem->title }}</td>
                        <td class='pt-4 text-center'>{{ $orderItem->qty }}</td>
                        <td class='pt-4'>{{ $orderItem->unique_price }} Dh</td>
                        <td class='pt-4'>{{ $orderItem->total_price }} Dh</td>
                        <td>
                            <a href="{{ route('delete-order', ['id' => $orderItem->id]) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection
