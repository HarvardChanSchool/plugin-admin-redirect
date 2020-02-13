<?php
/**
 * Admin Redirect
 *
 * When active, redirects users from the admin to preconfigured page.
 *
 * @package hpsh
 * @subpackage hsph-plugin-admin-redirect
 */

/**
 * HSPH_Plugin_Admin_Redirect Class.
 */
class HSPH_Plugin_Admin_Redirect {

	/**
	 * Init function.
	 *
	 * @access public
	 * @return void
	 */
	public function init() {
		// Register social media settings.
		add_action( 'admin_init', array( $this, 'redirect_admin' ) );
		add_action( 'admin_init', array( $this, 'admin_redirect_setting_section' ) );
		add_action( 'admin_init', array( $this, 'admin_redirect_setting' ) );
	}

	/**
	 * Redirects the user to a page.
	 *
	 * @access public
	 * @return void
	 */
	public static function redirect_admin() {
		// $redirect_url = get_option( 'hsph_admin_redirect_url' );
		if ( ! is_super_admin() ) {
			wp_redirect( 'https://www.hsph.harvard.edu/information-technology/2020/02/11/sph-websites-are-moving-to-a-new-hosting-service/' );
			exit;
		}
	}

	/**
	 * Create a section in the general settings for the redirect URL.
	 *
	 * @access public
	 * @return void
	 */
	public function admin_redirect_setting_section() {
		add_settings_section(
			'admin_redirect_settings_section',
			'Admin Redirect',
			array( $this, 'display_redirect_settings_section' ),
			'general'
		);
	}

	/**
	 * Callback function for displaying the new settings section.
	 *
	 * @return void
	 */
	public function display_redirect_settings_section() {
		echo '';
	}

	/**
	 * Register the admin redirect setting.
	 *
	 * @access public
	 * @return void
	 */
	public function admin_redirect_setting( ) {
		register_setting( 'general', 'hsph_admin_redirect_url' );
		add_settings_field(
			'hsph_admin_redirect_url',
			'Redirect URL',
			array( $this, 'display_redirect_field' ),
			'general',
			'admin_redirect_settings_section',
			array( 'label_for' => 'hsph_admin_redirect_url' )
		);
	}

	/**
	 * Callback function to display the admin redirect url setting
	 *
	 * @param array $setting Details about the setting being displayed.
	 * @return void
	 */
	public function display_redirect_field( ) {
		$current_value = get_option( 'hsph_admin_redirect_url' );
		echo '<input id="hsph_admin_redirect_url" type="text" name="hsph_admin_redirect_url" value="' . esc_attr( $current_value ) . '" />';
	}
}
