<?php 
  $font_type_one = get_theme_mod('identitydental_font_type_one', '');
  $font_type_two = get_theme_mod('identitydental_font_type_two', '');

  $allowed = array('link' => array(
    'href' => array(),
    'title' => array(),
    'rel' => array(),
));


?>




    <link  rel="stylesheet"  <?php echo wp_kses( $font_type_one, $allowed ); ?> >
