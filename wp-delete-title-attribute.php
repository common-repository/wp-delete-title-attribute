<?php
/*
* Plugin Name: WP Delete Title Attribute
* Description: Delete title attribute from wp_list_categories、wp_list_pages、get_archives_link.
* Author: Kosuke Kato
* Plugin URI: http://www.kosukekato.com/archives/6264
* Version: 0.1
* */

function delete_list_page_title_attribute( $output ) {
  $output = preg_replace( '/ title="[^"]*"/', '', $output );
  return $output;
}
add_filter( 'wp_list_categories', 'delete_list_page_title_attribute' );
add_filter( 'wp_list_pages', 'delete_list_page_title_attribute' );
add_filter( 'get_archives_link', 'delete_list_page_title_attribute' );