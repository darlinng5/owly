<?php
// Getting values from theme options...
$element_position = cs_get_option( 'post-elements-position' );
$element_position = isset( $element_position['enabled'] ) ? $element_position['enabled'] : array();

$meta_group_position = cs_get_option( 'post-meta-position' );
$meta_group_position = isset( $meta_group_position['enabled'] ) ? $meta_group_position['enabled'] : array();

$template_args['post_ID'] = $ID;
$template_args['meta'] = $Post_Meta;
$template_args['post_Style'] = $Post_Style;

foreach( $element_position as $key => $value ):

	if( $key == 'feature_image' ):

		$format = !empty( $Post_Meta['post-format-type'] ) ? $Post_Meta['post-format-type'] : 'standard';
		$template = 'framework/templates/single/entry-image.php'; ?>

		<!-- Featured Image -->
		<div class="entry-thumb single-preview-img">
			<?php owly_get_template( $template, $template_args ); ?>

			<!-- Post Format -->
			<div class="entry-format">
				<a class="ico-format" href="<?php echo esc_url(get_post_format_link( $format ));?>"></a>
			</div><!-- Post Format -->
		</div><!-- Featured Image --><?php

	elseif( $key == 'title' ):

		$template = 'framework/templates/single/entry-title.php'; ?>

		<!-- Entry Title -->
		<div class="entry-title">
			<?php owly_get_template( $template, $template_args ); ?>
		</div><!-- Entry Title --><?php

	elseif( $key == 'content' ):

		$template = 'framework/templates/single/entry-content.php';
		owly_get_template( $template );

	elseif( $key == 'author' ):

		$template = 'framework/templates/single/entry-author.php'; ?>

		<!-- Entry Author -->
		<div class="entry-author">
			<?php owly_get_template( $template, $template_args ); ?>
		</div><!-- Entry Author --><?php

	elseif( $key == 'date' ):

		$template = 'framework/templates/single/entry-date.php'; ?>

		<!-- Entry Date -->
		<div class="entry-date">
			<?php owly_get_template( $template, $template_args ); ?>
		</div><!-- Entry Date --><?php

	elseif( $key == 'comments' ):

		$template = 'framework/templates/single/entry-comment.php'; ?>

		<!-- Entry Comment -->
		<div class="entry-comments">
			<?php owly_get_template( $template, $template_args ); ?>
		</div><!-- Entry Comment --><?php

	elseif( $key == 'categories' ):

		$template = 'framework/templates/single/entry-categories.php'; ?>

		<!-- Entry Categories -->
		<div class="entry-categories">
			<?php owly_get_template( $template, $template_args ); ?>
		</div><!-- Entry Categories --><?php

	elseif( $key == 'tags' && has_tag() ):

		$template = 'framework/templates/single/entry-tags.php'; ?>

		<!-- Entry Tags -->
		<div class="entry-tags">
			<?php owly_get_template( $template, $template_args ); ?>
		</div><!-- Entry Tags --><?php

	elseif( $key == 'social_share' ):

		$template = 'framework/templates/single/entry-social.php'; ?>

		<!-- Entry Social Share -->
		<div class="entry-social-share">
			<?php owly_get_template( $template, $template_args ); ?>
		</div><!-- Entry Social Share --><?php

	elseif( $key == 'likes_views' ):

		$template = 'framework/templates/single/entry-likes-views.php'; ?>

		<!-- Entry Likes Views -->
		<div class="entry-likes-views">
			<?php owly_get_template( $template, $template_args ); ?>
		</div><!-- Entry Likes Views --><?php

	elseif( $key == 'related_posts' ):

		$template = 'framework/templates/single/entry-related-posts.php'; ?>

		<!-- Entry Related Posts -->
		<div class="entry-related-posts">
			<?php owly_get_template( $template, $template_args ); ?>
		</div><!-- Entry Related Posts --><?php

	elseif( $key == 'author_bio' ):

		$template = 'framework/templates/single/entry-author-bio.php'; ?>

		<!-- Entry Author Bio -->
		<div class="entry-author-bio">
			<?php owly_get_template( $template, $template_args ); ?>
		</div><!-- Entry Author Bio --><?php

	elseif( $key == 'navigation' ):

		$template = 'framework/templates/single/entry-navigation.php'; ?>

		<!-- Entry Navigation -->
		<div class="entry-post-navigation">
			<?php owly_get_template( $template, $template_args ); ?>
		</div><!-- Entry Navigation --><?php

	elseif( $key == 'comment_box' ):

		$template = 'framework/templates/single/entry-commentbox.php';
		owly_get_template( $template, $template_args );

	elseif( $key == 'related_article' ):

		$template = 'framework/templates/single/entry-related-article.php';
		owly_get_template( $template, $template_args );

	elseif( $key == 'meta_group' ): ?>

		<div class="entry-meta-group"><?php

			foreach( $meta_group_position as $key => $value ):

				if( $key == 'author' ):

					$template = 'framework/templates/single/entry-author.php'; ?>

					<!-- Entry Author -->
					<div class="entry-author">
						<?php owly_get_template( $template, $template_args ); ?>
					</div><!-- Entry Author --><?php

				elseif( $key == 'date' ):

					$template = 'framework/templates/single/entry-date.php'; ?>

					<!-- Entry Date -->
					<div class="entry-date">
						<?php owly_get_template( $template, $template_args ); ?>
					</div><!-- Entry Date --><?php

				elseif( $key == 'comments' ):

					$template = 'framework/templates/single/entry-comment.php'; ?>

					<!-- Entry Comment -->
					<div class="entry-comments">
						<?php owly_get_template( $template, $template_args ); ?>
					</div><!-- Entry Comment --><?php

				elseif( $key == 'categories' ):

					$template = 'framework/templates/single/entry-categories.php'; ?>

					<!-- Entry Categories -->
					<div class="entry-categories">
						<?php owly_get_template( $template, $template_args ); ?>
					</div><!-- Entry Categories --><?php

				elseif( $key == 'tags' && has_tag() ):

					$template = 'framework/templates/single/entry-tags.php'; ?>

					<!-- Entry Tags -->
					<div class="entry-tags">
						<?php owly_get_template( $template, $template_args ); ?>
					</div><!-- Entry Tags --><?php

				elseif( $key == 'social_share' ):

					$template = 'framework/templates/single/entry-social.php'; ?>

					<!-- Entry Social Share -->
					<div class="entry-social-share">
						<?php owly_get_template( $template, $template_args ); ?>
					</div><!-- Entry Social Share --><?php

				elseif( $key == 'likes_views' ):

					$template = 'framework/templates/single/entry-likes-views.php'; ?>

					<!-- Entry Likes Views -->
					<div class="entry-likes-views">
						<?php owly_get_template( $template, $template_args ); ?>
					</div><!-- Entry Likes Views --><?php

				endif;
			endforeach; ?>

		</div><?php
	endif;

endforeach; ?>