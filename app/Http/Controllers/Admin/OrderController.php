<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $all_orders = Order::all();
    return view('admin.order.index', compact('all_orders'));
    }

    public function orderView($id){
        $order = Order::find($id);
        return view('admin.order.view',compact('order'));
    }

    public function updateStatus(Request $request, $id){
        $order = Order::find($id);
        
        $order->update([
            'status' =>$request->status,
        ]);
        return redirect()->back()->with('status','Status Updated.');
    }
   
    
}
