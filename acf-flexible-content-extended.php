<?php
/*
 Plugin Name: Flexible Content Extended for Advanced Custom Fields
 Version: 1.1.1
 Plugin URI: https://github.com/jameelmoses/acf-flexible-content-extended
 Description: Extends the ACF Flexible Content Field by transforming the layout list into a modal with image previews. Editing the fields layouts also happens in a modal for a better editing user experience.
 Author: Warface
 */

// don't load directly
if (! defined('ABSPATH')) {
	die('-1');
}

// Plugin constants
define('ACF_FCE_VERSION', '2.0.0');
define('ACF_FCE_MIN_PHP_VERSION', '8.0');

// Plugin URL and PATH
define('ACF_FCE_URL', plugin_dir_url(__FILE__));
define('ACF_FCE_DIR', plugin_dir_path(__FILE__));
define('ACF_FCE_PLUGIN_DIRNAME', basename(rtrim(dirname(__FILE__), '/')));

// Check PHP min version
if (version_compare(PHP_VERSION, ACF_FCE_MIN_PHP_VERSION, '<')) {
	require_once(ACF_FCE_DIR . 'compat.php');

	// possibly display a notice, trigger error
	add_action('admin_init', array('ACF_FCE\Compatibility', 'admin_init'));

	// stop execution of this file
	return;
}

/** Autoload */
require_once ACF_FCE_DIR . 'autoload.php';

add_action('plugins_loaded', 'plugins_loaded_acf_flexible_content_preview');
/** Init the plugin */
function plugins_loaded_acf_flexible_content_preview()
{
	$requirements = \ACF_FCE\Requirements::get_instance();
	if (! $requirements->check_requirements()) {
		return;
	}

	// Client
	\ACF_FCE\Main::get_instance();
}
