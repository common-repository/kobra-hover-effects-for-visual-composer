<?php
/**
 * @package  BaweElementor
 */
namespace Khe\Base;

class Enqueue extends BaseController {
	public function register() {
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'front_enqueue' ) );
	}
	public function admin_enqueue() {

		//admin enqueue scripts
		//wp_enqueue_style( 'prime_fontawesome_load_admin', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

		wp_enqueue_style( 'khe-admin-css', $this->plugin_url . 'assets/css/admin.min.css' );
		//wp_enqueue_script( 'khe-admin-js', $this->plugin_url . 'assets/js/adminscript.js', array( 'jquery' ), '', true );
	}

	//wp/front enqueue scripts
	public function front_enqueue() {
		wp_enqueue_style( 'khe_front_css', $this->plugin_url . 'assets/css/front.min.css' );

		wp_enqueue_style( 'prime_bootstrap_load', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' );

		//wp_enqueue_script( 'prime-testimonial-js', $this->plugin_url . 'assets/js/jquery.bxslider.min.js', array( 'jquery' ), '', false );
	}
}