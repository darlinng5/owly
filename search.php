<?php get_header();
	$global_breadcrumb = cs_get_option( 'show-breadcrumb' );
	$header_class	   = cs_get_option( 'breadcrumb-position' );?>

<!-- ** Header Wrapper ** -->
<div id="header-wrapper" class="<?php echo esc_attr($header_class); ?>">  
	<!-- **Header** -->
	<header id="header">
		<div class="container"><?php

	        /**
	         * owly_header hook.
	         * 
	         * @hooked owly_vc_header_template - 10
	         *
	         */
	        do_action( 'owly_header' ); ?>
	    </div>
	</header><!-- **Header - End ** -->

	<!-- ** Breadcrumb ** -->
    <?php
        if( !empty( $global_breadcrumb ) ) {

        	$bstyle = owly_cs_get_option( 'breadcrumb-style', 'default' );
        	$style = owly_breadcrumb_css();
        	$breadcrumbs[] = '<a href="javascript:void(0);">' . esc_html__('Search', 'owly') . '</a>';

            owly_breadcrumb_output ( 
                '<h1>'.esc_html__("Search Result for",'owly').' '.get_search_query().'</h1>',
                $breadcrumbs, 'dt-breadcrumb-for-archive-category '.$bstyle,
                $style
            );
        }
    ?>
    <!-- ** Breadcrumb End ** -->                
</div><!-- ** Header Wrapper - End ** -->

<!-- **Main** -->
<div id="main">
    <!-- ** Container ** -->
    <div class="container"><?php
    	$page_layout  = cs_get_option( 'blog-archives-page-layout' );
    	$page_layout  = !empty( $page_layout ) ? $page_layout : "content-full-width";

    	$layout = owly_page_layout( $page_layout );
    	extract( $layout );

    	if ( $show_sidebar ) {
    		if ( $show_left_sidebar ) {?>
    		 	<!-- Secondary Left -->
    			<section id="secondary-left" class="secondary-sidebar <?php echo esc_attr( $sidebar_class );?>"><?php
    				get_sidebar('left');?>
    			</section><!-- Secondary Left End --><?php
    		}
    	}?>

    	<!-- Primary -->
        <section id="primary" class="<?php echo esc_attr( $page_layout );?>">
        	<?php get_template_part('framework/loops/content', 'archive');?>
        </section><!-- Primary End --><?php

    	if ( $show_sidebar ) {
    		if ( $show_right_sidebar ) {?>
    		 	<!-- Secondary Right -->
    			<section id="secondary-right" class="secondary-sidebar <?php echo esc_attr( $sidebar_class );?>"><?php
    				get_sidebar('right');?>
    			</section><!-- Secondary Right End --><?php
    		}
    	}?>
    </div>
    <!-- ** Container End ** -->
</div><!-- **Main - End ** -->    

<?php get_footer(); ?>