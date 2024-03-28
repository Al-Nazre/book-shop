<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function index(){
        $session_id = Session::get('session_id');
        $totalPrice = 0;
        $qty = 0;
        if(Auth::check()){

            $cart_items = Cart::where('user_id',Auth::id())->get();
       
            foreach($cart_items as $item){
                    $discount = 100 - $item->book->discount;
                    $d_price = ($item->book->price/100)*$discount;
                    $qty++;
                    $totalPrice += $d_price;
            }
            
        }
        else
        {
            $cart_items = Cart::where('session_id', $session_id)->get();
            foreach($cart_items as $item){
            $discount = 100 - $item->book->discount;
                    $d_price = ($item->book->price/100)*$discount;
                    $qty++;
                    $totalPrice += $d_price;
            }

        }
        return view('website.cart',compact('cart_items','totalPrice','qty'));
    }

    public function addToCart(Request $request){
        $book_id = $request->input('book_id');
        $session_id = Session::get('session_id');
        if(empty($session_id)){
            $session_id = Str::random(40);
            Session::put('session_id',$session_id);
        }

        $book = Book::where('id',$book_id)->first();
        if($book){
            if(Cart::where('book_id',$book_id)->where('session_id', $session_id)->exists())
            {
                return response()->json(['status'=> 'Book Already added']);
            }
            else
            {
                if(Auth::check())
                {
                    Cart::create([
                        'user_id' => Auth::id(),
                        'book_id' => $book_id,
                        'qty' => 1,
                        'session_id' => $session_id,
                    ]);
                    return response()->json(['status'=> $book->name.' is added to cart']);

                
                }
                else
                {
                    Cart::create([
                        'book_id' => $book_id,
                        'qty' => 1,
                        'session_id' => $session_id,
                    ]);
                    return response()->json(['status'=> $book->name.' is added to cart']);
                }                                  

            }
          
        }
        else
        {
            return response()->json(['status'=> 'No such book']);
        }
            
    
    }

    public function deletItem(Request $request) 
    {
        $item_id = $request->item_id;
        $item = Cart::where('id',$item_id)->first();
        if($item){
            $item->delete();
            // return response()->json(['status'=> $item->book->name.' deleted']);
        }
        else{
            return response()->json(['status'=>'No item to delete']);

        }
    }
}
