<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://codepixelzmedia.com
 * @since      1.0.0
 *
 * @package    Cpm_Advance_Block
 * @subpackage Cpm_Advance_Block/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Cpm_Advance_Block
 * @subpackage Cpm_Advance_Block/includes
 * @author     Codepixelz Media Pvt. Ltd. <rajan@codepixelzmedia.com.np>
 */
class Cpm_Advance_Block_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'cpm-advance-block',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
