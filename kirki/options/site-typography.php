<?php
$config = owly_kirki_config();

# Breadcrumb Settings
OWLY_Kirki::add_section( 'dt_site_breadcrumb_section', array(
	'title' => esc_html__( 'Breadcrumb', 'owly' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 5
) );

	# customize-breadcrumb-title-typo
	OWLY_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-breadcrumb-title-typo',
		'label'    => esc_html__( 'Customize Title ?', 'owly' ),
		'section'  => 'dt_site_breadcrumb_section',
		'default'  => owly_defaults('customize-breadcrumb-title-typo'),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'owly' ),
			'off' => esc_attr__( 'No', 'owly' )
		)			
	));
	
	# breadcrumb-title-typo
	OWLY_Kirki::add_field( $config, array(
		'type'     => 'typography',
		'settings' => 'breadcrumb-title-typo',
		'label'    => esc_html__( 'Title Typography', 'owly' ),
		'section'  => 'dt_site_breadcrumb_section',
		'output' => array(
			array( 'element' => 'body:not(.block-editor-page):not(.wp-core-ui) .main-title-section h1, body:not(.block-editor-page):not(.wp-core-ui) h1.simple-title' )
		),
		'default' => owly_defaults( 'breadcrumb-title-typo' ),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),		
		'active_callback' => array(
			array( 'setting' => 'customize-breadcrumb-title-typo', 'operator' => '==', 'value' => '1' )
		)		
	));		
	
	# customize-breadcrumb-typo
	OWLY_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-breadcrumb-typo',
		'label'    => esc_html__( 'Customize Link ?', 'owly' ),
		'section'  => 'dt_site_breadcrumb_section',
		'default'  => owly_defaults('customize-breadcrumb-typo'),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'owly' ),
			'off' => esc_attr__( 'No', 'owly' )
		)			
	));
	
	# breadcrumb-typo
	OWLY_Kirki::add_field( $config, array(
		'type'     => 'typography',
		'settings' => 'breadcrumb-typo',
		'label'    => esc_html__( 'Link Typography', 'owly' ),
		'section'  => 'dt_site_breadcrumb_section',
		'output' => array(
			array( 'element' => 'div.breadcrumb a' )
		),
		'default' => owly_defaults( 'breadcrumb-typo' ),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),
		'active_callback' => array(
			array( 'setting' => 'customize-breadcrumb-typo', 'operator' => '==', 'value' => '1' )
		)		
	));
# Breadcrumb Settings

# Body Content
OWLY_Kirki::add_section( 'dt_body_content_typo_section', array(
	'title' => esc_html__( 'Body', 'owly' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 15
) );

	# customize-body-content-typo
	OWLY_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-body-content-typo',
		'label'    => esc_html__( 'Customize Content Typo', 'owly' ),
		'section'  => 'dt_body_content_typo_section',
		'default'  => owly_defaults( 'customize-body-content-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'owly' ),
			'off' => esc_attr__( 'No', 'owly' )
		)
	));

	# body-content-typo
	OWLY_Kirki::add_field( $config ,array(
		'type' => 'typography',
		'settings' => 'body-content-typo',
		'label'    => esc_html__('Settings', 'owly'),
		'section'  => 'dt_body_content_typo_section',
		'output' => array( 
			array( 'element' => 'body' ),
			array( 
				'element' => '.editor-styles-wrapper > *',
				'context' => array ('editor')
			)
		),
		'default' => owly_defaults('body-content-typo'),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),
		'active_callback' => array(
			array( 'setting' => 'customize-body-content-typo', 'operator' => '==', 'value' => '1' )
		)
	));	

# Heading
OWLY_Kirki::add_section( 'dt_headings_typo_section', array(
	'title' => esc_html__( 'Headings', 'owly' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 20
) );

	# H1
	# customize-body-h1-typo
	OWLY_Kirki::add_field( 'owly_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h1-typo',
		'label'    => esc_html__( 'Customize H1 Tag', 'owly' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => owly_defaults( 'customize-body-h1-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'owly' ),
			'off' => esc_attr__( 'No', 'owly' )
		)
	));

	# h1 tag typography	
	OWLY_Kirki::add_field( 'owly_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h1',
		'label'    =>__('H1 Tag Settings', 'owly'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h1' ),
			array( 
				'element' => '.editor-post-title__block .editor-post-title__input, .editor-styles-wrapper .wp-block h1, body#tinymce.wp-editor.content h1',
				'context' => array ('editor')
			),
		),
		'default' => owly_defaults('h1'),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),					
		'active_callback' => array(
			array( 'setting' => 'customize-body-h1-typo', 'operator' => '==', 'value' => '1' )
		)
	));

	# H1 Divider
	OWLY_Kirki::add_field( 'owly_kirki_config' ,array(
		'type'=> 'custom',
		'settings' => 'customize-body-h1-typo-divider',
		'section'  => 'dt_headings_typo_section',
		'default'  => '<div class="customize-control-divider"></div>'
	));

	# H2
	# customize-body-h2-typo
	OWLY_Kirki::add_field( 'owly_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h2-typo',
		'label'    => esc_html__( 'Customize H2 Tag', 'owly' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => owly_defaults( 'customize-body-h2-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'owly' ),
			'off' => esc_attr__( 'No', 'owly' )
		)
	));

	# h2 tag typography	
	OWLY_Kirki::add_field( 'owly_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h2',
		'label'    =>__('H2 Tag Settings', 'owly'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h2' ),
			array( 
				'element' => '.editor-styles-wrapper .wp-block h2',
				'context' => array ('editor')
			),
		),
		'default' => owly_defaults('h2'),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),									
		'active_callback' => array(
			array( 'setting' => 'customize-body-h2-typo', 'operator' => '==', 'value' => '1' )
		)
	));

	# H2 Divider
	OWLY_Kirki::add_field( 'owly_kirki_config' ,array(
		'type'=> 'custom',
		'settings' => 'customize-body-h2-typo-divider',
		'section'  => 'dt_headings_typo_section',
		'default'  => '<div class="customize-control-divider"></div>'
	));

	# H3
	# customize-body-h3-typo
	OWLY_Kirki::add_field( 'owly_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h3-typo',
		'label'    => esc_html__( 'Customize H3 Tag', 'owly' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => owly_defaults( 'customize-body-h3-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'owly' ),
			'off' => esc_attr__( 'No', 'owly' )
		)
	));

	# h3 tag typography	
	OWLY_Kirki::add_field( 'owly_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h3',
		'label'    =>__('H3 Tag Settings', 'owly'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h3' ),
			array( 
				'element' => '.editor-styles-wrapper .wp-block h3',
				'context' => array ('editor')
			),
		),
		'default' => owly_defaults('h3'),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),									
		'active_callback' => array(
			array( 'setting' => 'customize-body-h3-typo', 'operator' => '==', 'value' => '1' )
		)
	));

	# H3 Divider
	OWLY_Kirki::add_field( 'owly_kirki_config' ,array(
		'type'=> 'custom',
		'settings' => 'customize-body-h3-typo-divider',
		'section'  => 'dt_headings_typo_section',
		'default'  => '<div class="customize-control-divider"></div>'
	));

	# H4
	# customize-body-h4-typo
	OWLY_Kirki::add_field( 'owly_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h4-typo',
		'label'    => esc_html__( 'Customize H4 Tag', 'owly' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => owly_defaults( 'customize-body-h4-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'owly' ),
			'off' => esc_attr__( 'No', 'owly' )
		)
	));

	# h4 tag typography	
	OWLY_Kirki::add_field( 'owly_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h4',
		'label'    =>__('H4 Tag Settings', 'owly'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h4' ),
			array( 
				'element' => '.editor-styles-wrapper .wp-block h4',
				'context' => array ('editor')
			),
		),
		'default' => owly_defaults('h4'),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),									
		'active_callback' => array(
			array( 'setting' => 'customize-body-h4-typo', 'operator' => '==', 'value' => '1' )
		)
	));

	# H4 Divider
	OWLY_Kirki::add_field( 'owly_kirki_config' ,array(
		'type'=> 'custom',
		'settings' => 'customize-body-h4-typo-divider',
		'section'  => 'dt_headings_typo_section',
		'default'  => '<div class="customize-control-divider"></div>'
	));

	# H5
	# customize-body-h5-typo
	OWLY_Kirki::add_field( 'owly_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h5-typo',
		'label'    => esc_html__( 'Customize H5 Tag', 'owly' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => owly_defaults( 'customize-body-h5-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'owly' ),
			'off' => esc_attr__( 'No', 'owly' )
		)
	));

	# h5 tag typography	
	OWLY_Kirki::add_field( 'owly_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h5',
		'label'    =>__('H5 Tag Settings', 'owly'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h5' ),
			array( 
				'element' => '.editor-styles-wrapper .wp-block h5',
				'context' => array ('editor')
			),
		),
		'default' => owly_defaults('h5'),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),									
		'active_callback' => array(
			array( 'setting' => 'customize-body-h5-typo', 'operator' => '==', 'value' => '1' )
		)
	));

	# H5 Divider
	OWLY_Kirki::add_field( 'owly_kirki_config' ,array(
		'type'=> 'custom',
		'settings' => 'customize-body-h5-typo-divider',
		'section'  => 'dt_headings_typo_section',
		'default'  => '<div class="customize-control-divider"></div>'
	));

	# H6
	# customize-body-h6-typo
	OWLY_Kirki::add_field( 'owly_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h6-typo',
		'label'    => esc_html__( 'Customize H6 Tag', 'owly' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => owly_defaults( 'customize-body-h6-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'owly' ),
			'off' => esc_attr__( 'No', 'owly' )
		)
	));

	# h6 tag typography	
	OWLY_Kirki::add_field( 'owly_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h6',
		'label'    =>__('H6 Tag Settings', 'owly'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h6' ),
			array( 
				'element' => '.editor-styles-wrapper .wp-block h6',
				'context' => array ('editor')
			),
		),
		'default' => owly_defaults('h6'),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),									
		'active_callback' => array(
			array( 'setting' => 'customize-body-h6-typo', 'operator' => '==', 'value' => '1' )
		)
	));
	
# Footer Typography
	OWLY_Kirki::add_section( 'dt_footer_typo', array(
		'title'	=> esc_html__( 'Footer', 'owly' ),
		'panel' => 'dt_site_typography_panel',
		'priority' => 100,
	) );

		# customize-footer-title-typo
		OWLY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-title-typo',
			'label'    => esc_html__( 'Customize Title ?', 'owly' ),
			'section'  => 'dt_footer_typo',
			'default'  => owly_defaults('customize-footer-title-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'owly' ),
				'off' => esc_attr__( 'No', 'owly' )
			),
		));

		# footer-title-typo
		OWLY_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-title-typo',
			'label'    => esc_html__( 'Title Typography', 'owly' ),
			'section'  => 'dt_footer_typo',
			'output' => array(
				array( 'element' => 'div.footer-widgets h3.widgettitle, #footer h3.widgettitle' )
			),
			'default' => owly_defaults( 'footer-title-typo' ),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-title-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# Divider
		OWLY_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'footer-title-typo-divider',
			'section'  => 'dt_footer_typo',
			'default'  => '<div class="customize-control-divider"></div>',
			'active_callback' => array(
				array( 'setting' => 'customize-footer-title-typo', 'operator' => '==', 'value' => '1' )
			)			
		));

		# customize-footer-content-typo
		OWLY_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-content-typo',
			'label'    => esc_html__( 'Customize Content ?', 'owly' ),
			'section'  => 'dt_footer_typo',
			'default'  => owly_defaults('customize-footer-content-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'owly' ),
				'off' => esc_attr__( 'No', 'owly' )
			),
		));

		# footer-content-typo
		OWLY_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-content-typo',
			'label'    => esc_html__( 'Content Typography', 'owly' ),
			'section'  => 'dt_footer_typo',
			'output' => array(
				array( 'element' => '#footer, .footer-copyright, div.footer-widgets .widget' )
			),
			'default' => owly_defaults( 'footer-content-typo' ),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# footer-content-a-color		
		OWLY_Kirki::add_field( $config, array(
			'type'     => 'color',
			'settings' => 'footer-content-a-color',
			'label'    => esc_html__( 'Anchor Color', 'owly' ),
			'section'  => 'dt_footer_typo',
			'choices' => array( 'alpha' => true ),
			'output' => array(
				array( 'element' => '.footer-widgets a, #footer a' )
			),
			'default' => owly_defaults( 'footer-content-a-color' ),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# footer-content-a-hover-color
		OWLY_Kirki::add_field( $config, array(
			'type'     => 'color',
			'settings' => 'footer-content-a-hover-color',
			'label'    => esc_html__( 'Anchor Hover Color', 'owly' ),
			'section'  => 'dt_footer_typo',
			'choices' => array( 'alpha' => true ),			
			'output' => array(
				array( 'element' => '.footer-widgets a:hover, #footer a:hover' )
			),
			'default' => owly_defaults( 'footer-content-a-hover-color' ),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));