<?php

class Wallee_Fix16_Model_Adminhtml_Config extends Mage_Adminhtml_Model_Config {
    
    /**
     * Dispatches event after initializing the system config.
     */
    protected function _initSectionsAndTabs()
    {
        $mergeConfig = Mage::getModel('core/config_base');

        $config = Mage::getConfig()->loadModulesConfiguration('system.xml');
        Mage::dispatchEvent('adminhtml_init_system_config', array('config' => $config));
        $this->_sections = $config->getNode('sections');

        $this->_tabs = $config->getNode('tabs');
    }
}