<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Product;

class HomeController extends Controller
{
    private $isApi;
    public function __construct(Request $request)
    {
        $this->isApi = $request->segment(1) == "api" ? true : false;
    }
    public function index()
    {
        //$products = Product::orderBy('created_at', 'DESC')->limit(20)->get();
        $womens = DB::table('products')->orderBy('created_at', 'desc')->where('category_id', 1)->limit(4)->get();
        $mens = DB::table('products')->orderBy('created_at', 'desc')->where('category_id', 2)->limit(4)->get();
        $kids = DB::table('products')->orderBy('created_at', 'desc')->where('category_id', 3)->limit(4)->get();
        if ($this->isApi) {
            return response()->json(['womens' => $womens, 'mens' => $mens, 'kids' => $kids]);
        }
        return view('home.home', ['womens' => $womens, 'mens' => $mens, 'kids' => $kids]);

    }

}
