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
 * First Data Global Gateway e4 credit card resource model.
 *
 * @category Cardpay
 * @package  Cardpay_GlobalGatewaye4
 * @author   Cardpay Solutions, Inc. <sales@cardpaysolutions.com>
 */
class Cardpay_GlobalGatewaye4_Model_Resource_Creditcard extends Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * Internal constructor. Set template.
     */
    public function _construct()
    {    
        // Note that the <module>_id refers to the key field in your database table.
        $this->_init('globalgatewaye4/creditcard', 'globalgatewaye4_id');
    }
}