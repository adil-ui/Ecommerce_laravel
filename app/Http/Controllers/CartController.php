<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        return view('cart.cart');
    }

    public function addToCart($productId)
    {
        $product = Product::find($productId);
        $productArray = (array) $product;
        $cartItem = array_merge($productArray, ["quantity" => 1, "total" => $product->promotion_price]);
        if (cookie("cart")) {
            $cartItems = json_decode(cookie("cart")->getValue());
            $itemKey = array_search($productArray, $cartItems);
            if ($itemKey) {
                $cartItems[$itemKey]["quantity"]++;
                $cartItems[$itemKey]["total"] = $cartItems[$itemKey]["quantity"] * $product->promotion_price;
            } else {
                array_push($cartItems, $cartItem);
            }
            cookie("cart", json_encode($cartItems), 0);
        } else {
            $cartItems = [$cartItem];
            cookie("cart", json_encode($cartItems), 0);
        }
        return back();
    }
}
