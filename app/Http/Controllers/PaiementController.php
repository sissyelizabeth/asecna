<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Paiement;

class PaiementController extends Controller
{
  
    public $gateway;
  
    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true); 
    }
  
    public function index()
    {
        return view('payment');
    }
  
    public function charge(Request $request)
    {
        if($request->input('submit'))
        {
            try {
                $response = $this->gateway->purchase(array(
                    'amount' => $request->input('amount'),
                    'currency' => env('PAYPAL_CURRENCY'),
                    'returnUrl' => url('paymentsuccess'),
                    'cancelUrl' => url('paymenterror'),
                ))->send();
           
                if ($response->isRedirect()) {
                    $response->redirect(); // automatiquement transféré à l'utilisateur
                } else {
                    // echec
                    return $response->getMessage();
                }
            } catch(Exception $e) {
                return $e->getMessage();
            }
        }
    }
  
    public function payment_success(Request $request)
    {
        // la transaction a été approuvé
        if ($request->input('paymentId') && $request->input('PayerID'))
        {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();
          
            if ($response->isSuccessful())
            {
                // le client a payé
                $arr_body = $response->getData();
          
                // Ajout informations base de données
                $isPaymentExist = Payment::where('payment_id', $arr_body['id'])->first();
          
                if(!$isPaymentExist)
                {
                    $payment = new Payment;
                    $payment->payment_id = $arr_body['id'];
                    $payment->payer_id = $arr_body['payer']['payer_info']['payer_id'];
                    $payment->payer_email = $arr_body['payer']['payer_info']['email'];
                    $payment->amount = $arr_body['transactions'][0]['amount']['total'];
                    $payment->currency = env('PAYPAL_CURRENCY');
                    $payment->payment_status = $arr_body['state'];
                    $payment->save();
                }
          
                return "Payment is successful. Your transaction id is: ". $arr_body['id'];
            } else {
                return $response->getMessage();
            }
        } else {
            return 'Transaction is declined';
        }
    }
  
    public function payment_error()
    {
        return 'User is canceled the payment.';
    }
  
}