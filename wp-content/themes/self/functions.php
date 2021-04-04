<?php
/**
 * self functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package self
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'self_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function self_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on self, use a find and replace
		 * to change 'self' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'self', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'self' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'self_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'self_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function self_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'self_content_width', 640 );
}
add_action( 'after_setup_theme', 'self_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function self_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'self' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'self' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'self_widgets_init' );

function message_column1() {
	register_sidebar(
		array(
			'name'          => 'Mensaje footer',
			'id'            => 'footer_message',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'message_column1' );

function office_column1() {
	register_sidebar(
		array(
			'name'          => 'Oficina footer',
			'id'            => 'footer_office',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'office_column1' );

function phone_column1() {
	register_sidebar(
		array(
			'name'          => 'Contacto telefónico footer',
			'id'            => 'footer_cellphone',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'phone_column1' );

function email_column1() {
	register_sidebar(
		array(
			'name'          => 'Email footer',
			'id'            => 'email_cellphone',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'email_column1' );

/**
 * Enqueue scripts and styles.
 */
function self_scripts() {
	wp_enqueue_style( 'self-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i');
	wp_enqueue_style('style-bootstrap', get_theme_file_uri('css/bootstrap.css'));
	wp_enqueue_style('style-main', get_theme_file_uri('css/main.css'));
	wp_enqueue_style('swiper_bundle', get_theme_file_uri('css/swiper.css'));
	wp_enqueue_style('style-animate', get_theme_file_uri('css/magnific-popup.css'));
	wp_enqueue_style('style-magnific-popup', get_theme_file_uri('css/animate.css'));
	wp_enqueue_style('style-dark', get_theme_file_uri('css/dark.css'));
	wp_enqueue_style('style-icons', get_theme_file_uri('css/font-icons.css'));
	
	wp_enqueue_style('style-responsive', get_theme_file_uri('css/responsive.css'));
	
	wp_style_add_data( 'self-style', 'rtl', 'replace' );

	wp_enqueue_script( 'self-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script('script_jquery', '//code.jquery.com/jquery-3.6.0.min.js');
	wp_enqueue_script('plugins-js', get_theme_file_uri('js/plugins.js'), array(), '1.0', true);
	wp_enqueue_script('functions-js', get_theme_file_uri('js/functions.js'), array(), '1.0', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'self_scripts' );

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