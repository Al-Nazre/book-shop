<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function authenticated()
    {
        if(Auth::user()->role_as == 'admin') //1 = Admin Login
        {
             $session_id = Session::get('session_id');
            $cart_items = Cart::where('session_id',$session_id)->get();
            if($cart_items){
                foreach($cart_items as $cart){
                    $cart->update([
                        'user_id'=>Auth::id(),
                    ]);
                }
            
            }
            return redirect('dashboard')->with('status','Welcome to your dashboard');
            

        }
        elseif(Auth::user()->role_as == 'user') // Normal or Default User Login
        {
            $session_id = Session::get('session_id');
            $cart_items = Cart::where('session_id',$session_id)->get();
            if($cart_items){
                foreach($cart_items as $cart){
                    $cart->update([
                        'user_id'=>Auth::id(),
                    ]);
                }
            
            }
            return redirect('/');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
