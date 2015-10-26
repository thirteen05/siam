            <footer>
                <a href="#">Custom & Favors</a>
                <a href="#">Shipping / Exchanges / Returns</a>
                <a href="#">Testimonials</a>
                <a href="#">News / Special Offers</a>
                <span class="copyright">
                    Copyright 2015, Siam Seas - All Rights Reserved.
                </span>
            </footer>
        </div>
      </div>
    </div>
  </div>

<?php get_template_part('modal'); ?>

        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/jquery.stellar/jquery.stellar.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/plugins.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

        <script>
            $('.menu-toggle').click(function(){
               $('.sidebar').toggleClass('opened'); 
            });
            $('.mobile-menu .menu-item-has-children').click(function(event){
                $(this).find('ul').toggleClass('open');
            });
            
        </script>

        <?php wp_footer(); ?>

    </body>
</html>