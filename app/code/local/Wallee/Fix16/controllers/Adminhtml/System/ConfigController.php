<?php

require_once(Mage::getModuleDir('controllers','Mage_Adminhtml').DS.'System'.DS.'ConfigController.php');

class Wallee_Fix16_Adminhtml_System_ConfigController extends Mage_Adminhtml_System_ConfigController {

    /**
     * Stores the request parameters in the config data model.
     */
	public function editAction()
    {
    	$current = $this->getRequest()->getParam('section');
        $website = $this->getRequest()->getParam('website');
        $store   = $this->getRequest()->getParam('store');

        Mage::getSingleton('adminhtml/config_data')
            ->setSection($current)
            ->setWebsite($website)
            ->setStore($store);

        return parent::editAction();
    }
}