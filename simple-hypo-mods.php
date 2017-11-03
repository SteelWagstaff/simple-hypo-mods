<?php
/*
 * Plugin Name: Simple Hypothesis Mods
 * Plugin URI: none
 * Description: A plugin modifies some Hypothesis behaviors
 * Author: Steel Wagstaff
 * Version: 0.1.0
 * Author URI: https://steelwagstaff.info
 * Text Domain:     simple hypothesis mods
 */

function hypothesis_modifications() {
	/**
 	* Calls script to resize page upon expansion of Hypothesis annotation pane
 	*/
		 $src = plugin_dir_url( __FILE__ ) .'js/resize.js';
		 wp_enqueue_script( 'resize', $src, array('jquery'), false, true );

	/**
   * Loads CSS which hides annotation header
   */
  // display settings
		$src2 = plugin_dir_url( __FILE__ ) .'css/hypo.css';
		wp_enqueue_style( 'hypo', $src2 );

	/**
 	* Loads CSS which darkens annotations to make more visible
 	*/
		$src3 = plugin_dir_url( __FILE__ ) .'css/darken.css';
		wp_enqueue_style( 'darken', $src3 );
}

add_action( 'wp_enqueue_scripts', 'hypothesis_modifications' );
