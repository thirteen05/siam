<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="art-of">
                <div class="top-section">
                    <h1><?php the_title(); ?></h1>
                    <span class="quote">
                        “There are two faces to every gift: the delighted face of the recipient who has been indulged, and the joyful face of the giver whose heart has been warmed. To me, both are priceless.” – Supadra Geronimo, Founder
                    </span>
                </div>
                <div class="row">
                    <div class="col-md-6 nopadding">
                        <div class="content">
                            <p>Make your gift of Siam Seas even more authentic and unforgettable by adding an exquisite custom gift box. Lovingly crafted by a small group of villagers called Srirada, our boxes are carefully wrapped in natural Saa paper native to Northern Thailand. Each box is—quite literally—one of a kind, as these artisans perform every step by hand, from harvesting the renewable mulberry tree to making the beautifully earthy, leaf-textured paper to constructing the gift box. Each one includes a personal handwritten note, and is stamped with a golden wax seal and tied in gold satin ribbon for a perfectly luxurious finishing touch.</p>
                        </div>
                    </div>
                    <div class="col-md-6 nopadding">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/art1.jpg" />
                    </div>
                </div>
                <div class="row">
                    <div class="third-section">
                        <span class="quote">
                            “Luxury is a sensory experience, a state of mind, and a choice you make to reward yourself and your loved ones.” – Supadra
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 nopadding">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/art2.jpg" />

                    </div>
                    <div class="col-md-6 nopadding">
                        <div class="content flower">
                            <p>When you choose a Siam Seas gift box, you’re not just gifting your loved ones—you’re also gifting the Srirada villagers with a fair trade, sustainable income that rewards their unparalleled talent and supports their natural way of life.</p>

                            <p>Please enjoy a complimentary gift boxing option for all orders of $250 or more. For all other orders, add a gift box for just $12. </p>

                            <p>If you have a special story to go with your gift, please email us directly at <a href="mailto:contact@siamseas.com">contact@siamseas.com</a>. We always want to see if there’s a way we can make it even more memorable.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 nopadding">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/art3.jpg" />
                    </div>
                    <div class="col-md-6 nopadding">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/art4.jpg" />
                    </div>
                </div>
            </div>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
<?php get_footer(); ?>