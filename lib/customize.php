<?php

function identitydental_customize_register( $wp_customize ) {

    $wp_customize->get_setting('blogname')->transport = 'postMessage';

    $wp_customize->selective_refresh->add_partial('blogname', array(
        // 'settings' => array('blogname')
        'selector' => '.c-header__blogname',
        'container_inclusive' => false,
        'render_callback' => function() {
            bloginfo( 'name' );
        }
    ));

    /*##################  SINGLE SETTINGS ########################*/

    $wp_customize->add_section('identitydental_single_blog_options', array(
        'title' => esc_html__( 'Single Blog Options', 'identitydental' ),
        'description' => esc_html__( 'You can change single blog options from here.', 'identitydental' ),
        'active_callback' => 'identitydental_show_single_blog_section'
    ));

    $wp_customize->add_setting('identitydental_display_author_info', array(
        'default' => true,
        'transport' => 'postMessage',
        'sanitize_callback' => 'identitydental_sanitize_checkbox'
    ));

    $wp_customize->add_control('identitydental_display_author_info', array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Show Author Info', 'identitydental' ),
        'section' => 'identitydental_single_blog_options'
    ));

    function identitydental_sanitize_checkbox( $checked ) {
        return (isset($checked) && $checked === true) ? true : false;
    }

    function identitydental_show_single_blog_section() {
        global $post;
        return is_single() && $post->post_type === 'post';
    }


    /*################## GENERAL SETTINGS ########################*/

    $wp_customize->add_section('identitydental_general_options', array(
        'title' => esc_html__( 'General Options', 'identitydental' ),
        'description' => esc_html__( 'You can change general options from here.', 'identitydental' )
    ));

    $wp_customize->add_setting('identitydental_accent_colour', array(
        'default' => '#20ddae',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'identitydental_accent_colour', array(
        'label' => __( 'Accent Color', 'identitydental' ),
        'section' => 'identitydental_general_options',
    )));

    $wp_customize->add_setting( 'identitydental_portfolio_slug', array(
		'default'           => 'portfolio',
		'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'identitydental_portfolio_slug', array(
		'type'    => 'text',
        'label'    => esc_html__( 'Portfolio Slug', 'identitydental' ),
        'description' => esc_html__( 'Will appear in the archive url', 'identitydental' ),
		'section'  => 'identitydental_general_options',
    ));

    /*################## FOOTER SETTINGS ########################*/

    $wp_customize->selective_refresh->add_partial('identitydental_footer_partial', array(
        'settings' => array('identitydental_footer_bg', 'identitydental_footer_layout'),
        'selector' => '#footer',
        'container_inclusive' => false,
        'render_callback' => function() {
            get_template_part( 'template-parts/footer/widgets' );
            get_template_part( 'template-parts/footer/info' );
        }
    ));

    $wp_customize->add_section('identitydental_footer_options', array(
        'title' => esc_html__( 'Footer Options', 'identitydental' ),
        'description' => esc_html__( 'You can change footer options from here.', 'identitydental' )
    ));

    $wp_customize->add_setting('identitydental_site_info', array(
        'default' => '',
        'sanitize_callback' => 'identitydental_sanitize_site_info',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('identitydental_site_info', array(
        'type' => 'text',
        'label' => esc_html__( 'Site Info', 'identitydental' ),
        'section' => 'identitydental_footer_options'
    ));

    $wp_customize->add_setting('identitydental_footer_bg', array(
        'default' => 'dark',
        'transport' => 'postMessage',
        'sanitize_callback' => 'identitydental_sanitize_footer_bg'
    ));

    $wp_customize->add_control('identitydental_footer_bg', array(
        'type' => 'select',
        'label' => esc_html__( 'Footer Background', 'identitydental' ),
        'choices' => array(
            'light' => esc_html__( 'Light', 'identitydental' ),
            'dark' => esc_html__( 'Dark', 'identitydental' ),
        ),
        'section' => 'identitydental_footer_options'
    ));

    $wp_customize->add_setting('identitydental_footer_layout', array(
        'default' => '3,3,3,3',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field',
        'validate_callback' => 'identitydental_validate_footer_layout'
    ));

    $wp_customize->add_control('identitydental_footer_layout', array(
        'type' => 'text',
        'label' => esc_html__( 'Footer Layout', 'identitydental' ),
        'section' => 'identitydental_footer_options'
    ));
    
}

add_action( 'customize_register', 'identitydental_customize_register' );

function identitydental_validate_footer_layout( $validity, $value) {
    if(!preg_match('/^([1-9]|1[012])(,([1-9]|1[012]))*$/', $value)) {
        $validity->add('invalid_footer_layout', esc_html__( 'Footer layout is invalid', 'identitydental' ));
    }
    return $validity;
}

function identitydental_sanitize_footer_bg( $input ) {
    $valid = array('light', 'dark');
    if( in_array($input, $valid, true) ) {
        return $input;
    }
    return 'dark';
}

function identitydental_sanitize_site_info( $input ) {
    $allowed = array('a' => array(
        'href' => array(),
        'title' => array()
    ));
    return wp_kses($input, $allowed);
}