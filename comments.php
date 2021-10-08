<?php
if ( post_password_required() ) {
	return;
}

/* ---------------------------------------------------------------------------
		 *	Appends a checkbox to the comment form
		 * --------------------------------------------------------------------------- */
		function owly_privacy_comment_checkbox( $comment_field = array() ) {

			$comment_field['author'] = $comment_field['author'];
			$comment_field['email']  = $comment_field['email'];
			$comment_field['url']    = $comment_field['url'];

			$comment_field['comment-form-dt-privatepolicy'] = owly_privacy_comment_checkbox_content();

			return $comment_field ;
		}

		/* ---------------------------------------------------------------------------
		 *	Creates the checkbox html to the comment form
		 * --------------------------------------------------------------------------- */
		function owly_privacy_comment_checkbox_content( $content = "", $extra_class = "" ) {

			if( empty($content) ) $content = do_shortcode( cs_get_option('privacy-commentform-msg') );

			$output = '<p class="comment-form-dt-privatepolicy '.$extra_class.'">
						<input id="comment-form-dt-privatepolicy" name="comment-form-dt-privatepolicy" type="checkbox" value="yes">
						<label for="comment-form-dt-privatepolicy">'.$content.'</label>
					  </p>';

			return $output;
		}?>

<div id="comments" class="comments-area"><?php
	if ( have_comments() ) : ?>

	    <h3><?php comments_number(esc_html__('No Comments','owly'), esc_html__('Comments ( 1 )','owly'), esc_html__('Comments ( % )','owly') );?></h3>

		<?php the_comments_navigation(); ?>

        <ul class="commentlist">
     		<?php wp_list_comments( array( 'avatar_size' => 50 ) ); ?>
        </ul>

        <?php the_comments_navigation();

    endif;

	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
        <p class="nocomments"><?php esc_html_e( 'Comments are closed.','owly'); ?></p><?php
	endif;
	
	if( cs_get_option('privacy-commentform') == "true" ) {
		add_filter( 'comment_form_default_fields', 'owly_privacy_comment_checkbox'  );
		add_filter( 'preprocess_comment', 'owly_privacy_verify_comment_checkbox'  );
	}

	comment_form(); ?></div><!-- .comments-area -->