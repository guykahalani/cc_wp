<?php
/**
 * corporate-cringe functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package corporate-cringe
 */

if ( ! function_exists( 'corporate_cringe_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function corporate_cringe_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on corporate-cringe, use a find and replace
		 * to change 'corporate-cringe' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'corporate-cringe', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'main_menu' => esc_html__( 'Primary', 'corporate-cringe' ),
			'footer_menu' => esc_html__( 'Footer', 'corporate-cringe' ),
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
		add_theme_support( 'custom-background', apply_filters( 'corporate_cringe_custom_background_args', array(
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
	}
endif;
add_action( 'after_setup_theme', 'corporate_cringe_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function corporate_cringe_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'corporate_cringe_content_width', 640 );
}
add_action( 'after_setup_theme', 'corporate_cringe_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function corporate_cringe_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'corporate-cringe' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'corporate-cringe' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Footer Address', 'corporate-cringe' ),
		'id' => 'footer-address',
		'class' => 'description',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Footer Links', 'corporate-cringe' ),
		'id' => 'footer-links',
		'class' => 'links',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Footer Socials', 'corporate-cringe' ),
		'id' => 'footer-socials',
		'class' => 'socials',
	) );
}
add_action( 'widgets_init', 'corporate_cringe_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function corporate_cringe_scripts() {
	

	wp_enqueue_script( 'corporate-cringe-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'corporate-cringe-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_register_style( 'swiper', 'https://unpkg.com/swiper/css/swiper.min.css', array(), 1, 'all');
	wp_register_style( 'font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), 1, 'all');
	wp_register_style( 'custom', get_template_directory_uri() . '/custom.css', array(), 10, 'all');
	wp_enqueue_style('swiper');
	wp_enqueue_style('font-awesome');
	wp_enqueue_style( 'corporate-cringe-style', get_stylesheet_uri(), array(), 1, 'all' );
	wp_enqueue_style('custom');

	
	wp_register_script('swiper', 'https://unpkg.com/swiper/js/swiper.min.js', array(), 1, true);
	wp_register_script('init-swiper', get_template_directory_uri().'/js/initSwiper.js', array(), 1, true);
	wp_enqueue_script('swiper');
	wp_enqueue_script('init-swiper');
}
add_action( 'wp_enqueue_scripts', 'corporate_cringe_scripts' );

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

