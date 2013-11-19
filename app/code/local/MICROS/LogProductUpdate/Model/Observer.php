<?php

/**
 * Our class name should follow the directory structure of
 * our Observer.php model, starting from the namespace,
 * replacing directory separators with underscores.
 * i.e. app/code/local/MICROS/
 *                     LogProductUpdate/Model/Observer.php
 */
 
class MICROS_LogProductUpdate_Model_Observer
{
	
	public function logUpdate(Varien_Event_Observer $observer)
	{
		$product = $observer->getEvent()->getProduct();
		
		$name = $product->getName();
		$sku = $product->getSku();
		
		Mage::log(
			"{$name} ({$sku}) updated",
			null,
			'product-updates.log'
		);
		
	}
	
}

