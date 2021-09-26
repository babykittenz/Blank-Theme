
 
 
 </div> <!-- Close Content -->
 <footer id="footer" role="contentinfo">
   
   <?php

    $footer_text_one = get_theme_mod('identitydental_footer_text_one', '');
    $footer_text_two = get_theme_mod('identitydental_footer_text_two', '');
   
?>


        <?php echo esc_html( $footer_text_one ); ?>
        <?php echo esc_html( $footer_text_two ); ?>
</footer>
  
   <?php wp_footer() ?>
   </body> 
</html>