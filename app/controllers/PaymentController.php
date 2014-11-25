<?php

use Omnipay\Omnipay;

class PaymentController extends BaseController {


    public function getPaymentOptions(){

        return View::make('payments.paymentOptions');
    }

    public function confirmPayment(){

        return 'Confirming Registration';//View::make('');
    }

    public function cancelPayment(){

        return 'Cancelling Registration';//View::make('');
    }
}

