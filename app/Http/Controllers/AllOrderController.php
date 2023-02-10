<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AllOrderController extends Controller
{
    private $isApi;
    public function __construct(Request $request)
    {
        $this->isApi = $request->segment(1) == "api" ? true : false;
    }

    /*public function deleteOrder($id){
        OrderItem::find($id)->delete();
        return redirect()->route('all-orders');
    }*/
    public function OrdersList ($id){
        if ($this->isApi) {
            $orders = DB::table('orders')->where('user_id', $id)->orderBy('created_at', 'desc')->get();
            return response()->json(['orders' => $orders]);
        }
        $orders = DB::table('orders')->where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        return view('admin.all-orders', ['orders' => $orders]);
    }
    public function OrderDetails($id){
        $orderItems = DB::table('order_items')->where('order_id',$id)->orderBy('created_at', 'desc')->get();
        if ($this->isApi) {
            return response()->json(['orderItems' => $orderItems]);
        }
        return view('admin.order-details', ['orderItems' => $orderItems]);
    }
    public function allOrders (){
        if ($this->isApi) {
            $orders = DB::table('orders')->orderBy('created_at', 'desc')->get();
            return response()->json(['orders' => $orders]);
        }
        $orders = DB::table('orders')->where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        return view('admin.all-orders', ['orders' => $orders]);
    }
}
