<?php

// Add required files

require_once( OWLY_THEME_DIR .'/framework/woocommerce/woocommerce-utils.php' ); // Utils
require_once( OWLY_THEME_DIR .'/framework/woocommerce/cart-utils.php' ); // Cart Utils
require_once( OWLY_THEME_DIR .'/framework/woocommerce/checkout-utils.php' ); // Checkout Utils
require_once( OWLY_THEME_DIR .'/framework/woocommerce/content-product.php' ); // Content Product
require_once( OWLY_THEME_DIR .'/framework/woocommerce/content-product_cat.php' ); // Content Product Category
require_once( OWLY_THEME_DIR .'/framework/woocommerce/content-single-product.php' ); // Content Single Product



// After theme setup
if( ! function_exists( 'owly_woo_support' ) ) {

	function owly_woo_support() {

		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		// To Remove Page Title
		add_filter( 'woocommerce_show_page_title', '__return_false' );

		// Disable WooCommerce Styles & Sidebar --------------------------------------
		add_filter( 'woocommerce_enqueue_styles', '__return_false' );
		remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

		// Defining Default Values
	    add_theme_support( 'woocommerce', array(

			'thumbnail_image_width'         => 1000,
			'gallery_thumbnail_image_width' => 100,
			'single_image_width'            => 1000,

		) );


	}

	add_action( 'after_setup_theme', 'owly_woo_support' );

}


//	Post Per Page 
if( ! function_exists( 'owly_woo_posts_per_page' ) ) {
	
	function owly_woo_posts_per_page( $count ) {

		if( is_shop() ) {
			$count = cs_get_option( 'shop-product-per-page', $count );
		} elseif( is_product_category() ) {
			$count = cs_get_option( 'dt-woo-category-archive-product-per-page' );
		} elseif( is_product_tag() ) {
			$count = cs_get_option( 'dt-woo-tag-archive-product-per-page' );
		}

		return $count;

	}

	add_filter( 'loop_shop_per_page', 'owly_woo_posts_per_page' );

}


/**
 * ------------------------------------------------------------------------------------------------
 * Main Content Wrapper
 * ------------------------------------------------------------------------------------------------
 */

// To Update Page Wrapper Start
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

if( ! function_exists( 'owly_woo_output_content_wrapper' ) ) {
	
	function owly_woo_output_content_wrapper() {

		$shop_page_id       = '';
		$settings           = array();
		$page_layout        = '';
		$sidebar_class      = '';
		$show_sidebar       = '';
		$show_left_sidebar  = '';
		$container_class    = '';
		$widgets            = array();
		
		if( is_shop() || is_product_category() || is_product_tag() ) {

			$options = owly_shop_archive_page();
			
			$widgets = $options['widgets'];
			$layout  = $options['page-layout'];

			$layout  = owly_page_layout( $layout );
			extract( $layout );	
		
		} elseif( is_product() ) {

			global $post;

			$options = owly_single_product( $post->ID, "left" );
			$widgets = $options['widgets'];
			$layout  = $options['page-layout'];

			$layout  = owly_page_layout( $layout );
			extract( $layout );	

		}
		
		echo '<!-- ** Header Wrapper ** -->';
		echo '<div id="header-wrapper" class="header-default-position">';

			echo '<!-- **Header** -->';
			echo '<header id="header">';

				echo '<div class="container">';
           			do_action( 'owly_header', $shop_page_id );
				echo '</div>';

			echo '</header>';
			echo '<!-- **Header - End ** -->';
		echo '</div>';
		echo '<!-- ** Header Wrapper - End ** -->';

		echo '<!-- **Main** -->';
		echo '<div id="main">';

			echo '<!-- **Main - Container** -->';
			echo '<div class="container">';

				# Left Sidebar
					if ( $show_sidebar ) {
						if ( $show_left_sidebar ) {
							$wtstyle = cs_get_option( 'wtitle-style' );	

							echo '<section id="secondary-left" class="secondary-sidebar '.esc_attr( $sidebar_class ).'">';
								echo !empty( $wtstyle ) ? "<div class='{$wtstyle}'>" : '';
								foreach( $widgets as $widget ) {
									dynamic_sidebar( $widget );
								}
								echo !empty( $wtstyle ) ? '</div>' : '';
							echo '</section>';
						}
					}				
				# Left Sidebar


				echo '<!-- Primary -->';
				echo '<section id="primary" class="'.esc_attr( $page_layout ).'">';

	}

	add_action( 'woocommerce_before_main_content', 'owly_woo_output_content_wrapper', 11 );

}

// To Update Page wrapper End
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if( ! function_exists( 'owly_woo_output_content_wrapper_end' ) ) {

	function owly_woo_output_content_wrapper_end() {
		$shop_page_id       = '';
		$settings           = array();
		$sidebar_class      = '';
		$show_sidebar       = '';
		$show_right_sidebar = '';
		$widgets            = array();


				echo '</section>';
				echo '<!-- ** Primary - End ** -->';


				if( is_shop() || is_product_category() || is_product_tag() ) {

					$options = owly_shop_archive_page();

					$widgets = $options['widgets'];
					$layout  = $options['page-layout'];

					$layout  = owly_page_layout( $layout );
					extract( $layout );	

				} elseif( is_product() ) {

					global $post;

					$options = owly_single_product( $post->ID, "right" );
					$widgets = $options['widgets'];
					$layout  = $options['page-layout'];

					$layout  = owly_page_layout( $layout );
					extract( $layout );

				}

				# Right Sidebar
					if ( $show_sidebar ) {
						if ( $show_right_sidebar ) {
							$wtstyle = cs_get_option( 'wtitle-style' );

							echo '<section id="secondary-right" class="secondary-sidebar '.esc_attr( $sidebar_class ).'">';
								echo !empty( $wtstyle ) ? "<div class='{$wtstyle}'>" : '';
								foreach( $widgets as $widget ) {
									dynamic_sidebar( $widget );
								}
								echo !empty( $wtstyle ) ? '</div>' : '';
							echo '</section>';
						}
					}
				# Right Sidebar

			echo '</div>';
			echo '<!-- ** Main - Container - End ** -->';

		echo '</div>';
		echo '<!-- ** Main - End ** -->';

	}

	add_action( 'woocommerce_after_main_content', 'owly_woo_output_content_wrapper_end', 11 );

}

?>