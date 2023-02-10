@extends('admin.admin_layout')
@section('title', 'My Orders')

@section('form')
    <div class="col-8 bg-white  py-4 rounded-2 shadow-sm">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" class="fs-6">#</th>
                    <th scope="col" class="fs-6">Total</th>
                    <th scope="col" class="fs-6">Payment Method</th>
                    <th scope="col" class="fs-6">Date</th>
                    <th scope="col" class="fs-6">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr class="">
                        <th class='pt-4' scope="row">{{ $order->id }}</th>
                        <td class='pt-4'>{{ $order->total }}</td>
                        <td class='pt-4 text-center'>{{ $order->payment_method }}</td>
                        <td class='pt-4'>{{ $order->created_at }} Dh</td>
                        <td>
                            <a href="{{ route('order-details', ['id' => $order->id]) }}" class="btn btn-warning">Details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
