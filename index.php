<?php get_header(); ?>

<?php if(have+posts()) {?>
    <?php  while(have_posts()) {?>

        <?php the_post(); ?>
    <?php }?>

<?php } else { ?>
    <p>No Posts</p>
<?php } ?>

<?php get_footer(); ?>