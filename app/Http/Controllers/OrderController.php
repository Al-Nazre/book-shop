<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderList;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function checkout(){

        if(Auth::check()){

            
            $old_cart_items = Cart::where('user_id', Auth::id())->get();
            foreach($old_cart_items as $item){
                if($item->book->qty < $item->qty){
                    $item->delete();
                }
            }
            $cart_items = Cart::where('user_id', Auth::id())->get();
            $totalPrice = $this->totalPrice(Auth::id());
            $qty = $cart_items->sum('qty');
            
            
        return view('website.checkout',compact('cart_items','qty','totalPrice'));
        
        }
        else{
            return redirect('/login')->with('status', 'Login First to Checkout');
        }
    }

    function totalPrice($user_id){
        
            $totalPrice=0;
            $cart_items = Cart::where('user_id', $user_id)->get();
            foreach($cart_items as $item){
                $discount = 100 - $item->book->discount;
                $d_price = ($item->book->price/100)*$discount;
                $itemTotalPrice = $d_price*$item->qty;
                $totalPrice += $itemTotalPrice;
            }
            return $totalPrice;
    }

    public function create(Request $request){
        if(!UserInfo::where('user_id',Auth::id())->exists()){
            UserInfo::create([
            'user_id'=>Auth::id(),
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'phone'=>$request->phone,
            ]);
        }
        $user_address = Address::where('user_id',Auth::id())->first();
        if(!$user_address){
            Address::create([
                'user_id'=>Auth::id(),
                'address'=> $request->address,
                'city'=> $request->city,
                'house'=> $request->house,
                'zip'=> $request->zip,
            ]);
        }
        else{
            
            $user_address->update([
            'user_id'=>Auth::id(),
            'address'=> $request->address,
            'city'=> $request->city,
            'house'=> $request->house,
            'zip'=> $request->zip,
            ]);
        }
       
        
        $user = User::where('id', Auth::id())->first();
        $order = Order::create([
            'name'=> $request->first_name.' '.$request->last_name,
            'order_date'=> Carbon::now()->toDateString(),
            'order_no'=>'order'.rand(1111,9999),
            'tracking_no'=>'T-'.rand(1111,9999),
            'user_id' => Auth::id(),
            'email' => $user->email,
            'phone' => $user->info->phone,
            'address'=> $request->address,
            'city'=> $request->city,
            'house'=> $request->house,
            'zip'=> $request->zip,
            'total_price' => $this->totalPrice(Auth::id()),
            'messeage'=> $request->messeage,
        ]);
         
        $cart_items = Cart::where('user_id', Auth::id())->get();
    
        foreach ($cart_items as $item) {
            $discount = 100 - $item->book->discount;
            $d_price = ($item->book->price/100)*$discount;
            OrderList::create([
                'order_id' =>$order->id,
                'book_id'=>$item->book_id,
                'qty'=> $item->qty,
                'price'=> $d_price,
            ]);
        }
        Cart::where('user_id', Auth::id())->delete();
        return redirect('/')->with('status', 'Your Order has been Created!');
    }

    public function myOrderView(){
        $orders = Order::where('user_id', Auth::id())->get();
        return view('website.myOrder', compact('orders'));
    }
   
    
}
