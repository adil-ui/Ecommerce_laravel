<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class DetailsController extends Controller
{
    private $isApi;
    public function __construct(Request $request)
    {
        $this->isApi = $request->segment(1) == "api" ? true : false;
    }

    public function getProduct(Request $request, $id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        if ($this->isApi) {
            return response()->json(['product' => $product, "categories" => $categories]);
        }
        return view("details.details", ['product' => $product]);
    }
}