<?php

class Coolpay_Payment_Model_Method_Mobilepay extends Coolpay_Payment_Model_Method_Abstract {
    protected $_code          = 'coolpay_mobilepay';
    protected $_formBlockType = 'coolpaypayment/payment_form_mobilepay';

    public function getPaymentMethods() {
        return 'mobilepay';
    }
}