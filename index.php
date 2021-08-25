<?php get_header(); ?>

<?php if(have_posts()) {?>
    <?php  while(have_posts()) {?>

        <?php the_post(); ?>
        <h2>
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"> <?php the_title() ?> </a>
        </h2>
    <?php }?>

<?php } else { ?>
    <p>No Posts</p>
<?php } ?>

<?php get_footer(); ?>