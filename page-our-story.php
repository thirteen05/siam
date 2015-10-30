<?php
/*
Template Name: Our Story
*/  
get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <section class="our-story">
            <div class="top">
                <h1 class="text-center"><strong><?php the_title(); ?></strong></h1>
                <?php the_content(); ?>
            </div>
            <div class="middle">
                <div class="inner">
                    <div class="our-promise">
                        Our Promise
                    </div>
                <?php the_field('middle_section'); ?>
                </div>
            </div>
            <div class="bottom">
                <?php the_field('bottom_section'); ?>
            </div>    
        </section>
        <?php endwhile; endif; ?>
<?php get_footer(); ?>