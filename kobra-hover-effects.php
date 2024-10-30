<?php
/**
 * @package Kobra_Hover
 */
/*

Plugin Name: Kobra Hover Effects for Visual Composer
Plugin URI: https://wordpress.org/plugins/kobra-hover-effects-for-visual-composer/
Description: Kobra Hover Effects WordPress is an Visual Composer Plugin is an impressive Image hover effects powered by pure CSS3 for your wordpress site.
Author: codecans
Version: 2.4.9
Requires at least: 3.8
Tested up to:      4.9.8
Author URI: http://codecans.com
License: GPL2
Text Domain: kob_hover
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

// prevent direct access
defined( 'ABSPATH' ) or die( 'Hey, you can\t access this file, you silly human!' );

// Vendor Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

//The code that runs during plugin activation
function activate_khe_plugin() {
	Khe\Base\Activate::activate();
}

register_activation_hook( __FILE__, 'activate_khe_plugin' );


//The code that runs during plugin deactivation
function deactivate_khe_plugin() {
	Khe\Base\Deactivate::deactivate();
}

register_deactivation_hook( __FILE__, 'deactivate_khe_plugin' );

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'js_composer/js_composer.php' ) ) {

	//Param Slider
	require_once 'assets/slider/slider-params.php';

	// Register ALL Services
	if ( class_exists( 'Khe\\Init' ) ) {
		Khe\Init::register_services();
	}
}
// Check If Visual Composer is activate
else {
	function kobra_vc_required_plugin() {
		if ( is_admin() && current_user_can( 'activate_plugins' ) &&  !is_plugin_active( 'js_composer/js_composer.php' ) ) {
			add_action( 'admin_notices', 'kobra_vc_required_plugin_notice' );

			deactivate_plugins( plugin_basename( __FILE__ ) );

			if ( isset( $_GET['activate'] ) ) {
				unset( $_GET['activate'] );
			}
		}

	}
	add_action( 'admin_init', 'kobra_vc_required_plugin' );

	function kobra_vc_required_plugin_notice(){
		?><div class="error"><p>Error! you need to install or activate the <a href="https://codecanyon.net/item/visual-composer-page-builder-for-wordpress/242431?ref=Rakibur_Rahman_Sagar">Visual Composer</a> plugin to run "<span style="font-weight: bold;">Kobra Hover Effects Visual Composer</span>" plugin.</p></div><?php
	}
}