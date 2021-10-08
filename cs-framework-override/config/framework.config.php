<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => constant('OWLY_THEME_NAME').' '.esc_html__('Options', 'owly'),
  'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => true,
  'show_reset_all'  => false,
	'framework_title' => sprintf(esc_html__('Designthemes Framework %1$s', 'owly'), '<small>'.esc_html__('by Designthemes', 'owly').'</small>'),
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

$options[]      = array(
  'name'        => 'general',
  'title'       => esc_html__('General', 'owly'),
  'icon'        => 'fa fa-gears',

  'fields'      => array(

	array(
	  'type'    => 'subheading',
	  'content' => esc_html__( 'General Options', 'owly' ),
	),
	
	array(
		'id'	=> 'header',
		'type'	=> 'select',
		'title'	=> esc_html__('Site Header', 'owly'),
		'class'	=> 'chosen',
		'options'	=> 'posts',
		'query_args'	=> array(
			'post_type'	=> 'dt_headers',
			'orderby'	=> 'title',
			'order'	=> 'ASC',
			'posts_per_page' => -1
		),
		'default_option'	=> esc_attr__('Select Header', 'owly'),
		'attributes'	=> array ( 'style'	=> 'width:50%'),
		'info'	=> esc_html__('Select default header.','owly'),
	),
	
	array(
		'id'	=> 'footer',
		'type'	=> 'select',
		'title'	=> esc_html__('Site Footer', 'owly'),
		'class'	=> 'chosen',
		'options'	=> 'posts',
		'query_args'	=> array(
			'post_type'	=> 'dt_footers',
			'orderby'	=> 'title',
			'order'	=> 'ASC',
			'posts_per_page' => -1
		),
		'default_option'	=> esc_attr__('Select Footer', 'owly'),
		'attributes'	=> array ( 'style'	=> 'width:50%'),
		'info'	=> esc_html__('Select defaultfooter.','owly'),
	),

	array(
		'id'      => 'use-site-loader',
		'type'    => 'switcher',
		'title'   => esc_html__('Site Loader', 'owly'),
		'info'    => esc_html__('YES! to use site loader.', 'owly'),
		'default' => true
	),	

	array(
	  'id'  	 => 'show-pagecomments',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Globally Show Page Comments', 'owly'),
	  'info'	 => esc_html__('YES! to show comments on all the pages. This will globally override your "Allow comments" option under your page "Discussion" settings.', 'owly'),
	  'default'  => false,
	),

	array(
	  'id'  	 => 'showall-pagination',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Show all pages in Pagination', 'owly'),
	  'info'	 => esc_html__('YES! to show all the pages instead of dots near the current page.', 'owly')
	),



	array(
	  'id'      => 'google-map-key',
	  'type'    => 'text',
	  'title'   => esc_html__('Google Map API Key', 'owly'),
	  'after' 	=> '<p class="cs-text-info">'.esc_html__('Put a valid google account api key here', 'owly').'</p>',
	),

	array(
	  'id'      => 'mailchimp-key',
	  'type'    => 'text',
	  'title'   => esc_html__('Mailchimp API Key', 'owly'),
	  'after' 	=> '<p class="cs-text-info">'.esc_html__('Put a valid mailchimp account api key here', 'owly').'</p>',
	),

  ),
);

$options[]      = array(
  'name'        => 'layout_options',
  'title'       => esc_html__('Layout Options', 'owly'),
  'icon'        => 'dashicons dashicons-exerpt-view',
  'sections' => array(

	// -----------------------------------------
	// Header Options
	// -----------------------------------------
	array(
	  'name'      => 'breadcrumb_options',
	  'title'     => esc_html__('Breadcrumb Options', 'owly'),
	  'icon'      => 'fa fa-sitemap',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Breadcrumb Options", 'owly' ),
		  ),

		  array(
			'id'  		 => 'show-breadcrumb',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Breadcrumb', 'owly'),
			'info'		 => esc_html__('YES! to display breadcrumb for all pages.', 'owly'),
			'default' 	 => true,
		  ),

		  array(
			'id'           => 'breadcrumb-delimiter',
			'type'         => 'icon',
			'title'        => esc_html__('Breadcrumb Delimiter', 'owly'),
			'info'         => esc_html__('Choose delimiter style to display on breadcrumb section.', 'owly'),
		  ),

		  array(
			'id'           => 'breadcrumb-style',
			'type'         => 'select',
			'title'        => esc_html__('Breadcrumb Style', 'owly'),
			'options'      => array(
			  'default' 							=> esc_html__('Default', 'owly'),
			  'aligncenter'    						=> esc_html__('Align Center', 'owly'),
			  'alignright'  						=> esc_html__('Align Right', 'owly'),
			  'breadcrumb-left'    					=> esc_html__('Left Side Breadcrumb', 'owly'),
			  'breadcrumb-right'     				=> esc_html__('Right Side Breadcrumb', 'owly'),
			  'breadcrumb-top-right-title-center'  	=> esc_html__('Top Right Title Center', 'owly'),
			  'breadcrumb-top-left-title-center'  	=> esc_html__('Top Left Title Center', 'owly'),
			),
			'class'        => 'chosen',
			'default'      => 'default',
			'info'         => esc_html__('Choose alignment style to display on breadcrumb section.', 'owly'),
		  ),

		  array(
			  'id'                 => 'breadcrumb-position',
			  'type'               => 'select',
			  'title'              => esc_html__('Position', 'owly' ),
			  'options'            => array(
				  'header-top-absolute'    => esc_html__('Behind the Header','owly'),
				  'header-top-relative'    => esc_html__('Default','owly'),
			  ),
			  'class'        => 'chosen',
			  'default'      => 'header-top-relative',
			  'info'         => esc_html__('Choose position of breadcrumb section.', 'owly'),
		  ),

		  array(
			'id'    => 'breadcrumb_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'owly'),
			'desc'  => esc_html__('Choose background options for breadcrumb title section.', 'owly'),
			'default' => array(
				'image'      => OWLY_THEME_URI . '/images/breadcrumb-bg.png',
				'repeat'     => '',
				'position'   => 'center center',
				'attachment' => '',
				'size'       => '',
				'color'      => '#000000'
			)
		  ),

		),
	),

  ),
);

$options[]      = array(
  'name'        => 'allpage_options',
  'title'       => esc_html__('All Page Options', 'owly'),
  'icon'        => 'fa fa-files-o',
  'sections' => array(

	// -----------------------------------------
	// Blog Archive Options
	// -----------------------------------------
	array(
	  'name'      => 'blog_archive_options',
	  'title'     => esc_html__('Blog Archive Options', 'owly'),
	  'icon'      => 'fa fa-file-archive-o',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Blog Archives Page Layout", 'owly' ),
		  ),

		  array(
			'id'      	 => 'blog-archives-page-layout',
			'type'       => 'image_select',
			'title'      => esc_html__('Page Layout', 'owly'),
			'options'    => array(
			  'content-full-width'   => OWLY_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => OWLY_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => OWLY_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => OWLY_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'blog-archives-page-layout',
			),
		  ),

		  array(
			'id'  		 => 'show-standard-left-sidebar-for-post-archives',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Standard Left Sidebar', 'owly'),
			'dependency' => array( 'blog-archives-page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  		 => 'show-standard-right-sidebar-for-post-archives',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Standard Right Sidebar', 'owly'),
			'dependency' => array( 'blog-archives-page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'      	   => 'blog-post-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Post Layout', 'owly'),
			'options'      => array(
			  'entry-grid'  => OWLY_THEME_URI . '/cs-framework-override/images/entry-grid.png',
			  'entry-list'  => OWLY_THEME_URI . '/cs-framework-override/images/entry-list.png',			  
			  'entry-cover' => OWLY_THEME_URI . '/cs-framework-override/images/entry-cover.png',
			),
			'default'      => 'entry-cover',
			'attributes'   => array(
			  'data-depend-id' => 'blog-post-layout',
			),
		  ),

		  array(
			'id'           => 'blog-post-grid-list-style',
			'type'         => 'select',
			'title'        => esc_html__('Post Style', 'owly'),
			'options'      => array(
			  'dt-sc-boxed' 			=> esc_html__('Boxed', 'owly'),
			  'dt-sc-simple'      		=> esc_html__('Simple', 'owly'),
			  'dt-sc-overlap'      		=> esc_html__('Overlap', 'owly'),
			  'dt-sc-content-overlay' 	=> esc_html__('Content Overlay', 'owly'),
			  'dt-sc-simple-withbg'		=> esc_html__('Simple with Background', 'owly'),
			  'dt-sc-overlay'   	    => esc_html__('Overlay', 'owly'),
			  'dt-sc-overlay-ii'      	=> esc_html__('Overlay II', 'owly'),			  
			  'dt-sc-overlay-iii'      	=> esc_html__('Overlay III', 'owly'),			  
			  'dt-sc-alternate'	 		=> esc_html__('Alternate', 'owly'),
			  'dt-sc-minimal'       	=> esc_html__('Minimal', 'owly'),
			  'dt-sc-modern' 	      	=> esc_html__('Modern', 'owly'),
			  'dt-sc-classic'	 		=> esc_html__('Classic', 'owly'),
			  'dt-sc-classic-ii'	 	=> esc_html__('Classic II', 'owly'),
			  'dt-sc-classic-overlay' 	=> esc_html__('Classic Overlay', 'owly'),
			  'dt-sc-grungy-boxed' 		=> esc_html__('Grungy Boxed', 'owly'),
			  'dt-sc-title-overlap'	 	=> esc_html__('Title Overlap', 'owly'),
			),
			'class'        => 'chosen',
			'default'      => 'dt-sc-boxed',
			'info'         => esc_html__('Choose post style to display blog archives pages.', 'owly'),
			'dependency'   => array( 'blog-post-layout', 'any', 'entry-grid,entry-list' ),
		  ),

		  array(
			'id'           => 'blog-post-cover-style',
			'type'         => 'select',
			'title'        => esc_html__('Post Style', 'owly'),
			'options'      => array(
			  'dt-sc-boxed' 			=> esc_html__('Boxed', 'owly'),
			  'dt-sc-canvas'      		=> esc_html__('Canvas', 'owly'),
			  'dt-sc-content-overlay' 	=> esc_html__('Content Overlay', 'owly'),
			  'dt-sc-overlay'   	    => esc_html__('Overlay', 'owly'),
			  'dt-sc-overlay-ii'      	=> esc_html__('Overlay II', 'owly'),
			  'dt-sc-overlay-iii'      	=> esc_html__('Overlay III', 'owly'),
			  'dt-sc-trendy' 			=> esc_html__('Trendy', 'owly'),
			  'dt-sc-mobilephone' 		=> esc_html__('Mobile Phone', 'owly'),
			),
			'class'        => 'chosen',
			'default'      => 'dt-sc-overlay-iii',
			'info'         => esc_html__('Choose post style to display blog archives pages.', 'owly'),
			'dependency'   => array( 'blog-post-layout', '==', 'entry-cover' ),
		  ),

		  array(
			'id'      	   => 'blog-post-columns',
			'type'         => 'image_select',
			'title'        => esc_html__('Columns', 'owly'),
			'options'      => array(
			  'one-column' 		  => OWLY_THEME_URI . '/cs-framework-override/images/one-column.png',
			  'one-half-column'   => OWLY_THEME_URI . '/cs-framework-override/images/one-half-column.png',
			  'one-third-column'  => OWLY_THEME_URI . '/cs-framework-override/images/one-third-column.png',
			),
			'default'      => 'one-third-column',
			'attributes'   => array(
			  'data-depend-id' => 'blog-post-columns',
			),
			'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-cover' ),
		  ),

		  array(
			'id'      	   => 'blog-list-thumb',
			'type'         => 'image_select',
			'title'        => esc_html__('List Type', 'owly'),
			'options'      => array(
			  'entry-left-thumb'  => OWLY_THEME_URI . '/cs-framework-override/images/entry-left-thumb.png',
			  'entry-right-thumb' => OWLY_THEME_URI . '/cs-framework-override/images/entry-right-thumb.png',
			),
			'default'      => 'entry-left-thumb',
			'attributes'   => array(
			  'data-depend-id' => 'blog-list-thumb',
			),
			'dependency' => array( 'blog-post-layout', '==', 'entry-list' ),
		  ),

		  array(
			'id'           => 'blog-alignment',
			'type'         => 'select',
			'title'        => esc_html__('Elements Alignment', 'owly'),
			'options'      => array(
			  'alignnone'	=> esc_html__('None', 'owly'),
			  'alignleft' 	=> esc_html__('Align Left', 'owly'),
			  'aligncenter' => esc_html__('Align Center', 'owly'),
			  'alignright'  => esc_html__('Align Right', 'owly'),
			),
			'class'        => 'chosen',
			'default'      => 'alignnone',
			'info'         => esc_html__('Choose alignment to display archives pages.', 'owly'),
			'dependency'   => array( 'blog-post-layout', 'any', 'entry-grid,entry-cover' ),
		  ),

		  array(
			'id'  		 => 'enable-equal-height',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Enable Equal Height', 'owly'),
			'info'		 => esc_html__('YES! to items display as equal height', 'owly'),
			'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-cover' ),
		  ),

		  array(
			'id'  		 => 'enable-no-space',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Enable No Space', 'owly'),
			'info'		 => esc_html__('YES! to items display as no space', 'owly'),
			'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-cover' ),
		  ),

		  array(
			'id'  		 => 'enable-gallery-slider',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Display Gallery Slider', 'owly'),
			'info'		 => esc_html__('YES! to display gallery slider', 'owly'),
			'default'    => true,
			'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-list' ),
		  ),

		  array(
			'id'             => 'blog-elements-position',
			'type'           => 'sorter',
			'title'          => esc_html__('Elements Positioning', 'owly'),
			'default'        => array(
			  'enabled'      => array(
				'feature_image'	=> esc_html__('Feature Image', 'owly'),
				'title'      	=> esc_html__('Title', 'owly'),
				'content'    	=> esc_html__('Content', 'owly'),
				'meta_group' 	=> esc_html__('Meta Group', 'owly'),
				'read_more'  	=> esc_html__('Read More', 'owly'),
			  ),
			  'disabled'     => array(
				'author'		=> esc_html__('Author', 'owly'),
				'date'     		=> esc_html__('Date', 'owly'),
				'comments' 		=> esc_html__('Comments', 'owly'),				
				'categories'    => esc_html__('Categories', 'owly'),
				'tags'  		=> esc_html__('Tags', 'owly'),
				'social_share'  => esc_html__('Social Share', 'owly'),
				'likes_views'   => esc_html__('Likes & Views', 'owly'),
			  ),
			),
			'enabled_title'  	=> esc_html__('Active Elements', 'owly'),
			'disabled_title' 	=> esc_html__('Deactive Elements', 'owly'),
		  ),

		  array(
			'id'             => 'blog-meta-position',
			'type'           => 'sorter',
			'title'          => esc_html__('Meta Group Positioning', 'owly'),
			'default'        => array(
			  'enabled'      => array(
				'author'		=> esc_html__('Author', 'owly'),
				'date'     		=> esc_html__('Date', 'owly'),
				'comments' 		=> esc_html__('Comments', 'owly'),
			  ),
			  'disabled'     => array(
				'tags'  		=> esc_html__('Tags', 'owly'),
				'categories'    => esc_html__('Categories', 'owly'),
				'social_share'  => esc_html__('Social Share', 'owly'),
				'likes_views'   => esc_html__('Likes & Views', 'owly'),
			  ),
			),
			'enabled_title'  => esc_html__('Active Items', 'owly'),
			'disabled_title' => esc_html__('Deactive Items', 'owly'),
			'desc'  		 => esc_html__('Note: Use max 3 items for better results.', 'owly')
		  ),

		  array(
			'id'  		 => 'enable-post-format',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Enable Post Format', 'owly'),
			'info'		 => esc_html__('YES! to display post format icon', 'owly'),
			'default'    => false,
		  ),

		  array(
			'id'  		 => 'enable-excerpt-text',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Enable Excerpt Text', 'owly'),
			'info'		 => esc_html__('YES! to display excerpt content', 'owly'),
		  ),

		  array(
			'id'  		 => 'blog-excerpt-length',
			'type'  	 => 'number',
			'title' 	 => esc_html__('Excerpt Length', 'owly'),
			'after'		 => '<span class="cs-text-desc">&nbsp;'.esc_html__('Put Excerpt Length', 'owly').'</span>',
			'default' 	 => 25,
			'dependency' => array( 'enable-excerpt-text', '==', 'true' ),
		  ),

		  array(
			'id'  		 => 'enable-video-audio',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Display Video & Audio for Posts', 'owly'),
			'info'		 => esc_html__('YES! to display video & audio, instead of feature image for posts', 'owly'),
			'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-list' ),
		  ),

		  array(
			'id'  		 => 'blog-readmore-text',
			'type'  	 => 'text',
			'title' 	 => esc_html__('Read More Text', 'owly'),
			'info'		 => esc_html__('Put the read more text here', 'owly'),
			'default'	 => esc_html__('Read More', 'owly')
		  ),

		  array(
			'id'           => 'blog-image-hover-style',
			'type'         => 'select',
			'title'        => esc_html__('Image Hover Style', 'owly'),
			'options'      => array(
			  'dt-sc-default' 			=> esc_html__('Default', 'owly'),
			  'dt-sc-blur'      		=> esc_html__('Blur', 'owly'),
			  'dt-sc-bw'   		   		=> esc_html__('Black and White', 'owly'),
			  'dt-sc-brightness'	 	=> esc_html__('Brightness', 'owly'),
			  'dt-sc-fadeinleft'   	    => esc_html__('Fade InLeft', 'owly'),
			  'dt-sc-fadeinright'  	    => esc_html__('Fade InRight', 'owly'),
			  'dt-sc-hue-rotate'   	    => esc_html__('Hue-Rotate', 'owly'),
			  'dt-sc-invert'	   	    => esc_html__('Invert', 'owly'),
			  'dt-sc-opacity'   	    => esc_html__('Opacity', 'owly'),
			  'dt-sc-rotate'	   	    => esc_html__('Rotate', 'owly'),
			  'dt-sc-rotate-alt'   	    => esc_html__('Rotate Alt', 'owly'),
			  'dt-sc-scalein'   	    => esc_html__('Scale In', 'owly'),
			  'dt-sc-scaleout' 	    	=> esc_html__('Scale Out', 'owly'),
			  'dt-sc-sepia'	   	    	=> esc_html__('Sepia', 'owly'),
			  'dt-sc-tint'		   	    => esc_html__('Tint', 'owly'),
			),
			'class'        => 'chosen',
			'default'      => 'dt-sc-scalein',
			'info'         => esc_html__('Choose image hover style to display archives pages.', 'owly'),
		  ),

		  array(
			'id'           => 'blog-image-overlay-style',
			'type'         => 'select',
			'title'        => esc_html__('Image Overlay Style', 'owly'),
			'options'      => array(
			  'dt-sc-default' 			=> esc_html__('None', 'owly'),
			  'dt-sc-fixed' 			=> esc_html__('Fixed', 'owly'),
			  'dt-sc-tb' 				=> esc_html__('Top to Bottom', 'owly'),
			  'dt-sc-bt'   				=> esc_html__('Bottom to Top', 'owly'),
			  'dt-sc-rl'   				=> esc_html__('Right to Left', 'owly'),
			  'dt-sc-lr'				=> esc_html__('Left to Right', 'owly'),
			  'dt-sc-middle'			=> esc_html__('Middle', 'owly'),
			  'dt-sc-middle-radial'		=> esc_html__('Middle Radial', 'owly'),
			  'dt-sc-tb-gradient' 		=> esc_html__('Gradient - Top to Bottom', 'owly'),
			  'dt-sc-bt-gradient'   	=> esc_html__('Gradient - Bottom to Top', 'owly'),
			  'dt-sc-rl-gradient'   	=> esc_html__('Gradient - Right to Left', 'owly'),
			  'dt-sc-lr-gradient'		=> esc_html__('Gradient - Left to Right', 'owly'),
			  'dt-sc-radial-gradient'	=> esc_html__('Gradient - Radial', 'owly'),
			  'dt-sc-flash' 			=> esc_html__('Flash', 'owly'),
			  'dt-sc-circle' 			=> esc_html__('Circle', 'owly'),
			  'dt-sc-hm-elastic'		=> esc_html__('Horizontal Elastic', 'owly'),
			  'dt-sc-vm-elastic'		=> esc_html__('Vertical Elastic', 'owly'),
			),
			'class'        => 'chosen',
			'default'      => '',
			'info'         => esc_html__('Choose image overlay style to display archives pages.', 'owly'),
			'dependency' => array( 'blog-post-layout', 'any', 'entry-grid,entry-list' ),
		  ),

		  array(
			'id'           => 'blog-pagination',
			'type'         => 'select',
			'title'        => esc_html__('Pagination Style', 'owly'),
			'options'      => array(
			  'older_newer' 	=> esc_html__('Older & Newer', 'owly'),
			  'numbered'      	=> esc_html__('Numbered', 'owly'),
			  'load_more'      	=> esc_html__('Load More', 'owly'),
			  'infinite_scroll'	=> esc_html__('Infinite Scroll', 'owly'),
			),
			'class'        => 'chosen',
			'default'      => 'numbered',
			'info'         => esc_html__('Choose pagination style to display archives pages.', 'owly'),
		  ),

		),
	),

	// -----------------------------------------
	// Blog Single Options
	// -----------------------------------------
	array(
	  'name'      => 'blog_single_options',
	  'title'     => esc_html__('Blog Single Options', 'owly'),
	  'icon'      => 'fa fa-thumb-tack',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Blog Single Post Options", 'owly' ),
		  ),

		  array(
			'id'             => 'post-elements-position',
			'type'           => 'sorter',
			'title'          => esc_html__('Post Elements Positioning', 'owly'),
			'default'        => array(
			  'enabled'      => array(				
				'title'      	=> esc_html__('Title', 'owly'),
				'content'    	=> esc_html__('Content', 'owly'),
				'meta_group' 	=> esc_html__('Meta Group', 'owly'),
				'navigation'    => esc_html__('Navigation', 'owly'),
				'comment_box' 	=> esc_html__('Comment Box', 'owly'),				
			  ),
			  'disabled'     => array(
			  	'author_bio' 	=> esc_html__('Author Bio', 'owly'),
			  	'feature_image'	=> esc_html__('Feature Image', 'owly'),
				'author'		=> esc_html__('Author', 'owly'),
				'date'     		=> esc_html__('Date', 'owly'),
				'comments' 		=> esc_html__('Comments', 'owly'),
				'categories'    => esc_html__('Categories', 'owly'),
				'tags'  		=> esc_html__('Tags', 'owly'),
				'social_share'  => esc_html__('Social Share', 'owly'),
				'likes_views'   => esc_html__('Likes & Views', 'owly'),
				'related_article' 	=> esc_html__('Related Article( Only Fixed )', 'owly'),
				'related_posts' => esc_html__('Related Posts', 'owly'),
			  ),
			),
			'enabled_title'  => esc_html__('Active Elements', 'owly'),
			'disabled_title' => esc_html__('Deactive Elements', 'owly'),
		  ),

		  array(
			'id'             => 'post-meta-position',
			'type'           => 'sorter',
			'title'          => esc_html__('Meta Group Positioning', 'owly'),
			'default'        => array(
			  'enabled'      => array(
				'tags'  		=> esc_html__('Tags', 'owly'),
				'date'     		=> esc_html__('Date', 'owly'),
			  ),
			  'disabled'     => array(
				'author'		=> esc_html__('Author', 'owly'),
				'comments' 		=> esc_html__('Comments', 'owly'),
				'categories'    => esc_html__('Categories', 'owly'),
				'social_share'  => esc_html__('Social Share', 'owly'),
				'likes_views'   => esc_html__('Likes & Views', 'owly'),
			  ),
			),
			'enabled_title'  => esc_html__('Active Items', 'owly'),
			'disabled_title' => esc_html__('Deactive Items', 'owly'),
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Related Post Options", 'owly' ),
		  ),

		  array(
			'id'  		 => 'post-related-title',
			'type'  	 => 'text',
			'title' 	 => esc_html__('Related Posts Section Title', 'owly'),
			'info'		 => esc_html__('Put the related posts section title here', 'owly'),
			'default'	 => esc_html__('Related Posts', 'owly')
		  ),

		  array(
			'id'      	   => 'post-related-columns',
			'type'         => 'image_select',
			'title'        => esc_html__('Columns', 'owly'),
			'options'      => array(
			  'one-column' 		  => OWLY_THEME_URI . '/cs-framework-override/images/one-column.png',
			  'one-half-column'   => OWLY_THEME_URI . '/cs-framework-override/images/one-half-column.png',
			  'one-third-column'  => OWLY_THEME_URI . '/cs-framework-override/images/one-third-column.png',
			  //'one-fourth-column' => OWLY_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
			),
			'default'      => 'one-third-column',
			'attributes'   => array(
			  'data-depend-id' => 'post-related-columns',
			),
		  ),

		  array(
			'id'  		 => 'post-related-count',
			'type'  	 => 'number',
			'title' 	 => esc_html__('No.of Posts to Show', 'owly'),
			'info'		 => esc_html__('Put the no.of related posts to show', 'owly'),
			'default'	 => 3
		  ),

		  array(
			'id'  		 => 'enable-related-excerpt',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Enable Excerpt Text', 'owly'),
			'info'		 => esc_html__('YES! to display excerpt content', 'owly'),
		  ),

		  array(
			'id'  		 => 'post-related-excerpt',
			'type'  	 => 'number',
			'title' 	 => esc_html__('Excerpt Length', 'owly'),
			'after'		 => '<span class="cs-text-desc">&nbsp;'.esc_html__('Put Excerpt Length', 'owly').'</span>',
			'default' 	 => 25,
			'dependency' => array( 'enable-related-excerpt', '==', 'true' ),
		  ),

		  array(
			'id'  		 => 'enable-related-carousel',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Enable Carousel', 'owly'),
			'info'		 => esc_html__('YES! to enable carousel related posts', 'owly'),
		  ),

		  array(
			'id'           => 'related-carousel-nav',
			'type'         => 'select',
			'title'        => esc_html__('Navigation Style', 'owly'),
			'options'      => array(
			  '' 			=> esc_html__('None', 'owly'),
			  'navigation'  => esc_html__('Navigations', 'owly'),
			  'pager'   	=> esc_html__('Pager', 'owly'),
			),
			'class'        => 'chosen',
			'default'      => 'text',
			'info'         => esc_html__('Choose navigation style to display related post carousel.', 'owly'),
			'dependency' => array( 'enable-related-carousel', '==', 'true' ),
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Miscellaneous Post Options", 'owly' ),
		  ),

		  array(
			'id'  		 => 'enable-image-lightbox',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Feature Image Lightbox', 'owly'),
			'info'		 => esc_html__('YES! to enable lightbox for feature image.', 'owly'),
		  ),

		  array(
			'id'           => 'post-comments-list-style',
			'type'         => 'select',
			'title'        => esc_html__('Comments List Style', 'owly'),
			'options'      => array(
			  'rounded' 	=> esc_html__('Rounded', 'owly'),
			  'square'   	=> esc_html__('Square', 'owly'),
			),
			'class'        => 'chosen',
			'default'      => 'rounded',
			'info'         => esc_html__('Choose comments list style to display single post.', 'owly'),
		  ),
		),
	),

	// -----------------------------------------
	// 404 Options
	// -----------------------------------------
	array(
	  'name'      => '404_options',
	  'title'     => esc_html__('404 Options', 'owly'),
	  'icon'      => 'fa fa-warning',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "404 Message", 'owly' ),
		  ),
		  
		  array(
			'id'      => 'enable-404message',
			'type'    => 'switcher',
			'title'   => esc_html__('Enable Message', 'owly' ),
			'info'	  => esc_html__('YES! to enable not-found page message.', 'owly'),
			'default' => true
		  ),

		  array(
			'id'           => 'notfound-style',
			'type'         => 'select',
			'title'        => esc_html__('Template Style', 'owly'),
			'options'      => array(
			  'type1' 	   => esc_html__('Modern', 'owly'),
			  'type2'      => esc_html__('Classic', 'owly'),
			  'type4'  	   => esc_html__('Diamond', 'owly'),
			  'type5'      => esc_html__('Shadow', 'owly'),
			  'type6'      => esc_html__('Diamond Alt', 'owly'),
			  'type7'  	   => esc_html__('Stack', 'owly'),
			  'type8'  	   => esc_html__('Minimal', 'owly'),
			),
			'class'        => 'chosen',
			'default'      => 'type2',
			'info'         => esc_html__('Choose the style of not-found template page.', 'owly')
		  ),

		  array(
			'id'      => 'notfound-darkbg',
			'type'    => 'switcher',
			'title'   => esc_html__('404 Dark BG', 'owly' ),
			'info'	  => esc_html__('YES! to use dark bg notfound page for this site.', 'owly'),
			'default' => true,
		  ),

		  array(
			'id'           => 'notfound-pageid',
			'type'         => 'select',
			'title'        => esc_html__('Custom Page', 'owly'),
			'options'      => 'pages',
			'class'        => 'chosen',
			'default_option' => esc_html__('Choose the page', 'owly'),
			'info'       	 => esc_html__('Choose the page for not-found content.', 'owly')
		  ),
		  
		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Background Options", 'owly' ),
		  ),

		  array(
			'id'    => 'notfound_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'owly'),
			'default' => array(
				'image'      => OWLY_THEME_URI . '/images/404-bg.jpg',
				'repeat'     => '',
				'position'   => 'center center',
				'attachment' => '',
				'size'       => '',
				'color'      => '#000000'
			)			
		  ),

		  array(
			'id'  		 => 'notfound-bg-style',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Custom Styles', 'owly'),
			'info'		 => esc_html__('Paste custom CSS styles for not found page.', 'owly')
		  ),

		),
	),

	// -----------------------------------------
	// Under construction Options
	// -----------------------------------------
	array(
	  'name'      => 'comingsoon_options',
	  'title'     => esc_html__('Under Construction Options', 'owly'),
	  'icon'      => 'fa fa-thumbs-down',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Under Construction", 'owly' ),
		  ),
	
		  array(
			'id'      => 'enable-comingsoon',
			'type'    => 'switcher',
			'title'   => esc_html__('Enable Coming Soon', 'owly' ),
			'info'	  => esc_html__('YES! to check under construction page of your website.', 'owly')
		  ),
	
		  array(
			'id'           => 'comingsoon-style',
			'type'         => 'select',
			'title'        => esc_html__('Template Style', 'owly'),
			'options'      => array(
			  'type1' 	   => esc_html__('Diamond', 'owly'),
			  'type2'      => esc_html__('Teaser', 'owly'),
			  'type3'  	   => esc_html__('Minimal', 'owly'),
			  'type4'      => esc_html__('Counter Only', 'owly'),
			  'type5'      => esc_html__('Belt', 'owly'),
			  'type6'  	   => esc_html__('Classic', 'owly'),
			  'type7'  	   => esc_html__('Boxed', 'owly')
			),
			'class'        => 'chosen',
			'default'      => 'type2',
			'info'         => esc_html__('Choose the style of coming soon template.', 'owly'),
		  ),

		  array(
			'id'      => 'uc-darkbg',
			'type'    => 'switcher',
			'title'   => esc_html__('Coming Soon Dark BG', 'owly' ),
			'info'	  => esc_html__('YES! to use dark bg coming soon page for this site.', 'owly'),
			'default' => true,
		  ),

		  array(
			'id'           => 'comingsoon-pageid',
			'type'         => 'select',
			'title'        => esc_html__('Custom Page', 'owly'),
			'options'      => 'pages',
			'class'        => 'chosen',
			'default_option' => esc_html__('Choose the page', 'owly'),
			'info'       	 => esc_html__('Choose the page for comingsoon content.', 'owly')
		  ),

		  array(
			'id'      => 'show-launchdate',
			'type'    => 'switcher',
			'title'   => esc_html__('Show Launch Date', 'owly' ),
			'info'	  => esc_html__('YES! to show launch date text.', 'owly'),
			'default' => true,			
		  ),

		  array(
			'id'      => 'comingsoon-launchdate',
			'type'    => 'text',
			'title'   => esc_html__('Launch Date', 'owly'),
			'default' => '12/30/2019 12:00:00',
			'attributes' => array( 
			  'placeholder' => '10/30/2016 12:00:00'
			),
			'after' 	=> '<p class="cs-text-info">'.esc_html__('Put Format: 12/30/2016 12:00:00 month/day/year hour:minute:second', 'owly').'</p>',
		  ),

		  array(
			'id'           => 'comingsoon-timezone',
			'type'         => 'select',
			'title'        => esc_html__('UTC Timezone', 'owly'),
			'options'      => array(
			  '-12' => '-12', '-11' => '-11', '-10' => '-10', '-9' => '-9', '-8' => '-8', '-7' => '-7', '-6' => '-6', '-5' => '-5', 
			  '-4' => '-4', '-3' => '-3', '-2' => '-2', '-1' => '-1', '0' => '0', '+1' => '+1', '+2' => '+2', '+3' => '+3', '+4' => '+4',
			  '+5' => '+5', '+6' => '+6', '+7' => '+7', '+8' => '+8', '+9' => '+9', '+10' => '+10', '+11' => '+11', '+12' => '+12'
			),
			'class'        => 'chosen',
			'default'      => '0',
			'info'         => esc_html__('Choose utc timezone, by default UTC:00:00', 'owly'),
		  ),

		  array(
			'id'    => 'comingsoon_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'owly'),
			'default' => array(
				'image'      => OWLY_THEME_URI . '/images/under-construction.jpg',
				'repeat'     => '',
				'position'   => 'center center',
				'attachment' => '',
				'size'       => '',
				'color'      => ''
			)			
		  ),

		  array(
			'id'  		 => 'comingsoon-bg-style',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Custom Styles', 'owly'),
			'info'		 => esc_html__('Paste custom CSS styles for under construction page.', 'owly'),
		  ),

		),
	),

  ),
);

// -----------------------------------------
// Widget area Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'widgetarea_options',
  'title'       => esc_html__('Widget Area', 'owly'),
  'icon'        => 'fa fa-trello',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Custom Widget Area for Sidebar", 'owly' ),
	  ),

	  array(
		'id'           => 'wtitle-style',
		'type'         => 'select',
		'title'        => esc_html__('Sidebar widget Title Style', 'owly'),
		'options'      => array(
		  'default' => esc_html__('Choose any type', 'owly'),
		  'type1' 	   => esc_html__('Double Border', 'owly'),
		  'type2'      => esc_html__('Tooltip', 'owly'),
		  'type3'  	   => esc_html__('Title Top Border', 'owly'),
		  'type4'      => esc_html__('Left Border & Pattren', 'owly'),
		  'type5'      => esc_html__('Bottom Border', 'owly'),
		  'type6'  	   => esc_html__('Tooltip Border', 'owly'),
		  'type7'  	   => esc_html__('Boxed Modern', 'owly'),
		  'type8'  	   => esc_html__('Elegant Border', 'owly'),
		  'type9' 	   => esc_html__('Needle', 'owly'),
		  'type10' 	   => esc_html__('Ribbon', 'owly'),
		  'type11' 	   => esc_html__('Content Background', 'owly'),
		  'type12' 	   => esc_html__('Classic BG', 'owly'),
		  'type13' 	   => esc_html__('Tiny Boders', 'owly'),
		  'type14' 	   => esc_html__('BG & Border', 'owly'),
		  'type15' 	   => esc_html__('Classic BG Alt', 'owly'),
		  'type16' 	   => esc_html__('Left Border & BG', 'owly'),
		  'type17' 	   => esc_html__('Basic', 'owly'),
		  'type18' 	   => esc_html__('BG & Pattern', 'owly'),
		),
		'class'          => 'chosen',
		'default' 		 =>  'default',
		'info'           => esc_html__('Choose the style of sidebar widget title.', 'owly')
	  ),

	  array(
		'id'              => 'widgetarea-custom',
		'type'            => 'group',
		'title'           => esc_html__('Custom Widget Area', 'owly'),
		'button_title'    => esc_html__('Add New', 'owly'),
		'accordion_title' => esc_html__('Add New Widget Area', 'owly'),
		'fields'          => array(

		  array(
			'id'          => 'widgetarea-custom-name',
			'type'        => 'text',
			'title'       => esc_html__('Name', 'owly'),
		  ),

		)
	  ),

	),
);

// -----------------------------------------
// Sociable Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'sociable_options',
  'title'       => esc_html__('Sociable', 'owly'),
  'icon'        => 'fa fa-share-square',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Sociable", 'owly' ),
	  ),

	  array(
		'id'              => 'sociable_fields',
		'type'            => 'group',
		'title'           => esc_html__('Sociable', 'owly'),
		'info'            => esc_html__('Click button to add type of social & url.', 'owly'),
		'button_title'    => esc_html__('Add New Social', 'owly'),
		'accordion_title' => esc_html__('Adding New Social Field', 'owly'),
		'default' => array(
			array( 'sociable_fields_type' => 'twitter', 'sociable_fields_url'  => '#' ),
			array( 'sociable_fields_type' => 'facebook', 'sociable_fields_url'  => '#' ),
			array( 'sociable_fields_type' => 'youtube', 'sociable_fields_url'  => '#' ),
			array( 'sociable_fields_type' => 'google-plus', 'sociable_fields_url'  => '#' ),
		),
		'fields'          => array(
		  array(
			'id'          => 'sociable_fields_type',
			'type'        => 'select',
			'title'       => esc_html__('Select Social', 'owly'),
			'options'      => array(
			  'delicious' 	 => esc_html__('Delicious', 'owly'),
			  'deviantart' 	 => esc_html__('Deviantart', 'owly'),
			  'digg' 	  	 => esc_html__('Digg', 'owly'),
			  'dribbble' 	 => esc_html__('Dribbble', 'owly'),
			  'envelope' 	 => esc_html__('Envelope', 'owly'),
			  'facebook' 	 => esc_html__('Facebook', 'owly'),
			  'flickr' 		 => esc_html__('Flickr', 'owly'),
			  'google-plus'  => esc_html__('Google Plus', 'owly'),
			  'gtalk'  		 => esc_html__('GTalk', 'owly'),
			  'instagram'	 => esc_html__('Instagram', 'owly'),
			  'lastfm'	 	 => esc_html__('Lastfm', 'owly'),
			  'linkedin'	 => esc_html__('Linkedin', 'owly'),
			  'pinterest'	 => esc_html__('Pinterest', 'owly'),
			  'reddit'		 => esc_html__('Reddit', 'owly'),
			  'rss'		 	 => esc_html__('RSS', 'owly'),
			  'skype'		 => esc_html__('Skype', 'owly'),
			  'stumbleupon'	 => esc_html__('Stumbleupon', 'owly'),
			  'tumblr'		 => esc_html__('Tumblr', 'owly'),
			  'twitter'		 => esc_html__('Twitter', 'owly'),
			  'viadeo'		 => esc_html__('Viadeo', 'owly'),
			  'vimeo'		 => esc_html__('Vimeo', 'owly'),
			  'yahoo'		 => esc_html__('Yahoo', 'owly'),
			  'youtube'		 => esc_html__('Youtube', 'owly'),
			),
			'class'        => 'chosen',
			'default'      => 'delicious',
		  ),

		  array(
			'id'          => 'sociable_fields_url',
			'type'        => 'text',
			'title'       => esc_html__('Enter URL', 'owly')
		  ),
		)
	  ),

   ),
);

// -----------------------------------------
// Hook Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'hook_options',
  'title'       => esc_html__('Hooks', 'owly'),
  'icon'        => 'fa fa-paperclip',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Top Hook", 'owly' ),
	  ),

	  array(
		'id'  	=> 'enable-top-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Top Hook', 'owly'),
		'info'	=> esc_html__("YES! to enable top hook.", 'owly')
	  ),

	  array(
		'id'  		 => 'top-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Top Hook', 'owly'),
		'info'		 => esc_html__('Paste your top hook, Executes after the opening &lt;body&gt; tag.', 'owly')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Content Before Hook", 'owly' ),
	  ),

	  array(
		'id'  	=> 'enable-content-before-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Content Before Hook', 'owly'),
		'info'	=> esc_html__("YES! to enable content before hook.", 'owly')
	  ),

	  array(
		'id'  		 => 'content-before-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Content Before Hook', 'owly'),
		'info'		 => esc_html__('Paste your content before hook, Executes before the opening &lt;#primary&gt; tag.', 'owly')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Content After Hook", 'owly' ),
	  ),

	  array(
		'id'  	=> 'enable-content-after-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Content After Hook', 'owly'),
		'info'	=> esc_html__("YES! to enable content after hook.", 'owly')
	  ),

	  array(
		'id'  		 => 'content-after-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Content After Hook', 'owly'),
		'info'		 => esc_html__('Paste your content after hook, Executes after the closing &lt;/#main&gt; tag.', 'owly')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Bottom Hook", 'owly' ),
	  ),

	  array(
		'id'  	=> 'enable-bottom-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Bottom Hook', 'owly'),
		'info'	=> esc_html__("YES! to enable bottom hook.", 'owly')
	  ),

	  array(
		'id'  		 => 'bottom-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Bottom Hook', 'owly'),
		'info'		 => esc_html__('Paste your bottom hook, Executes after the closing &lt;/body&gt; tag.', 'owly')
	  ),

  array(
		'id'  	=> 'enable-analytics-code',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Tracking Code', 'owly'),
		'info'	=> esc_html__("YES! to enable site tracking code.", 'owly')
	  ),

	  array(
		'id'  		 => 'analytics-code',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Google Analytics Tracking Code', 'owly'),
		'info'		 => esc_html__('Either enter your Google tracking id (UA-XXXXX-X) . If you want to offer your visitors the option to stop being tracked you can place the shortcode [dt_sc_privacy_google_tracking] somewhere on your site', 'owly')
	  ),

   ),
);

// -----------------------------------------
// Custom Font Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'font_options',
  'title'       => esc_html__('Custom Fonts', 'owly'),
  'icon'        => 'fa fa-font',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Custom Fonts", 'owly' ),
	  ),

	  array(
		'id'              => 'custom_font_fields',
		'type'            => 'group',
		'title'           => esc_html__('Custom Font', 'owly'),
		'info'            => esc_html__('Click button to add font name & urls.', 'owly'),
		'button_title'    => esc_html__('Add New Font', 'owly'),
		'accordion_title' => esc_html__('Adding New Font Field', 'owly'),
		'fields'          => array(
		  array(
			'id'          => 'custom_font_name',
			'type'        => 'text',
			'title'       => esc_html__('Font Name', 'owly')
		  ),

		  array(
			'id'      => 'custom_font_woof',
			'type'    => 'upload',
			'title'   => esc_html__('Upload File (*.woff)', 'owly'),
			'after'   => '<p class="cs-text-muted">'.esc_html__('You can upload custom font family (*.woff) file here.', 'owly').'</p>',
		  ),

		  array(
			'id'      => 'custom_font_woof2',
			'type'    => 'upload',
			'title'   => esc_html__('Upload File (*.woff2)', 'owly'),
			'after'   => '<p class="cs-text-muted">'.esc_html__('You can upload custom font family (*.woff2) file here.', 'owly').'</p>',
		  )
		)
	  ),

   ),
);

// ------------------------------
// backup                       
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => esc_html__('Backup', 'owly'),
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => esc_html__('You can save your current options. Download a Backup and Import.', 'owly')
    ),

    array(
      'type'    => 'backup',
    ),

  )
);

// ------------------------------
// license
// ------------------------------
$options[]   = array(
  'name'     => 'theme_version',
  'title'    => constant('OWLY_THEME_NAME').esc_html__(' Log', 'owly'),
  'icon'     => 'fa fa-info-circle',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => constant('OWLY_THEME_NAME').esc_html__(' Theme Change Log', 'owly')
    ),
    array(
      'type'    => 'content',
	  'content' => '<pre>

2021.01.25 - version 2.2
* Compatible with wordpress 5.6
* Some design issues updated
* Updated: All premium plugins
	  
2020.11.19 - version 2.1
* Latest jQuery fixes updated

2020.08.13 - version 2.0
* Compatible with wordpress 5.5	  

2020.08.05 - version 1.9

* Updated: Envato Theme check
* Updated: sanitize_text_field added
* Updated: All wordpress theme standards
* Updated: All premium plugins

2020.05.19 - version 1.8

* Updated: Fullwidth section not loading

2020.05.05 - version 1.7

* Updated: Theme switch issue
* Updated: Social icons target link
* Updated: Testimonial quote html fix
* Updated: Envato theme check fix
* Updated: Header, Footer saving in CS panel
* Updated: Woocommerce template files
* Updated: Rating star css fix

2020.02.06 - version 1.6

* Updated : All premium plugins	  

2020.01.29 - version 1.5

* Compatible with wordpress 5.3.2
* Updated: All premium plugins
* Updated: All wordpress theme standards
* Updated: Privacy and Cookies concept
* Updated: Gutenberg editor support for custom post types

* Fixed: Google Analytics issue
* Fixed: Mailchimp email client issue
* Fixed: Privacy Button Issue
* Fixed: Gutenberg check for old wordpress version

* Improved: Tags taxonomy added for portfolio
* Improved: Single product breadcrumb section
* Improved: Revisions options added for all custom posts	  
	  
2019.11.19 - version 1.4

* Updated all wordpress theme standards
* Compatible with latest Gutenberg editor
* Updated: All premium plugins
* Compatible with wordpress 5.3

2019.07.31 - version 1.3

* Updated: All premium plugins

* Fixed: Tags taxonomy display for portfolio

2019.07.26 - version 1.2

* Compatible with wordpress 5.2.2
* Updated: All premium plugins
* Updated: Revisions added to all custom post types
* Updated: Gutenberg editor support for custom post types
* Updated: Link for phone number module
* Updated: Online documentation link, check readme file

* Fixed: Customizer logo option
* Fixed: Google Analytics issue
* Fixed: Mailchimp email client issue
* Fixed: Gutenberg check for old wordpress version
* Fixed: Edit with Visual Composer for portfolio
* Fixed: Header & Footer wpml option
* Fixed: Appointment person display under the services in backend
* Fixed: Smooth scrolling in ie 11
* Fixed: Site title color
* Fixed: Privacy popup bg color
* Fixed: 404 page scrolling issue

* Improved: Tags taxonomy added for portfolio
* Improved: Woocommerce cart module added with custom class option

* New: Whatsapp Shortcode
* New: Portfolio Tag Shortcode</pre>
<pre>
2019.03.13 - version 1.1
 * Updated with Optimized Demo Content
 * Now Gutenberg Optimized  </pre>	  
	  <pre>
2019.03.12 - version 1.0
 * First release!  </pre>',
    ),

  )
);

// ------------------------------
// Seperator
// ------------------------------
$options[] = array(
  'name'   => 'seperator_1',
  'title'  => esc_html__('Plugin Options', 'owly'),
  'icon'   => 'fa fa-plug'
);

// -----------------------------------------
// Woocommerce Options
// -----------------------------------------
if( function_exists( 'is_woocommerce' ) ) {

	$product_style_templates = cs_get_option( 'dt-woo-product-style-templates' );
	$product_style_templates = (is_array($product_style_templates) && !empty($product_style_templates)) ? $product_style_templates : false;

	$product_style_templates_arr = array ();
	if($product_style_templates) {
		foreach($product_style_templates as $product_style_template_key => $product_style_template) {
			$product_style_templates_arr[$product_style_template_key] = $product_style_template['template-title'];
		}
	}

	$woo_page_layouts = array(
		'content-full-width'   => OWLY_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
		'with-left-sidebar'    => OWLY_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
		'with-right-sidebar'   => OWLY_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
	);

	$social_follow = array (
			  'delicious' 	 => esc_html__('Delicious', 'owly'),
			  'deviantart' 	 => esc_html__('Deviantart', 'owly'),
			  'digg' 	  	 => esc_html__('Digg', 'owly'),
			  'dribbble' 	 => esc_html__('Dribbble', 'owly'),
			  'envelope' 	 => esc_html__('Envelope', 'owly'),
			  'facebook' 	 => esc_html__('Facebook', 'owly'),
			  'flickr' 		 => esc_html__('Flickr', 'owly'),
			  'google-plus'  => esc_html__('Google Plus', 'owly'),
			  'gtalk'  		 => esc_html__('GTalk', 'owly'),
			  'instagram'	 => esc_html__('Instagram', 'owly'),
			  'lastfm'	 	 => esc_html__('Lastfm', 'owly'),
			  'linkedin'	 => esc_html__('Linkedin', 'owly'),
			  'pinterest'	 => esc_html__('Pinterest', 'owly'),
			  'reddit'		 => esc_html__('Reddit', 'owly'),
			  'rss'		 	 => esc_html__('RSS', 'owly'),
			  'skype'		 => esc_html__('Skype', 'owly'),
			  'stumbleupon'	 => esc_html__('Stumbleupon', 'owly'),
			  'tumblr'		 => esc_html__('Tumblr', 'owly'),
			  'twitter'		 => esc_html__('Twitter', 'owly'),
			  'viadeo'		 => esc_html__('Viadeo', 'owly'),
			  'vimeo'		 => esc_html__('Vimeo', 'owly'),
			  'yahoo'		 => esc_html__('Yahoo', 'owly'),
			  'youtube'		 => esc_html__('Youtube', 'owly')
			);

	$social_follow_options = array ();
	foreach($social_follow as $socialfollow_key => $socialfollow) {

		$social_follow_option = array(
							'id'    => 'dt-single-product-show-follow-'.$socialfollow_key,
							'type'  => 'switcher',
							'title' => sprintf(esc_html__('Show %1$s Follow', 'owly'), $socialfollow),
						);
		array_push($social_follow_options, $social_follow_option);

	}

	array_push($social_follow_options, array(
						  'type'    => 'notice',
						  'class'   => 'info',
						  'content' => esc_html__('For Sociables Follow - links must be defined under "Sociables" tab. Sociables Share & Sociables Follow option is used for "Custom Template" single product settings.', 'owly' )
						));


	$options[] = array(
		'name'     => 'dtwoo',
		'title'    => esc_html__( 'WooCommerce', 'owly' ),
		'icon'     => 'fa fa-shopping-cart',
		'sections' => array(

			// Shop
				array(
					'name'	=> 'dt-woo-shop',
					'title'	=> esc_html__('Shop', 'owly'),
					'icon'  => 'fa fa-angle-double-right',
					'fields'=> array(
						array(	
							'type'    => 'subheading',
							'content' => esc_html__( 'Shop Page Settings', 'owly' ),
						),

						array(
							'id'         => 'shop-page-layout',
							'type'       => 'image_select',
							'title'      => esc_html__('Page Layout', 'owly'),
							'options'    => $woo_page_layouts,
							'default'    => 'content-full-width',
							'attributes' => array( 'data-depend-id' => 'dt-woo-shop-page-layout' )
						),

						array(
							'id'         => 'shop-page-show-standard-sidebar',
							'type'       => 'switcher',
							'title'      => esc_html__('Show Standard Sidebar', 'owly'),
							'dependency' => array( 'dt-woo-shop-page-layout', 'any', 'with-left-sidebar,with-right-sidebar' )
						),

						array(
							'id'         => 'shop-page-widgetareas',
							'type'       => 'select',
							'title'      => esc_html__('Choose Custom Widget Area', 'owly'),
							'class'      => 'chosen',
							'options'    => owly_custom_widgets(),
							'dependency' => array( 'dt-woo-shop-page-layout', 'any', 'with-left-sidebar,with-right-sidebar' ),
							'attributes' => array(
								'multiple'         => 'multiple',
								'data-placeholder' => esc_attr__('Select Widget Areas', 'owly'),
								'style'            => 'width: 400px;'
							),
						),

						array(
							'id'      => 'shop-product-per-page',
							'type'    => 'number',
							'title'   => esc_html__('Products Per Page', 'owly'),
							'after'   => '<span class="cs-text-desc">&nbsp;'.esc_html__('Number of products to show in catalog / shop page', 'owly').'</span>',
							'default' => 6,
						),

						array(
							'id'         => 'shop-page-product-layout',
							'type'       => 'image_select',
							'title'      => esc_html__('Product Layout', 'owly'),
							'options'    => array(
								1 => OWLY_THEME_URI . '/cs-framework-override/images/one-column.png',
								2 => OWLY_THEME_URI . '/cs-framework-override/images/one-half-column.png',
								3 => OWLY_THEME_URI . '/cs-framework-override/images/one-third-column.png',
								4 => OWLY_THEME_URI . '/cs-framework-override/images/one-fourth-column.png'
							),
							'default'    => 3,							
						),

				        array(
				          'id'         => 'shop-page-product-style-template',
				          'type'       => 'select',
				          'title'      => esc_html__('Product Style Template', 'owly'),
									'options'    => $product_style_templates_arr,
									'default'    => 0
				        ), 											

						array(
							'type'    => 'subheading',
							'content' => esc_html__( "Shop Page Sorter Settings", 'owly' ),
						),

						array(
							'id'         => 'product-show-sorter-on-header',
							'type'       => 'switcher',
							'title'      => esc_html__('Show Sorter On Header', 'owly'),
							'attributes' => array( 'data-depend-id' => 'dt-woo-shop-product-sorter-on-header' ),
							'info'       => esc_html__('YES! to show sorter bar on header.', 'owly')
						),

						array(
							'id'             => 'product-sorter-header-elements',
							'type'           => 'sorter',
							'title'          => esc_html__('Sorter Header Elements', 'owly'),
							'default'        => array(
								'enabled'      => array(
									'filter'       => esc_html__('Filter', 'owly'),
									'result_count' => esc_html__('Result Count', 'owly'),
									'pagination'   => esc_html__('Pagination', 'owly'),
								),
								'disabled'     => array(
									'display_mode'         => esc_html__('Display Mode', 'owly'),
									'display_mode_options' => esc_html__('Display Mode Options', 'owly'),
								),
							),
							'enabled_title'  => esc_html__('Active Elements', 'owly'),
							'disabled_title' => esc_html__('Deatcive Elements', 'owly'),
							'dependency' => array( 'dt-woo-shop-product-sorter-on-header', '==', 'true' )
						),

						array(
							'id'         => 'product-show-sorter-on-footer',
							'type'       => 'switcher',
							'title'      => esc_html__('Show Sorter On Footer', 'owly'),
							'attributes' => array( 'data-depend-id' => 'dt-woo-shop-product-sorter-on-footer' ),
							'info'       => esc_html__('YES! to show sorter bar on footer.', 'owly')
						),

						array(
							'id'             => 'product-sorter-footer-elements',
							'type'           => 'sorter',
							'title'          => esc_html__('Sorter Footer Elements', 'owly'),
							'default'        => array(
								'enabled'      => array(
									'filter'       => esc_html__('Filter', 'owly'),
									'result_count' => esc_html__('Result Count', 'owly'),
									'pagination'   => esc_html__('Pagination', 'owly'),
								),
								'disabled'     => array(
									'display_mode'         => esc_html__('Display Mode', 'owly'),
									'display_mode_options' => esc_html__('Display Mode Options', 'owly'),
								),
							),
							'enabled_title'  => esc_html__('Active Elements', 'owly'),
							'disabled_title' => esc_html__('Deatcive Elements', 'owly'),
							'dependency' => array( 'dt-woo-shop-product-sorter-on-footer', '==', 'true' )
						)

					)
				),

			// Product Category
				array(
					'name'	=> 'dt-woo-cat-archive',
					'title'	=> esc_html__('Category Archive', 'owly'),
					'icon'  => 'fa fa-angle-double-right',
					'fields'=> array(

						array(
							'type'    => 'subheading',
							'content' => esc_html__( 'Category Archive Settings', 'owly' ),
						),

						array(
							'id'         => 'dt-woo-category-archive-layout',
							'type'       => 'image_select',
							'title'      => esc_html__('Page Layout', 'owly'),
							'options'    => $woo_page_layouts,
							'default'    => 'with-left-sidebar',
							'attributes' => array( 'data-depend-id' => 'dt-woo-category-archive-layout' )
						),

						array(
							'id'         => 'dt-woo-category-archive-show-standard-sidebar',
							'type'       => 'switcher',
							'title'      => esc_html__('Show Standard Sidebar', 'owly'),
							'dependency' => array( 'dt-woo-category-archive-layout', 'any', 'with-left-sidebar,with-right-sidebar' )
						),

						array(
							'id'         => 'dt-woo-category-archive-widgetareas',
							'type'       => 'select',
							'title'      => esc_html__('Choose Custom Widget Area', 'owly'),
							'class'      => 'chosen',
							'options'    => owly_custom_widgets(),
							'dependency' => array( 'dt-woo-category-archive-layout', 'any', 'with-left-sidebar,with-right-sidebar' ),
							'attributes' => array(
								'multiple'         => 'multiple',
								'data-placeholder' => esc_attr__('Select Widget Areas', 'owly'),
								'style'            => 'width: 400px;'
							),
						),

						array(
							'id'      => 'dt-woo-category-archive-product-per-page',
							'type'    => 'number',
							'title'   => esc_html__('Products Per Page', 'owly'),
							'after'   => '<span class="cs-text-desc">&nbsp;'.esc_html__('Number of products to show in product category archive page', 'owly').'</span>',
							'default' => get_option( 'posts_per_page' ),
						),

						array(
							'id'      => 'dt-woo-category-archive-product-column',
							'type'    => 'image_select',
							'title'   => esc_html__('Product Layout', 'owly'),
							'options' => array(
								1 => OWLY_THEME_URI . '/cs-framework-override/images/one-column.png',
								2 => OWLY_THEME_URI . '/cs-framework-override/images/one-half-column.png',
								3 => OWLY_THEME_URI . '/cs-framework-override/images/one-third-column.png',
								4 => OWLY_THEME_URI . '/cs-framework-override/images/one-fourth-column.png'
							),
							'default' => 3,
						),

				        array(
				          'id'         => 'dt-woo-category-product-style-template',
				          'type'       => 'select',
				          'title'      => esc_html__('Product Style Template', 'owly'),
									'options'    => $product_style_templates_arr,
									'default'    => 0
				        )

					)
				),

			// Product Tag
				array(
					'name'	=> 'dt-woo-tag-archive',
					'title'	=> esc_html__('Tag Archive', 'owly'),
					'icon'  => 'fa fa-angle-double-right',
					'fields'=> array(

						array(
							'type'    => 'subheading',
							'content' => esc_html__( 'Tag Archive Settings', 'owly' ),
						),

						array(
							'id'         => 'dt-woo-tag-archive-layout',
							'type'       => 'image_select',
							'title'      => esc_html__('Page Layout', 'owly'),
							'options'    => $woo_page_layouts,
							'default'    => 'with-left-sidebar',
							'attributes' => array( 'data-depend-id' => 'dt-woo-tag-archive-layout' )
						),

						array(
							'id'         => 'dt-woo-tag-archive-show-standard-sidebar',
							'type'       => 'switcher',
							'title'      => esc_html__('Show Standard Sidebar', 'owly'),
							'dependency' => array( 'dt-woo-tag-archive-layout', 'any', 'with-left-sidebar,with-right-sidebar' )
						),

						array(
							'id'         => 'dt-woo-tag-archive-widgetareas',
							'type'       => 'select',
							'title'      => esc_html__('Choose Custom Widget Area', 'owly'),
							'class'      => 'chosen',
							'options'    => owly_custom_widgets(),
							'dependency' => array( 'dt-woo-tag-archive-layout', 'any', 'with-left-sidebar,with-right-sidebar' ),
							'attributes' => array(
								'multiple'         => 'multiple',
								'data-placeholder' => esc_attr__('Select Widget Areas', 'owly'),
								'style'            => 'width: 400px;'
							),
						),

						array(
							'id'      => 'dt-woo-tag-archive-product-per-page',
							'type'    => 'number',
							'title'   => esc_html__('Products Per Page', 'owly'),
							'after'   => '<span class="cs-text-desc">&nbsp;'.esc_html__('Number of products to show in product tag archive page', 'owly').'</span>',
							'default' => get_option( 'posts_per_page' ),
						),

						array(
							'id'      => 'dt-woo-tag-archive-product-column',
							'type'    => 'image_select',
							'title'   => esc_html__('Product Layout', 'owly'),
							'options' => array(
								2 => OWLY_THEME_URI . '/cs-framework-override/images/one-half-column.png',
								3 => OWLY_THEME_URI . '/cs-framework-override/images/one-third-column.png',
								4 => OWLY_THEME_URI . '/cs-framework-override/images/one-fourth-column.png'							
							),
							'default' => 4,
						),	

				        array(
				          'id'         => 'dt-woo-tag-product-style-template',
				          'type'       => 'select',
				          'title'      => esc_html__('Product Style Template', 'owly'),
									'options'    => $product_style_templates_arr,
									'default'    => 0
				        )

					)
				),

			// Product
				array(
					'name'   => 'dt-woo-single-product',
					'title'  => esc_html__('Product', 'owly'),
					'icon'   => 'fa fa-angle-double-right',
					'fields' => array_merge ( 
						array(

							array(	
								'type'    => 'subheading',
								'content' => esc_html__( 'Single Product Page Default Settings', 'owly' ),
							),

							array(
								'id'      => 'dt-single-product-default-template',
								'type'    => 'select',
								'title'   => esc_html__('Product Template', 'owly'),
								'class'   => 'chosen',
								'options' => array(
									'woo-default'     => esc_html__( 'WooCommerce Default', 'owly' ),
									'custom-template' => esc_html__( 'Custom Template', 'owly' )
								),
								'default'    => 'woo-default',
								'info'       => esc_html__('Don\'t use product shortcodes in content area when "WooCommerce Default" template is chosen.', 'owly')
							),

							array(
								'id'         => 'dt-single-product-default-layout',
								'type'       => 'image_select',
								'title'      => esc_html__('Page Layout', 'owly'),
								'options'    => $woo_page_layouts,			
								'default'    => 'with-left-sidebar',
								'attributes' => array( 'data-depend-id' => 'dt-single-product-default-layout' )
							),

							array(
								'id'         => 'dt-single-product-show-default-sidebar',
								'type'       => 'switcher',
								'title'      => esc_html__('Show Standard Sidebar', 'owly'),
								'dependency' => array( 'dt-single-product-default-layout', 'any', 'with-left-sidebar,with-right-sidebar' )
							),

							array(
								'id'         => 'dt-single-product-widgetareas',
								'type'       => 'select',
								'title'      => esc_html__('Choose Custom Widget Area', 'owly'),
								'class'      => 'chosen',
								'options'    => owly_custom_widgets(),
								'dependency' => array( 'dt-single-product-default-layout', 'any', 'with-left-sidebar,with-right-sidebar' ),
								'attributes' => array(
									'multiple'         => 'multiple',
									'data-placeholder' => esc_attr__('Select Widget Areas', 'owly'),
									'style'            => 'width: 400px;'
								),
							),

							array(
								'id'		 => 'dt-single-product-sale-countdown-timer',
								'type'		 => 'switcher',
								'title'		 => esc_html__('Enable Sale Countdown Timer', 'owly'),
								'info'       => esc_html__('This option is applicable for "WooCommerce Default" template page only.', 'owly')
							),

							array(
								'id'		 => 'dt-single-product-enable-size-guide',
								'type'		 => 'switcher',
								'title'		 => esc_html__('Enable Size Guide Button', 'owly'),
								'info'       => esc_html__('This option is applicable for "WooCommerce Default" template page only.', 'owly')
							),

							array(
								'id'		 => 'dt-single-product-enable-ajax-addtocart',
								'type'		 => 'switcher',
								'title'		 => esc_html__('Enable Ajax Add To Cart', 'owly'),
								'info'       => esc_html__('If you wish, you can have ajax functionality in single page add to cart button.', 'owly')
							),

							array(	
								'type'    => 'subheading',
								'content' => esc_html__( 'Single Page Upsell Products Settings', 'owly' ),
							),
							
							array(
								'id'		 => 'dt-single-product-default-show-upsell',
								'type'		 => 'switcher',
								'title'		 => esc_html__('Show Upsell Products', 'owly'),
								'default' 	 => true
							),

							array(
								'id'  		=> 'dt-single-product-upsell-title',
								'type'  	=> 'wysiwyg',
								'title' 	=> esc_html__('Upsell Title', 'owly'),
								'default'	=> '<h2>'.esc_html__('You may also like&hellip;', 'owly').'</h2>'
							),

							array(
								'id'      => 'dt-single-product-upsell-column',
								'type'    => 'image_select',
								'title'   => esc_html__('Upsell Column', 'owly'),
								'after'   => '<span class="cs-text-desc">&nbsp;'.esc_html__('Select upsell products column layout', 'owly').'</span>',
								'default' => 4,
								'options' => array(
									1 => OWLY_THEME_URI . '/cs-framework-override/images/one-column.png',
									2 => OWLY_THEME_URI . '/cs-framework-override/images/one-half-column.png',
									3 => OWLY_THEME_URI . '/cs-framework-override/images/one-third-column.png',
									4 => OWLY_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
								)
							),

							array(
								'id'      => 'dt-single-product-upsell-limit',
								'type'    => 'select',
								'title'   => esc_html__('Upsell Limit', 'owly'),
								'after'   => '<span class="cs-text-desc">&nbsp;'.esc_html__('Select upsell products limit', 'owly').'</span>',
								'default' => 4,
								'options' => array(
									1 => esc_html__( '1', 'owly' ),
									2 => esc_html__( '2', 'owly' ),
									3 => esc_html__( '3', 'owly' ),
									4 => esc_html__( '4', 'owly' ),
									5 => esc_html__( '5', 'owly' ),
									6 => esc_html__( '6', 'owly' ),
									7 => esc_html__( '7', 'owly' ),
									8 => esc_html__( '8', 'owly' ),	
									9 => esc_html__( '9', 'owly' ),
									10 => esc_html__( '10', 'owly' ),									
								)
							),

					        array(
					          'id'         => 'dt-woo-single-product-upsell-style-template',
					          'type'       => 'select',
					          'title'      => esc_html__('Product Style Template', 'owly'),
					          'options'    => $product_style_templates_arr
					        ),

							array(	
								'type'    => 'subheading',
								'content' => esc_html__( 'Single Page Related Products Settings', 'owly' ),
							),

							array(
								'id'    => 'dt-single-product-default-show-related',
								'type'  => 'switcher',
								'title' => esc_html__('Show Related Products', 'owly'),
								'default' 	 => true
							),

							array(
								'id'      => 'dt-single-product-related-title',
								'type'    => 'wysiwyg',
								'title'   => esc_html__('Related Product Title', 'owly'),
								'default' => '<h2>'.esc_html__('Related products', 'owly').'</h2>'
							),

							array(
								'id'      => 'dt-single-product-related-column',
								'type'    => 'image_select',
								'title'   => esc_html__('Related Column', 'owly'),
								'after'   => '<span class="cs-text-desc">&nbsp;'.esc_html__('Select related products column layout', 'owly').'</span>',
								'default' => 4,
								'options' => array(
									2 => OWLY_THEME_URI . '/cs-framework-override/images/one-half-column.png',
									3 => OWLY_THEME_URI . '/cs-framework-override/images/one-third-column.png',
									4 => OWLY_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
								)							
							),

							array(
								'id'      => 'dt-single-product-related-limit',
								'type'    => 'select',
								'title'   => esc_html__('Related Limit', 'owly'),
								'after'   => '<span class="cs-text-desc">&nbsp;'.esc_html__('Select related products limit', 'owly').'</span>',
								'default' => 4,
								'options' => array(
									1 => esc_html__( '1', 'owly' ),
									2 => esc_html__( '2', 'owly' ),
									3 => esc_html__( '3', 'owly' ),
									4 => esc_html__( '4', 'owly' ),
									5 => esc_html__( '5', 'owly' ),
									6 => esc_html__( '6', 'owly' ),
									7 => esc_html__( '7', 'owly' ),
									8 => esc_html__( '8', 'owly' ),	
									9 => esc_html__( '9', 'owly' ),
									10 => esc_html__( '10', 'owly' ),									
								)
							),

					        array(
					          'id'         => 'dt-woo-single-product-related-style-template',
					          'type'       => 'select',
					          'title'      => esc_html__('Product Style Template', 'owly'),
					          'options'    => $product_style_templates_arr
					        ),

							array(	
								'type'    => 'subheading',
								'content' => esc_html__( 'Single Product Page Settings', 'owly' ),
							),

							array(
								'id'    => 'dt-single-product-addtocart-sticky',
								'type'  => 'switcher',
								'title' => esc_html__('Sticky Add to Cart', 'owly'),
							),

							array(
								'id'    => 'dt-single-product-show-360-viewer',
								'type'  => 'switcher',
								'title' => esc_html__('Show Product 360 Viewer', 'owly'),
							),

							array(	
								'type'    => 'subheading',
								'content' => esc_html__( 'Sociables Share', 'owly' ),
							),

							array(
								'id'    => 'dt-single-product-show-sharer-facebook',
								'type'  => 'switcher',
								'title' => esc_html__('Show Facebook Sharer', 'owly'),
							),

							array(
								'id'    => 'dt-single-product-show-sharer-delicious',
								'type'  => 'switcher',
								'title' => esc_html__('Show Delicious Sharer', 'owly'),
							),

							array(
								'id'    => 'dt-single-product-show-sharer-digg',
								'type'  => 'switcher',
								'title' => esc_html__('Show Digg Sharer', 'owly'),
							),

							array(
								'id'    => 'dt-single-product-show-sharer-stumbleupon',
								'type'  => 'switcher',
								'title' => esc_html__('Show Stumble Upon Sharer', 'owly'),
							),

							array(
								'id'    => 'dt-single-product-show-sharer-twitter',
								'type'  => 'switcher',
								'title' => esc_html__('Show Twitter Sharer', 'owly'),
							),

							array(
								'id'    => 'dt-single-product-show-sharer-googleplus',
								'type'  => 'switcher',
								'title' => esc_html__('Show Google Plus Sharer', 'owly'),
							),

							array(
								'id'    => 'dt-single-product-show-sharer-linkedin',
								'type'  => 'switcher',
								'title' => esc_html__('Show Linkedin Sharer', 'owly'),
							),

							array(
								'id'    => 'dt-single-product-show-sharer-pinterest',
								'type'  => 'switcher',
								'title' => esc_html__('Show Pinterest Sharer', 'owly'),
							),	

							array(	
								'type'    => 'subheading',
								'content' => esc_html__( 'Sociables Follow', 'owly' ),
							),							

						),

						$social_follow_options

					)
				),
			
			// Size Guide
				array(
					'name'   => 'dt-woo-size-guides',
					'title'  => esc_html__( 'Size Guides', 'owly' ),
					'icon'   => 'fa fa-angle-double-right',
					'fields' => array(
						array(
							'id'              => 'dt-woo-size-guides',
							'type'            => 'group',
							'title'           => esc_html__( 'Size Guides List', 'owly' ),
							'button_title'    => esc_html__('Add New', 'owly'),
							'accordion_title' => esc_html__('Add New Size Guide', 'owly'),
							'fields'          => array(
								array(
									'id'    => 'title',
									'type'  => 'text',
									'title' => esc_html__('Title', 'owly'),
								),
								array(
									'id'    => 'size-guide',
									'type'  => 'upload',
									'title' => esc_html__('Size Guide', 'owly'),
								)
							)
						)
					)
				),
			
			// Product Style Templates
				array(
					'name'   => 'dt-woo-product-style-templates-holder',
					'title'  => esc_html__( 'Product Style Templates', 'owly' ),
					'icon'   => 'fa fa-angle-double-right',
					'fields' => array(
						array(
							'id'              => 'dt-woo-product-style-templates',
							'type'            => 'group',
							'title'           => esc_html__( 'Product Style Templates', 'owly' ),
							'button_title'    => esc_html__('Add New', 'owly'),
							'accordion_title' => esc_html__('Add New Template', 'owly'),
							'fields'          => array(

								array(
									'id'    => 'template-title',
									'type'  => 'text',
									'title' => esc_html__('Template Title', 'owly'),
								),
								array(
									'id'         => 'product-style',
									'type'       => 'select',
									'title'      => esc_html__('Product Style', 'owly'),
									'options'    => array(
														'product-style-default'              => esc_html__('Default', 'owly'),
														'product-style-cornered'             => esc_html__('Cornered', 'owly'),
														'product-style-title-eg-highlighter' => esc_html__('Title & Element Group Highlighter', 'owly'),
														'product-style-content-highlighter'  => esc_html__('Content Highlighter', 'owly'),
														'product-style-egrp-overlap-pc'      => esc_html__('Element Group Overlap Product Content', 'owly'),
														'product-style-egrp-reveal-pc'       => esc_html__('Element Group Reveal Product Content', 'owly'),
														'product-style-igrp-over-pc'         => esc_html__('Icon Group over Product Content', 'owly'),
														'product-style-egrp-over-pc'         => esc_html__('Element Group over Product Content', 'owly')
													),
									'default'    => 'product-style-default'
								),								

							// "Product Style" Hover Options

								array(
									'type'    => 'notice',
									'class'   => 'info',
									'content' => esc_html__('"Product Style" Hover Options.', 'owly')
								),

								array(
									'id'         => 'product-hover-styles',
									'type'       => 'select',
									'title'      => esc_html__('Hover Styles', 'owly'),
									'options'    => array(
														''                                        => esc_html__('None', 'owly'),
														'product-hover-fade-border'               => esc_html__('Fade - Border', 'owly'),
														'product-hover-fade-skinborder'           => esc_html__('Fade - Skin Border', 'owly'),
														'product-hover-fade-gradientborder'       => esc_html__('Fade - Gradient Border', 'owly'),
														'product-hover-fade-shadow'               => esc_html__('Fade - Shadow', 'owly'),
														'product-hover-fade-inshadow'             => esc_html__('Fade - InShadow', 'owly'),
														'product-hover-thumb-fade-border'         => esc_html__('Fade Thumb Border', 'owly'),
														'product-hover-thumb-fade-skinborder'     => esc_html__('Fade Thumb SkinBorder', 'owly'),
														'product-hover-thumb-fade-gradientborder' => esc_html__('Fade Thumb Gradient Border', 'owly'),
														'product-hover-thumb-fade-shadow'         => esc_html__('Fade Thumb Shadow', 'owly'),
														'product-hover-thumb-fade-inshadow'       => esc_html__('Fade Thumb InShadow', 'owly')
													),
									'default'    => 'product-hover-fade-border'
								),

								array(
									'id'         => 'product-overlay-bgcolor',
									'type'       => 'color_picker',
									'title'      => esc_html__('Overlay Background Color', 'owly')
								),

								array(
									'id'         => 'product-overlay-dark-bgcolor',
									'type'       => 'switcher',
									'title'      => esc_html__('Overlay Dark Background', 'owly'),
								),

								array(
									'id'         => 'product-overlay-effects',
									'type'       => 'select',
									'title'      => esc_html__('Overlay Effects', 'owly'),
									'options'    => array(
														''                                    => esc_html__('None', 'owly'),
														'product-overlay-fixed'               => esc_html__('Fixed', 'owly'),
														'product-overlay-toptobottom'         => esc_html__('Top to Bottom', 'owly'),
														'product-overlay-bottomtotop'         => esc_html__('Bottom to Top', 'owly'),
														'product-overlay-righttoleft'         => esc_html__('Right to Left', 'owly'),
														'product-overlay-lefttoright'         => esc_html__('Left to Right', 'owly'),
														'product-overlay-middle'              => esc_html__('Middle', 'owly'),
														'product-overlay-middleradial'        => esc_html__('Middle Radial', 'owly'),
														'product-overlay-gradienttoptobottom' => esc_html__('Gradient - Top to Bottom', 'owly'),
														'product-overlay-gradientbottomtotop' => esc_html__('Gradient - Bottom to Top', 'owly'),
														'product-overlay-gradientrighttoleft' => esc_html__('Gradient - Right to Left', 'owly'),
														'product-overlay-gradientlefttoright' => esc_html__('Gradient - Left to Right', 'owly'),
														'product-overlay-gradientradial'      => esc_html__('Gradient - Radial', 'owly'),
														'product-overlay-flash'               => esc_html__('Flash', 'owly'),
														'product-overlay-scale'               => esc_html__('Scale', 'owly'),
														'product-overlay-horizontalelastic'   => esc_html__('Horizontal - Elastic', 'owly'),
														'product-overlay-verticalelastic'     => esc_html__('Vertical - Elastic', 'owly')
													),
									'default'    => ''
								),

								array(
									'id'         => 'product-hover-image-effects',
									'type'       => 'select',
									'title'      => esc_html__('Hover Image Effects', 'owly'),
									'options'    => array(
														''                                => esc_html__('None', 'owly'),
														'product-hover-image-blur'        => esc_html__('Blur', 'owly'),
														'product-hover-image-blackwhite'  => esc_html__('Black & White', 'owly'),
														'product-hover-image-fadeinleft'  => esc_html__('Fade In Left', 'owly'),
														'product-hover-image-fadeinright' => esc_html__('Fade In Right', 'owly'),
														'product-hover-image-rotate'      => esc_html__('Rotate', 'owly'),
														'product-hover-image-rotatealt'   => esc_html__('Rotate - Alt', 'owly'),
														'product-hover-image-scalein'     => esc_html__('Scale In', 'owly'),
														'product-hover-image-scaleout'    => esc_html__('Scale Out', 'owly'),
														'product-hover-image-floatout'    => esc_html__('Float Up', 'owly')
													),
									'default'    => ''
								),

								array(
									'id'         => 'product-hover-secondary-image-effects',
									'type'       => 'select',
									'title'      => esc_html__('Hover Secondary Image Effects', 'owly'),
									'options'    => array(
														'product-hover-secimage-fade'              => esc_html__('Fade', 'owly'),
														'product-hover-secimage-zoomin'            => esc_html__('Zoom In', 'owly'),
														'product-hover-secimage-zoomout'           => esc_html__('Zoom Out', 'owly'),
														'product-hover-secimage-zoomoutup'         => esc_html__('Zoom Out Up', 'owly'),
														'product-hover-secimage-zoomoutdown'       => esc_html__('Zoom Out Down', 'owly'),
														'product-hover-secimage-zoomoutleft'       => esc_html__('Zoom Out Left', 'owly'),
														'product-hover-secimage-zoomoutright'      => esc_html__('Zoom Out Right', 'owly'),
														'product-hover-secimage-pushup'            => esc_html__('Push Up', 'owly'),
														'product-hover-secimage-pushdown'          => esc_html__('Push Down', 'owly'),
														'product-hover-secimage-pushleft'          => esc_html__('Push Left', 'owly'),
														'product-hover-secimage-pushright'         => esc_html__('Push Right', 'owly'),
														'product-hover-secimage-slideup'           => esc_html__('Slide Up', 'owly'),
														'product-hover-secimage-slidedown'         => esc_html__('Slide Down', 'owly'),
														'product-hover-secimage-slideleft'         => esc_html__('Slide Left', 'owly'),
														'product-hover-secimage-slideright'        => esc_html__('Slide Right', 'owly'),		
														'product-hover-secimage-hingeup'           => esc_html__('Hinge Up', 'owly'),
														'product-hover-secimage-hingedown'         => esc_html__('Hinge Down', 'owly'),
														'product-hover-secimage-hingeleft'         => esc_html__('Hinge Left', 'owly'),
														'product-hover-secimage-hingeright'        => esc_html__('Hinge Right', 'owly'),		
														'product-hover-secimage-foldup'            => esc_html__('Fold Up', 'owly'),
														'product-hover-secimage-folddown'          => esc_html__('Fold Down', 'owly'),
														'product-hover-secimage-foldleft'          => esc_html__('Fold Left', 'owly'),
														'product-hover-secimage-foldright'         => esc_html__('Fold Right', 'owly'),
														'product-hover-secimage-fliphoriz'         => esc_html__('Flip Horizontal', 'owly'),
														'product-hover-secimage-flipvert'          => esc_html__('Flip Vertical', 'owly')
													),
									'default'    => 'product-hover-secimage-fade'
								),

								array(
									'id'         => 'product-content-hover-effects',
									'type'       => 'select',
									'title'      => esc_html__('Content Hover Effects', 'owly'),
									'options'    => array(
														''                                   => esc_html__('None', 'owly'),
														'product-content-hover-fade'         => esc_html__('Fade', 'owly'),
														'product-content-hover-zoom'         => esc_html__('Zoom', 'owly'),
														'product-content-hover-slidedefault' => esc_html__('Slide Default', 'owly'),
														'product-content-hover-slideleft'    => esc_html__('Slide From Left', 'owly'),
														'product-content-hover-slideright'   => esc_html__('Slide From Right', 'owly'),
														'product-content-hover-slidetop'     => esc_html__('Slide From Top', 'owly'),
														'product-content-hover-slidebottom'  => esc_html__('Slide From Bottom', 'owly')
													),
									'default'    => ''
								),

								array(
									'id'         => 'product-icongroup-hover-effects',
									'type'       => 'select',
									'title'      => esc_html__('Icon Group Hover Effects', 'owly'),
									'options'    => array(
														''                               => esc_html__('None', 'owly'),
														'product-icongroup-hover-flipx'  => esc_html__('Flip X', 'owly'),
														'product-icongroup-hover-flipy'  => esc_html__('Flip Y', 'owly'),
														'product-icongroup-hover-bounce' => esc_html__('Bounce', 'owly')
													),
									'default'    => ''
								),

							// "Product Style" Common Options

								array(
									'type'    => 'notice',
									'class'   => 'info',
									'content' => esc_html__('"Product Style" Common Options.', 'owly')
								),	
								array(
									'id'         => 'product-borderorshadow',
									'type'       => 'select',
									'title'      => esc_html__('Border or Shadow', 'owly'),
									'options'    => array(
														''                              => esc_html__('None', 'owly'),
														'product-borderorshadow-border' => esc_html__('Border', 'owly'),
														'product-borderorshadow-shadow' => esc_html__('Shadow', 'owly')
													),
									'default'    => '',
									'desc'      => esc_html__('Choose either Border or Shadow for your product listing.', 'owly')
								),										
								array(
									'id'         => 'product-border-type',
									'type'       => 'select',
									'title'      => esc_html__('Border - Type', 'owly'),
									'options'    => array(
														'product-border-type-default' => esc_html__('Default', 'owly'),
														'product-border-type-thumb'   => esc_html__('Thumb', 'owly')
													),
									'default'    => 'product-border-type-default',
								),													
								array(
									'id'         => 'product-border-position',
									'type'       => 'select',
									'title'      => esc_html__('Border - Position', 'owly'),
									'options'    => array(
														'product-border-position-default'      => esc_html__('Default', 'owly'),
														'product-border-position-left'         => esc_html__('Left', 'owly'),
														'product-border-position-right'        => esc_html__('Right', 'owly'),
														'product-border-position-top'          => esc_html__('Top', 'owly'),
														'product-border-position-bottom'       => esc_html__('Bottom', 'owly'),
														'product-border-position-top-left'     => esc_html__('Top Left', 'owly'),
														'product-border-position-top-right'    => esc_html__('Top Right', 'owly'),
														'product-border-position-bottom-left'  => esc_html__('Bottom Left', 'owly'),
														'product-border-position-bottom-right' => esc_html__('Bottom Right', 'owly')														
													),
									'default'    => 'product-border-position-default',
								),	
								array(
									'id'         => 'product-shadow-type',
									'type'       => 'select',
									'title'      => esc_html__('Shadow - Type', 'owly'),
									'options'    => array(
														'product-shadow-type-default' => esc_html__('Default', 'owly'),
														'product-shadow-type-thumb'   => esc_html__('Thumb', 'owly')
													),
									'default'    => 'product-shadow-type-default',
								),
								array(
									'id'         => 'product-shadow-position',
									'type'       => 'select',
									'title'      => esc_html__('Shadow - Position', 'owly'),
									'options'    => array(
														'product-shadow-position-default'      => esc_html__('Default', 'owly'),
														'product-shadow-position-top-left'     => esc_html__('Top Left', 'owly'),
														'product-shadow-position-top-right'    => esc_html__('Top Right', 'owly'),
														'product-shadow-position-bottom-left'  => esc_html__('Bottom Left', 'owly'),
														'product-shadow-position-bottom-right' => esc_html__('Bottom Right', 'owly')
													),
									'default'    => 'product-shadow-position-default',
								),

								array(
									'id'         => 'product-bordershadow-highlight',
									'type'       => 'select',
									'title'      => esc_html__('Border / Shadow - Highlight', 'owly'),
									'options'    => array(
														''                                       => esc_html__('None', 'owly'),
														'product-bordershadow-highlight-default' => esc_html__('Default', 'owly'),
														'product-bordershadow-highlight-onhover' => esc_html__('On Hover', 'owly')
													),
									'default'    => '',
								),

								array(
									'id'         => 'product-background-bgcolor',
									'type'       => 'color_picker',
									'title'      => esc_html__('Background - Background Color', 'owly')
								),

								array(
									'id'         => 'product-background-dark-bgcolor',
									'type'       => 'switcher',
									'title'      => esc_html__('Background - Dark Background', 'owly')
								),
							
								array(
									'id'         => 'product-padding',
									'type'       => 'select',
									'title'      => esc_html__('Padding', 'owly'),
									'options'    => array(
														'product-padding-default' => esc_html__('Default', 'owly'),
														'product-padding-overall' => esc_html__('Product', 'owly'),
														'product-padding-thumb'   => esc_html__('Thumb', 'owly'),
														'product-padding-content' => esc_html__('Content', 'owly'),
													),
									'default'    => 'product-padding-default'
								),
								array(
									'id'         => 'product-space',
									'type'       => 'select',
									'title'      => esc_html__('Space', 'owly'),
									'options'    => array(
														'product-without-space' => esc_html__('False', 'owly'),
														'product-with-space'  => esc_html__('True', 'owly')
													),
									'default'    => 'product-with-space'
								),
								array(
									'id'         => 'product-display-type',
									'type'       => 'select',
									'title'      => esc_html__('Display Type', 'owly'),
									'options'    => array(
														'grid' => esc_html__('Grid', 'owly'),
														'list'  => esc_html__('List', 'owly')
													),
									'default'    => 'grid'
								),
								array(
									'id'         => 'product-display-type-list-options',
									'type'       => 'select',
									'title'      => esc_html__('List Options', 'owly'),
									'options'    => array(
														'left-thumb'  => esc_html__('Left Thumb', 'owly'),
														'right-thumb' => esc_html__('Right Thumb', 'owly')
													),
									'default'    => 'left-thumb'
								),	
								array(
									'id'         => 'product-show-labels',
									'type'       => 'select',
									'title'      => esc_html__('Show Product Labels', 'owly'),
									'options'    => array(
														'true'  => esc_html__('True', 'owly'),
														'false' => esc_html__('False', 'owly')
													),
									'default'    => 'true'
								),															
								array(
									'id'         => 'product-label-design',
									'type'       => 'select',
									'title'      => esc_html__('Product Label Design', 'owly'),
									'options'    => array(
														'product-label-boxed'      => esc_html__('Boxed', 'owly'),
														'product-label-circle'  => esc_html__('Circle', 'owly'),
														'product-label-rounded'   => esc_html__('Rounded', 'owly'),
														'product-label-angular'   => esc_html__('Angular', 'owly'),
														'product-label-ribbon'   => esc_html__('Ribbon', 'owly'),
													),
									'default'    => 'product-label-boxed',
								),

								array(
									'id'         => 'product-custom-class',
									'type'       => 'text',
									'title'      => esc_html__('Custom Class', 'owly')
								),	

							// "Product Style - Thumb" Options

								array(
									'type'    => 'notice',
									'class'   => 'info',
									'content' => esc_html__('"Product Style - Thumb" Options.', 'owly')
								),

								array(
									'id'         => 'product-thumb-secondary-image-onhover',
									'type'       => 'switcher',
									'title'      => esc_html__('Show Secondary Image On Hover', 'owly'),
									'desc'	 => esc_html__('YES! to show secondary image on product hover. First image in the gallery will be used as secondary image.', 'owly')
								),

								array(
									'id'             => 'product-thumb-content',
									'type'           => 'sorter',
									'title'          => esc_html__('Content', 'owly'),
									'default'        => array(
										'enabled'      => array(
											'title'          => esc_html__('Title', 'owly'),
											'category'       => esc_html__('Category', 'owly'),
											'price'          => esc_html__('Price', 'owly'),
											'button_element' => esc_html__('Button Element', 'owly'),
											'icons_group'    => esc_html__('Icons Group', 'owly'),
										),
										'disabled'     => array(
											'excerpt'       => esc_html__('Excerpt', 'owly'),
											'rating'        => esc_html__('Rating', 'owly'),
											'countdown'     => esc_html__('Count Down', 'owly'),
											'separator'     => esc_html__('Separator', 'owly'),
											'element_group' => esc_html__('Element Group', 'owly'),
											'swatches'      => esc_html__('Swatches', 'owly'),
										),
									),
									'enabled_title'  => esc_html__('Active Elements', 'owly'),
									'disabled_title' => esc_html__('Deatcive Elements', 'owly'),
								),

								array(
									'id'         => 'product-thumb-alignment',
									'type'       => 'select',
									'title'      => esc_html__('Alignment', 'owly'),
									'options'    => array(
														'product-thumb-alignment-top'          => esc_html__('Top', 'owly'),
														'product-thumb-alignment-top-left'     => esc_html__('Top Left', 'owly'),
														'product-thumb-alignment-top-right'    => esc_html__('Top Right', 'owly'),
														'product-thumb-alignment-middle'       => esc_html__('Middle', 'owly'),
														'product-thumb-alignment-bottom'       => esc_html__('Bottom', 'owly'),
														'product-thumb-alignment-bottom-left'  => esc_html__('Bottom Left', 'owly'),
														'product-thumb-alignment-bottom-right' => esc_html__('Bottom Right', 'owly')
													),
									'default'    => 'product-thumb-alignment-top'
								),

								array(
									'id'         => 'product-thumb-iconsgroup-icons',
									'type'       => 'select',
									'title'      => esc_html__('Icons Group - Icons', 'owly'),
									'options'    => array(
														'cart'      => esc_html__('Cart', 'owly'),
														'wishlist'  => esc_html__('Wishlist', 'owly'),
														'compare'   => esc_html__('Compare', 'owly'),
														'quickview' => esc_html__('Quick View', 'owly')
													),
									'class'         => 'chosen',
									'attributes'    => array(
										'multiple'    => 'multiple',
									),							
								),

								array(
									'id'         => 'product-thumb-iconsgroup-style',
									'type'       => 'select',
									'title'      => esc_html__('Icons Group - Style', 'owly'),
									'options'    => array(
														'product-thumb-iconsgroup-style-simple'  => esc_html__('Simple', 'owly'),
														'product-thumb-iconsgroup-style-bgfill-square'  => esc_html__('Background Fill Square', 'owly'),
														'product-thumb-iconsgroup-style-bgfill-rounded-square' => esc_html__('Background Fill Rounded Square', 'owly'),
														'product-thumb-iconsgroup-style-bgfill-rounded'  => esc_html__('Background Fill Rounded', 'owly'),
														'product-thumb-iconsgroup-style-brdrfill-square'  => esc_html__('Border Fill Square', 'owly'),
														'product-thumb-iconsgroup-style-brdrfill-rounded-square' => esc_html__('Border Fill Rounded Square', 'owly'),
														'product-thumb-iconsgroup-style-brdrfill-rounded'  => esc_html__('Border Fill Rounded', 'owly'),
														'product-thumb-iconsgroup-style-skinbgfill-square'  => esc_html__('Skin Background Fill Square', 'owly'),
														'product-thumb-iconsgroup-style-skinbgfill-rounded-square' => esc_html__('Skin Background Fill Rounded Square', 'owly'),
														'product-thumb-iconsgroup-style-skinbgfill-rounded'  => esc_html__('Skin Background Fill Rounded', 'owly'),
														'product-thumb-iconsgroup-style-skinbrdrfill-square'  => esc_html__('Skin Border Fill Square', 'owly'),
														'product-thumb-iconsgroup-style-skinbrdrfill-rounded-square' => esc_html__('Skin Border Fill Rounded Square', 'owly'),
														'product-thumb-iconsgroup-style-skinbrdrfill-rounded'  => esc_html__('Skin Border Fill Rounded', 'owly')																											
													),
									'default'    => 'product-thumb-iconsgroup-style-simple'
								),

								array(
									'id'         => 'product-thumb-iconsgroup-position',
									'type'       => 'select',
									'title'      => esc_html__('Icons Group - Position', 'owly'),
									'options'    => array(

													''                                                                              => esc_html__('Default', 'owly'),

													'product-thumb-iconsgroup-position-horizontal horizontal-position-top'          => esc_html__('Horizontal Top', 'owly'),
													'product-thumb-iconsgroup-position-horizontal horizontal-position-top-left'     => esc_html__('Horizontal Top Left', 'owly'),
													'product-thumb-iconsgroup-position-horizontal horizontal-position-top-right'    => esc_html__('Horizontal Top Right', 'owly'),
													'product-thumb-iconsgroup-position-horizontal horizontal-position-middle'       => esc_html__('Horizontal Middle', 'owly'),
													'product-thumb-iconsgroup-position-horizontal horizontal-position-bottom'       => esc_html__('Horizontal Bottom', 'owly'),
													'product-thumb-iconsgroup-position-horizontal horizontal-position-bottom-left'  => esc_html__('Horizontal Bottom Left', 'owly'),
													'product-thumb-iconsgroup-position-horizontal horizontal-position-bottom-right' => esc_html__('Horizontal Bottom Right', 'owly'),

													'product-thumb-iconsgroup-position-vertical vertical-position-top-left'         => esc_html__('Vertical Top Left', 'owly'),
													'product-thumb-iconsgroup-position-vertical vertical-position-top-right'        => esc_html__('Vertical Top Right', 'owly'),
													'product-thumb-iconsgroup-position-vertical vertical-position-middle-left'      => esc_html__('Vertical Middle Left', 'owly'),
													'product-thumb-iconsgroup-position-vertical vertical-position-middle-right'     => esc_html__('Vertical Middle Right', 'owly'),
													'product-thumb-iconsgroup-position-vertical vertical-position-bottom-left'      => esc_html__('Vertical Bottom Left', 'owly'),
													'product-thumb-iconsgroup-position-vertical vertical-position-bottom-right'     => esc_html__('Vertical Bottom Right', 'owly')

												),
									'default'    => ''
								),

								array(
									'id'         => 'product-thumb-buttonelement-button',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Button', 'owly'),
									'options'    => array(
														''          => esc_html__('None', 'owly'),
														'cart'      => esc_html__('Cart', 'owly'),
														'wishlist'  => esc_html__('Wishlist', 'owly'),
														'compare'   => esc_html__('Compare', 'owly'),
														'quickview' => esc_html__('Quick View', 'owly')
													)
								),	

								array(
									'id'         => 'product-thumb-buttonelement-secondary-button',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Secondary Button', 'owly'),
									'options'    => array(
														''          => esc_html__('None', 'owly'),
														'cart'      => esc_html__('Cart', 'owly'),
														'wishlist'  => esc_html__('Wishlist', 'owly'),
														'compare'   => esc_html__('Compare', 'owly'),
														'quickview' => esc_html__('Quick View', 'owly')
													)
								),

								array(
									'id'         => 'product-thumb-buttonelement-style',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Style', 'owly'),
									'options'    => array(
														'product-thumb-buttonelement-style-simple'  => esc_html__('Simple', 'owly'),
														'product-thumb-buttonelement-style-bgfill-square'  => esc_html__('Background Fill Square', 'owly'),
														'product-thumb-buttonelement-style-bgfill-rounded-square' => esc_html__('Background Fill Rounded Square', 'owly'),
														'product-thumb-buttonelement-style-bgfill-rounded'  => esc_html__('Background Fill Rounded', 'owly'),
														'product-thumb-buttonelement-style-brdrfill-square'  => esc_html__('Border Fill Square', 'owly'),
														'product-thumb-buttonelement-style-brdrfill-rounded-square' => esc_html__('Border Fill Rounded Square', 'owly'),
														'product-thumb-buttonelement-style-brdrfill-rounded'  => esc_html__('Border Fill Rounded', 'owly'),
														'product-thumb-buttonelement-style-skinbgfill-square'  => esc_html__('Skin Background Fill Square', 'owly'),
														'product-thumb-buttonelement-style-skinbgfill-rounded-square' => esc_html__('Skin Background Fill Rounded Square', 'owly'),
														'product-thumb-buttonelement-style-skinbgfill-rounded'  => esc_html__('Skin Background Fill Rounded', 'owly'),
														'product-thumb-buttonelement-style-skinbrdrfill-square'  => esc_html__('Skin Border Fill Square', 'owly'),
														'product-thumb-buttonelement-style-skinbrdrfill-rounded-square' => esc_html__('Skin Border Fill Rounded Square', 'owly'),
														'product-thumb-buttonelement-style-skinbrdrfill-rounded'  => esc_html__('Skin Border Fill Rounded', 'owly')																
													),
									'default'    => 'product-thumb-buttonelement-style-simple'
								),

								array(
									'id'         => 'product-thumb-buttonelement-stretch',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Stretch', 'owly'),
									'options'    => array(
														''                                    => esc_html__('False', 'owly'),
														'product-thumb-buttonelement-stretch' => esc_html__('True', 'owly')
													)
								),

								array(
									'id'             => 'product-thumb-element-group',
									'type'           => 'sorter',
									'title'          => esc_html__('Element Group Content', 'owly'),
									'default'        => array(
										'enabled'      => array(
											'title' => esc_html__('Title', 'owly'),
											'price' => esc_html__('Price', 'owly')
										),
										'disabled'     => array(
											'cart'           => esc_html__('Cart', 'owly'),
											'wishlist'       => esc_html__('Wishlist', 'owly'),
											'compare'        => esc_html__('Compare', 'owly'),
											'quickview'      => esc_html__('Quick View', 'owly'),
											'category'       => esc_html__('Category', 'owly'),
											'button_element' => esc_html__('Button Element', 'owly'),
											'icons_group'    => esc_html__('Icons Group', 'owly'),
											'excerpt'        => esc_html__('Excerpt', 'owly'),
											'rating'         => esc_html__('Rating', 'owly'),
											'separator'      => esc_html__('Separator', 'owly'),
											'swatches'       => esc_html__('Swatches', 'owly')
										),
									),
									'enabled_title'  => esc_html__('Active Elements', 'owly'),
									'disabled_title' => esc_html__('Deatcive Elements', 'owly'),
								),


							// "Product Style - Content" Options
								
								array(
									'type'    => 'notice',
									'class'   => 'info',
									'content' => esc_html__('"Product Style - Content" Options.', 'owly')
								),

								array(
									'id'         => 'product-content-enable',
									'type'       => 'switcher',
									'title'      => esc_html__('Enable Content Section', 'owly'),
									'desc'	 => esc_html__('YES! to enable content section.', 'owly')
								),

								array(
									'id'             => 'product-content-content',
									'type'           => 'sorter',
									'title'          => esc_html__('Content', 'owly'),
									'default'        => array(
										'enabled'      => array(
											'title'          => esc_html__('Title', 'owly'),
											'category'       => esc_html__('Category', 'owly'),
											'price'          => esc_html__('Price', 'owly'),
											'button_element' => esc_html__('Button Element', 'owly'),
											'icons_group'    => esc_html__('Icons Group', 'owly'),
										),
										'disabled'     => array(
											'excerpt'       => esc_html__('Excerpt', 'owly'),
											'rating'        => esc_html__('Rating', 'owly'),
											'countdown'     => esc_html__('Count Down', 'owly'),
											'separator'     => esc_html__('Separator', 'owly'),
											'element_group' => esc_html__('Element Group', 'owly'),
											'swatches'      => esc_html__('Swatches', 'owly'),
										),
									),
									'enabled_title'  => esc_html__('Active Elements', 'owly'),
									'disabled_title' => esc_html__('Deatcive Elements', 'owly'),
								),

								array(
									'id'         => 'product-content-alignment',
									'type'       => 'select',
									'title'      => esc_html__('Alignment', 'owly'),
									'options'    => array(
														'product-content-alignment-left'   => esc_html__('Left', 'owly'),
														'product-content-alignment-right'  => esc_html__('Right', 'owly'),
														'product-content-alignment-center' => esc_html__('Center', 'owly')
													),
									'default'    => 'product-content-alignment-left'
								),

								array(
									'id'         => 'product-content-iconsgroup-icons',
									'type'       => 'select',
									'title'      => esc_html__('Icons Group - Icons', 'owly'),
									'options'    => array(
														'cart'      => esc_html__('Cart', 'owly'),
														'wishlist'  => esc_html__('Wishlist', 'owly'),
														'compare'   => esc_html__('Compare', 'owly'),
														'quickview' => esc_html__('Quick View', 'owly')
													),
									'class'         => 'chosen',
									'attributes'    => array(
										'multiple'    => 'multiple',
									),							
								),

								array(
									'id'         => 'product-content-iconsgroup-style',
									'type'       => 'select',
									'title'      => esc_html__('Icons Group - Style', 'owly'),
									'options'    => array(
														'product-content-iconsgroup-style-simple'  => esc_html__('Simple', 'owly'),
														'product-content-iconsgroup-style-bgfill-square'  => esc_html__('Background Fill Square', 'owly'),
														'product-content-iconsgroup-style-bgfill-rounded-square' => esc_html__('Background Fill Rounded Square', 'owly'),
														'product-content-iconsgroup-style-bgfill-rounded'  => esc_html__('Background Fill Rounded', 'owly'),
														'product-content-iconsgroup-style-brdrfill-square'  => esc_html__('Border Fill Square', 'owly'),
														'product-content-iconsgroup-style-brdrfill-rounded-square' => esc_html__('Border Fill Rounded Square', 'owly'),
														'product-content-iconsgroup-style-brdrfill-rounded'  => esc_html__('Border Fill Rounded', 'owly'),
														'product-content-iconsgroup-style-skinbgfill-square'  => esc_html__('Skin Background Fill Square', 'owly'),
														'product-content-iconsgroup-style-skinbgfill-rounded-square' => esc_html__('Skin Background Fill Rounded Square', 'owly'),
														'product-content-iconsgroup-style-skinbgfill-rounded'  => esc_html__('Skin Background Fill Rounded', 'owly'),
														'product-content-iconsgroup-style-skinbrdrfill-square'  => esc_html__('Skin Border Fill Square', 'owly'),
														'product-content-iconsgroup-style-skinbrdrfill-rounded-square' => esc_html__('Skin Border Fill Rounded Square', 'owly'),
														'product-content-iconsgroup-style-skinbrdrfill-rounded'  => esc_html__('Skin Border Fill Rounded', 'owly')																													
													),
									'default'    => 'product-content-iconsgroup-style-simple'
								),

								array(
									'id'         => 'product-content-buttonelement-button',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Button', 'owly'),
									'options'    => array(
														''          => esc_html__('None', 'owly'),
														'cart'      => esc_html__('Cart', 'owly'),
														'wishlist'  => esc_html__('Wishlist', 'owly'),
														'compare'   => esc_html__('Compare', 'owly'),
														'quickview' => esc_html__('Quick View', 'owly')
													)
								),	

								array(
									'id'         => 'product-content-buttonelement-secondary-button',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Secondary Button', 'owly'),
									'options'    => array(
														''          => esc_html__('None', 'owly'),
														'cart'      => esc_html__('Cart', 'owly'),
														'wishlist'  => esc_html__('Wishlist', 'owly'),
														'compare'   => esc_html__('Compare', 'owly'),
														'quickview' => esc_html__('Quick View', 'owly')
													)
								),

								array(
									'id'         => 'product-content-buttonelement-style',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Style', 'owly'),
									'options'    => array(
														'product-content-buttonelement-style-simple'  => esc_html__('Simple', 'owly'),
														'product-content-buttonelement-style-bgfill-square'  => esc_html__('Background Fill Square', 'owly'),
														'product-content-buttonelement-style-bgfill-rounded-square' => esc_html__('Background Fill Rounded Square', 'owly'),
														'product-content-buttonelement-style-bgfill-rounded'  => esc_html__('Background Fill Rounded', 'owly'),
														'product-content-buttonelement-style-brdrfill-square'  => esc_html__('Border Fill Square', 'owly'),
														'product-content-buttonelement-style-brdrfill-rounded-square' => esc_html__('Border Fill Rounded Square', 'owly'),
														'product-content-buttonelement-style-brdrfill-rounded'  => esc_html__('Border Fill Rounded', 'owly'),
														'product-content-buttonelement-style-skinbgfill-square'  => esc_html__('Skin Background Fill Square', 'owly'),
														'product-content-buttonelement-style-skinbgfill-rounded-square' => esc_html__('Skin Background Fill Rounded Square', 'owly'),
														'product-content-buttonelement-style-skinbgfill-rounded'  => esc_html__('Skin Background Fill Rounded', 'owly'),
														'product-content-buttonelement-style-skinbrdrfill-square'  => esc_html__('Skin Border Fill Square', 'owly'),
														'product-content-buttonelement-style-skinbrdrfill-rounded-square' => esc_html__('Skin Border Fill Rounded Square', 'owly'),
														'product-content-buttonelement-style-skinbrdrfill-rounded'  => esc_html__('Skin Border Fill Rounded', 'owly')																													
													),
									'default'    => 'product-content-buttonelement-style-simple'
								),

								array(
									'id'         => 'product-content-buttonelement-stretch',
									'type'       => 'select',
									'title'      => esc_html__('Button Element - Stretch', 'owly'),
									'options'    => array(
														''                                    => esc_html__('False', 'owly'),
														'product-content-buttonelement-stretch' => esc_html__('True', 'owly')
													)
								),

								array(
									'id'             => 'product-content-element-group',
									'type'           => 'sorter',
									'title'          => esc_html__('Element Group Content', 'owly'),
									'default'        => array(
										'enabled'      => array(
											'title'          => esc_html__('Title', 'owly'),
											'price'          => esc_html__('Price', 'owly')
										),
										'disabled'     => array(
											'cart'           => esc_html__('Cart', 'owly'),
											'wishlist'       => esc_html__('Wishlist', 'owly'),
											'compare'        => esc_html__('Compare', 'owly'),
											'quickview'      => esc_html__('Quick View', 'owly'),
											'category'       => esc_html__('Category', 'owly'),
											'button_element' => esc_html__('Button Element', 'owly'),
											'icons_group'    => esc_html__('Icons Group', 'owly'),
											'excerpt'        => esc_html__('Excerpt', 'owly'),
											'rating'         => esc_html__('Rating', 'owly'),
											'separator'      => esc_html__('Separator', 'owly'),
											'swatches'       => esc_html__('Swatches', 'owly')
										),
									),
									'enabled_title'  => esc_html__('Active Elements', 'owly'),
									'disabled_title' => esc_html__('Deactive Elements', 'owly')
								),

							
							),

							'default' => array (
								dt_sc_woo_default_product_settings()
							),	

						)					
					),
				),

			// Others
				array(
					'name'   => 'dt-woo-other-settings',
					'title'  => esc_html__('Others', 'owly'),
					'icon'   => 'fa fa-angle-double-right',
					'fields' => array(

						array(	
							'type'    => 'subheading',
							'content' => esc_html__( 'Other Settings', 'owly' ),
						),

						array(
							'id'    => 'dt-woo-quantity-plusnminus',
							'type'  => 'switcher',
							'title' => esc_html__('Enable Plus / Minus Button - Quantity', 'owly'),
						),

						array(	
							'type'    => 'subheading',
							'content' => esc_html__( 'Cart Settings', 'owly' ),
						),

						array(
							'id'         => 'dt-woo-addtocart-custom-action',
							'type'       => 'select',
							'title'      => esc_html__('Add To Cart Custom Action', 'owly'),
							'options'    => array(
												''                    => esc_html__('None', 'owly'),
												'sidebar_widget'      => esc_html__('Sidebar Widget', 'owly'),
												'notification_widget' => esc_html__('Notification Widget', 'owly'),
											),
							'default'    => '',
						),

						array(
							'id'      => 'dt-woo-cross-sell-column',
							'type'    => 'image_select',
							'title'   => esc_html__('Cross Sell Prodcut Column', 'owly'),
							'options' => array(
								2 => OWLY_THEME_URI . '/cs-framework-override/images/one-half-column.png',
								3 => OWLY_THEME_URI . '/cs-framework-override/images/one-third-column.png',
								4 => OWLY_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
							),
							'default' => 2,
						),

						array(
							'id'  		=> 'dt-cross-sell-title',
							'type'  	=> 'wysiwyg',
							'title' 	=> esc_html__('Cross Sell Title', 'owly'),
							'default'	=> '<h2>You may be interested in&hellip;</h2>'
						),												
					)
				),
		)
	);
}

CSFramework::instance( $settings, $options );