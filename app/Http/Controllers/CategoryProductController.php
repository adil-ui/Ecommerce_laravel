<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryProductController extends Controller
{
    public function getWomenProduct (){
        $womens = DB::table('products')->orderBy('created_at', 'desc')->where('category_id', 1)->get();
        return view('categories.women-category', ['womens' => $womens]);
    }
    public function getMenProduct (){
        $mens = DB::table('products')->orderBy('created_at', 'desc')->where('category_id', 2)->get();
        return view('categories.men-category', ['mens' => $mens]);
    }
    public function getKidProduct (){
        $kids = DB::table('products')->orderBy('created_at', 'desc')->where('category_id', 3)->get();
        return view('categories.kid-category', ['kids' => $kids]);
    }
    public function getAllProduct (){
        $products = DB::table('products')->orderBy('created_at', 'desc')->get();
        return view('categories.our-product', ['products' => $products]);
    }
}
