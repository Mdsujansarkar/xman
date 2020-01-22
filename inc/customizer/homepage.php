<?php  

define('HEADER_OPTION_CUSTOMIZER_PANALE_ID','heade_option_customizer_panale_id');
define('HEADER_OPTION_CUSTOMIZER_SECTION_ID','heade_option_customizer_section_id');
// define('HEADER_OPTION_CUSTOMIZER_SECTION_CONTACT_INFO','heade_option_customizer_section_contact_info');

if(class_exists('Kirki')){ 
 Kirki::add_config( HEADER_OPTION_CUSTOMIZER_PANALE_ID, array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'theme_mod',
) );
Kirki::add_panel( HEADER_OPTION_CUSTOMIZER_SECTION_ID, array(
    'priority'    => 10,
    'title'       => esc_html__( 'Header Panel', 'xman' ),
    'description' => esc_html__( 'Header control', 'xman' ),
) );
Kirki::add_section( 'top_header_section', array(
    'title'          => esc_html__( 'Top header section', 'xman' ),
    'description'    => esc_html__( 'Top header control.', 'xman' ),
    'panel'          => HEADER_OPTION_CUSTOMIZER_SECTION_ID,
    'priority'       => 160,
) );
Kirki::add_field(HEADER_OPTION_CUSTOMIZER_PANALE_ID, [
	'type'     => 'editor',
	'settings' => 'top_header_section',
	'label'    => esc_html__( 'Text Control', 'kirki' ),
	'section'  => 'top_header_section',
	'default'  => esc_html__( 'From its medieval origins to the digital era <a href="#">Privacy & Check</a>', 'kirki' ),
	'priority' => 10,
] );
Kirki::add_field( HEADER_OPTION_CUSTOMIZER_PANALE_ID, [
	'type'     => 'text',
	'settings' => 'fontawosme_icon_facebook',
	'label'    => esc_html__( 'Fontawsome Control', 'kirki' ),
	'section'  => 'top_header_section',
	'default'  => 'fab fa-facebook-f',
	'priority' => 10,
] );
Kirki::add_field( HEADER_OPTION_CUSTOMIZER_PANALE_ID, [
	'type'     => 'text',
	'settings' => 'fontawosme_icon_twitter',
	'label'    => esc_html__( 'Fontawsome Control', 'kirki' ),
	'section'  => 'top_header_section',
	'default'  => 'fab fa-twitter',
	'priority' => 10,
] );
Kirki::add_field( HEADER_OPTION_CUSTOMIZER_PANALE_ID, [
	'type'     => 'text',
	'settings' => 'fontawosme_icon_3',
	'label'    => esc_html__( 'Fontawsome Control', 'kirki' ),
	'section'  => 'top_header_section',
	'default'  => 'fab fa-github',
	'priority' => 10,
] );
Kirki::add_field( HEADER_OPTION_CUSTOMIZER_PANALE_ID, [
	'type'     => 'text',
	'settings' => 'fontawosme_icon_4',
	'label'    => esc_html__( 'Fontawsome Control', 'kirki' ),
	'section'  => 'top_header_section',
	'default'  => 'fab fa-mailchimp',
	'priority' => 10,
] );
Kirki::add_field( HEADER_OPTION_CUSTOMIZER_PANALE_ID, [
	'type'     => 'text',
	'settings' => 'fontawosme_icon_5',
	'label'    => esc_html__( 'Fontawsome Control', 'kirki' ),
	'section'  => 'top_header_section',
	'default'  => 'fab fa-instagram',
	'priority' => 10,
] );
//contact info information

Kirki::add_section( 'top_header_contact_info_section', array(
    'title'          => esc_html__( 'Contact information section', 'xman' ),
    'description'    => esc_html__( 'Top header control.', 'xman' ),
    'panel'          => HEADER_OPTION_CUSTOMIZER_SECTION_ID,
    'priority'       => 160,
) );
Kirki::add_field( HEADER_OPTION_CUSTOMIZER_PANALE_ID, [
	'type'     => 'text',
	'settings' => 'phone_control',
	'label'    => esc_html__( 'Fontawsome Control', 'kirki' ),
	'section'  => 'top_header_contact_info_section',
	'default'  => 'support@gmail.com',
	'priority' => 10,
] );
Kirki::add_field( HEADER_OPTION_CUSTOMIZER_PANALE_ID, [
	'type'     => 'number',
	'settings' => 'phone_number',
	'label'    => esc_html__( 'Phone Number', 'kirki' ),
	'section'  => 'top_header_contact_info_section',
	'default'  => '+1255866558(0000',
	'priority' => 10,
] );
Kirki::add_field( HEADER_OPTION_CUSTOMIZER_PANALE_ID, [
	'type'     => 'text',
	'settings' => 'alarm_section',
	'label'    => esc_html__( 'Alerm Section', 'kirki' ),
	'section'  => 'top_header_contact_info_section',
	'default'  => '10.am-8.pm',
	'priority' => 10,
] );
// Slider Section
Kirki::add_section( 'slider_sections', array(
    'title'          => esc_html__( 'Slider section', 'xman' ),
    'description'    => esc_html__( 'Top header control.', 'xman' ),
    'panel'          => HEADER_OPTION_CUSTOMIZER_SECTION_ID,
    'priority'       => 160,
) );
Kirki::add_field( HEADER_OPTION_CUSTOMIZER_PANALE_ID, [
	'type'     => 'number',
	'settings' => 'slide_number',
	'label'    => esc_html__( 'Slide Number', 'kirki' ),
	'section'  => 'slider_sections',
	'default'  => 1,
	'priority' => 10,
] );
Kirki::add_field( HEADER_OPTION_CUSTOMIZER_PANALE_ID, [
	'type'     => 'number',
	'settings' => 'slide_number',
	'label'    => esc_html__( 'Slide Number', 'kirki' ),
	'section'  => 'slider_sections',
	'default'  => 1,
	'priority' => 10,
] );
Kirki::add_field( HEADER_OPTION_CUSTOMIZER_PANALE_ID, [
	'type'     => 'editor',
	'settings' => 'main_text_heading',
	'label'    => esc_html__( 'Slide Number', 'kirki' ),
	'section'  => 'slider_sections',
	'default'  => 1,
	'priority' => 10,
] );

}