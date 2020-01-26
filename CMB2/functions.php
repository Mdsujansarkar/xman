<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the xman directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/xman/xman
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

add_action( 'cmb2_admin_init', 'xman_home_page_show' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function xman_home_page_show() {
	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$xman_testimonial = new_cmb2_box( array(
		'id'            => 'xman_testionial',
		'title'         => esc_html__( 'CEO And Author', 'xman' ),
		'object_types'  => array( 'tesimonial' ), // Post type
	) );

	$xman_testimonial->add_field( array(
		'name'       => esc_html__( 'CEO And Author', 'xman' ),
		'desc'       => esc_html__( 'field description (optional)', 'xman' ),
		'id'         => 'xman_testimonial_field',
		'type'       => 'text',
		'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
		// 'column'          => true, // Display field value in the admin post-listing columns
	) );
}


