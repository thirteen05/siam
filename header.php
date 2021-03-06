<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
      <link rel="stylesheet" type="text/css" href="http://remote.romancart.com/dropcart/ROC_dcstyle.css">
        <div id="ROC_dropcart"></div>
<SCRIPT LANGUAGE="JavaScript" SRC="http://remote.romancart.com/dropcart/ROC_dropcart.asp?storeid=54492"></SCRIPT>
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  </head>
    <body <?php body_class(); ?>>

          <div class="container-full">
    <div class="row">
        <div class="mobile-bar">
            <a class="menu-toggle" href="#">
                <i class="fa fa-bars"></i>
            </a>
            <a href="<?php echo site_url(); ?>"><img class="mobile-logo" src="<?php echo get_template_directory_uri(); ?>/images/mobile-logo.svg" /></a>
            <a href="http://www.romancart.com/cart.asp?storeid=54492"><img class="shopping-bag" src="<?php echo get_template_directory_uri(); ?>/images/shopping-bag.svg" /></a>
        </div>
        <div class="col-md-2 text-center nopadding">
            <div class="sidebar">
                <a href="<?php echo site_url(); ?>"><img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-header.svg" width="300" /></a>
                <div class="desktop"><?php wp_nav_menu(); ?></div>
                <div class="mobile-menu">
                    <?php include 'mobile-menu.php'; ?>
                </div>
                <ul>
                    <li>
                        <a href="<?php echo site_url(); ?>/our-story">Our Story</a>
                    </li>
                    <li>
                        <a href="#">What's in it?</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url(); ?>/art-of-giving">Art of Giving</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#">Press</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url(); ?>/wholesale">Wholesale</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url(); ?>/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
      <div class="col-md-10 main-col nopadding">
        <div class="main-section">