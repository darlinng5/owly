<?php
$config = owly_kirki_config();

OWLY_Kirki::add_section( 'dt_site_layout_section', array(
	'title' => esc_html__( 'Site Layout', 'owly' ),
	'priority' => 20
) );

	# site-layout
	OWLY_Kirki::add_field( $config, array(
		'type'     => 'radio-image',
		'settings' => 'site-layout',
		'label'    => esc_html__( 'Site Layout', 'owly' ),
		'section'  => 'dt_site_layout_section',
		'default'  => owly_defaults('site-layout'),
		'choices' => array(
			'boxed' =>  OWLY_THEME_URI.'/kirki/assets/images/site-layout/boxed.png',
			'wide' => OWLY_THEME_URI.'/kirki/assets/images/site-layout/wide.png',
		)
	));

	# site-boxed-layout
	OWLY_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'site-boxed-layout',
		'label'    => esc_html__( 'Customize Boxed Layout?', 'owly' ),
		'section'  => 'dt_site_layout_section',
		'default'  => '1',
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'owly' ),
			'off' => esc_attr__( 'No', 'owly' )
		),
		'active_callback' => array(
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
		)			
	));

	# body-bg-type
	OWLY_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-type',
		'label'    => esc_html__( 'Background Type', 'owly' ),
		'section'  => 'dt_site_layout_section',
		'multiple' => 1,
		'default'  => 'none',
		'choices'  => array(
			'pattern' => esc_attr__( 'Predefined Patterns', 'owly' ),
			'upload' => esc_attr__( 'Set Pattern', 'owly' ),
			'none' => esc_attr__( 'None', 'owly' ),
		),
		'active_callback' => array(
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-pattern
	OWLY_Kirki::add_field( $config, array(
		'type'     => 'radio-image',
		'settings' => 'body-bg-pattern',
		'label'    => esc_html__( 'Predefined Patterns', 'owly' ),
		'description'    => esc_html__( 'Add Background for body', 'owly' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-image' )
		),
		'choices' => array(
			OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern1.jpg'=> OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern1.jpg',
			OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern2.jpg'=> OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern2.jpg',
			OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern3.jpg'=> OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern3.jpg',
			OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern4.jpg'=> OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern4.jpg',
			OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern5.jpg'=> OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern5.jpg',
			OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern6.jpg'=> OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern6.jpg',
			OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern7.jpg'=> OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern7.jpg',
			OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern8.jpg'=> OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern8.jpg',
			OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern9.jpg'=> OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern9.jpg',
			OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern10.jpg'=> OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern10.jpg',
			OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern11.jpg'=> OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern11.jpg',
			OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern12.jpg'=> OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern12.jpg',
			OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern13.jpg'=> OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern13.jpg',
			OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern14.jpg'=> OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern14.jpg',
			OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern15.jpg'=> OWLY_THEME_URI.'/kirki/assets/images/site-layout/pattern15.jpg',
		),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => '==', 'value' => 'pattern' ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)						
	));

	# body-bg-image
	OWLY_Kirki::add_field( $config, array(
		'type' => 'image',
		'settings' => 'body-bg-image',
		'label'    => esc_html__( 'Background Image', 'owly' ),
		'description'    => esc_html__( 'Add Background Image for body', 'owly' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-image' )
		),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => '==', 'value' => 'upload' ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-position
	OWLY_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-position',
		'label'    => esc_html__( 'Background Position', 'owly' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-position' )
		),
		'default' => 'center',
		'multiple' => 1,
		'choices' => owly_image_positions(),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => 'contains', 'value' => array( 'pattern', 'upload') ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-repeat
	OWLY_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-repeat',
		'label'    => esc_html__( 'Background Repeat', 'owly' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-repeat' )
		),
		'default' => 'repeat',
		'multiple' => 1,
		'choices' => owly_image_repeats(),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => 'contains', 'value' => array( 'pattern', 'upload' ) ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));	