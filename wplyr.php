<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://growquest.io
 * @since             1.0.0
 * @package           Wplyr
 *
 * @wordpress-plugin
 * Plugin Name:       WPlyr Media Block
 * Plugin URI:        https://wplyr.wecodify.co/
 * Description:       WPlyr is an easy-to-use Gutenberg block which implements Plyr - A simple, lightweight and accessible HTML5, YouTube and Vimeo media player that supports modern browsers.
 * Version:           1.4.0
 * Author:            GrowQuest
 * Author URI:        https://growquest.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wplyr
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Currently plugin version. Start at version 1.0.0 and use SemVer - https://semver.org
const WPLYR_VERSION = '1.4.0';

// PLYR_VERSION
const PLYR_VERSION = '3.7.8';

// Get the filesystem directory path (with trailing slash) for the plugin __FILE__ passed in.
define( 'WPLYR_PATH', plugin_dir_path( __FILE__ ) );

// Get the URL directory path (with trailing slash) for the plugin __FILE__ passed in.
define( 'WPLYR_URL', plugin_dir_url( __FILE__ ) );

// The core plugin class that is used to define internationalization, admin-specific hooks, and public-facing site hooks.
require plugin_dir_path( __FILE__ ) . 'includes/class-wplyr.php';

// Begins execution of the plugin.
$wplyr = new Wplyr();