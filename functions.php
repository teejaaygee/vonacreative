<?php
/**
 * Vona Creative functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Vona_Creative
 */

if ( ! function_exists( 'vonacreative_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function vonacreative_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Vona Creative, use a find and replace
	 * to change 'vonacreative' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'vonacreative', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 300, 300, true );
	add_image_size( 'vonasquare', 512, 512, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'vonacreative' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'vonacreative_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'vonacreative_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vonacreative_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vonacreative_content_width', 640 );
}
add_action( 'after_setup_theme', 'vonacreative_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vonacreative_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'vonacreative' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'vonacreative' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'vonacreative_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vonacreative_scripts() {




//STYLES

	// GOOGLE FONTS 
	wp_enqueue_style('vonacreative-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300|Poppins: 400,600');

	wp_enqueue_style( 'vonacreative-style', get_stylesheet_uri() );

	wp_enqueue_style('animate.css', get_template_directory_uri() . '/css/animate.css');

	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css');

//SCRIPTS

	wp_enqueue_script( 'vonacreative-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'vonacreative-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    wp_enqueue_script('masonry');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vonacreative_scripts', 'enqueue_masonry_script' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


// MASONRY

if (! function_exists('slug_scripts_masonry') ) :
if ( ! is_admin() ) :
function slug_scripts_masonry() {
    wp_enqueue_script('masonry');
    wp_enqueue_style('masonry’, get_template_directory_uri().'/css/’);
}
add_action( 'wp_enqueue_scripts', 'slug_scripts_masonry' );
endif; //! is_admin()
endif; //! slug_scripts_masonry exists