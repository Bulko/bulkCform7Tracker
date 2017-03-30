<?php
/*
Plugin Name: BKO Traking ContactForm7 
Depends: 
Provides: BKO Traking ContactForm7 
Plugin URI: http://www.bulko.net/
Description: 
Version: 1.0.0
Author: Bulko
Author URI: http://www.bulko.net/
License: http://www.wtfpl.net/
*/
// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) )
{
	wp_die( 'Hi there!  I\'m just a plugin, not much I can do when called directly.' );
}
//include required wp mod
require_once( ABSPATH . '/wp-config.php' );

function gaTrack ()
{
	wp_enqueue_script( 'cform7-gaTrack', plugin_dir_url( __FILE__ ) . '/js/gaTrack.js', array() );
}
add_action( 'wp_enqueue_scripts', 'gaTrack' );