<?php
/**
 * nadezhda_v2 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nadezhda_v2
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'nadezhda_v2_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function nadezhda_v2_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on nadezhda_v2, use a find and replace
		 * to change 'nadezhda_v2' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nadezhda_v2', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'nadezhda_v2' ),
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
				'nadezhda_v2_custom_background_args',
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
add_action( 'after_setup_theme', 'nadezhda_v2_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nadezhda_v2_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nadezhda_v2_content_width', 640 );
}
add_action( 'after_setup_theme', 'nadezhda_v2_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nadezhda_v2_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'nadezhda_v2' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'nadezhda_v2' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'nadezhda_v2_widgets_init' );

function theme_slug_filter_wp_title( $title ) {
	if ( is_404() ) {
	   $title = 'Упс, страничка не найдена';
	}
   return $title;
}

/**
 * Enqueue scripts and styles.
 */
function nadezhda_v2_scripts() {
	#Подключаю шрифты
	wp_enqueue_style( 'Rubik+Mono+One', 'https://fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap' );
	wp_enqueue_style( 'Rubik', 'https://fonts.googleapis.com/css2?family=Rubik+Mono+One&family=Rubik:wght@300&display=swap' );
	wp_enqueue_style( 'Rubik One', '"http://fonts.cdnfonts.com/css/rubik-one' );

	wp_enqueue_style( 'nadezhda_v2-style', get_stylesheet_uri() );
	wp_enqueue_style( 'tether', get_template_directory_uri(). '/assets/tether/tether.min.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/assets/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri(). '/assets/bootstrap/css/bootstrap-grid.min.css' );
	wp_enqueue_style( 'bootstrap-reboot', get_template_directory_uri(). '/assets/bootstrap/css/bootstrap-reboot.min.css');
	wp_enqueue_style( 'slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
	wp_enqueue_style( 'slick-carousel-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');
	wp_enqueue_style( 'animatecss', get_template_directory_uri(). '/assets/animatecss/animate.css' );
	wp_enqueue_style( 'socicon', get_template_directory_uri(). '/assets/socicon/css/styles.css' );
	wp_enqueue_style( 'basic', get_template_directory_uri(). '/assets/theme/css/style.css' );
	wp_enqueue_style( 'title', get_template_directory_uri(). '/assets/theme/css/title.css' );
	wp_enqueue_style( 'header', get_template_directory_uri(). '/css/header/style.css' );
	wp_enqueue_style( 'header1', get_template_directory_uri(). '/css/header.css' );
	wp_enqueue_style( 'main-page', get_template_directory_uri(). '/css/main-page.css' );
	wp_enqueue_style( 'contacts', get_template_directory_uri(). '/css/contacts.css' );
	wp_enqueue_style( 'nurse', get_template_directory_uri(). '/css/nurse.css' );
	wp_enqueue_style( 'docs', get_template_directory_uri(). '/css/docs.css' );
	wp_enqueue_style( 'donater', get_template_directory_uri(). '/css/donater.css' );
	wp_enqueue_style( 'fundraising', get_template_directory_uri(). '/css/fundraising.css' );
	wp_enqueue_style( 'news-list', get_template_directory_uri(). '/css/news-list.css' );
	wp_enqueue_style( 'personal', get_template_directory_uri(). '/css/personal.css' );
	wp_enqueue_style( '404', get_template_directory_uri(). '/css/404.css' );
	wp_enqueue_style( 'fundraising-all', get_template_directory_uri(). '/css/fundraising-all.css' );
	wp_enqueue_style( 'news-single', get_template_directory_uri(). '/css/style.css' );
	wp_enqueue_style( 'navigation-top', get_template_directory_uri(). '/css/navigation-top/style.css' );
	wp_enqueue_style( 'navigation-adaptive', get_template_directory_uri(). '/css/navigation-top/menuAdap.css' );
	wp_enqueue_style( 'navigation-top-media', get_template_directory_uri(). '/css/navigation-top/media.css' );
	wp_enqueue_style( 'warning-block', get_template_directory_uri(). '/css/warning-block.css' );
	wp_enqueue_style( 'faq', '/wp-content/themes/twentyseventeen-child/faq.css' );
	
	wp_enqueue_style( 'mbr-additional', get_template_directory_uri(). '/assets/mobirise/css/mbr-additional.css' );
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
	wp_style_add_data( 'nadezhda_v2-style', 'rtl', 'replace' );

	wp_enqueue_script( 'nadezhda_v2-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array(), _S_VERSION, false );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/web/assets/jquery/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'tether', get_template_directory_uri() . '/assets/tether/tether.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/assets/smoothscroll/smooth-scroll.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'viewportchecker', get_template_directory_uri() . '/assets/viewportchecker/jquery.viewportchecker.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/parallax/jarallax.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'touchswipe', get_template_directory_uri() . '/assets/touchswipe/jquery.touch-swipe.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'nadezhda_v2-navigation', get_template_directory_uri() . '/assets/theme/js/script.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'parallax', 'https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'basicScroll', 'https://s.electerious.com/basicScroll/dist/basicScroll.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jquery-2.1.3', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jquery-Slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nadezhda_v2_scripts' );

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
require get_template_directory() . '/inc/bs4navwalker2.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
remove_filter( 'the_content', 'wpautop' );

remove_filter( 'the_excerpt', 'wpautop' );

add_filter( 'wp_title', 'theme_slug_filter_wp_title' );

add_image_size( 'trueslider', 640, 480, true );
