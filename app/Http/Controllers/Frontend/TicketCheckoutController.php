<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class TicketCheckoutController extends Controller
{
    public function createCheckoutSession(Request $request)
    {
        // Set your secret key. Remember to switch to your live secret key in production!
        \Stripe\Stripe::setApiKey(env('STRIPE_SK'));
    
        $lineItems = [];
        $stampType = $request->input('stampType');
        $chargeAmount = $request->input('chargeAmount') ;
        $stampId = $request->input('stampId') ;
        $chargeAmount_cents = $request->input('chargeAmount') * 100; // Convert to cents
    
        // Determine the product details based on the request
        $lineItems[] = [
            'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                    'name' => $stampType . ' Stamp', // Use dot (.) for string concatenation
                ],
                'unit_amount' => $chargeAmount_cents,
            ],
            'quantity' => 1,
            
        ];
    
        session()->put('sess_lineItems', [
            'stamp_id'=>$stampId,
            'stamp_type' => $stampType, 
            'charge_amount' => $chargeAmount
        ]);
    
        // Create a checkout session
        $checkoutSession = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => url('charge_success'),
            'cancel_url' => url('charge_cacelled'),
        ]);
    
        return response()->json(['id' => $checkoutSession->id]);
    }
    

    
}
