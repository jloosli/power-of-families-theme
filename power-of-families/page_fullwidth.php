<?php

// Template Name: Full Width Page

add_filter( 'body_class', 'beaver_body_class' );
function beaver_body_class( $classes ) {
	$classes[] = 'fl-builder-full';
	return $classes;
}



// Remove div.site-inner's div.wrap
//add_filter( 'genesis_structural_wrap-site-inner', '__return_empty_string' );


/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Templates
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/genesis/
 */

// This file handles pages, but only exists for the sake of child theme forward compatibility.
genesis();
