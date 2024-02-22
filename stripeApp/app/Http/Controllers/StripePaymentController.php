<?php

namespace App\Http\Controllers;

use App\Models\stripeModel;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Stripe;

class StripePaymentController extends Controller
{
    public function stripe()
    {
        return view('welcome');
    }
    // public function stripePost(Request $request)
    // {
    //     Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    // }
    public function stripeCharge(Request $request)
    {
        $stripe = new \Stripe\StripeClient(
            env('STRIPE_SECRET')
        );
        if (!$stripe) {
            return $this->errorResponse(false, '', "something went wrong,stripe not Configure", 400);
        }
        $rules = [
            'first_name' => "required",
            'last_name' => "required",
            'email' => "required|email:filter",
            'amount' => "required",
            'number' => "required",
            'exp_month' => "required",
            'exp_year' => "required",
            'cvc' => "required",
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $this->errorResponse(false, $validator->errors(), "validation error", 400);
        }
        $firstName = $request->first_name;
        $lastName = $request->last_name;
        $name = $firstName . ' ' . $lastName;
        $email = $request->email;
        $amount = round(($request->amount) * 100);

        $customer = $stripe->customers->create([
            'name' => $name,
            'email' => $email,
            'description' => 'My First Test Customer',
        ]);
        if (!$customer) {
            return $this->errorResponse(false, '', "something went wrong,Stripe Customer not Configure", 400);
        }
        $token = $stripe->tokens->create([
            'card' => [
                'number' => $request->number,
                'exp_month' => $request->exp_month,
                'exp_year' => $request->exp_year,
                'cvc' => $request->cvc,
            ],
        ]);
        if (!$token) {
            return $this->errorResponse(false, '', "something went wrong in Stripe Card Details, Token not Configure", 400);
        }
        $card = $stripe->customers->createSource(
            $customer->id,
            ['source' => $token->id]
        );
        if (!$card) {
            return $this->errorResponse(false, '', "something went wrong in Stripe Card ", 400);
        }
        $charge = $stripe->charges->create([
            'amount' => $amount,
            'currency' => isset($request->currency_code) ? $request->currency_code : 'usd',
            'source' => $card->id,
            'description' => $name . ' Payment',
            'customer' => $customer->id,
            'capture' => true
        ]);
        if (!$charge) {
            return $this->errorResponse(false, '', "something went wrong,Stripe Charge not Capture", 400);
        }
        $stripe->invoices->create([
            'customer' => $customer->id,
        ]);
        $amount = round(($request->amount) / 100, 2);
        $stripeHistory = new stripeModel;
        $stripeHistory->first_name = $firstName;
        $stripeHistory->last_name = $lastName;
        $stripeHistory->email = $email;
        $stripeHistory->amount = $amount;
        $stripeHistory->currency_code  = isset($request->currency_code) ? $request->currency_code : 'usd';
        $stripeHistory->stripe_card_id = $card->id;
        $stripeHistory->card_last_four = $card->last4;
        $stripeHistory->card_type = $card->brand;
        $stripeHistory->stripe_charge_id = $charge->id;
        $stripeHistory->stripe_response = $charge;
        $stripeHistory->received_date = now();
        $stripeHistory->created_at = now();
        if ($stripeHistory->save()) {
            return view('thank');
        }
    }
}
