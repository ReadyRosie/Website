<?php
/*
Plugin Name: Display Links by Category
Description: Shortcode plugin for displaying links by category through custom fields.
Version: 1.0.1
Author: Aleksandar Arsovski
License: GPL2
*/

/*  Copyright 2011  Aleksandar Arsovski  (email : alek_ars@hotmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Register a new shortcode [links_by_cat]
add_shortcode( 'links_by_cat', 'dlbc_display_links_function' );


function dlbc_display_links_function( $atts ) {

	// Globalize post data and WP database
	global $post, $wpdb;
	
	
	// custom field key name -- default value is diplay_links
	$field_atts = shortcode_atts( array(
			'field_id' => 'display_links'
	), $atts );
	
	
	// The following are additional parameters for display control -- all parameter information taken from http://codex.wordpress.org/Template_Tags/wp_list_bookmarks entry
	$list_bookmarks_atts = shortcode_atts( array(
    	'categorize'       => 1,
    	'exclude_category' => '',
    	'category_name'    => '',
    	'category_before'  => '<li id=%id class=%class>',
    	'category_after'   => '</li>',
    	'class'            => 'linkcat',
    	'category_orderby' => 'name',
    	'category_order'   => 'ASC',
    	'title_li'         => __('Bookmarks'),
    	'title_before'     => '<h2>',
    	'title_after'      => '</h2>',
    	'show_private'     => 0,
    	'include'		   => '',
    	'exclude'		   => '',
    	'orderby'          => 'name',
   		'order'            => 'ASC',
   		'limit'            => -1,
   		'before'		   => '<li>',
   		'after'			   => '</li>',
   		'link_before'	   => '',
   		'link_after'	   => '',
   		'between'		   => "\n",
   		'show_images'	   => 1,
   		'show_description' => 1,
   		'show_name'		   => 0,
   		'show_rating'	   => 0,
   		'show_updated'     => 0,
    	'hide_invisible'   => 1,
    	'echo'             => 0
    	), $atts
    );
    
    
    // Check whether display_all was entered / does the user want to display all categories?
    if ( is_array( $atts ) )
		$display_all = ( in_array( 'display_all', $atts ) ? true : false );
	
		
	// If display all is set no need to check the custom field
	if( !$display_all ) {
	
		// Set field_id as variable
		extract( $field_atts );
		
		// Get the category name from the custom field
		$category_name = get_post_meta( $post->ID, $field_id, true );
	
		// Get the category ID from the database by using the category name
		$category_id = $wpdb->get_var( $wpdb->prepare( "SELECT term_id FROM $wpdb->terms WHERE name = %s", $category_name ) );
	}
	
	
	if ( isset( $category_id ) ) {
		// Add the selected category to the array
		$list_bookmarks_atts[ 'category' ] = $category_id;
	}
	
	
	// Extract the additional parameters
	extract( $list_bookmarks_atts );
	
	
	// Check whether to display all categories
	if ( $display_all ) {
		// Call built-in display links function to display all links
		return wp_list_bookmarks( $list_bookmarks_atts );
	}
	// If not displaying all categories
	else {
		// Check whether it's an archive page
		if ( is_archive() ) {
			// If category_name parameter was passed through shortcode, display that link category on archive page
			if ( !empty( $category_name ) )
				return wp_list_bookmarks( $list_bookmarks_atts );
		}
		// If not archive page
		else {
			// Check if there's a valid selected category in custom fields on page/post
			if ( isset( $category_id ) || !empty( $category_name ) ) {
				// Call built-in display links function to display selected category
				return wp_list_bookmarks( $list_bookmarks_atts );
			}
		}
	}
}