<?php

class Coolpay_Payment_Model_System_Config_Source_Transactionfees {
    public function toOptionArray() {
        return array(
            // DANSKE
            array('value' => 'american-express-dk', 'label' => Mage::helper('coolpaypayment')->__('American Express (Dansk)')),
            array('value' => 'dankort', 'label' => Mage::helper('coolpaypayment')->__('Dankort')),
            array('value' => 'diners-dk', 'label' => Mage::helper('coolpaypayment')->__('Diners (Dansk)')),
            array('value' => 'edankort', 'label' => Mage::helper('coolpaypayment')->__('edankort')),
            array('value' => 'maestro-dk', 'label' => Mage::helper('coolpaypayment')->__('Maestro (Dansk)')),
            array('value' => 'mastercard-dk', 'label' => Mage::helper('coolpaypayment')->__('Mastercard (Dansk)')),
            array('value' => 'mastercard-debet-dk', 'label' => Mage::helper('coolpaypayment')->__('Mastercard debit (Dansk)')),
            array('value' => 'mobilepay', 'label' => Mage::helper('coolpaypayment')->__('Mobilepay')),
            array('value' => 'visa-dk', 'label' => Mage::helper('coolpaypayment')->__('Visa (Dansk)')),
            array('value' => 'visa-electron-dk', 'label' => Mage::helper('coolpaypayment')->__('Visa Electron (Dansk)')),
            array('value' => 'fbg1886', 'label' => Mage::helper('coolpaypayment')->__('Forbrugsforeningen')),

            // UDENLANDSKE
            array('value' => 'american-express', 'label' => Mage::helper('coolpaypayment')->__('American Express')),
            array('value' => 'diners', 'label' => Mage::helper('coolpaypayment')->__('Diners')),
            array('value' => 'jcb', 'label' => Mage::helper('coolpaypayment')->__('JCB')),
            array('value' => 'maestro', 'label' => Mage::helper('coolpaypayment')->__('Maestro')),
            array('value' => 'mastercard', 'label' => Mage::helper('coolpaypayment')->__('Mastercard')),
            array('value' => 'visa', 'label' => Mage::helper('coolpaypayment')->__('Visa')),
            array('value' => 'visa-electron', 'label' => Mage::helper('coolpaypayment')->__('Visa Electron'))
        );
    }
}
