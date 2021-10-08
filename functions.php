<?php
/**
 * Theme Functions
 *
 * @package DTtheme
 * @author DesignThemes
 * @link http://wedesignthemes.com
 */
define( 'OWLY_THEME_DIR', get_template_directory() );
define( 'OWLY_THEME_URI', get_template_directory_uri() );

if (function_exists ('wp_get_theme')) :
	$themeData = wp_get_theme();
	define( 'OWLY_THEME_NAME', $themeData->get('Name'));
	define( 'OWLY_THEME_VERSION', $themeData->get('Version'));
endif;

/* ---------------------------------------------------------------------------
 * Loads Kirki
 * ---------------------------------------------------------------------------*/
require_once( OWLY_THEME_DIR .'/kirki/index.php' );

/* ---------------------------------------------------------------------------
 * Loads Codestar
 * ---------------------------------------------------------------------------*/
if( !defined( 'CS_OPTION' ) ) {
	define( 'CS_OPTION', '_owly_cs_options' );
}

require_once OWLY_THEME_DIR .'/cs-framework/cs-framework.php';

if( !defined( 'CS_ACTIVE_TAXONOMY' ) ) { 
	define( 'CS_ACTIVE_TAXONOMY',   false );
}

if( !defined( 'CS_ACTIVE_SHORTCODE' ) ) {
	define( 'CS_ACTIVE_SHORTCODE',  false );
}
if( !defined( 'CS_ACTIVE_CUSTOMIZE' ) ) {
	define( 'CS_ACTIVE_CUSTOMIZE',  false );
}

/* ---------------------------------------------------------------------------
 * Create function to get theme options
 * --------------------------------------------------------------------------- */
function owly_cs_get_option($key, $value = '') {

	$v = cs_get_option( $key );

	if ( !empty( $v ) ) {
		return $v;
	} else {
		return $value;
	}
}

/* ---------------------------------------------------------------------------
 * Loads Theme Textdomain
 * ---------------------------------------------------------------------------*/ 
define( 'OWLY_LANG_DIR', OWLY_THEME_DIR. '/languages' );
load_theme_textdomain( 'owly', OWLY_LANG_DIR );

/* ---------------------------------------------------------------------------
 * Loads the Admin Panel Style
 * ---------------------------------------------------------------------------*/
function owly_admin_scripts() {
	wp_enqueue_style('owly-admin', OWLY_THEME_URI .'/cs-framework-override/style.css');
}
add_action( 'admin_enqueue_scripts', 'owly_admin_scripts' );

/* ---------------------------------------------------------------------------
 * Loads Theme Functions
 * ---------------------------------------------------------------------------*/

// Functions --------------------------------------------------------------------
require_once( OWLY_THEME_DIR .'/framework/register-functions.php' );

// Header -----------------------------------------------------------------------
require_once( OWLY_THEME_DIR .'/framework/register-head.php' );

// Hooks ------------------------------------------------------------------------
require_once( OWLY_THEME_DIR .'/framework/register-hooks.php' );

// Post Functions ---------------------------------------------------------------
require_once( OWLY_THEME_DIR .'/framework/register-post-functions.php' );
new owly_post_functions;

// Widgets ----------------------------------------------------------------------
add_action( 'widgets_init', 'owly_widgets_init' );
function owly_widgets_init() {
	require_once( OWLY_THEME_DIR .'/framework/register-widgets.php' );
}

// Plugins ---------------------------------------------------------------------- 
require_once( OWLY_THEME_DIR .'/framework/register-plugins.php' );

// WooCommerce ------------------------------------------------------------------
if( function_exists( 'is_woocommerce' ) ){
	require_once( OWLY_THEME_DIR .'/framework/woocommerce/register-woocommerce.php' );
}

// WP Store Locator -------------------------------------------------------------
if( owly_plugin_is_active( 'wp-store-locator/wp-store-locator.php' ) ){
	require_once( OWLY_THEME_DIR .'/framework/register-storelocator.php' );
}

// Register Templates -----------------------------------------------------------
require_once( OWLY_THEME_DIR .'/framework/register-templates.php' );

// Register Gutenberg -----------------------------------------------------------
require_once( OWLY_THEME_DIR .'/framework/register-gutenberg-editor.php' );