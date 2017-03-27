<?php
/**
 * MetroStore Theme Customizer.
 *
 * @package MetroStore
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function metrostore_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

/**
 * Header Settings Area 
**/
	$wp_customize->add_panel('metorstore_header_settings', array(
	  'title' => esc_html__('Header Settings Area', 'metrostore'),
	  'capability' => 'edit_theme_options',
	  'priority' => 5,
	));

	$wp_customize->get_section('title_tagline')->panel = 'metorstore_header_settings';

	/**
	  * Services settings Options
	**/
    $wp_customize->add_section('metrostore_header_service_area', array(
		'title'    => esc_html__('Header Services Area', 'metrostore'),
		'panel'    => 'metorstore_header_settings'
	));

		$wp_customize->add_setting('metrostore_first_icon_block_area', array(
			'default' => 'fa-truck',
			'sanitize_callback' => 'metrostore_text_sanitize',
			//'transport' => 'postMessage'
		));

		$wp_customize->add_control('metrostore_first_icon_block_area',array(
			'type' => 'text',
			'description' => sprintf( __( 'Use font awesome icon: Eg: %s. %sSee more here%s', 'metrostore' ), 'free-shipping','<a href="'.esc_url('http://fontawesome.io/cheatsheet/').'" target="_blank">','</a>' ),        
			'label' => esc_html__('First Services Icon', 'metrostore'),
			'section' => 'metrostore_header_service_area',
			'setting' => 'metrostore_first_icon_block_area',
		));

		$wp_customize->add_setting('metrostore_first_icon_title_area', array(
			'default' => '',
			'sanitize_callback' => 'metrostore_text_sanitize'
		));

		$wp_customize->add_control('metrostore_first_icon_title_area',array(
			'type' => 'text',
			'label' => esc_html__('First Services Title', 'metrostore'),
			'section' => 'metrostore_header_service_area',
			'setting' => 'metrostore_first_icon_title_area',
		));

		$wp_customize->add_setting('metrostore_first_icon_title_desc_area', array(
			'default' => '',
			'sanitize_callback' => 'metrostore_text_sanitize'
		));

		$wp_customize->add_control('metrostore_first_icon_title_desc_area',array(
			'type' => 'text',
			'label' => esc_html__('Services Very Short Description', 'metrostore'),
			'section' => 'metrostore_header_service_area',
			'setting' => 'metrostore_first_icon_title_desc_area',
		));


		$wp_customize->add_setting('metrostore_second_icon_block_area', array(
			'default' => 'fa-thumbs-up',
			'sanitize_callback' => 'metrostore_text_sanitize'
		));

		$wp_customize->add_control('metrostore_second_icon_block_area',array(
			'type' => 'text',
			'description' => sprintf( __( 'Use font awesome icon: Eg: %s. %sSee more here%s', 'metrostore' ), 'fa-user','<a href="'.esc_url('http://fontawesome.io/cheatsheet/').'" target="_blank">','</a>' ),        
			'label' => esc_html__('Second Services Icon', 'metrostore'),
			'section' => 'metrostore_header_service_area',
			'setting' => 'metrostore_second_icon_block_area',
		));

		$wp_customize->add_setting('metrostore_second_icon_title_area', array(
			'default' => '',
			'sanitize_callback' => 'metrostore_text_sanitize',
			//'transport' => 'postMessage'
		));

		$wp_customize->add_control('metrostore_second_icon_title_area',array(
			'type' => 'text',
			'label' => esc_html__('Second Services Title', 'metrostore'),
			'section' => 'metrostore_header_service_area',
			'setting' => 'metrostore_second_icon_title_area',
		));

		$wp_customize->add_setting('metrostore_second_icon_title_desc_area', array(
			'default' => '',
			'sanitize_callback' => 'metrostore_text_sanitize'
		));

		$wp_customize->add_control('metrostore_second_icon_title_desc_area',array(
			'type' => 'text',
			'label' => esc_html__('Services Very Short Description', 'metrostore'),
			'section' => 'metrostore_header_service_area',
			'setting' => 'metrostore_second_icon_title_desc_area',
		));

/**
 * Theme Color Settings Area 
*/
	$wp_customize->get_section( 'colors' )->title    = esc_html__( 'Theme Colors Settings', 'metrostore' );
	
	$wp_customize->get_section('colors' )->priority = 8;

	$wp_customize->add_setting('metrostore_primary_color', array(
     'default' => '#ff3366',
     'capability' => 'edit_theme_options',
     'sanitize_callback' => 'sanitize_hex_color',        
    ));

    $wp_customize->add_control('metrostore_primary_color', array(
     'type'     => 'color',
     'label'    => esc_html__('Primary Colors', 'metrostore'),
     'section'  => 'colors',
     'setting'  => 'metrostore_primary_color',
    ));

		
/**
 * Footer Settings Area 
**/
	$wp_customize->add_panel('metorstore_settings', array(
	  'title' => esc_html__('Footer Settings Area', 'metrostore'),
	  'capability' => 'edit_theme_options',
	  'priority' => 10,
	));

	/**
	  * Copyright message settings Options
	**/
    $wp_customize->add_section('metrostore_copyright_message', array(
		'priority' => 1,
		'title'    => esc_html__('Write Copyright', 'metrostore'),
		'panel'    => 'metorstore_settings'
	));

		$wp_customize->add_setting('metrostore_footer_copyright_setting', array(
			'default' => '',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'metrostore_text_sanitize'
      	));

      	$wp_customize->add_control('metrostore_footer_copyright_setting', array(
			'type' => 'textarea',
			'label' => esc_html__('Copyright Text', 'metrostore'),
			'section' => 'metrostore_copyright_message',
			'settings' => 'metrostore_footer_copyright_setting'
      	));


	/**
	  * Social Icon Link Options
	**/
    $wp_customize->add_section('metrostore_social_link_activate_settings', array(
		'priority' => 2,
		'title'    => esc_html__('Social Icon Options', 'metrostore'),
		'panel'    => 'metorstore_settings'
	));		

		$metrostore_social_links = array(
			'metrostore_social_facebook' => array(
				'id' => 'metrostore_social_facebook',
				'title' => esc_html__('Facebook', 'metrostore'),
				'default' => ''
			),

			'metrostore_social_twitter' => array(
				'id' => 'metrostore_social_twitter',
				'title' => esc_html__('Twitter', 'metrostore'),
				'default' => ''
			),

			'metrostore_social_googleplus' => array(
				'id' => 'metrostore_social_googleplus',
				'title' => esc_html__('Google-Plus', 'metrostore'),
				'default' => ''
			),

			'metrostore_social_instagram' => array(
				'id' => 'metrostore_social_instagram',
				'title' => esc_html__('Instagram', 'metrostore'),
				'default' => ''
			),

			'metrostore_social_linkedin' => array(
				'id' => 'metrostore_social_linkedin',
				'title' => esc_html__('Linkedin', 'metrostore'),
				'default' => ''
			)
		);

		$i = 20;

		foreach($metrostore_social_links as $metrostore_social_link) {

			$wp_customize->add_setting($metrostore_social_link['id'], array(
				'default' => $metrostore_social_link['default'],
	         	'capability' => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw'  // done
			));

			$wp_customize->add_control($metrostore_social_link['id'], array(
				'label' => $metrostore_social_link['title'],
				'section'=> 'metrostore_social_link_activate_settings',
				'settings'=> $metrostore_social_link['id'],
				'priority' => $i
			));

			$wp_customize->add_setting($metrostore_social_link['id'].'_checkbox', array(
				'default' => 0,
	         	'capability' => 'edit_theme_options',
				'sanitize_callback' => 'metrostore_checkbox_sanitize'  // done
			));

			$wp_customize->add_control($metrostore_social_link['id'].'_checkbox', array(
				'type' => 'checkbox',
				'label' => esc_html__('Check to show in new tab', 'metrostore'),
				'section'=> 'metrostore_social_link_activate_settings',
				'settings'=> $metrostore_social_link['id'].'_checkbox',
				'priority' => $i
			));

			$i++;
		}

		/**
		  * Text Sanitization
		*/
	    function metrostore_text_sanitize( $input ) {
	        return wp_kses_post( force_balance_tags( $input ) );
	    }
}
add_action( 'customize_register', 'metrostore_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function metrostore_customize_preview_js() {
	wp_enqueue_script( 'metrostore_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'metrostore_customize_preview_js' );
