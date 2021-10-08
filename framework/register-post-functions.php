<?php
//Class definition: Post Functions
class owly_post_functions {

	public $element_position = array();

	function __construct() {

		$this->element_position = cs_get_option( 'blog-elements-position' );
		$this->element_position = isset( $this->element_position['enabled'] ) ? $this->element_position['enabled'] : array();

		add_action( 'wp_ajax_owly_post_rating_like', array( $this, 'owly_post_rating_like' ) );
		add_action( 'wp_ajax_nopriv_owly_post_rating_like', array( $this, 'owly_post_rating_like' ) );

		add_filter( 'post_class', array( $this, 'owly_add_remove_post_class' ), 10, 1 );

		add_action( 'wp_ajax_owly_ajax_load_more_post', array( $this, 'owly_ajax_load_more_post' ) );
		add_action( 'wp_ajax_nopriv_owly_ajax_load_more_post', array( $this, 'owly_ajax_load_more_post' ) );
	}

	function owly_post_meta_fields( $ajax = false, $page_ID = 0 ) {

		$meta_values = array();
		$enable_excerpt = '';

		if( $page_ID > 0 ) :

			// Getting values from page meta...
			$tpl_default_settings = get_post_meta($page_ID, '_tpl_default_settings', TRUE);
			$tpl_default_settings = is_array( $tpl_default_settings ) ? $tpl_default_settings  : array();

			$allow_read_more = !empty( $tpl_default_settings['enable-blog-readmore'] ) ? $tpl_default_settings['enable-blog-readmore'] : NULL;
			$read_more = !empty( $tpl_default_settings['blog-readmore'] ) ? $tpl_default_settings['blog-readmore'] : NULL;

			$allow_excerpt = !empty( $tpl_default_settings['blog-post-excerpt'] ) ? $tpl_default_settings['blog-post-excerpt'] : NULL;
			$excerpt = !empty( $tpl_default_settings['blog-post-excerpt-length'] ) ? $tpl_default_settings['blog-post-excerpt-length'] : NULL;
			
			$show_post_format = !empty( $tpl_default_settings['show-postformat-info'] ) ? $tpl_default_settings['show-postformat-info'] : NULL;
			$show_author_meta = !empty( $tpl_default_settings['show-author-info'] ) ? $tpl_default_settings['show-author-info'] : NULL;
			
			$show_date_meta = !empty( $tpl_default_settings['show-date-info'] ) ? $tpl_default_settings['show-date-info'] : NULL;
			$show_comment_meta = !empty( $tpl_default_settings['show-comment-info'] ) ? $tpl_default_settings['show-comment-info'] : NULL;

			$show_category_meta = !empty( $tpl_default_settings['show-category-info'] ) ? $tpl_default_settings['show-category-info'] : NULL;
			$show_tag_meta = !empty( $tpl_default_settings['show-tag-info'] ) ? $tpl_default_settings['show-tag-info'] : NULL;

		elseif( is_home() || is_search() || is_archive() || $ajax ) :

			// Getting values from theme options...
			$element_position = cs_get_option( 'blog-elements-position' );
			$element_position = isset( $element_position['enabled'] ) ? $element_position['enabled'] : array();

			$meta_group_position = cs_get_option( 'blog-meta-position' );
			$meta_group_position = isset( $meta_group_position['enabled'] ) ? $meta_group_position['enabled'] : array();

			$enable_excerpt = cs_get_option( 'enable-excerpt-text' );
			$excerpt_length = cs_get_option( 'blog-excerpt-length' );

			$read_more = cs_get_option( 'blog-readmore-text' );

			$enable_slider = cs_get_option( 'enable-gallery-slider' );

			$enable_video_audio = cs_get_option( 'enable-video-audio' );

			$enable_post_format = cs_get_option( 'enable-post-format' );

		endif;

		$excerpt_length = !empty( $excerpt_length ) ? $excerpt_length : 25;
		$read_more = !empty( $read_more ) ? $read_more : '';

		array_push( $meta_values, $element_position, $meta_group_position, $enable_excerpt, $excerpt_length, $read_more, $enable_slider, $enable_video_audio, $enable_post_format );

		return $meta_values;
	}

	static function owly_post_view_count($pid = '') {

		$post_meta = get_post_meta ( $pid, '_dt_post_settings', TRUE );
		$post_meta = is_array ( $post_meta ) ? $post_meta : array ();

		$v = array_key_exists("view_count", $post_meta) && !empty( $post_meta['view_count'] ) ?  $post_meta['view_count'] : 0;
		$v = $v + 1;
		$post_meta['view_count'] = $v;

		update_post_meta( $pid, '_dt_post_settings', $post_meta );

		return $v;
	}

	static function owly_post_like_count($pid = '') {

		$post_meta = get_post_meta ( $pid, '_dt_post_settings', TRUE );
		$post_meta = is_array ( $post_meta ) ? $post_meta : array ();

		$v = array_key_exists("like_count",$post_meta) && !empty( $post_meta['like_count'] ) ?  $post_meta['like_count'] : '0';

		return $v;
	}

	function owly_post_rating_like() {

		$out = '';
		$postid = $_REQUEST['post_id'];
		$nonce = $_REQUEST['nonce'];
		$action = $_REQUEST['doaction'];
		$arr_pids = array();

		if ( wp_verify_nonce( $nonce, 'rating-nonce' ) && $postid > 0 ) {
	
			$post_meta = get_post_meta ( $postid, '_dt_post_settings', TRUE );
			$post_meta = is_array ( $post_meta ) ? $post_meta : array ();
			$var_count = ($action == 'like') ? 'like_count' : 'unlike_count';

			if( isset( $_COOKIE['arr_pids'] ) ) {

				// article voted already...
				if( in_array( $postid, explode(',', $_COOKIE['arr_pids']) ) ) {

					$out = esc_html__('Already', 'owly');

				} else {
					// article first vote...
					$v = array_key_exists($var_count, $post_meta) ?  $post_meta[$var_count] : 0;
					$v = $v + 1;
					$post_meta[$var_count] = $v;
					update_post_meta( $postid, '_dt_post_settings', $post_meta );

					$out = $v;

					$arr_pids = explode(',', $_COOKIE['arr_pids']);
					array_push( $arr_pids, $postid);
					setcookie( "arr_pids", implode(',', $arr_pids ), time()+1314000, "/" );
				}
			} else {

				// site first vote...
				$v = array_key_exists($var_count, $post_meta) ?  $post_meta[$var_count] : 0;
				$v = $v + 1;
				$post_meta[$var_count] = $v;
				update_post_meta( $postid, '_dt_post_settings', $post_meta );

				$out = $v;

				array_push( $arr_pids, $postid);
				setcookie( "arr_pids", implode(',', $arr_pids ), time()+1314000, "/" );
			}
		} else {
			$out = esc_html__('Security check', 'owly');
		}

		echo do_shortcode($out);
		
		die();
	}

	function owly_add_remove_post_class( $classes ) {

		if( !array_key_exists( 'feature_image', $this->element_position ) && ( is_archive() || is_home() ) ) {
			if( ( $key = array_search( 'has-post-thumbnail', $classes ) ) !== false ) {
				unset( $classes[$key] );
			}
		}

		global $post;
		if ( is_sticky( $post->ID ) ) {
			$classes[] = 'sticky';
		}

		return $classes;
	}

	function owly_ajax_load_more_post() {

		$nonce = $_REQUEST['nonce'];
		if(wp_verify_nonce( $nonce, 'blog-nonce' )) {

			$combine_class = array();

			$count = ( isset($_REQUEST['count']) ) ? $_REQUEST['count'] : get_option( 'posts_per_page' );
			$p = ( isset($_REQUEST['pos']) ) ? $_REQUEST['pos'] : 1;
			$meta = ( isset($_REQUEST['meta']) ) ? $_REQUEST['meta'] : '';

			$post_layout = ( isset( $_REQUEST['layout'] ) ) ? $_REQUEST['layout'] : cs_get_option( 'blog-post-layout' );
			$combine_class[] = $post_layout.'-layout';

			$combine_class[] = $post_style = ( isset($_REQUEST['style']) ) ? $_REQUEST['style'] : cs_get_option( 'blog-post-grid-list-style' );

			$post_columns = ( isset($_REQUEST['column']) ) ? $_REQUEST['column'] : 'one-column';
			$post_columns = ( $post_layout == 'entry-list' ) ? 'one-column' : $post_columns;

			$page = ( isset($_REQUEST['pageNumber']) ) ? $_REQUEST['pageNumber'] : 2;

			$post_list_type = ( isset($_REQUEST['listtype']) ) ? $_REQUEST['listtype'] : '';
			$combine_class[] = ( $post_layout == 'entry-list' ) ? $post_list_type : '';

			$post_img_hover_style = $_REQUEST['hover'];
			$combine_class[] = ( $post_img_hover_style != '' ) ? $post_img_hover_style.'-hover' : '';

			$post_img_overlay_style = $_REQUEST['overlay'];
			$combine_class[] = ( ( $post_layout == 'entry-grid' || $post_layout == 'entry-list' ) && $post_img_overlay_style != '' ) ? $post_img_overlay_style.'-overlay' : '';

			$post_alignment = $_REQUEST['align'];
			$combine_class[] = ( ( $post_layout == 'entry-grid' || $post_layout == 'entry-cover' ) && $post_alignment != '' ) ? $post_alignment : '';

			$cats = ( isset($_REQUEST['cats']) ) ? explode( ',', $_REQUEST['cats'] ) : '';

			$args = '';

			switch( $post_columns ):

				default:
				case 'one-column':
					$post_class = "column dt-sc-one-column dt-sc-post-entry ";
					$columns = 1;
				break;

				case 'one-half-column':
					$post_class = "column dt-sc-one-half dt-sc-post-entry ";
					$columns = 2;
				break;

				case 'one-third-column':
					$post_class = "column dt-sc-one-third dt-sc-post-entry ";
					$columns = 3;
				break;

				case 'one-fourth-column':
					$post_class = "column dt-sc-one-fourth dt-sc-post-entry ";
					$columns = 4;
				break;
			endswitch;

			$post_class .= implode(' ', $combine_class);

			if ( empty( $cats ) ):
				$args = array('post_type' => 'post', 'posts_per_page' => $count, 'post_status' => 'publish', 'paged' => $page, 'ignore_sticky_posts' => true );
			else:
				$args = array('post_type' => 'post', 'posts_per_page' => $count, 'cat' => $cats, 'post_status' => 'publish', 'paged' => $page, 'ignore_sticky_posts' => true );
			endif;

			$the_query = new WP_Query($args);
			if($the_query->have_posts()):

				if( empty($meta) ) {
					$obj = new owly_post_functions;
					$meta = $obj->owly_post_meta_fields(true);
				}

				while( $the_query->have_posts() ):
					$the_query->the_post();

					$temp_class = "";
					$post_ID = get_the_ID();

					if($p == 1) $temp_class = $post_class.' first'; else $temp_class = $post_class;
					if($p == $columns) $p = 1; else $p = $p + 1;

					$post_meta = get_post_meta($post_ID, '_dt_post_settings', TRUE);
					$post_meta = is_array($post_meta) ? $post_meta : array();

					$format = !empty( $post_meta['post-format-type'] ) ? $post_meta['post-format-type'] : 'standard'; ?>

					<div class="<?php echo esc_attr($temp_class);?>">
						<article id="post-<?php the_ID();?>" <?php post_class( array( 'blog-entry', 'format-'.$format ) );?>><?php

							$template = apply_filters( 'owly_blog_archive_template', 'framework/templates/archive-blog-entry.php' );
							$template_args['ID'] = $post_ID;
							$template_args['Post_Style'] = $post_style;
							$template_args['Post_Layout'] = $post_layout;
							$template_args['Post_Column'] = $post_columns;
							$template_args['meta'] = $meta;

							owly_get_template( $template, $template_args );

						echo '</article>';
					echo '</div>';

				endwhile;

				wp_reset_postdata();  

				echo '#####$$$$$'.$p;

			else:?>
				<h2><?php esc_html_e('Nothing Found.', 'owly'); ?></h2>
				<p><?php esc_html_e('Apologies, but no results were found for the requested archive.', 'owly'); ?></p><?php
			endif;
			
		}

		die();
	}
}