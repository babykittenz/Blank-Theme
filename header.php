<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' )?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <?php get_template_part( 'template-parts/header/font' ); ?>
        <title>Blank WordPress Theme | Identity Dental</title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <a  href=   "#content"  class=  "skip-link  screen-reader-text" title=""><?php esc_html_e(   'Skip to content'   ,   'identitydental'  ); ?></a>
        <header>
        <?php

$header_text_one = get_theme_mod('identitydental_header_text_one', '');
$header_text_two = get_theme_mod('identitydental_header_text_two', '');

?>


            <div class="upper-bar">
                <div><?php get_template_part( 'template-parts/header/nav' ); ?></div>
                <div></div>
                <div></div>
                <div></div>

                

            <div>
        </header>


        <?php

if ( is_home() ) {
      $image = get_field('header_image', 8);
      $size = 'header-slide-inside'; 
    if( $image ) {
      $background = wp_get_attachment_image( $image, $size );
    } else {
      $background = '<img src="https://glossdentaltx.com//wp-content/themes/pham2021/images/slider.jpg">';
    }
  } else {
      if ( is_front_page() ) {
        $image = get_field('header_image');
        $size = 'header-slide'; 
        if( $image ) {
            $background = wp_get_attachment_image( $image, $size );
        } else {
            $background = '<img src="https://glossdentaltx.com//wp-content/themes/pham2021/images/slider.jpg">';
        }
      } else {
        $image = get_field('header_image');
        $size = 'header-slide-inside';  
        if( $image ) {
            $background = wp_get_attachment_image( $image, $size );
        } else {
            $background = '<img src="https://glossdentaltx.com//wp-content/themes/pham2021/images/insideslider.jpg">';
        }
    }
  }

  ?>
      
        <div id="content"   class="site-content">

    

<section id="slider" class="">


<div class="slider-bg-img pos-abs"><?php echo $background; ?></div>

   <div class= "slider-text-container" >

    <div class="button-one-container pos-rel"><button> <?php echo esc_html( $header_text_one ); ?></button></div>

    <div class="button-two-container pos-rel"><button><?php echo esc_html( $header_text_two ); ?></button></div>

<div>
</section>
<section id="under-header">

    <div>
        
    </div>


</section>