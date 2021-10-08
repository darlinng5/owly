<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>

	<?php if( is_sticky( $post_ID ) ) echo '<span class="sticky-post">'.esc_html__('Featured', 'owly').'</span>'; ?>
	<h1><a href="<?php echo get_permalink( $post_ID );?>" title="<?php printf(esc_attr__('Permalink to %s','owly'), the_title_attribute('echo=0&post='.$post_ID));?>"><?php echo get_the_title($post_ID);?></a></h1>