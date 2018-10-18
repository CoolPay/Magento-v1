<?php

class Coolpay_Payment_Model_Method_Viabill extends Coolpay_Payment_Model_Method_Abstract {
    protected $_code          = 'coolpay_viabill';
    protected $_formBlockType = 'coolpaypayment/payment_form_viabill';

    public function getPaymentMethods() {
        return 'viabill';
    }
}