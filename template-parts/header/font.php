<?php 
  $font_type_one = get_theme_mod('identitydental_font_type_one', '');
  $font_type_two = get_theme_mod('identitydental_font_type_two', '');

  $allowed = array('link' => array(
    'href' => array(),
    'title' => array(),
    'rel' => array(),
));


?>



<?php if($font_type_one){ ?>
    
    <link  rel="stylesheet"  <?php echo wp_kses( $font_type_one, $allowed ); ?> >

<?php }?>

<?php if($font_type_two){ ?>

    <link  rel="stylesheet"  <?php echo wp_kses( $font_type_two, $allowed ); ?> >

<?php }?>