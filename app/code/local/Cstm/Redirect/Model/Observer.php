<?php

class Cstm_Redirect_Model_Observer
{
    public function customerLogin(Varien_Event_Observer $observer)
    {
        Mage::app()->getFrontController()->getResponse()->setRedirect(Mage::getUrl('sales/order/history'));
        Mage::app()->getResponse()->sendResponse();
        exit;
    }

}
