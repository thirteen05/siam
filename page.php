<?php get_header(); ?>
<div class="container-full">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php wp_title( $sep, $display, $seplocation ); ?>
</div>
<div class="container">
    <div class="col-lg-12">
        <section class="entry-content">
            <?php the_content(); ?>
        </section>
        <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>