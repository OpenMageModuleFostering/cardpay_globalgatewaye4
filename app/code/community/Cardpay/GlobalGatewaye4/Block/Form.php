<?php
/**
 * Cardpay Solutions, Inc.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 * 
 * @category  Cardpay
 * @package   Cardpay_GlobalGatewaye4
 * @copyright Copyright (c) 2015 Cardpay Solutions, Inc. (http://www.cardpaysolutions.com)
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */
 
/**
 * First Data Global Gateway e4 form block.
 *
 * @category Cardpay
 * @package  Cardpay_GlobalGatewaye4
 * @author   Cardpay Solutions, Inc. <sales@cardpaysolutions.com>
 */
class Cardpay_GlobalGatewaye4_Block_Form extends Mage_Payment_Block_Form_Cc
{
    /**
     * Internal constructor. Set template.
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('globalgatewaye4/form.phtml');
    }
    
    /**
     * If credit card can be saved
     * 
     * @return bool if can save
     */
    public function canSaveCard()
    {
        $methodRegister = Mage_Checkout_Model_Type_Onepage::METHOD_REGISTER;
        if (Mage::getModel('globalgatewaye4/paymentMethod')->getConfigData('use_vault')
            && (Mage::getSingleton('customer/session')->isLoggedIn()
            || Mage::getSingleton('checkout/type_onepage')->getCheckoutMethod() == $methodRegister)
        ) {
            return true;
        }
        return false;
    }
}