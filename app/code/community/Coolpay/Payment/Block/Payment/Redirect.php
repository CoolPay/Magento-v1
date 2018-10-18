<?php

class Coolpay_Payment_Block_Payment_Redirect extends Mage_Core_Block_Template {
    public function __construct() {
        parent::__construct();

        $this->setTemplate('coolpaypayment/payment/redirect.phtml');
    }

    /**
     * Get frontend checkout session object
     *
     * @return Mage_Checkout_Model_Session
     */
    protected function _getCheckout() {
        return Mage::getSingleton('checkout/session');
    }

    /**
     * Get last order
     *
     * @return Mage_Sales_Model_Order
     */
    public function getOrder() {
        return $this->_getCheckout()->getLastRealOrder();
    }

    /**
     * Get success url
     *
     * @return string
     */
    public function getSuccessUrl() {
        return $this->getUrl('coolpaypayment/payment/success');
    }

    /**
     * Get cancel url
     *
     * @return string
     */
    public function getCancelUrl() {
        return $this->getUrl('coolpaypayment/payment/cancel');
    }

    /**
     * Get callback url
     *
     * @return string
     */
    public function getCallbackUrl() {
        return $this->getUrl('coolpaypayment/payment/callback');
    }
}
