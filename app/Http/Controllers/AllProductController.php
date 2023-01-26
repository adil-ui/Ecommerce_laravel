<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;

class AllProductController extends Controller
{
    public function index() {
        //$products = Product::orderBy('created_at', 'DESC')->limit(20)->get();
        $products = DB::table('products')->orderBy('created_at', 'desc')->limit(20)->get();
        return view('admin.all-product', ['products' => $products]);
    }
}
