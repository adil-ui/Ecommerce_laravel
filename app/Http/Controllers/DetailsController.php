<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DetailsController extends Controller
{
    private $isApi;
    public function __construct(Request $request)
    {
        $this->isApi = $request->segment(1) == "api" ? true : false;
    }

    public function getProduct(Request $request, $id) {
        $product = Product::find($id);
        if ($this->isApi) {
            return response()->json(['product' => $product]);
        }
        return view("details.details", ['product' => $product]);
    }
}
