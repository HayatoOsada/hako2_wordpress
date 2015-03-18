<?php

/*
Plugin Name: Hakoniwa2 for Wordpresss
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 1.0
Author: HayatoOsada
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/

define( 'WPHAKO2_VERSION', '0.0.1' );

define( 'WPHAKO2_REQUIRED_WP_VERSION', '4.0' );

define( 'WPHAKO2_PLUGIN', __FILE__ );

define( 'WPHAKO2_PLUGIN_BASENAME', plugin_basename( WPHAKO2_PLUGIN ) );

define( 'WPHAKO2_PLUGIN_NAME', trim( dirname( WPHAKO2_PLUGIN_BASENAME ), '/' ) );

define( 'WPHAKO2_PLUGIN_DIR', untrailingslashit( dirname( WPHAKO2_PLUGIN ) ) );

// Deprecated, not used in the plugin core. Use wphako02_plugin_url() instead.
define( 'WPHAKO2_PLUGIN_URL', untrailingslashit( plugins_url( '', WPHAKO2_PLUGIN ) ) );

require_once WPHAKO2_PLUGIN_DIR . '/settings.php';
