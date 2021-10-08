<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>

<?php
	if( $post_Style == 'dt-sc-overlay-ii-style' || $post_Style == 'dt-sc-minimal-style' || $post_Style == 'dt-sc-classic-style' || $post_Style == 'dt-sc-classic-ii-style' ):
		echo esc_html__('In ', 'owly');
		the_category(' ');
	elseif( $post_Style == 'dt-sc-date-left-modern-style' ):
		echo '<span>'.esc_html__('In ', 'owly').'</span>';
		the_category(' ');
	else: ?>
        <i class="fas fa-folder"> </i>
        <?php the_category(' ');
	endif; ?>