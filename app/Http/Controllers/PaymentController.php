<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
class PaymentController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }
    

    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $request->input('price') * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Payment from Fluxystems." 
        ]);
      
        Session::flash('success', 'Payment successful!');
        return redirect('/Thank');
        // return back();
    }
}
