<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="container-full">
    <div class="row">
        <div class="col-md-4">

            <?php
            /**
             * woocommerce_before_single_product_summary hook
             *
             * @hooked woocommerce_show_product_sale_flash - 10
             * @hooked woocommerce_show_product_images - 20
             */
            do_action( 'woocommerce_before_single_product_summary' );
        ?>

        </div>

        <div class="col-md-8 product-summary">

            <?php
                /**
                 * woocommerce_single_product_summary hook
                 *
                 * @hooked woocommerce_template_single_title - 5
                 * @hooked woocommerce_template_single_rating - 10
                 * @hooked woocommerce_template_single_price - 10
                 * @hooked woocommerce_template_single_excerpt - 20
                 * @hooked woocommerce_template_single_add_to_cart - 30
                 * @hooked woocommerce_template_single_meta - 40
                 * @hooked woocommerce_template_single_sharing - 50
                 */
                do_action( 'woocommerce_single_product_summary' );
            ?>
            <form class="add-to-cart-roman" action="http://www.romancart.com/cart.asp" method="post" target="ROC_dCTarget"><input name="minicart" type="hidden" value="yes" />
<input name="itemcode" type="hidden" value="soap_blacksesame" />
<input name="price" type="hidden" value="9.99" />
<input name="storeid" type="hidden" value="54492" />
<input name="quantity" type="hidden" value="1" />
<a href="http://www.romancart.com/cart.asp?storeid=54492&amp;itemcode=soap_blacksesame&amp;minicart=yes" target="ROC_dCTarget">Add to Bag</a></form>
            <?php
		/**
		 * woocommerce_after_single_product_summary hook
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>


           
        </div><!-- .summary -->
        
    </div>
    <div class="row">
        <div class="middle-line">
            <div class="contain">
                What's in it?
            </div>
        </div>
        <?php 
$selected = get_field('ingredients');

if( in_array('Aqua', $selected) ) {
	
	echo '<div class="ingredients-item"><img src="aqua.jpg" /><strong>Aqua</strong>This is Aqua Definition</div>';
	
}
if( in_array('Behentrimonium Chloride', $selected) ) {
    echo '<div class="ingredients-item"><img src="behnt.jpg" /><strong>Behentrimonium Chloride</strong>This is Behentrimonium Chloride Definition</div>';
}
            if( in_array('Betaine', $selected) ) {
    echo '<div class="ingredients-item"><img src="betaine.jpg" /><strong>Betaine</strong><div class="description"></div></div>';
}
            if( in_array('Butterfly Pea Flower Extract', $selected) ) {
    echo '<div class="ingredients-item"><img src="butterfly.jpg" /><strong>Butterfly Pea Flower Extract</strong><div class="description"></div></div>';
}
            if( in_array('Cetrimonium Chloride', $selected) ) {
    echo '<div class="ingredients-item"><img src="cetrimonium.jpg" /><strong>Cetrimonium Chloride</strong><div class="description"></div></div>';
}
            if( in_array('Cetyl Alcohol', $selected) ) {
    echo '<div class="ingredients-item"><img src="cetyl.jpg" /><strong>Cetyl Alcohol</strong><div class="description"></div></div>';
}
            if( in_array('Cocos Nucifera (cold pressed virgin coconut) Oil', $selected) ) {
    echo '<div class="ingredients-item"><img src="cocos-nucifera.jpg" /><strong>Cocos Nucifera (cold pressed virgin coconut) Oil</strong><div class="description"></div></div>';
}
            if( in_array('Essential Oil', $selected) ) {
    echo '<div class="ingredients-item"><img src="essential-oil.jpg" /><strong>Essential Oil</strong><div class="description"></div></div>';
}
            if( in_array('Litsea Glutinosa (Bai Mee leaf) Extract', $selected) ) {
    echo '<div class="ingredients-item"><img src="litsea.jpg" /><strong>Litsea Glutinosa (Bai Mee leaf) Extract</strong><div class="description"></div></div>';
}
            if( in_array('Panthenol (Vitamin B5)', $selected) ) {
    echo '<div class="ingredients-item"><img src=".jpg" /><strong>Panthenol (Vitamin B5)</strong><div class="description"></div></div>';
}
            if( in_array('Peg-100', $selected) ) {
    echo '<div class="ingredients-item"><img src="panthenol.jpg" /><strong></strong><div class="description"></div></div>';
}
            if( in_array('Polyquaternium-43', $selected) ) {
    echo '<div class="ingredients-item"><img src="polyquaternium-43.jpg" /><strong>Polyquaternium-43</strong><div class="description"></div></div>';
}
            if( in_array('Propylene', $selected) ) {
    echo '<div class="ingredients-item"><img src="propylene.jpg" /><strong>Propylene</strong><div class="description"></div></div>';
}
            if( in_array('Raffinose', $selected) ) {
    echo '<div class="ingredients-item"><img src="raffinose.jpg" /><strong>Raffinose</strong><div class="description"></div></div>';
}
            if( in_array('Simmondsia chinensis (Jojoba) Oil', $selected) ) {
    echo '<div class="ingredients-item"><img src="simmondsia.jpg" /><strong>Simmondsia chinensis (Jojoba) Oil</strong><div class="description"></div></div>';
}
            if( in_array('Sodium Polyacrylate', $selected) ) {
    echo '<div class="ingredients-item"><img src="sodium-polyacrylate.jpg" /><strong>Sodium Polyacrylate</strong><div class="description"></div></div>';
}
            if( in_array('Stearyl Alcohol', $selected) ) {
    echo '<div class="ingredients-item"><img src="stearyl-alcohol.jpg" /><strong>Stearyl Alcohol</strong><div class="description"></div></div>';
}
?>
        <div class="middle-line">
            <div class="contain">
                What to do
            </div>
        </div>
        <?php echo the_field('what_to_do'); ?>
        <br />
        <br />
        <br />
    </div>
</div>

	

	<meta itemprop="url" content="<?php the_permalink(); ?>" />

</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>
