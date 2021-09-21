<?php get_header(); ?>
<main role="main">
<?php if(have_posts()) {?>
    <?php  while(have_posts()) {?>

        <?php the_post(); ?>
        
    <?php }?>


<?php } else { ?>
    <p><?php esc_html_e('No Posts.','identitydental'); ?></p>
<?php } ?>
</main>

<?php get_footer(); ?>