<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DeleteProductController extends Controller
{
    public function index ($id){
        Product::find($id)->delete();
        return redirect()->route('all-product');
    }

}
