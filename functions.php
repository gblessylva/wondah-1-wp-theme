<?php
/**
 * Wondah functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wondah
 */

if ( ! function_exists( 'wondah_setup' ) ) :

	function wondah_setup() {
		
		load_theme_textdomain( 'wondah', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		
		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'wondah' ),
		) );

		
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'wondah_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		add_theme_support("post-formats", array('aside', 'image', 'video', 'link', 'gallery', 'audio'));

	}
endif;
add_action( 'after_setup_theme', 'wondah_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wondah_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'wondah_content_width', 640 );
}
add_action( 'after_setup_theme', 'wondah_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wondah_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wondah' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wondah' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );



	    // First footer widget area, located in the footer. Empty by default.
		register_sidebar( array(
			'name' => __( 'First Footer Widget Area', 'wondah' ),
			'id' => 'first-footer-widget-area',
			'description' => __( 'The first footer widget area', 'wondah' ),
			'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
	 
		// Second Footer Widget Area, located in the footer. Empty by default.
		register_sidebar( array(
			'name' => __( 'Second Footer Widget Area', 'wondah' ),
			'id' => 'second-footer-widget-area',
			'description' => __( 'The second footer widget area', 'wondah' ),
			'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
	 
		// Third Footer Widget Area, located in the footer. Empty by default.
		register_sidebar( array(
			'name' => __( 'Third Footer Widget Area', 'wondah' ),
			'id' => 'third-footer-widget-area',
			'description' => __( 'The third footer widget area', 'wondah' ),
			'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
	 
		// Fourth Footer Widget Area, located in the footer. Empty by default.
		register_sidebar( array(
			'name' => __( 'Fourth Footer Widget Area', 'wondah' ),
			'id' => 'fourth-footer-widget-area',
			'description' => __( 'The fourth footer widget area', 'wondah' ),
			'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
			 
	}

add_action( 'widgets_init', 'wondah_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wondah_scripts() {
	wp_enqueue_style( 'wondah-style', get_stylesheet_uri() );

	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/wondah-custom-style.css', array(), '2.3.2', 'all');

	wp_enqueue_script( 'wondah-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'wondah-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wondah_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

