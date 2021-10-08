<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>

    <div class="post-prev-link"><?php
		$prev_post = get_previous_post();
		if( !empty( $prev_post ) ):
			if( has_post_thumbnail( $prev_post->ID ) ):
				$entry_bg = '';
				$url = get_the_post_thumbnail_url( $prev_post->ID, 'full' );
				$entry_bg = "style=background-image:url(".$url.")"; ?>

                <div <?php echo esc_attr($entry_bg);?> class="prev-post-bgimg"></div>
                <a href="<?php echo get_permalink( $prev_post->ID ); ?>"></a><?php
			else: ?>
				<a href="<?php echo get_permalink( $prev_post->ID ); ?>"></a><?php
			endif; ?>

			<div class="nav-title-wrap">
                <p><?php esc_html_e('Previous Story','owly'); ?></p>
                <span class="fas fa-long-arrow-alt-left"></span>
                <h3><a href="<?php echo get_permalink( $prev_post->ID ); ?>" title="<?php echo esc_attr($prev_post->post_title); ?>"><?php echo "{$prev_post->post_title}"; ?></a></h3>
            </div>
        <?php else : ?>
			<div class="no-story nav-title-wrap">
                <p><?php esc_html_e('Next Story','owly'); ?></p>
                <h3><?php esc_html_e('Not Available','owly'); ?></h3>
            </div>        	
        <?php endif; ?></div>

    <div class="post-next-link"><?php
		$next_post = get_next_post();
		if( !empty( $next_post ) ):
			if( has_post_thumbnail( $next_post->ID ) ):
				$entry_bg = '';
				$url = get_the_post_thumbnail_url( $next_post->ID, 'full' );
				$entry_bg = "style=background-image:url(".$url.")"; ?>

                <div <?php echo esc_attr($entry_bg);?> class="next-post-bgimg"></div>
                <a href="<?php echo get_permalink( $next_post->ID ); ?>"></a><?php
			else: ?>
				<a href="<?php echo get_permalink( $next_post->ID ); ?>"></a><?php
			endif; ?>

			<div class="nav-title-wrap">
                <p><?php esc_html_e('Next Story','owly'); ?></p>
                <span class="fas fa-long-arrow-alt-right"></span>
                <h3><a href="<?php echo get_permalink( $next_post->ID ); ?>" title="<?php echo esc_attr($next_post->post_title); ?>"><?php echo "{$next_post->post_title}"; ?></a></h3>
            </div>    
        <?php else : ?>
			<div class="no-story nav-title-wrap">
                <p><?php esc_html_e('Previous Story','owly'); ?></p>
				<h3><?php esc_html_e('Not Available','owly'); ?></h3>
            </div>        	
        <?php endif; ?></div>