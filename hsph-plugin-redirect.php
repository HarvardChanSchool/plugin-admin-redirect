<?php
/**
 * HSPH Admin Redirect
 *
 * @package hpsh
 * @subpackage hsph-plugin-redirect
 */

/**
 * Plugin Name: HSPH Admin Redirect
 * Plugin URI:  http://www.hsph.harvard.edu/information-technology/
 * Description: Redirects users from the Admin during maintenance.
 * Version:     1.0.0
 * Author:      HSPH Webteam
 * Author URI:  http://www.hsph.harvard.edu/
 * Text Domain: hsph-plugin-redirect
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'HSPH_PLUGIN_ADMIN_REDIRECT_INC_DIR', plugin_dir_path( __FILE__ ) );

require_once HSPH_PLUGIN_ADMIN_REDIRECT_INC_DIR . 'inc/class-hsph-plugin-admin-redirect.php';
$hsph_plugin_admin_redirect = new HSPH_Plugin_Admin_Redirect();
$hsph_plugin_admin_redirect->init();
