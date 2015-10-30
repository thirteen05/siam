<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="wholesale-top">
        <div class="inner">
        <h1><?php the_title(); ?></h1>    
        <?php the_content(); ?>
        </div>
    </div>
        <section class="entry-content contact wholesale">
            <div class="inner">
            <?php echo do_shortcode('[contact-form-7 id="164" title="Wholesale"]'); ?>
            </div>
        </section>
        <?php endwhile; endif; ?>
<?php get_footer(); ?>