<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Product;

class HomeController extends Controller
{
    public function index() {
        //$products = Product::orderBy('created_at', 'DESC')->limit(20)->get();
        $products = DB::table('products')->orderBy('created_at', 'desc')->limit(8)->get();
        return view('home.home', ['products' => $products]);
        
    }
}
