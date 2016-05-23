<?php
/**
 * fuzzyshark functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fuzzyshark
 */

if ( ! function_exists( 'fuzzyshark_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fuzzyshark_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on fuzzyshark, use a find and replace
	 * to change 'fuzzyshark' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'fuzzyshark', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'fuzzyshark' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'fuzzyshark_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'fuzzyshark_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fuzzyshark_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fuzzyshark_content_width', 640 );
}
add_action( 'after_setup_theme', 'fuzzyshark_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fuzzyshark_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'fuzzyshark' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'fuzzyshark' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'fuzzyshark_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fuzzyshark_scripts() {

	wp_enqueue_style( 'master-css', get_template_directory_uri() . '/library/css/master.css' );

	wp_enqueue_script( 'fuzzyshark-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'fuzzyshark-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );

	wp_enqueue_script( 'fuzzyshark-jquery', get_template_directory_uri() . '/js/min/jquery-2.2.3.min.js' );

	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/min/jquery.waypoints.min.js' );

	wp_enqueue_script( 'inview', get_template_directory_uri() . '/js/inview.js' );

	wp_enqueue_script( 'fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js' );

	wp_enqueue_script( 'stickykit', get_template_directory_uri() . '/js/jquery.sticky-kit.min.js' );

	wp_enqueue_script( 'sticky', get_template_directory_uri() . '/js/jquery.sticky.js' );

	wp_enqueue_script( 'fuzzyshark-js', get_template_directory_uri() . '/js/fuzzyshark.js', array('fuzzyshark-jquery'), '1', true );

	wp_enqueue_script( 'font-awesome',  '//use.fontawesome.com/ca6014a4d4.js', true );

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fuzzyshark_scripts' );

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


/*** TypeKit Fonts ***/

function theme_typekit() {
    wp_enqueue_script( 'theme_typekit', '//use.typekit.net/cyu0jvu.js');
}
add_action( 'wp_enqueue_scripts', 'theme_typekit' );

function theme_typekit_inline() {
  if ( wp_script_is( 'theme_typekit', 'done' ) ) { ?>
  	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php } }
add_action( 'wp_head', 'theme_typekit_inline' );


function my_myme_types($mime_types){
    $mime_types['psd'] = 'image/vnd.adobe.photoshop'; //Adding psd extension
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);







// Adds classes for custom post types to body_class() and post_class()
function add_design_class( $dclass ) {
	$post_type = 'designer'; // the Post Type

	if ( get_query_var('post_type') === $post_type ) { // only, if post type is active
		$dclass[] = $post_type;
		$dclass[] = 'type-' . $post_type;
	}

	return $dclass;
}
add_filter( 'design', 'add_design_class' );