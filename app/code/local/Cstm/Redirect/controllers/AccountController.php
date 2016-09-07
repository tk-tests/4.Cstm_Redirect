<?php

//require_once 'Mage/Customer/controllers/AccountController.php';
require_once Mage::getModuleDir('controllers', 'Mage_Customer').DS.'AccountController.php';

class Cstm_Redirect_AccountController extends Mage_Customer_AccountController
{
    public function loginPostAction()
    {
        parent::loginPostAction();

        $session = Mage::getSingleton('customer/session', array('name'=>'frontend'));
        if( $session->isLoggedIn() )
        {               
            //redirect after login
            $url = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_WEB);
            $this->_redirectUrl($url.'sales/order/history');
        } 
    }
}