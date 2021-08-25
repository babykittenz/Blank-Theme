<?php get_header(); ?>

<?php if(have_posts()) {?>
    <?php  while(have_posts()) {?>

        <?php the_post(); ?>
        <h2>
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"> <?php the_title() ?> </a>
        </h2>
        <div>
            <p> Posted on: <a href="<?php echo get_permalink( ) ?>">
            <time datetime="<?php echo get_the_date('c')?>"> <?php echo get_the_date(); ?> </time> </a></p>
            <p>By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID') )?>"><?php echo get_the_author(); ?></a></p>
      
        </div>
        <div>
            <p> <?php the_excerpt( ); ?> </p>
        </div>
        <div>
            <p>
                <a href=" <?php echo get_the_permalink() ?> "  title=" <?php the_title_attribute( ); ?> ">

                    Read More <span class="screen-reader-text">about <?php the_title() ?></span>
            
                </a>
            </p>
        </div>
    <?php }?>
    <?php the_posts_pagination( );?>

<?php } else { ?>
    <p>No Posts</p>
<?php } ?>

<?php get_footer(); ?>