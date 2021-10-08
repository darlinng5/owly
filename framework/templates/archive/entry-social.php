<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>

    <div class="share"><?php
        $title = get_the_title( $post_ID );
        $title = urlencode($title);

		$link = get_permalink( $post_ID );
		$link = rawurlencode( $link ); ?>

        <i class="fas fa-share-alt-square"></i>
        <ul class="dt-share-list">
            <li><a href="http://www.facebook.com/sharer.php?u=<?php echo esc_attr($link);?>&amp;t=<?php echo esc_attr($title);?>" class="fab fa-facebook-f" target="_blank"></a></li>
            <li><a href="http://twitter.com/share?text=<?php echo esc_attr($title);?>&amp;url=<?php echo esc_attr($link);?>" class="fab fa-twitter" target="_blank"></a></li>
            <li><a href="http://plus.google.com/share?url=<?php echo esc_attr($link);?>" class="fab fa-google-plus-g" target="_blank"></a></li>
            <li><a href="http://pinterest.com/pin/create/button/?url=<?php echo esc_attr($link);?>&media=<?php echo get_the_post_thumbnail_url($post_ID, 'full');?>" class="fab fa-pinterest" target="_blank"></a></li>
        </ul>
    </div>