<?php

class CoolPay_Payment_Model_System_Config_Source_Cardtype {
    public function toOptionArray() {
        return array(
            array(
                'value' => '',
                'label' => Mage::helper('coolpaypayment')->__('Alle betalingsmetoder')
            ),
            array(
                'value' => 'creditcard',
                'label' => Mage::helper('coolpaypayment')->__('Alle kreditkort')
            ),
            array(
                'value' => 'specific-cards',
                'label' => Mage::helper('coolpaypayment')->__('Vælg specifikke betalingsmetoder')
            ),
        );
    }
}
