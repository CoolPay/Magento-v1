<?php

class Coolpay_Payment_Model_System_Config_Source_Cardlogos {
    public function toOptionArray() {
        return array(
            array(
                'value' => 'dankort',
                'label' => Mage::helper('coolpaypayment')->__('Dankort')
            ),
            array(
                'value' => 'forbrugsforeningen',
                'label' => Mage::helper('coolpaypayment')->__('Forbrugsforeningen')
            ),
            array(
                'value' => 'visa',
                'label' => Mage::helper('coolpaypayment')->__('VISA')
            ),
            array(
                'value' => 'visaelectron',
                'label' => Mage::helper('coolpaypayment')->__('VISA Electron')
            ),
            array(
                'value' => 'mastercard',
                'label' => Mage::helper('coolpaypayment')->__('MasterCard')
            ),
            array(
                'value' => 'maestro',
                'label' => Mage::helper('coolpaypayment')->__('Maestro')
            ),
            array(
                'value' => 'jcb',
                'label' => Mage::helper('coolpaypayment')->__('JCB')
            ),
            array(
                'value' => 'diners',
                'label' => Mage::helper('coolpaypayment')->__('Diners Club')
            ),
            array(
                'value' => 'amex',
                'label' => Mage::helper('coolpaypayment')->__('AMEX')
            ),
            array(
                'value' => 'sofort',
                'label' => Mage::helper('coolpaypayment')->__('Sofort')
            ),
            array(
                'value' => 'viabill',
                'label' => Mage::helper('coolpaypayment')->__('ViaBill')
            ),
            array(
                'value' => 'mobilepay',
                'label' => Mage::helper('coolpaypayment')->__('MobilePay')
            )
        );
    }

    /**
     * Get label for card
     *
     * @param  string $value
     *
     * @return string
     */
    public function getFrontendLabel($value) {
        foreach ($this->toOptionArray() as $option) {
            if ($value = $option['value']) {
                return $option['label'];
            }
        }

        return '';
    }
}
