<?php
function owly_kirki_config() {
	return 'owly_kirki_config';
}

function owly_defaults( $key = '' ) {
	$defaults = array();

	# site identify
	$defaults['use-custom-logo'] = '1';
	$defaults['custom-logo'] = OWLY_THEME_URI.'/images/logo.png';
	$defaults['custom-light-logo'] = OWLY_THEME_URI.'/images/light-logo.png';
	$defaults['site_icon'] = OWLY_THEME_URI.'/images/favicon.ico';

	# site layout
	$defaults['site-layout'] = 'wide';
	$defaults['body-bg-color']      = '#ffffff';
	$defaults['body-content-color'] = '#000000';
	$defaults['body-a-color']       = '#eab317';
	$defaults['body-a-hover-color'] = '#fcd21c';

	# site skin
	$defaults['primary-color'] = '#fcd21c';
	$defaults['secondary-color'] = '#090909';
	$defaults['tertiary-color'] = '#eab317';
	$defaults['custom-title-color'] = '#ffffff';

	# site breadcrumb
	$defaults['customize-breadcrumb-title-typo'] = '1';
	$defaults['breadcrumb-title-typo'] = array( 'font-family'    => 'Poppins',
		'variant'        => '800',
		'subsets'        => array( 'latin-ext' ),
		'font-size'      => '34px',
		'line-height'    => '60px',
		'letter-spacing' => '0.5px',
		'color'          => '#ffffff',
		'text-align'     => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-breadcrumb-typo'] = '1';
	$defaults['breadcrumb-typo'] = array(
		'font-family'    => 'Poppins',
		'variant'        => '800',
		'subsets'        => array( 'latin-ext' ),
		'font-size'      => '24px',
		'line-height'    => '',
		'letter-spacing' => '0px',
		'color'          => '#ffffff',
		'text-align'     => 'unset',
		'text-transform' => 'none'
	);

	$defaults['customize-body-content-typo'] = '1';
	$defaults['body-content-typo'] = array(
		'font-family' => 'Source Sans Pro',
		'variant' => '600',
		'font-size' => '20px',
		'line-height' => '32px',
		'letter-spacing' => '',
		'color' => '#000000',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);

	# site typography
	$defaults['customize-body-h1-typo'] = '1';
	$defaults['h1'] = array(
		'font-family' => 'Poppins',
		'variant' => '700',
		'font-size' => '44px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#090909',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h2-typo'] = '1';
	$defaults['h2'] = array(
		'font-family' => 'Poppins',
		'variant' => '700',
		'font-size' => '40px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#090909',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h3-typo'] = '1';
	$defaults['h3'] = array(
		'font-family' => 'Poppins',
		'variant' => '700',
		'font-size' => '34px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#090909',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h4-typo'] = '1';
	$defaults['h4'] = array(
		'font-family' => 'Poppins',
		'variant' => '700',
		'font-size' => '30px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h5-typo'] = '1';
	$defaults['h5'] = array(
		'font-family' => 'Poppins',
		'variant' => '700',
		'font-size' => '24px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#090909',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h6-typo'] = '1';
	$defaults['h6'] = array(
		'font-family' => 'Poppins',
		'variant' => '500',
		'font-size' => '20px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#090909',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);		

	# site footer
	$defaults['customize-footer-title-typo'] = '1';
	$defaults['footer-title-typo'] = array( 'font-family' => 'Poppins',
		'variant' => 'regular',
		'subsets' => array( 'latin-ext' ),
		'font-size' => '24px',
		'line-height' => '34px',
		'letter-spacing' => '0.5px',
		'color' => '#2b2b2b',
		'text-align' => 'left',
		'text-transform' => 'none' );
	$defaults['customize-footer-content-typo'] = '1';
	$defaults['footer-content-typo'] = array( 'font-family' => 'Source Sans Pro',
		'variant' => '600',
		'subsets' => array( 'latin-ext' ),
		'font-size' => '20px',
		'line-height' => '34px',
		'letter-spacing' => '0px',
		'color' => '#090909',
		'text-align' => 'left',
		'text-transform' => 'none' );

	$defaults['footer-content-a-color'] = '#090909';
	$defaults['footer-content-a-hover-color'] = '#eab317';

	if( !empty( $key ) && array_key_exists( $key, $defaults) ) {
		return $defaults[$key];
	}

	return '';
}

function owly_image_positions() {

	$positions = array( "top left" => esc_attr__('Top Left','owly'),
		"top center"    => esc_attr__('Top Center','owly'),
		"top right"     => esc_attr__('Top Right','owly'),
		"center left"   => esc_attr__('Center Left','owly'),
		"center center" => esc_attr__('Center Center','owly'),
		"center right"  => esc_attr__('Center Right','owly'),
		"bottom left"   => esc_attr__('Bottom Left','owly'),
		"bottom center" => esc_attr__('Bottom Center','owly'),
		"bottom right"  => esc_attr__('Bottom Right','owly'),
	);

	return $positions;
}

function owly_image_repeats() {

	$image_repeats = array( "repeat" => esc_attr__('Repeat','owly'),
		"repeat-x"  => esc_attr__('Repeat in X-axis','owly'),
		"repeat-y"  => esc_attr__('Repeat in Y-axis','owly'),
		"no-repeat" => esc_attr__('No Repeat','owly')
	);

	return $image_repeats;
}

function owly_border_styles() {

	$image_repeats = array(
		"none"	 => esc_attr__('None','owly'),
		"dotted" => esc_attr__('Dotted','owly'),
		"dashed" => esc_attr__('Dashed','owly'),
		"solid"	 => esc_attr__('Solid','owly'),
		"double" => esc_attr__('Double','owly'),
		"groove" => esc_attr__('Groove','owly'),
		"ridge"	 => esc_attr__('Ridge','owly'),
	);

	return $image_repeats;
}

function owly_animations() {

	$animations = array(
		'' 					 => esc_html__('Default','owly'),	
		"bigEntrance"        =>  esc_attr__("bigEntrance",'owly'),
        "bounce"             =>  esc_attr__("bounce",'owly'),
        "bounceIn"           =>  esc_attr__("bounceIn",'owly'),
        "bounceInDown"       =>  esc_attr__("bounceInDown",'owly'),
        "bounceInLeft"       =>  esc_attr__("bounceInLeft",'owly'),
        "bounceInRight"      =>  esc_attr__("bounceInRight",'owly'),
        "bounceInUp"         =>  esc_attr__("bounceInUp",'owly'),
        "bounceOut"          =>  esc_attr__("bounceOut",'owly'),
        "bounceOutDown"      =>  esc_attr__("bounceOutDown",'owly'),
        "bounceOutLeft"      =>  esc_attr__("bounceOutLeft",'owly'),
        "bounceOutRight"     =>  esc_attr__("bounceOutRight",'owly'),
        "bounceOutUp"        =>  esc_attr__("bounceOutUp",'owly'),
        "expandOpen"         =>  esc_attr__("expandOpen",'owly'),
        "expandUp"           =>  esc_attr__("expandUp",'owly'),
        "fadeIn"             =>  esc_attr__("fadeIn",'owly'),
        "fadeInDown"         =>  esc_attr__("fadeInDown",'owly'),
        "fadeInDownBig"      =>  esc_attr__("fadeInDownBig",'owly'),
        "fadeInLeft"         =>  esc_attr__("fadeInLeft",'owly'),
        "fadeInLeftBig"      =>  esc_attr__("fadeInLeftBig",'owly'),
        "fadeInRight"        =>  esc_attr__("fadeInRight",'owly'),
        "fadeInRightBig"     =>  esc_attr__("fadeInRightBig",'owly'),
        "fadeInUp"           =>  esc_attr__("fadeInUp",'owly'),
        "fadeInUpBig"        =>  esc_attr__("fadeInUpBig",'owly'),
        "fadeOut"            =>  esc_attr__("fadeOut",'owly'),
        "fadeOutDownBig"     =>  esc_attr__("fadeOutDownBig",'owly'),
        "fadeOutLeft"        =>  esc_attr__("fadeOutLeft",'owly'),
        "fadeOutLeftBig"     =>  esc_attr__("fadeOutLeftBig",'owly'),
        "fadeOutRight"       =>  esc_attr__("fadeOutRight",'owly'),
        "fadeOutUp"          =>  esc_attr__("fadeOutUp",'owly'),
        "fadeOutUpBig"       =>  esc_attr__("fadeOutUpBig",'owly'),
        "flash"              =>  esc_attr__("flash",'owly'),
        "flip"               =>  esc_attr__("flip",'owly'),
        "flipInX"            =>  esc_attr__("flipInX",'owly'),
        "flipInY"            =>  esc_attr__("flipInY",'owly'),
        "flipOutX"           =>  esc_attr__("flipOutX",'owly'),
        "flipOutY"           =>  esc_attr__("flipOutY",'owly'),
        "floating"           =>  esc_attr__("floating",'owly'),
        "hatch"              =>  esc_attr__("hatch",'owly'),
        "hinge"              =>  esc_attr__("hinge",'owly'),
        "lightSpeedIn"       =>  esc_attr__("lightSpeedIn",'owly'),
        "lightSpeedOut"      =>  esc_attr__("lightSpeedOut",'owly'),
        "pullDown"           =>  esc_attr__("pullDown",'owly'),
        "pullUp"             =>  esc_attr__("pullUp",'owly'),
        "pulse"              =>  esc_attr__("pulse",'owly'),
        "rollIn"             =>  esc_attr__("rollIn",'owly'),
        "rollOut"            =>  esc_attr__("rollOut",'owly'),
        "rotateIn"           =>  esc_attr__("rotateIn",'owly'),
        "rotateInDownLeft"   =>  esc_attr__("rotateInDownLeft",'owly'),
        "rotateInDownRight"  =>  esc_attr__("rotateInDownRight",'owly'),
        "rotateInUpLeft"     =>  esc_attr__("rotateInUpLeft",'owly'),
        "rotateInUpRight"    =>  esc_attr__("rotateInUpRight",'owly'),
        "rotateOut"          =>  esc_attr__("rotateOut",'owly'),
        "rotateOutDownRight" =>  esc_attr__("rotateOutDownRight",'owly'),
        "rotateOutUpLeft"    =>  esc_attr__("rotateOutUpLeft",'owly'),
        "rotateOutUpRight"   =>  esc_attr__("rotateOutUpRight",'owly'),
        "shake"              =>  esc_attr__("shake",'owly'),
        "slideDown"          =>  esc_attr__("slideDown",'owly'),
        "slideExpandUp"      =>  esc_attr__("slideExpandUp",'owly'),
        "slideLeft"          =>  esc_attr__("slideLeft",'owly'),
        "slideRight"         =>  esc_attr__("slideRight",'owly'),
        "slideUp"            =>  esc_attr__("slideUp",'owly'),
        "stretchLeft"        =>  esc_attr__("stretchLeft",'owly'),
        "stretchRight"       =>  esc_attr__("stretchRight",'owly'),
        "swing"              =>  esc_attr__("swing",'owly'),
        "tada"               =>  esc_attr__("tada",'owly'),
        "tossing"            =>  esc_attr__("tossing",'owly'),
        "wobble"             =>  esc_attr__("wobble",'owly'),
        "fadeOutDown"        =>  esc_attr__("fadeOutDown",'owly'),
        "fadeOutRightBig"    =>  esc_attr__("fadeOutRightBig",'owly'),
        "rotateOutDownLeft"  =>  esc_attr__("rotateOutDownLeft",'owly')
    );

	return $animations;
}

function owly_custom_fonts( $standard_fonts ){

	$custom_fonts = array();

	$fonts = cs_get_option('custom_font_fields');
	if( count( $fonts ) > 0 ):
		foreach( $fonts as $font ):
			$custom_fonts[$font['custom_font_name']] = array(
				'label' => $font['custom_font_name'],
				'variants' => array( '100', '100italic', '200', '200italic', '300', '300italic', 'regular', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic', '900', '900italic' ),
				'stack' => $font['custom_font_name'] . ', sans-serif'
			);
		endforeach;
	endif;

	return array_merge_recursive( $custom_fonts, $standard_fonts );
}
add_filter( 'kirki/fonts/standard_fonts', 'owly_custom_fonts', 20 );