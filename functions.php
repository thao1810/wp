<?php
/**
 * thao functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package thao
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'thao_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function thao_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on thao, use a find and replace
		 * to change 'thao' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'thao', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'thao' ),
			)
		);

		register_nav_menus(
			array(
				'menu-2' => esc_html__( 'Footer-menu', 'thao' ),
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
				'thao_custom_background_args',
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
add_action( 'after_setup_theme', 'thao_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function thao_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'thao_content_width', 640 );
}
add_action( 'after_setup_theme', 'thao_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function thao_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'thao' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'thao' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'thao_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function thao_scripts() {
	wp_enqueue_style( 'thao-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'thao-style', 'rtl', 'replace' );

	wp_enqueue_script( 'thao-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'thao_scripts' );

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
function thao_styles() {
    /*
     * Hàm get_stylesheet_uri() sẽ trả về giá trị dẫn đến file style.css của theme
     * Nếu sử dụng child theme, thì file style.css này vẫn load ra từ theme mẹ
     */
	//css
	// wp_register_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', 'all' );
    // wp_enqueue_style( 'bootstrap' );

	wp_register_style( 'main-style2', get_template_directory_uri() . '/assets/css/slick.css', 'all' );
    wp_enqueue_style( 'main-style2' );

	wp_register_style( 'main-style1', get_template_directory_uri() . '/assets/css/fontawesome.min.css', 'all' );
    wp_enqueue_style( 'main-style1' );
	
    wp_register_style( 'main-style', get_template_directory_uri() . '/assets/scss/styles.css', 'all' );
    wp_enqueue_style( 'main-style' );
	

	//js
	// wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );
    // wp_enqueue_script( 'bootstrap-js' );

	wp_register_script( 'custom4-style', 'https://code.jquery.com/jquery-3.3.1.slim.min.js' );
    wp_enqueue_script( 'custom4-style' );
	wp_register_script( 'custom5-style', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' );
    wp_enqueue_script( 'custom5-style' );
	wp_register_script( 'custom1-style', get_template_directory_uri() . '/assets/js/js/jquery-3.6.0.min.js' );
    wp_enqueue_script( 'custom1-style' );
	wp_register_script( 'custom7-style', get_template_directory_uri() . '/assets/js/js/slick.min.js' );
    wp_enqueue_script( 'custom7-style' );
	wp_register_script( 'custom3-style', get_template_directory_uri() . '/assets/js/js/owl.carousel.min.js');
    wp_enqueue_script( 'custom3-style' );
	wp_register_script( 'custom-style', get_template_directory_uri() . '/assets/js/js/script.js');
    wp_enqueue_script( 'custom-style' );



  }	
  add_action( 'wp_enqueue_scripts', 'thao_styles' );


  if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Banner Settings',
		'menu_title'	=> 'Banner',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'About Us Settings',
		'menu_title'	=> 'About Us',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Banner content Settings',
		'menu_title'	=> 'Banner content',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Home page Settings',
		'menu_title'	=> 'Home page Settings',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

/// advanced search functionality
function advanced_search_query($query) {


    if($query->is_search()) {
        if (isset($_GET['s_cat']) && $_GET['s_cat'] != 0) {

            $query->set('tax_query', array(array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => array($_GET['s_cat']) )
            ));
        }

        return $query;
    }
	// $defaults['selected'] = ( is_category() ) ? get_query_var( 'cat' ) : 15;
}

// add_filter( 'woocommerce_single_product_carousel_options', 'cuswoo_update_woo_flexslider_options' );
// /** 
//  * Filer WooCommerce Flexslider options - Add Navigation Arrows
//  */
// function cuswoo_update_woo_flexslider_options( $options ) {

//     $options['directionNav'] = true;

//     return $options;
// }

add_action( 'after_setup_theme', 'enable_woocommerce_support' );

function enable_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

function yourtheme_setup() {
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'yourtheme_setup' );



//Khởi tạo function cho shortcode
function create_shortcode() {
        echo "Hello World!";
}
//Tạo shortcode tên là [test_shortcode] và sẽ thực thi code từ function create_shortcode
add_shortcode( 'test_shortcode', 'create_shortcode' );