<?php

class Coolpay_Payment_Model_Method_Klarna extends Coolpay_Payment_Model_Method_Abstract {
    protected $_code          = 'coolpay_klarna';
    protected $_formBlockType = 'coolpaypayment/payment_form_klarna';

    public function getPaymentMethods() {
        return 'klarna';
    }
}