<?php

/**
 * Plugin Name: CC Icons
 * Plugin URI: http://www.codedcontainer.com/cc-lightbox
 * Description: Add the following icons into your website: FontAwesome 4.1.0, Ionicons,  and css social buttons
 * Version: 0.1
 * Author: Jason Utt
 * Author URI: www.codedcontainer.com
 */

/* FONT AWESOME */

function fontawesome_styles()
{
	wp_enqueue_style('font-awesome.min',plugins_url('/font-awesome/css/font-awesome.min.css', __FILE__));
}
fontawesome_styles();

/* IONICONS */
function ionicons_styles()
{
	wp_enqueue_style('ionicons.min',plugins_url('/ionicons/css/ionicons.min.css',__FILE__));
}
ionicons_styles();

?>