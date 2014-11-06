<?php
/**
 * @category   Rom
 * @package    Rom_DoubleclickFloodlight
 * @copyright  Copyright (c) 2014 ROM Agence de communication <rom@rom.fr>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author     André Herrn <andre.herrn@rom.fr>
 */
class Rom_DoubleclickFloodlight_Block_Checkout_Onepage_Success extends Mage_Core_Block_Template
{
    /**
     * Get order
     * 
     * @return Mage_Sales_Model_Order
     */
    protected function getOrder()
    {
        $order = Mage::getModel('sales/order')->load(
            Mage::getSingleton('checkout/session')->getLastOrderId()
        );
        return $order;
    }
}