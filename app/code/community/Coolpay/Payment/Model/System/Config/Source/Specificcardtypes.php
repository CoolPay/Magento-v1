<?php

class CoolPay_Payment_Model_System_Config_Source_Specificcardtypes {
    public function toOptionArray() {
        return array(
            array('value' => 'american-express', 'label' => Mage::helper('coolpaypayment')->__('American Express')),
            array('value' => 'dankort', 'label' => Mage::helper('coolpaypayment')->__('Dankort')),
            array('value' => 'diners', 'label' => Mage::helper('coolpaypayment')->__('Diners Club')),
            array('value' => 'edankort', 'label' => Mage::helper('coolpaypayment')->__('eDankort')),
            array('value' => 'fbg1886', 'label' => Mage::helper('coolpaypayment')->__('Forbrugsforeningen af 1886')),
            array('value' => 'jcb', 'label' => Mage::helper('coolpaypayment')->__('JCB')),
            array('value' => 'maestro', 'label' => Mage::helper('coolpaypayment')->__('Maestro debit card')),
            array('value' => 'mastercard', 'label' => Mage::helper('coolpaypayment')->__('Mastercard')),
            array('value' => 'mastercard-debet', 'label' => Mage::helper('coolpaypayment')->__('Mastercard Debet')),
            array('value' => 'mobilepay', 'label' => Mage::helper('coolpaypayment')->__('MobilePay Online')),
            array('value' => 'visa', 'label' => Mage::helper('coolpaypayment')->__('Visa')),
            array('value' => 'visa-electron', 'label' => Mage::helper('coolpaypayment')->__('Visa Electron')),
            array('value' => 'paypal', 'label' => Mage::helper('coolpaypayment')->__('PayPal')),
            array('value' => 'sofort', 'label' => Mage::helper('coolpaypayment')->__('Sofort')),
            array('value' => 'viabill', 'label' => Mage::helper('coolpaypayment')->__('ViaBill')),
            array('value' => 'klarna', 'label' => Mage::helper('coolpaypayment')->__('Klarna')),
            array('value' => 'swipp', 'label' => Mage::helper('coolpaypayment')->__('Swipp')),
        );
    }
}
