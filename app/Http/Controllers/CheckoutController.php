<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{

    public function index(Request $request)
    {
        if($request-> isMethod('post')){
            $order = Order::create([
                'user_id' => Auth::user()->id,
                'total' => Cart::priceTotal(),
                'payment_method' => $request->checkout_method,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
            User::where("id", Auth::user()->id)->update([
                'adress' => $request->address,
            ]);

            foreach (Cart::content() as $cartItem) {
                $orderItem = new OrderItem();
                $orderItem->order_id = $order->id;
                $orderItem->title = $cartItem->name;
                $orderItem->qty = $cartItem->qty;
                $orderItem->unique_price = $cartItem->price;
                $orderItem->total_price = $cartItem->price * $cartItem->qty;
                $orderItem->picture = $cartItem->options->picture;
                $orderItem->save();
            }
            session()->flash('success', 'Order Created');
            Cart::destroy();
            return redirect('/home');

        }
        return view('checkout.checkout');
    }
}
