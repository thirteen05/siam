<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <section class="entry-content contact">
            <div class="inner">
                <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            </div>
        </section>
        <?php endwhile; endif; ?>
<?php get_footer(); ?>