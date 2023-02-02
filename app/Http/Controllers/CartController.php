<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
        return view('cart.cart');
    }

    public function addToCart($productId)
    {
        $product = Product::find($productId);
        Cart::add(['id' => $productId, 'name' => $product->title, 'qty' => 1, 'price' => $product->promotion_price, 'weight' => 0, 'options' => ['description' => $product->description, 'ancient_price' => $product->price,'discount_rate' => $product->discount_rate, 'picture' => $product->picture]]);
        return back();
    }

    public function deleteCartItem($rowId)
    {
        Cart::remove($rowId);
        return back();
    }

    public function increment($rowId)
    {
        $item = Cart::get($rowId);
        Cart::update($rowId, ['qty' => ++$item->qty]);
        return back();
    }


    public function decrement($rowId)
    {
        $item = Cart::get($rowId);
        Cart::update($rowId, ['qty' => --$item->qty]);
        return back();
    }
}
