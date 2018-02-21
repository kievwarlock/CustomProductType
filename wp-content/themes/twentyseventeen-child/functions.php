<?php


// Add facebook share link after price

add_filter( 'woocommerce_get_price_html', 'facebook_share_link' );
function facebook_share_link( $price ) {

	$share_link = '';

	if( is_product() ){
		$share_link = '
		<a href="http://www.facebook.com/sharer.php?u=' . get_the_permalink() . '&t=' . get_the_title() . '"  target="blank">
			'. __('Share facebook') .'
		</a>';
	}


	return $price . $share_link;
}





/**
 * Register the Product review product type
 */
function register_product_review_product_type() {

	class WC_Product_Product_Review extends WC_Product_Simple {

		public function __construct( $product ) {

			$this->product_type = 'product_review';
			parent::__construct( $product );

		}

		public function get_type() {
			return 'product_review';
		}



	}

}
add_action( 'init', 'register_product_review_product_type' );

function add_simple_rental_product( $types ){

	$types[ 'product_review' ] = __( 'Product review' );
	return $types;

}
add_filter( 'product_type_selector', 'add_simple_rental_product' );


/**
 * Add Product review options tab.
 */
function review_options_tab( $tabs) {
	$tabs['review'] = array(
		'label'		=> __( 'Product review options', 'woocommerce' ),
		'target'	=> 'product_review_options',
		'class'		=> array( 'show_if_product_review'  ),
	);
	return $tabs;
}
add_filter( 'woocommerce_product_data_tabs', 'review_options_tab' );




/**
 * Contents of the rental options product tab.
 */
function product_review_tab_content() {
	global $post;

	?>
	<div id='product_review_options' class='panel woocommerce_options_panel'>
		<div class='options_group'>

			<?php
			woocommerce_wp_text_input( array(
			   'id'			=> 'product_review_link',
			   'type' 			=> 'text',
			   'label' =>  __( 'Product link', 'woocommerce' ),
			 ) );
			?>
		</div>

	</div><?php
}
add_action( 'woocommerce_product_data_panels', 'product_review_tab_content' );


/**
 * Save the custom fields.
 */
function save_product_review_field( $post_id ) {

	if ( isset( $_POST['product_review_link'] ) ) :
		update_post_meta( $post_id, 'product_review_link', sanitize_text_field( $_POST['product_review_link'] ) );
	endif;

}
add_action( 'woocommerce_process_product_meta_product_review', 'save_product_review_field'  );



if (! function_exists( 'woocommerce_product_review_add_to_cart' ) ) {

	function product_review_add_to_cart() {
		wc_get_template( 'single-product/add-to-cart/product_review.php' );
	}
	add_action('woocommerce_product_review_add_to_cart',  'product_review_add_to_cart');
}


