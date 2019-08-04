<?php
/**
 * Creates the submenu page for the plugin.
 *
 * @package Custom_Admin_Settings
 */
 
/**
 * Creates the submenu page for the plugin.
 *
 * Provides the functionality necessary for rendering the page corresponding
 * to the submenu with which this page is associated.
 *
 * @package Custom_Admin_Settings
 */
class Submenu_Page {
 
    /**
     * This function renders the contents of the page associated with the Submenu
     * that invokes the render method. In the context of this plugin, this is the
     * Submenu class.
     */
    public function render() {
    	if(is_plugin_active('woocommerce/woocommerce.php'))
    	{
        	require_once( J899_DIR . 'views/settings.php');
    	}else{
        	require_once( J899_DIR . 'views/sorry.php');
    	}
    }
    public function renderWoocomerce() {
        echo 'Bienvenido a J899 V' .J899_VERSION. ' este es el render dentro de Woocomerce. '.J899_DIR ;
    }
}