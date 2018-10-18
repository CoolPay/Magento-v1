<?php

class Coolpay_Payment_Block_Payment_Form extends Mage_Payment_Block_Form {
    /**
     * Instructions text
     *
     * @var string
     */
    protected $_instructions;

    protected function _construct() {
        $this->setTemplate('coolpaypayment/payment/form.phtml');
        parent::_construct();
    }

    /**
     * Get instructions text from config
     *
     * @return string
     */
    public function getInstructions() {
        if (is_null($this->_instructions)) {
            $this->_instructions = $this->getMethod()->getInstructions();
        }

        return $this->_instructions;
    }

    /**
     * Append logo on payment selection form
     *
     * @return string
     */
    public function getMethodLabelAfterHtml() {
        $cardsConfig = Mage::getStoreConfig('payment/coolpaypayment_payment/cardlogos');
        $cards = explode(',', $cardsConfig);

        $html = '';
        if (count($cards) > 0) {
            $logoConfig = Mage::getModel('coolpaypayment/system_config_source_cardlogos');
            foreach ($cards as $card) {
                $html .= sprintf('<img src="%s" height="20" alt="%s"/>', $this->getSkinUrl("images/coolpaypayment/{$card}.png"), $logoConfig->getFrontendLabel($card));
            }
        }

        return $html;
    }
}
