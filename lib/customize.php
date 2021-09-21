<?php



function identitydental_customize_register(   $wp_customize  ){
/*--------------------------------------------------------------
# MARGIN SECTION
--------------------------------------------------------------*/

/*--------------------------------------------------------------
# IMAGES SECTION
--------------------------------------------------------------*/



/*--------------------------------------------------------------
# Font
--------------------------------------------------------------*/

$wp_customize->add_section( 'Font', array(
    'title' => esc_html__('Font' ),
    'description' => esc_html__( 'Add Font From Google here with the template href="https://yourfontlink.com"' ),
    'priority' => 110,
    'capability' => 'edit_theme_options',
  ) );


  $wp_customize->add_setting('identitydental_font_type_one', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
));


$wp_customize->add_control('identitydental_font_type_one', array(
    'type' => 'text',
    'label' => esc_html__('Font Type One', 'identitydental'),
    'section' => 'Font',


));


$wp_customize->add_setting('identitydental_font_type_two', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('identitydental_font_type_two', array(
    'type' => 'text',
    'label' => esc_html__('Font Type Two', 'identitydental'),
    'section' => 'Font',


));


/*--------------------------------------------------------------
# TEXT SECTION
--------------------------------------------------------------*/

    $wp_customize->add_section( 'Custom Text', array(
        'title' => esc_html__('Custom Text' ),
        'description' => esc_html__( 'Add custom Text here' ),
        'priority' => 160,
        'capability' => 'edit_theme_options',
      ) );


    $wp_customize->add_setting('identitydental_header_text_one', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('identitydental_header_text_one', array(
        'type' => 'text',
        'label' => esc_html__('Header Text One', 'identitydental'),
        'section' => 'Custom Text',
    
    
    ));

    $wp_customize->add_setting('identitydental_header_text_two', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('identitydental_header_text_two', array(
        'type' => 'text',
        'label' => esc_html__('Header Text Two', 'identitydental'),
        'section' => 'Custom Text',
    
    
    ));

    $wp_customize->add_setting('identitydental_bar_text_one', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('identitydental_bar_text_one', array(
        'type' => 'text',
        'label' => esc_html__('Bar Text One', 'identitydental'),
        'section' => 'Custom Text',
    
    
    ));

    $wp_customize->add_setting('identitydental_bar_text_two', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('identitydental_bar_text_two', array(
        'type' => 'text',
        'label' => esc_html__('Bar Text Two', 'identitydental'),
        'section' => 'Custom Text',
    
    
    ));

    $wp_customize->add_setting('identitydental_slider_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('identitydental_slider_text', array(
        'type' => 'text',
        'label' => esc_html__('Slider Text', 'identitydental'),
        'section' => 'Custom Text',
    
    
    ));

    $wp_customize->add_setting('identitydental_middle_text_one', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('identitydental_middle_text_one', array(
        'type' => 'text',
        'label' => esc_html__('Middle Text One', 'identitydental'),
        'section' => 'Custom Text',
    
    
    ));

    $wp_customize->add_setting('identitydental_middle_text_two', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('identitydental_middle_text_two', array(
        'type' => 'text',
        'label' => esc_html__('Middle Text Two', 'identitydental'),
        'section' => 'Custom Text',
    
    
    ));
    $wp_customize->add_setting('identitydental_middle_text_three', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('identitydental_middle_text_three', array(
        'type' => 'text',
        'label' => esc_html__('Middle Text Three', 'identitydental'),
        'section' => 'Custom Text',
    
    
    ));

    $wp_customize->add_setting('identitydental_footer_text_one', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('identitydental_footer_text_one', array(
        'type' => 'text',
        'label' => esc_html__('Footer Text One', 'identitydental'),
        'section' => 'Custom Text',
    
    
    ));

    $wp_customize->add_setting('identitydental_footer_text_two', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('identitydental_footer_text_two', array(
        'type' => 'text',
        'label' => esc_html__('Footer Text Two', 'identitydental'),
        'section' => 'Custom Text',
    
    
    ));






}

add_action('customize_register', 'identitydental_customize_register');

function identitydental_sanitize_font_one($input){
    $allowed = array('link' => array(
        'href' => array(),
        'title' => array(),
        'rel' => array(),
    ));
    return wp_kses($input, $allowed);
}


?>