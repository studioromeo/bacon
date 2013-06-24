<?php
/**
 * Plugin Name:         Bacon
 * Plugin URI:          http://jigoshop.com/
 * Description:         Bacon
 * Author:              Bacon
 * Author URI:          http://jigoshop.com
 */

add_action('wp_enqueue_scripts', 'bacon_scripts');
function bacon_scripts() {
	wp_enqueue_style( 'baconcss', plugins_url( 'style.css', __FILE__ ) );
	wp_enqueue_script( 'baconjs', plugins_url( 'bacon.js', __FILE__ ), array('jquery'), '1.0', true );
	wp_localize_script( 'baconjs', 'baconopt', array('file' => plugins_url( 'Bacon', __FILE__ )));
}