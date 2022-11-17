<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://codepixelzmedia.com
 * @since             1.0.0
 * @package           Cpm_Advance_Block
 *
 * @wordpress-plugin
 * Plugin Name:       CPM Advance Block
 * Plugin URI:        https://codepixelzmedia.com/cpm-advance-block
 * Description:       This is the plugin prepared for Codepixelz Media.
 * Version:           1.0.0
 * Author:            Codepixelz Media Pvt. Ltd.
 * Author URI:        https://codepixelzmedia.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cpm-advance-block
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CPM_ADVANCE_BLOCK_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-cpm-advance-block-activator.php
 */
function activate_cpm_advance_block() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cpm-advance-block-activator.php';
	Cpm_Advance_Block_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-cpm-advance-block-deactivator.php
 */
function deactivate_cpm_advance_block() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cpm-advance-block-deactivator.php';
	Cpm_Advance_Block_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_cpm_advance_block' );
register_deactivation_hook( __FILE__, 'deactivate_cpm_advance_block' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-cpm-advance-block.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_cpm_advance_block() {

	$plugin = new Cpm_Advance_Block();
	$plugin->run();

}
run_cpm_advance_block();
