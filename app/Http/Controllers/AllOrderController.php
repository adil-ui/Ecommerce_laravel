<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllOrderController extends Controller
{
    private $isApi;
    public function __construct(Request $request)
    {
        $this->isApi = $request->segment(1) == "api" ? true : false;
    }
    public function index(){
        $orderItems = DB::table('order_items')->orderBy('id', 'desc')->get();
        if ($this->isApi) {
            return response()->json(['orderItems' => $orderItems]);
        }
        return view('admin.all-orders', ['orderItems' => $orderItems]);
    }
    public function deleteOrder($id){
        OrderItem::find($id)->delete();
        return redirect()->route('all-orders');
    }
}
