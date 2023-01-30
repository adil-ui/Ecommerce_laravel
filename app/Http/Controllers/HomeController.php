<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Product;

class HomeController extends Controller
{
    public function index() {
        //$products = Product::orderBy('created_at', 'DESC')->limit(20)->get();
        $womens = DB::table('products')->orderBy('created_at', 'desc')->where('category_id', 1)->limit(4)->get();
        $mens = DB::table('products')->orderBy('created_at', 'desc')->where('category_id', 2)->limit(4)->get();
        $kids = DB::table('products')->orderBy('created_at', 'desc')->where('category_id', 3)->limit(4)->get();

        return view('home.home', ['womens' => $womens, 'mens' => $mens , 'kids' => $kids]);

    }

}
