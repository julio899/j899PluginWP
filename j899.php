<?php
/**
 * Plugin Name: J899
 * Plugin URI: https://github.com/julio899/j899PluginWP
 * Description: Una pruba de pluging de wordpress hecha por Julio Vinachi.
 * Version: 0.0.1
 * Author: Julio Vinachi
 * Author URI: https://julio899.github.io/2019
 * Text Domain: j899
 * Domain Path: /i18n/languages/
 *
 * @package J899
 */

defined( 'ABSPATH' ) || exit;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
     die;
}
// Include the dependencies needed to instantiate the plugin.
foreach ( glob( plugin_dir_path( __FILE__ ) . 'admin/*.php' ) as $file ) {
    include_once $file;
}


// Include the main J899 class.
if ( ! class_exists( 'Principal' ) ) {
	include_once dirname( __FILE__ ) . '/includes/class-principal.php';
}

function WCP() { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid
	return Principal::instance();
}

// Global for backwards compatibility.
$GLOBALS['j899'] = WCP();


# add Links
add_action( 'plugins_loaded', 'j899_custom_admin_settings' );

function j899_custom_admin_settings() {
   add_option( 'j899_option_settings', 'j899_settings');
   register_setting( 'j899_option_settings' );
    $plugin = new Submenu( new Submenu_Page() );
    $plugin->init();
}
