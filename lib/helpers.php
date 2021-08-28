<?php 

function Mill_Mountain_Blank_post_meta(){
    /* translators: %s: Post Date*/

    printf(
        esc_html__('Posted On %s','mmdigital'), 
        '<a href="' . esc_url( get_permalink()  ) . '"> <time datetime="' . esc_attr( get_the_date( 'c' ) ) . '">' . esc_html( get_the_date() ) . ' </time></a>'
);

    /* translators: %s: Post Author*/

    printf(
        esc_html__('By %s', 'mmdigital'),
        '<a href="' . esc_url( get_the_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' .  esc_html(get_the_author()) . '</a>'
    );
    
    echo ' By <a href="' . esc_url( get_the_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' .  esc_html(get_the_author()) . '</a>';

}

function Mill_Mountain_Blank_readmore_link(){

   

    echo '<a href="' . esc_url(get_permalink()) . '" title = "' . the_title_attribute(['echo' => false]) . '">';

      /* translators: %s: Post Title*/

    printf(
        wp_kses(  
            __('Read More <span class = "screen-reader-text">About %s </span>', 'mmdigial'),
            [
                'span' => [
                    'class' => []
                ]
            ]
                ),
        
        get_the_title()
    );
  
    echo '</a>';
}

?>