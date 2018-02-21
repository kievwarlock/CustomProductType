<?php
/**
 * product review add to cart
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

if ( $product->is_in_stock() ) : ?>


	<?php
	$product_link = get_post_meta(get_the_ID(),'product_review_link');
	if( $product_link ){ ?>
		<a href="<?php echo $product_link[0]; ?>"  class="single_add_to_cart_button button alt" target="_blank"><?php _e('Show product','woocommerce')?></a>
	<?php } ?>


<?php endif; ?>
