<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DetailsController extends Controller
{
    public function getProduct(Request $request, $id) {
        $product = Product::find($id);
        return view("details.details", ['product' => $product]);
    }
}
