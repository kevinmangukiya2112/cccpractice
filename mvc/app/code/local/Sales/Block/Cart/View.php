<?php

class Sales_Block_Cart_View extends Core_Block_Template
{

    public function __construct()
    {
    }

    public function getCartItem()
    {
        $quote = $this->getQuote();
        return $quote->getItemCollection();
        // return Mage::getModel('sales/quote')->getProductCollection();
    }
    public function getQuote()
    {
        $quoteModel = Mage::getModel('sales/quote');
        $quoteModel->initQuote();
        return $quoteModel;
    }

}
?>