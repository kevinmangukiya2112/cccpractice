<?php 

class Sales_Model_Quote_Methods_Payment extends Core_Model_Abstract{

    public function __construct(){
        $this->init();
    }

    public function init(){
        $this->modelClass="Sales/Quote_Methods_Payment";
        $this->resourceClass="Sales_Model_Resource_Quote_Methods_Payment";
        $this->collectionClass="Sales_Model_Resource_Collection_Quote_Methods_Payment";
    }

    public function _beforesave(){
        $quote_id=Mage::getSingleton('core/session')->get('quote_id');
        $this->addData('quote_id',$quote_id);
    }

    public function _afterSave(){
        $quote_id=Mage::getSingleton('core/session')->get('quote_id');
        $payment_id = Mage::getModel('sales/quote_methods_payment')->load($quote_id, "quote_id")->getId();
        $shipping_id = Mage::getModel('sales/quote_methods_shipping')->load($quote_id, "quote_id")->getId();
        $data=[
            'quote_id'=>$quote_id,
            'shipping_id'=>$shipping_id,
            'payment_id'=>$payment_id,
        ];
        Mage::getModel('sales/quote')->setData($data)->save()->convert();
        Mage::getSingleton('core/session')->remove('quote_id');
    }
}