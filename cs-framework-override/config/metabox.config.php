<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// -----------------------------------------
// Layer Sliders
// -----------------------------------------
function owly_layersliders() {
  $layerslider = array(  esc_html__('Select a slider','owly') );

  if( owly_plugin_is_active('LayerSlider/layerslider.php') ) {

    $sliders = LS_Sliders::find(array('limit' => 50));

    if(!empty($sliders)) {
      foreach($sliders as $key => $item){
        $layerslider[ $item['id'] ] = $item['name'];
      }
    }
  }

  return $layerslider;
}

// -----------------------------------------
// Revolution Sliders
// -----------------------------------------
function owly_revolutionsliders() {
  $revolutionslider = array( '' => esc_html__('Select a slider','owly') );

  if(owly_plugin_is_active('revslider/revslider.php')) {
    $sld = new RevSlider();
    $sliders = $sld->getArrSliders();
    if(!empty($sliders)){
      foreach($sliders as $key => $item) {
        $revolutionslider[$item->getAlias()] = $item->getTitle();
      }
    }    
  }

  return $revolutionslider;  
}

// -----------------------------------------
// Meta Layout Section
// -----------------------------------------
$meta_layout_section =array(
  'name'  => 'layout_section',
  'title' => esc_html__('Layout', 'owly'),
  'icon'  => 'fa fa-columns',
  'fields' =>  array(
    array(
      'id'  => 'layout',
      'type' => 'image_select',
      'title' => esc_html__('Page Layout', 'owly' ),
      'options'      => array(
          'content-full-width'   => OWLY_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
          'with-left-sidebar'    => OWLY_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
          'with-right-sidebar'   => OWLY_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
          'with-both-sidebar'    => OWLY_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
      ),
      'default'      => 'content-full-width',
      'attributes'   => array( 'data-depend-id' => 'page-layout' )
    ),
    array(
      'id'        => 'show-standard-sidebar-left',
      'type'      => 'switcher',
      'title'     => esc_html__('Show Standard Left Sidebar', 'owly' ),
      'dependency'  => array( 'page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
    ),
    array(
      'id'        => 'widget-area-left',
      'type'      => 'select',
      'title'     => esc_html__('Choose Left Widget Areas', 'owly' ),
      'class'     => 'chosen',
      'options'   => owly_custom_widgets(),
      'attributes'  => array( 
        'multiple'  => 'multiple',
        'data-placeholder' => esc_html__('Select Left Widget Areas','owly'),
        'style' => 'width: 400px;'
      ),
      'dependency'  => array( 'page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
    ),
    array(
      'id'          => 'show-standard-sidebar-right',
      'type'        => 'switcher',
      'title'       => esc_html__('Show Standard Right Sidebar', 'owly' ),
      'dependency'  => array( 'page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
    ),
    array(
      'id'        => 'widget-area-right',
      'type'      => 'select',
      'title'     => esc_html__('Choose Right Widget Areas', 'owly' ),
      'class'     => 'chosen',
      'options'   => owly_custom_widgets(),
      'attributes'    => array( 
        'multiple' => 'multiple',
        'data-placeholder' => esc_html__('Select Right Widget Areas','owly'),
        'style' => 'width: 400px;'
      ),
      'dependency'  => array( 'page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
    )
  )
);

// -----------------------------------------
// Meta Breadcrumb Section
// -----------------------------------------
$meta_breadcrumb_section = array(
  'name'  => 'breadcrumb_section',
  'title' => esc_html__('Breadcrumb', 'owly'),
  'icon'  => 'fa fa-sitemap',
  'fields' =>  array(
    array(
      'id'      => 'enable-sub-title',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Breadcrumb', 'owly' ),
      'default' => true
    ),
    array(
    	'id'                 => 'breadcrumb_position',
	'type'               => 'select',
      'title'              => esc_html__('Position', 'owly' ),
      'options'            => array(
        'header-top-absolute'    => esc_html__('Behind the Header','owly'),
        'header-top-relative' 	   => esc_html__('Default','owly'),
		),
		'default'            => 'header-top-relative',	
      'dependency'         => array( 'enable-sub-title', '==', 'true' ),
    ),    
    array(
      'id'    => 'breadcrumb_background',
      'type'  => 'background',
      'title' => esc_html__('Background', 'owly' ),
      'dependency'   => array( 'enable-sub-title', '==', 'true' ),
    ),
  )
);

// -----------------------------------------
// Meta Slider Section
// -----------------------------------------
$meta_slider_section = array(
  'name'  => 'slider_section',
  'title' => esc_html__('Slider', 'owly'),
  'icon'  => 'fab fa-slideshare',
  'fields' =>  array(
    array(
      'id'           => 'slider-notice',
      'type'         => 'notice',
      'class'        => 'danger',
      'content'      => esc_html__('Slider tab works only if breadcrumb disabled.','owly'),
      'class'        => 'margin-30 cs-danger',
      'dependency'   => array( 'enable-sub-title', '==', 'true' ),
    ),

    array(
      'id'           => 'show_slider',
      'type'         => 'switcher',
      'title'        => esc_html__('Show Slider', 'owly' ),
      'dependency'   => array( 'enable-sub-title', '==', 'false' ),
    ),
    array(
    	'id'                 => 'slider_position',
	'type'               => 'select',
	'title'              => esc_html__('Position', 'owly' ),
	'options'            => array(
		'header-top-relative'     => esc_html__('Top Header Relative','owly'),
		'header-top-absolute'    => esc_html__('Top Header Absolute','owly'),
		'bottom-header' 	   => esc_html__('Bottom Header','owly'),
	),
	'default'            => 'bottom-header',
	'dependency'         => array( 'enable-sub-title|show_slider', '==|==', 'false|true' ),
   ),
   array(
      'id'                 => 'slider_type',
      'type'               => 'select',
      'title'              => esc_html__('Slider', 'owly' ),
      'options'            => array(
        ''                 => esc_html__('Select a slider','owly'),
        'layerslider'      => esc_html__('Layer slider','owly'),
        'revolutionslider' => esc_html__('Revolution slider','owly'),
        'customslider'     => esc_html__('Custom Slider Shortcode','owly'),
      ),
      'validate' => 'required',
      'dependency'         => array( 'enable-sub-title|show_slider', '==|==', 'false|true' ),
    ),

    array(
      'id'          => 'layerslider_id',
      'type'        => 'select',
      'title'       => esc_html__('Layer Slider', 'owly' ),
      'options'     => owly_layersliders(),
      'validate'    => 'required',
      'dependency'  => array( 'enable-sub-title|show_slider|slider_type', '==|==|==', 'false|true|layerslider' )
    ),

    array(
      'id'          => 'revolutionslider_id',
      'type'        => 'select',
      'title'       => esc_html__('Revolution Slider', 'owly' ),
      'options'     => owly_revolutionsliders(),
      'validate'    => 'required',
      'dependency'  => array( 'enable-sub-title|show_slider|slider_type', '==|==|==', 'false|true|revolutionslider' )
    ),

    array(
      'id'          => 'customslider_sc',
      'type'        => 'textarea',
      'title'       => esc_html__('Custom Slider Code', 'owly' ),
      'validate'    => 'required',
      'dependency'  => array( 'enable-sub-title|show_slider|slider_type', '==|==|==', 'false|true|customslider' )
    ),
  )  
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
array_push( $meta_layout_section['fields'], array(
  'id'        => 'enable-sticky-sidebar',
  'type'      => 'switcher',
  'title'     => esc_html__('Enable Sticky Sidebar', 'owly' ),
  'dependency'  => array( 'page-layout', 'any', 'with-left-sidebar,with-right-sidebar,with-both-sidebar' )
) );

$page_settings = array(
  $meta_layout_section,
  $meta_breadcrumb_section,
  $meta_slider_section,
  array(
    'name'   => 'sidenav_template_section',
    'title'  => esc_html__('Side Navigation Template', 'owly'),
    'icon'   => 'fa fa-th-list',
    'fields' =>  array(
      array(
        'id'      => 'sidenav-tpl-notice',
        'type'    => 'notice',
        'class'   => 'success',
        'content' => esc_html__('Side Navigation Tab Works only if page template set to Side Navigation Template in Page Attributes','owly'),
        'class'   => 'margin-30 cs-success',      
      ),
      array(
        'id'      => 'sidenav-style',
        'type'    => 'select',
        'title'   => esc_html__('Side Navigation Style', 'owly' ),
        'options' => array(
          'type1'  => esc_html__('Type1','owly'),
          'type2'  => esc_html__('Type2','owly'),
          'type3'  => esc_html__('Type3','owly'),
          'type4'  => esc_html__('Type4','owly'),
          'type5'  => esc_html__('Type5','owly'),
          'type6'  => esc_html__('Type6','owly'),
          'type7'  => esc_html__('Type7','owly'),
          'type8'  => esc_html__('Type8','owly'),
          'type9'  => esc_html__('Type9','owly'),
          'type10' => esc_html__('Type10','owly')
        ),
      ),
      array(
        'id'    => 'sidenav-align',
        'type'  => 'switcher',
        'title' => esc_html__('Align Right', 'owly' ),
        'info'  => esc_html__('YES! to align right of side navigation.','owly')
      ),
      array(
        'id'    => 'sidenav-sticky',
        'type'  => 'switcher',
        'title' => esc_html__('Sticky Side Navigation', 'owly' ),
        'info'  => esc_html__('YES! to sticky side navigation content.','owly')
      ),
      array(
        'id'    => 'enable-sidenav-content',
        'type'  => 'switcher',
        'title' => esc_html__('Show Content', 'owly' ),
        'info'  => esc_html__('YES! to show content in below side navigation.','owly')
      ),
      array(
        'id'         => 'sidenav-content',
        'type'       => 'textarea',
        'title'      => esc_html__('Side Navigation Content', 'owly' ),
        'info'       => esc_html__('Paste any shortcode content here','owly'),
        'attributes' => array( 'rows' => 6 ),
      ),
    )
  ),  
);

$shop_page_id = get_option('woocommerce_shop_page_id');

if( isset( $_GET['post'] ) && ( $_GET['post'] != $shop_page_id ) || !isset( $_GET['post'] )  ) {	
  $options[] = array(
    'id'        => '_tpl_default_settings',
    'title'     => esc_html__('Page Settings','owly'),
    'post_type' => 'page',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => $page_settings
  );

}

// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$post_meta_layout_section = $meta_layout_section;
$fields = $post_meta_layout_section['fields'];

	$fields[0]['title'] =  esc_html__('Post Layout', 'owly' );
	#unset( $fields[0]['options']['with-both-sidebar'] );
	#unset( $fields[0]['info'] );
	#unset( $fields[0]['options']['fullwidth'] );
	unset( $fields[5] );
	unset( $post_meta_layout_section['fields'] );
	$post_meta_layout_section['fields']  = $fields;  

	$post_format_section = array(
		'name'  => 'post_format_data_section',
		'title' => esc_html__('Post Format', 'owly'),
		'icon'  => 'fa fa-cog',
		'fields' =>  array(

			array(
				'id'           => 'single-post-style',
				'type'         => 'select',
				'title'        => esc_html__('Post Style', 'owly'),
				'options'      => array(
				  'default'      		=> esc_html__('Default', 'owly'),
				  'breadcrumb-fixed'    => esc_html__('Breadcrumb Fixed', 'owly'),
				  'breadcrumb-parallax' => esc_html__('Breadcrumb Parallax', 'owly'),
				  'overlay'				=> esc_html__('Overlay', 'owly'),
				  'overlap' 		    => esc_html__('Overlap', 'owly'),
				  'custom' 		    	=> esc_html__('Custom', 'owly')
				),
				'class'        => 'chosen',
				'default'      => 'overlap',
				'info'         => esc_html__('Choose post style to display single post. If post style is "Custom", display based on Editor content.', 'owly')
			),

			array(
				'id'           => 'single-custom-style',
				'type'         => 'select',
				'title'        => esc_html__('Custom Style', 'owly'),
				'options'      => array(
				  'minimal'     => esc_html__('Minimal', 'owly'),
				  'classic' 	=> esc_html__('Classic', 'owly'),
				  'modern'		=> esc_html__('Modern', 'owly'),
				),
				'class'        => 'chosen',
				'default'      => 'minimal',
				'info'         => esc_html__('Select type of custom style.', 'owly'),
				'dependency'   => array( 'single-post-style', '==', 'custom' ),
			),

			array(
			    'id'           => 'view_count',
			    'type'         => 'number',
			    'title'        => esc_html__('Views', 'owly' ),
				'info'         => esc_html__('No.of views of this post.', 'owly'),
	          	'attributes' => array(
		           'style'    => 'width: 15%;'
        	    ),
			),

			array(
			    'id'           => 'like_count',
			    'type'         => 'number',
			    'title'        => esc_html__('Likes', 'owly' ),
				'info'         => esc_html__('No.of likes of this post.', 'owly'),
	          	'attributes' => array(
		           'style'    => 'width: 15%;'
        	    ),
			),

			array(
				'id' => 'post-format-type',
				'title'   => esc_html__('Type', 'owly' ),
				'type' => 'select',
				'default' => 'standard',
				'options' => array(
					'standard'  => esc_html__('Standard', 'owly'),
					'status'	=> esc_html__('Status','owly'),
					'quote'		=> esc_html__('Quote','owly'),
					'gallery'	=> esc_html__('Gallery','owly'),
					'image'		=> esc_html__('Image','owly'),
					'video'		=> esc_html__('Video','owly'),
					'audio'		=> esc_html__('Audio','owly'),
					'link'		=> esc_html__('Link','owly'),
					'aside'		=> esc_html__('Aside','owly'),
					'chat'		=> esc_html__('Chat','owly')
				),
				'info'         => esc_html__('Post Format & Type should be Same. Check the Post Format from the "Format" Tab, which comes in the Right Side Section', 'owly'),
			),

			array(
				'id' 	  => 'post-gallery-items',
				'type'	  => 'gallery',
				'title'   => esc_html__('Add Images', 'owly' ),
				'add_title'   => esc_html__('Add Images', 'owly' ),
				'edit_title'  => esc_html__('Edit Images', 'owly' ),
				'clear_title' => esc_html__('Remove Images', 'owly' ),
				'dependency' => array( 'post-format-type', '==', 'gallery' ),
			),

			array(
				'id' 	  => 'media-type',
				'type'	  => 'select',
				'title'   => esc_html__('Select Type', 'owly' ),
				'dependency' => array( 'post-format-type', 'any', 'video,audio' ),
		      	'options'	=> array(
					'oembed' => esc_html__('Oembed','owly'),
					'self' => esc_html__('Self Hosted','owly'),
				)
			),

			array(
				'id' 	  => 'media-url',
				'type'	  => 'textarea',
				'title'   => esc_html__('Media URL', 'owly' ),
				'dependency' => array( 'post-format-type', 'any', 'video,audio' ),
			),
		)
	);

	$options[] = array(
		'id'        => '_dt_post_settings',
		'title'     => esc_html__('Post Settings','owly'),
		'post_type' => 'post',
		'context'   => 'normal',
		'priority'  => 'high',
		'sections'  => array(
			$post_meta_layout_section,
			$meta_breadcrumb_section,
			$post_format_section			
		)
	);

// -----------------------------------------
// Tribe Events Post Metabox Options
// -----------------------------------------
  array_push( $post_meta_layout_section['fields'], array(
    'id' => 'event-post-style',
    'title'   => esc_html__('Post Style', 'owly' ),
    'type' => 'select',
    'default' => 'type1',
    'options' => array(
      'type1'  => esc_html__('Classic', 'owly'),
      'type2'  => esc_html__('Full Width','owly'),
      'type3'  => esc_html__('Minimal Tab','owly'),
      'type4'  => esc_html__('Clean','owly'),
      'type5'  => esc_html__('Modern','owly'),
    ),
	'class'    => 'chosen',
	'info'     => esc_html__('Your event post page show at most selected style.', 'owly')
  ) );

  $options[] = array(
    'id'        => '_custom_settings',
    'title'     => esc_html__('Settings','owly'),
    'post_type' => 'tribe_events',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(
      $post_meta_layout_section,
      $meta_breadcrumb_section
    )
  );

  if( function_exists( 'is_woocommerce' ) ) {

    $woo_size_guides = cs_get_option( 'dt-woo-size-guides' );
    $woo_size_guides = (is_array($woo_size_guides) && !empty($woo_size_guides)) ? $woo_size_guides : false;
  
    $size_guides[] = esc_html__('None', 'owly');
    if($woo_size_guides) {
      foreach($woo_size_guides as $woo_size_guide_key => $woo_size_guide) {
        $size_guides[$woo_size_guide_key] = $woo_size_guide['title'];
      }
    }
    
    $product_meta_layout_section = array(
      'name'   => 'general_section',
      'title'  => esc_html__('General', 'owly'),
      'icon'   => 'fa fa-angle-double-right',
      'fields' =>  array(
          array(
              'id'         => 'page-layout',
              'type'       => 'image_select',
              'title'      => esc_html__('Page Layout', 'owly'),
              'options'    => array(
                  'admin-option'       => OWLY_THEME_URI . '/cs-framework-override/images/admin-option.png',
                  'content-full-width' => OWLY_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
                  'with-left-sidebar'  => OWLY_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
                  'with-right-sidebar' => OWLY_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
              ),
              'default'    => 'admin-option',
              'attributes' => array( 'data-depend-id' => 'page-layout' )
          ),
          array(
              'id'         => 'show-standard-sidebar',
              'type'       => 'switcher',
              'title'      => esc_html__('Show Product Standard Sidebar', 'owly'),
              'dependency' => array( 'page-layout', 'any', 'with-left-sidebar,with-right-sidebar' )
          ),
          array(
              'id'         => 'product-widgetareas',
              'type'       => 'select',
              'title'      => esc_html__('Choose Custom Widget Area', 'owly'),
              'class'      => 'chosen',
              'options'    => owly_custom_widgets(),
              'dependency' => array( 'page-layout', 'any', 'with-left-sidebar,with-right-sidebar' ),
              'attributes' => array(
                  'multiple'         => 'multiple',
                  'data-placeholder' => esc_attr__('Select Widget Areas', 'owly'),
                  'style'            => 'width: 400px;'
              ),
          ),
  
          # Product Template
          array(
              'id'      => 'product-template',
              'type'    => 'select',
              'title'   => esc_html__('Product Template', 'owly'),
              'class'   => 'chosen',
              'options' => array(
                  'admin-option'    => esc_html__( 'Admin Option', 'owly' ),
                  'woo-default'     => esc_html__( 'WooCommerce Default', 'owly' ),
                  'custom-template' => esc_html__( 'Custom Template', 'owly' )
              ),
              'default'    => 'admin-option',
              'info'       => esc_html__('Don\'t use product shortcodes in content area when "WooCommerce Default" template is chosen.', 'owly')
          ),
                 
          array(
              'id'         => 'show-upsell',
              'type'       => 'select',
              'title'      => esc_html__('Show Upsell Products', 'owly'),
              'class'      => 'chosen',
              'default'    => 'admin-option',
              'attributes' => array( 'data-depend-id' => 'show-upsell' ),
              'options'    => array(
                  'admin-option' => esc_html__( 'Admin Option', 'owly' ),
                  'true'         => esc_html__( 'Show', 'owly'),
                  null           => esc_html__( 'Hide', 'owly'),
              ),
              'dependency' => array( 'product-template', '!=', 'custom-template')
          ),
          array(
              'id'         => 'upsell-column',
              'type'       => 'select',
              'title'      => esc_html__('Choose Upsell Column', 'owly'),
              'class'      => 'chosen',
              'default'    => 4,
              'options'    => array(
                  'admin-option' => esc_html__( 'Admin Option', 'owly' ),
                  1              => esc_html__( 'One Column', 'owly' ),
                  2              => esc_html__( 'Two Columns', 'owly' ),
                  3              => esc_html__( 'Three Columns', 'owly' ),
                  4              => esc_html__( 'Four Columns', 'owly' ),
              ),
              'dependency' => array( 'product-template|show-upsell', '!=|==', 'custom-template|true')
          ),
          array(
              'id'         => 'upsell-limit',
              'type'       => 'select',
              'title'      => esc_html__('Choose Upsell Limit', 'owly'),
              'class'      => 'chosen',
              'default'    => 4,
              'options'    => array(
                  'admin-option' => esc_html__( 'Admin Option', 'owly' ),
                  1              => esc_html__( 'One', 'owly' ),
                  2              => esc_html__( 'Two', 'owly' ),
                  3              => esc_html__( 'Three', 'owly' ),
                  4              => esc_html__( 'Four', 'owly' ),
                  5              => esc_html__( 'Five', 'owly' ),
                  6              => esc_html__( 'Six', 'owly' ),
                  7              => esc_html__( 'Seven', 'owly' ),
                  8              => esc_html__( 'Eight', 'owly' ),
                  9              => esc_html__( 'Nine', 'owly' ),
                  10              => esc_html__( 'Ten', 'owly' ),                                                
              ),
              'dependency' => array( 'product-template|show-upsell', '!=|==', 'custom-template|true')
          ),        
          array(
              'id'         => 'show-related',
              'type'       => 'select',
              'title'      => esc_html__('Show Related Products', 'owly'),
              'class'      => 'chosen',
              'default'    => 'admin-option',
              'attributes' => array( 'data-depend-id' => 'show-related' ),
              'options'    => array(
                  'admin-option' => esc_html__( 'Admin Option', 'owly' ),
                  'true'         => esc_html__( 'Show', 'owly'),
                  null           => esc_html__( 'Hide', 'owly'),
              ),
              'dependency' => array( 'product-template', '!=', 'custom-template')
          ),
          array(
              'id'         => 'related-column',
              'type'       => 'select',
              'title'      => esc_html__('Choose Related Column', 'owly'),
              'class'      => 'chosen',
              'default'    => 4,
              'options'    => array(
                  'admin-option' => esc_html__( 'Admin Option', 'owly' ),
                  2              => esc_html__( 'Two Columns', 'owly' ),
                  3              => esc_html__( 'Three Columns', 'owly' ),
                  4              => esc_html__( 'Four Columns', 'owly' ),
              ),
              'dependency' => array( 'product-template|show-related', '!=|==', 'custom-template|true')
          ),
          array(
              'id'         => 'related-limit',
              'type'       => 'select',
              'title'      => esc_html__('Choose Related Limit', 'owly'),
              'class'      => 'chosen',
              'default'    => 4,
              'options'    => array(
                  'admin-option' => esc_html__( 'Admin Option', 'owly' ),
                  1              => esc_html__( 'One', 'owly' ),
                  2              => esc_html__( 'Two', 'owly' ),
                  3              => esc_html__( 'Three', 'owly' ),
                  4              => esc_html__( 'Four', 'owly' ),
                  5              => esc_html__( 'Five', 'owly' ),
                  6              => esc_html__( 'Six', 'owly' ),
                  7              => esc_html__( 'Seven', 'owly' ),
                  8              => esc_html__( 'Eight', 'owly' ),
                  9              => esc_html__( 'Nine', 'owly' ),
                  10              => esc_html__( 'Ten', 'owly' ),                                                
              ),
              'dependency' => array( 'product-template|show-related', '!=|==', 'custom-template|true')
          ),
  
          # Product Additional Tabs
          array(
            'id'              => 'product-additional-tabs',
            'type'            => 'group',
            'title'           => esc_html__('Additional Tabs', 'owly'),
            'info'            => esc_html__('Click button to add title and description.', 'owly'),
            'button_title'    => esc_html__('Add New Tab', 'owly'),
            'accordion_title' => esc_html__('Adding New Tab Field', 'owly'),
            'fields'          => array(
              array(
              'id'          => 'tab_title',
              'type'        => 'text',
              'title'       => esc_html__('Title', 'owly'),
              ),
  
              array(
              'id'          => 'tab_description',
              'type'        => 'textarea',
              'title'       => esc_html__('Description', 'owly')
              ),
            )
          ),
  
          # Product New Label
           array(
              'id'         => 'product-new-label',
              'type'       => 'switcher',
              'title'      => esc_html__('Add "New" label', 'owly'),
          ), 
  
          array(
            'id'         => 'dt-single-product-size-guides',
            'type'       => 'select',
            'title'      => esc_html__('Product Size Guides', 'owly'),
            'options'    => $size_guides,
            //'info'       => esc_html__('Choose product size guide that defined in admin section.', 'owly')
          ),              
  
          array(
            'id'          => 'description',
            'type'        => 'textarea',
            'title'       => esc_html__('Description', 'owly'),
            'info'       => esc_html__('This content will be used in description tab, when "Custom Template" is chosen.', 'owly')
            ),
  
      )
    );
  
    $options[] = array(
      'id'        => '_custom_settings',
      'title'     => esc_html__('Product Settings','owly'),
      'post_type' => 'product',
      'context'   => 'normal',
      'priority'  => 'high',
      'sections'  => array(
        $product_meta_layout_section
      )
    );
  
    $options[] = array(
      'id'        => '_360viewer_gallery',
      'title'     => esc_html__('Product 360 View Gallery','owly'),
      'post_type' => 'product',
      'context'   => 'side',
      'priority'  => 'low',
      'sections'  => array(
                      array(
                      'name'   => '360view_section',
                      'fields' =>  array(
                                      array (
                                        'id'          => 'product-360view-gallery',
                                        'type'        => 'gallery',
                                        'title'       => esc_html__('Gallery Images', 'owly'),
                                        'desc'        => esc_html__('Simply add images to gallery items.', 'owly'),
                                        'add_title'   => esc_html__('Add Images', 'owly'),
                                        'edit_title'  => esc_html__('Edit Images', 'owly'),
                                        'clear_title' => esc_html__('Remove Images', 'owly'),
                                      )
                                  )
                      )
                    )
      );
  
  
  }
  
// -----------------------------------------
// Header And Footer Options Metabox
// -----------------------------------------
$post_types = apply_filters( 'owly_header_footer_default_cpt' , array ( 'post', 'page', 'product' )  );
$options[] = array(
	'id'	=> '_dt_custom_settings',
	'title'	=> esc_html__('Header & Footer','owly'),
	'post_type' => $post_types,
	'priority'  => 'high',
	'context'   => 'side', 
	'sections'  => array(
	
		# Header Settings
		array(
			'name'  => 'header_section',
			'title' => esc_html__('Header', 'owly'),
			'icon'  => 'fa fa-angle-double-right',
			'fields' =>  array(
			
				# Header Show / Hide
				array(
					'id'		=> 'show-header',
					'type'		=> 'switcher',
					'title'		=> esc_html__('Show Header', 'owly'),
					'default'	=>  true,
				),
				
				# Header
				array(
					'id'  		 => 'header',
					'type'  	 => 'select',
					'title' 	 => esc_html__('Choose Header', 'owly'),
					'class'		 => 'chosen',
					'options'	 => 'posts',
					'query_args' => array(
						'post_type'	 => 'dt_headers',
						'orderby'	 => 'ID',
						'order'		 => 'ASC',
						'posts_per_page' => -1,
					),
					'default_option' => esc_attr__('Select Header', 'owly'),
					'attributes' => array( 'style'	=> 'width:50%' ),
					'info'		 => esc_html__('Select custom header for this page.','owly'),
					'dependency'	=> array( 'show-header', '==', 'true' )
				),							
			)			
		),
		# Header Settings

		# Footer Settings
		array(
			'name'  => 'footer_settings',
			'title' => esc_html__('Footer', 'owly'),
			'icon'  => 'fa fa-angle-double-right',
			'fields' =>  array(
			
				# Footer Show / Hide
				array(
					'id'		=> 'show-footer',
					'type'		=> 'switcher',
					'title'		=> esc_html__('Show Footer', 'owly'),
					'default'	=>  true,
				),
				
				# Footer
		        array(
					'id'         => 'footer',
					'type'       => 'select',
					'title'      => esc_html__('Choose Footer', 'owly'),
					'class'      => 'chosen',
					'options'    => 'posts',
					'query_args' => array(
						'post_type'  => 'dt_footers',
						'orderby'    => 'ID',
						'order'      => 'ASC',
						'posts_per_page' => -1,
					),
					'default_option' => esc_attr__('Select Footer', 'owly'),
					'attributes' => array( 'style'  => 'width:50%' ),
					'info'       => esc_html__('Select custom footer for this page.','owly'),
					'dependency'    => array( 'show-footer', '==', 'true' )
				),			
			)			
		),
		# Footer Settings
		
	)	
);
	
CSFramework_Metabox::instance( $options );