<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class CardCheckoutController extends Controller
{
    public function createCheckoutSession(Request $request)
    {
        // Set your secret key. Remember to switch to your live secret key in production!
        Stripe::setApiKey(env('STRIPE_SK'));

        $lineItems = [];

        // Determine the product details based on the request
        if ($request->stampType === 'golden') {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Golden Stamp',
                    ],
                    'unit_amount' => 1000, // $10.00
                ],
                'quantity' => 1,
            ];
        } elseif ($request->stampType === 'silver') {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Silver Stamp',
                    ],
                    'unit_amount' => 1000, // $10.00
                ],
                'quantity' => 1,
            ];
        }elseif ($request->stampType === 'bronze') {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Silver Stamp',
                    ],
                    'unit_amount' => 1000, // $10.00
                ],
                'quantity' => 1,
            ];
        }

        session()->put('sess_lineItems', $lineItems);
        // Create a checkout session
        $checkoutSession = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => url('/chargplan?status=success&session_id={CHECKOUT_SESSION_ID}'),
            'cancel_url' => url('/chargplan?status=canceled&session_id={CHECKOUT_SESSION_ID}'),
        ]);

        return response()->json(['id' => $checkoutSession->id]);
    }
}
