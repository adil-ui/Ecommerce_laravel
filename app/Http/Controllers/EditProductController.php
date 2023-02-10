<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditProductController extends Controller
{
    private $isApi;
    public function __construct(Request $request)
    {
        $this->isApi = $request->segment(1) == "api" ? true : false;
    }
    public function index(Request $request, $id)
    {
        $categories = DB::table('categories')->get();
        $product = Product::find($id);
        return view("admin.edit-product", ['product' => $product], ["categories" => $categories]);
    }
    public function updateProduct(Request $request, $id)
    {
        if ($request->isMethod('post') || $request->isMethod("put")) {
            $product = Product::find($id);
            $picture = $product->picture;
            if ($request->hasFile('picture') && $request->file('picture')->isValid()) {
                $picture = "storage/" . $request->picture->store('product/images');
            }
            Product::where("id", $product->id)->update([
                "title" => $request->title,
                "description" => $request->description,
                "price" => $request->price,
                "discount_rate" => $request->discount,
                "picture" => $picture,
                "promotion_price" => $request->price - ($request->price * $request->discount) / 100,
                "updated_at" => Carbon::now(),
            ]);
            if ($this->isApi) {
                return response()->json(['success' => 'updated'], 200);
            }
            return redirect("/all-product");
        }
        return view('admin.edit-product');
    }
}