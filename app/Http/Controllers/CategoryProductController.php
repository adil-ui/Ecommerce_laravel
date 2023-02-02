<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryProductController extends Controller
{
    private $isApi;
    public function __construct(Request $request)
    {
        $this->isApi = $request->segment(1) == "api" ? true : false;
    }

    public function getWomenProduct (){
        $womens = DB::table('products')->orderBy('created_at', 'desc')->where('category_id', 1)->get();
        if ($this->isApi) {
            return response()->json(['womens' => $womens]);
        }
        return view('categories.women-category', ['womens' => $womens]);
    }
    public function getMenProduct (){
        $mens = DB::table('products')->orderBy('created_at', 'desc')->where('category_id', 2)->get();
        if ($this->isApi) {
            return response()->json(['mens' => $mens]);
        }
        return view('categories.men-category', ['mens' => $mens]);
    }
    public function getKidProduct (){
        $kids = DB::table('products')->orderBy('created_at', 'desc')->where('category_id', 3)->get();
        if ($this->isApi) {
            return response()->json(['kids' => $kids]);
        }
        return view('categories.kid-category', ['kids' => $kids]);
    }
    public function getAllProduct (){
        $products = DB::table('products')->orderBy('created_at', 'desc')->get();
        if ($this->isApi) {
            return response()->json(['products' => $products]);
        }
        return view('categories.our-product', ['products' => $products]);
    }
}
