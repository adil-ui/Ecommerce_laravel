<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;

class AllProductController extends Controller
{
    private $isApi;
    public function __construct(Request $request)
    {
        $this->isApi = $request->segment(1) == "api" ? true : false;
    }
    public function index() {
        //$products = Product::orderBy('created_at', 'DESC')->limit(20)->get();
        $products = DB::table('products')->orderBy('created_at', 'desc')->get();
        if ($this->isApi) {
            return response()->json(['products' => $products]);
        }
        return view('admin.all-product', ['products' => $products]);
    }
}
