<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="shipping-outer">
            <section class="entry-content shipping">
                <?php the_content(); ?>
            </section>
            <img src="<?php echo get_template_directory_uri(); ?>/images/shipping.jpg" />
        </div>  
        <?php endwhile; endif; ?>
<?php get_footer(); ?>