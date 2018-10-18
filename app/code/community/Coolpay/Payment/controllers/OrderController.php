<?php

class Coolpay_Payment_OrderController extends Mage_Adminhtml_Controller_Action {
    public function indexAction() {
        $request = $this->getRequest()->getParams();
        $order_id = isset($request['id']) ? $request['id'] : 0;
        $info_type = Mage::helper('coolpaypayment')->getInfoType($order_id);

        if ($info_type == 'normal') {
            $fields = Mage::helper('coolpaypayment')->getFields($order_id);
        } else {
            $fields = array();
        }

        $content = $this
            ->getLayout()
            ->createBlock('core/template')
            ->setTemplate('coolpaypayment/grid/info.phtml')
            ->setFields($fields)
            ->setInfoType($info_type)
            ->toHtml();

        $this->getResponse()->setBody($content);
    }
}