<?php
/**
 * Graphic agency functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Graphic_agency
 */
require( 'not-plugins/include.php' );
define( 'ACF_LITE', true );
if ( ! function_exists( 'graphic_agency_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function graphic_agency_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Graphic agency, use a find and replace
		 * to change 'graphic-agency' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'graphic-agency', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'graphic-agency' ),
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
		add_theme_support( 'custom-background', apply_filters( 'graphic_agency_custom_background_args', array(
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
add_action( 'after_setup_theme', 'graphic_agency_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function graphic_agency_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'graphic_agency_content_width', 640 );
}
add_action( 'after_setup_theme', 'graphic_agency_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function graphic_agency_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'graphic-agency' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'graphic-agency' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'graphic_agency_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function graphic_agency_scripts() {
	wp_enqueue_style( 'graphic-agency-style', get_stylesheet_uri() );

	wp_enqueue_script( 'graphic-agency-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'graphic-agency-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'graphic_agency_scripts' );

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

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


function custom_excerpt_length( $length ) {
        return 30;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function wpdocs_excerpt_more( $more ) {
    return '  <a href="'.get_the_permalink().'" rel="nofollow">Read More...</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Home page left Sidebar', 'theme-slug' ),
        'id' => 'sidebar-11',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div class="widget widget_text">',
	'after_widget'  => '</div>',
	'before_title'  => '<div class="textwidget">',
	'after_title'   => '</div>',
    ) );
}


// register custom post type 'my_custom_post_type'
add_action( 'init', 'create_my_post_type' );
function create_my_post_type() {
    register_post_type( 'my_custom_post_type',
      array(
        'labels' => array( 'name' => __( 'Products' ) ),
        'public' => true
    )
  );
}

//add post-formats to post_type 'my_custom_post_type'
add_post_type_support( 'my_custom_post_type', 'post-formats' );


//Create extra fields called Altnative Text and Custom Classess
function my_extra_gallery_fields( $args, $attachment_id, $field ){
    $args['alt'] = array('type' => 'text', 'label' => 'Altnative Text', 'name' => 'alt', 'value' => get_field($field . '_alt', $attachment_id) ); // Creates Altnative Text field
    $args['class'] = array('type' => 'text', 'label' => 'Custom Classess', 'name' => 'class', 'value' => get_field($field . '_class', $attachment_id) ); // Creates Custom Classess field
    return $args;
}
add_filter( 'acf_photo_gallery_image_fields', 'my_extra_gallery_fields', 10, 3 );


 require_once('wp_bootstrap_navwalker.php');
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_home-page-option',
		'title' => 'Home page option',
		'fields' => array (
			array (
				'key' => 'field_5aa005446acc2',
				'label' => 'Top slogan',
				'name' => 'top_slogan',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5aa005556acc3',
				'label' => 'Second slogan',
				'name' => 'home_pahe_',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5aa005836acc4',
				'label' => 'Title ',
				'name' => 'title_',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5aa0058b6acc5',
				'label' => 'Date',
				'name' => 'home_page_date',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_post-layout',
		'title' => 'Post Layout',
		'fields' => array (
			array (
				'key' => 'field_5aa013ff8e25c',
				'label' => 'Common postlayout',
				'name' => 'common_postlayout',
				'type' => 'select',
				'choices' => array (
					'full-Image-only' => 'Full layout',
					'right-Image-only' => 'Right Image layout',
					'slider-post' => 'Slider layout',
					'compost' => 'Common layout',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_5aa02c15defa3',
				'label' => 'Slider image',
				'name' => 'slider_image',
				'type' => 'photo_gallery',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_5aa013ff8e25c',
							'operator' => '==',
							'value' => 'slider-post',
						),
					),
					'allorany' => 'all',
				),
			),
			array (
				'key' => 'field_5aa014708e25d',
				'label' => 'Select Coloe',
				'name' => 'colorpost',
				'type' => 'color_picker',
				'default_value' => '',
			),
			array (
				'key' => 'field_5aa022675c356',
				'label' => 'Sub Headline',
				'name' => 'sub_headline',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5aa0218a280ce',
				'label' => 'Article feature caption Title',
				'name' => 'article_feature_caption_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5aa0219a280cf',
				'label' => 'Article feature caption	Description',
				'name' => 'article-feature-caption',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5aa050ac3c559',
				'label' => 'Top slogan',
				'name' => 'post_slogan',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5aa0512494065',
				'label' => 'Second slogan',
				'name' => 'second_slogan',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5aa0512e94066',
				'label' => 'Custom Title',
				'name' => 'custom_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}