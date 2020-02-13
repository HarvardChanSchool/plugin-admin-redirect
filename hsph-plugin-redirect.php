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

// Plugin init.
require_once( plugin_dir_path( __FILE__ ) . 'inc/class-{projectslug}.php' );
${projectvar} = new {projectclass}();

${projectvar}->init();
