<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
class paymentController extends Controller
{
    public function  index()
    {
        return view('payment_ui');
    }

    public  function  payment(Request $request)
    {
        $pay = Stripe::charges()->create(
            [
              'amount' => 100,
              'currency' => 'USD',
              'source' => $request->stripeToken,
              'description' => 'order',
              'receipt_email' => 'tushar@gmail.com',
              'metadata' => [

              ],
            ]
        );

        return 'it`s  work';
    }

}
