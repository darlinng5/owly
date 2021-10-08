<?php
	$wtstyle = cs_get_option( 'wtitle-style' );

	$before_title = '<h3 class="widgettitle">';
	$after_title = '</h3>';

	if( $wtstyle == 'type17' ) {
		$before_title = ' <div class="mz-title"> <div class="mz-title-content"> <h3 class="widgettitle">';
		$after_title  = '</h3> </div> </div>';
	} elseif( $wtstyle == 'type18' ) {
		$before_title = ' <div class="mz-stripe-title"> <div class="mz-stripe-title-content"> <h3 class="widgettitle">';
		$after_title  = '</h3> </div> </div>';
	}

	// standard left sidebar
	register_sidebar(array(
		'name' 			=>	esc_html__('Standard | Left Sidebar', 'owly'),
		'id'			=>	'standard-sidebar-left',
		'description'	=>	esc_html__("Appears in the Left side of the site, one enabled.",'owly'),
		'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
		'after_widget' 	=> 	'</aside>',
		'before_title' 	=> 	$before_title,
		'after_title' 	=> 	$after_title));

	// standard right sidebar
	register_sidebar(array(
		'name' 			=>	esc_html__('Standard | Right Sidebar', 'owly'),
		'id'			=>	'standard-sidebar-right',
		'description'	=>	esc_html__("Appears in the Right side of the site, one enabled.",'owly'),
		'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
		'after_widget' 	=> 	'</aside>',
		'before_title' 	=> 	$before_title,
		'after_title' 	=> 	$after_title));

	// custom widget area
	$widget_areas = is_array( cs_get_option( 'widgetarea-custom' ) ) ? cs_get_option( 'widgetarea-custom' ) : array();
	$widget_areas = array_filter($widget_areas);

    foreach ($widget_areas as $widget_area ) {
	   	$id = mb_convert_case($widget_area['widgetarea-custom-name'], MB_CASE_LOWER, "UTF-8");
    	$id = str_replace(" ", "-", $id);

    	register_sidebar(array(
			'name' 			=>	$widget_area['widgetarea-custom-name'],
			'id'			=>	$id,
			'description'   =>  esc_html__("Custom sidebar created in Designthemes Framework.",'owly'),
			'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
			'after_widget' 	=> 	'</aside>',
			'before_title' 	=> 	$before_title,
			'after_title' 	=> 	$after_title));
    }

	// post archives sidebar
	$layout = cs_get_option( 'blog-archives-page-layout' );
	$layout = !empty($layout) ? $layout : "content-full-width";
	switch($layout) :
		case 'with-left-sidebar':
			register_sidebar(array(
				'name' 			=>	esc_html__("Post Archives | Left Sidebar",'owly'),
				'id'			=>	'post-archives-sidebar-left',
				'description'   =>  esc_html__("Appears in the Left side of Post Archives Page.",'owly'),
				'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
				'after_widget' 	=> 	'</aside>',
				'before_title' 	=> 	$before_title,
				'after_title' 	=> 	$after_title));
		break;

		case 'with-right-sidebar':
			register_sidebar(array(
				'name' 			=>	esc_html__("Post Archives | Right Sidebar",'owly'),
				'id'			=>	'post-archives-sidebar-right',
				'description'   =>  esc_html__("Appears in the Right side of Post Archives Page.",'owly'),
				'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
				'after_widget' 	=> 	'</aside>',
				'before_title' 	=> 	$before_title,
				'after_title' 	=> 	$after_title));
		break;

		case 'with-both-sidebar':
			register_sidebar(array(
				'name' 			=>	esc_html__("Post Archives | Left Sidebar",'owly'),
				'id'			=>	'post-archives-sidebar-left',
				'description'   =>  esc_html__("Appears in the Left side of Post Archives Page.",'owly'),
				'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
				'after_widget' 	=> 	'</aside>',
				'before_title' 	=> 	$before_title,
				'after_title' 	=> 	$after_title));

			register_sidebar(array(
				'name' 			=>	esc_html__("Post Archives | Right Sidebar",'owly'),
				'id'			=>	'post-archives-sidebar-right',
				'description'   =>  esc_html__("Appears in the Right side of Post Archives Page.",'owly'),
				'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
				'after_widget' 	=> 	'</aside>',
				'before_title' 	=> 	$before_title,
				'after_title' 	=> 	$after_title));
		break;
	endswitch;

	// events everywhere sidebar
	if( class_exists('Tribe__Events__Main')	):
		// left sidebar
		register_sidebar(array(
			'name' 			=>	esc_html__('Events | Left Sidebar', 'owly'),
			'id'			=>	'events-everywhere-sidebar-left',
			'description'   =>  esc_html__("Main sidebar for The Events Calendar pages that appears on the left.",'owly'),
			'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
			'after_widget' 	=> 	'</aside>',
			'before_title' 	=> 	$before_title,
			'after_title' 	=> 	$after_title));

		// right sidebar
		register_sidebar(array(
			'name' 			=>	esc_html__('Events | Right Sidebar', 'owly'),
			'id'			=>	'events-everywhere-sidebar-right',
			'description'   =>  esc_html__("Main sidebar for The Events Calendar pages that appears on the right.",'owly'),
			'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
			'after_widget' 	=> 	'</aside>',
			'before_title' 	=> 	$before_title,
			'after_title' 	=> 	$after_title));
	endif;

	// portfolio archives sidebar
	if( owly_plugin_is_active('designthemes-core-features/designthemes-core-features.php') ):
		$layout = cs_get_option( 'portfolio-archives-page-layout' );
		$layout = !empty($layout) ? $layout : "content-full-width";
		switch($layout) :
			case 'with-left-sidebar':
				register_sidebar(array(
					'name' 			=>	esc_html__("Portfolio Archives | Left Sidebar",'owly'),
					'id'			=>	'custom-post-portfolio-archives-sidebar-left',
					'description'   =>  esc_html__("Appears in the Left side of Portfolio Archives Page.",'owly'),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	$before_title,
					'after_title' 	=> 	$after_title));
			break;

			case 'with-right-sidebar':
				register_sidebar(array(
					'name' 			=>	esc_html__("Portfolio Archives | Right Sidebar",'owly'),
					'id'			=>	'custom-post-portfolio-archives-sidebar-right',
					'description'   =>  esc_html__("Appears in the Right side of Portfolio Archives Page.",'owly'),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	$before_title,
					'after_title' 	=> 	$after_title));
			break;

			case 'with-both-sidebar':
				register_sidebar(array(
					'name' 			=>	esc_html__("Portfolio Archives | Left Sidebar",'owly'),
					'id'			=>	'custom-post-portfolio-archives-sidebar-left',
					'description'   =>  esc_html__("Appears in the Left side of Portfolio Archives Page.",'owly'),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	$before_title,
					'after_title' 	=> 	$after_title));

				register_sidebar(array(
					'name' 			=>	esc_html__("Portfolio Archives | Right Sidebar",'owly'),
					'id'			=>	'custom-post-portfolio-archives-sidebar-right',
					'description'   =>  esc_html__("Appears in the Right side of Portfolio Archives Page.",'owly'),
					'before_widget' => 	'<aside id="%1$s" class="widget %2$s">',
					'after_widget' 	=> 	'</aside>',
					'before_title' 	=> 	$before_title,
					'after_title' 	=> 	$after_title));
			break;
		endswitch;
	endif;?>