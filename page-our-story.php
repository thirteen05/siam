<?php
/*
Template Name: Our Story
*/  
get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <section class="our-story">
            <div class="top">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
            <div class="middle">
                <div class="inner">
                    <div class="our-promise">
                        Our Promise
                    </div>
                <p>Siam Seas is committed to a set of core values that define our brand, and each product is designed to reflect these beliefs:</p>
 
                <p>We carefully select the most effective natural and organic Southeast Asian herbs for our formulas. We use only the highest quality ingredients, never compromising on purity to cut corners. All of our ingredients either harvested from our own pesticide-free garden, or locally sourced. All of our formulas are absolutely free of toxins, allergens, phthalates, parabens, sulfates, PEGs, TEA and DEA. And we never, ever test on animals.</p>

                <p>We make each and every one of our products by hand in Thailand, ensuring that every step is performed by real people and not machines—from picking and cleaning the herbs to measuring and blending the formulas to packaging each product with hand stamps and soy ink. This human touch is what keeps our products true to tradition—and what makes them so incredible.</p>

                <p>We ensure that every product you use is freshly made, just as our ancestors would have used them. We produce tiny batches and use costlier shipping methods so that the product is in your hands just days after it’s been created. Wholesale orders are only made by request to ensure freshness and quality.</p> 

                <p>We treat your mind as well as your body, with therapeutic natural fragrances that stimulate your senses, soothe your soul and inspire you to set aside precious time to nurture yourself. We believe that true healing starts from the inside, and all of our products are formulated to encourage holistic harmony and well-being—while simultaneously transforming your skin with highly effective ingredients.</p>
                </div>
            </div>
            <div class="bottom">
            
            </div>    
        </section>
        <?php endwhile; endif; ?>
<?php get_footer(); ?>