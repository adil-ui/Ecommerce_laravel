<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use Exception;

class AddProductController extends Controller
{
    private $isApi;
    public function __construct(Request $request)
    {
        $this->isApi = $request->segment(1) == "api" ? true : false;
    }
    public function addProduct(Request $request) {
        $categories = DB::table('categories')->get();
        if($request->isMethod("post")) {
            $product = new Product;
            $product->title = $request->title;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->discount_rate = $request->discount;
            $product->promotion_price = $product->price - ($product->price * $product->discount_rate)/100;
            $product->stock = $request->stock;
            $product->category_id = $request->category;
            $product->created_at = Carbon::now();
            $product->updated_at = Carbon::now();
            if($request->hasFile('picture') && $request->file('picture')->isValid()) {
                $product->picture = 'storage/' . $request->picture->store('product/images');
            }
            try {
                $product->save();
                if ($this->isApi) {
                    return $product;
                }
            } catch (Exception $e) {
                return response()->json(["error" => "An error occurred " . $e->getMessage()], 404);
            }
            $product->save();
        }
        return view('admin.add-product', ["categories" => $categories]);
    }

}
