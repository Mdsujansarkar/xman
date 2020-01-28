<?php
/**
 * xman functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package xman
 */
/**
 * Customizer additions.
 */
include_once get_theme_file_path( 'inc/customizer/kirki-helper.php' );
include_once get_theme_file_path( 'inc/customizer/homepage.php' );

/**
 * Implement the Custom Header feature.
 */


if ( ! function_exists( 'xman_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function xman_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on xman, use a find and replace
		 * to change 'xman' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'xman', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'xman' ),
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
		add_theme_support( 'custom-background', apply_filters( 'xman_custom_background_args', array(
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
add_action( 'after_setup_theme', 'xman_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function xman_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'xman_content_width', 640 );
}
add_action( 'after_setup_theme', 'xman_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */ 
function xman_scripts() {
    wp_enqueue_style( 'xman-slick-css',		'//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style( 'xman-bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style( 'xman-linearicons-css','//cdn.linearicons.com/free/1.0.0/icon-font.min.css');
    wp_enqueue_style( 'xman-animated-css', get_template_directory_uri() .'/animated.css');
	wp_enqueue_style( 'xman-style', get_stylesheet_uri() );
   
    wp_enqueue_script( 'xman-popper-js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), '20151215', true );
    wp_enqueue_script( 'xman-bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), '20151215', true );
    wp_enqueue_script( 'xman-fontawsome-js', '//kit.fontawesome.com/a076d05399.js', array('jquery'), '20151215', true );
    wp_enqueue_script( 'xman-slikcarosul-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '20151215', true );
    wp_enqueue_script( 'xman-linearicons-js', '//cdn.linearicons.com/free/1.0.0/svgembedder.min.js', array('jquery'), '20151215', true );
    



    wp_enqueue_script( 'xman-main-js', get_template_directory_uri() . '/main.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'xman-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
}
add_action( 'wp_enqueue_scripts', 'xman_scripts' );
// Custom post type
// Register Custom Post Type tesimonial
function create_tesimonial_cpt() {

	$labels = array(
		'name' => _x( 'tesimonials', 'Post Type General Name', 'xman' ),
		'singular_name'				 => _x( 'tesimonial', 'Post Type Singular Name', 'xman' ),
		'menu_name' 				 => _x( 'tesimonials', 'Admin Menu text', 'xman' ),
		'name_admin_bar'			 => _x( 'tesimonial', 'Add New on Toolbar', 'xman' ),
		'archives'					 => __( 'tesimonial Archives', 'xman' ),
		'attributes' 				 => __( 'tesimonial Attributes', 'xman' ),
		'parent_item_colon' 		 => __( 'Parent tesimonial:', 'xman' ),
		'all_items' 				 => __( 'All tesimonials', 'xman' ),
		'add_new_item' 				 => __( 'Add New tesimonial', 'xman' ),
		'add_new' 					 => __( 'Add New', 'xman' ),
		'new_item' 					 => __( 'New tesimonial', 'xman' ),
		'edit_item' 				 => __( 'Edit tesimonial', 'xman' ),
		'update_item' 				 => __( 'Update tesimonial', 'xman' ),
		'view_item' 				 => __( 'View tesimonial', 'xman' ),
		'view_items' 				 => __( 'View tesimonials', 'xman' ),
		'search_items' 				 => __( 'Search tesimonial', 'xman' ),
		'not_found' 				 => __( 'Not found', 'xman' ),
		'not_found_in_trash' 		 => __( 'Not found in Trash', 'xman' ),
		'featured_image' 			 => __( 'Featured Image', 'xman' ),
		'set_featured_image' 		 => __( 'Set featured image', 'xman' ),
		'remove_featured_image' 	 => __( 'Remove featured image', 'xman' ),
		'use_featured_image' 		 => __( 'Use as featured image', 'xman' ),
		'insert_into_item' 			 => __( 'Insert into tesimonial', 'xman' ),
		'uploaded_to_this_item'		 => __( 'Uploaded to this tesimonial', 'xman' ),
		'items_list' 				 => __( 'tesimonials list', 'xman' ),
		'items_list_navigation' 	 => __( 'tesimonials list navigation', 'xman' ),
		'filter_items_list' 		 => __( 'Filter tesimonials list', 'xman' ),
	);
	$args = array(
		'label' 					 => __( 'tesimonial', 'xman' ),
		'description' 				 => __( 'Testimonial', 'xman' ),
		'labels' 					 => $labels,
		'menu_icon'					 => '',
		'supports' 					 => array('title', 'editor', 'thumbnail', 'custom-fields'),
		'taxonomies'				 => array(),
		'public' 					 => true,
		'show_ui' 					 => true,
		'show_in_menu' 				 => true,
		'menu_position' 			 => 5,
		'show_in_admin_bar' 		 => true,
		'show_in_nav_menus' 		 => true,
		'can_export' 				 => true,
		'has_archive' 				 => true,
		'hierarchical' 				 => false,
		'exclude_from_search' 		 => false,
		'show_in_rest' 				 => true,
		'publicly_queryable' 		 => true,
		'capability_type' 			 => 'post',
	);
	register_post_type( 'tesimonial', $args );

}
add_action( 'init', 'create_tesimonial_cpt', 0 );


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
require get_template_directory() . '/inc/redux/ReduxCore/framework.php';
require get_template_directory() . '/inc/redux/sample/config.php';
require get_template_directory() . '/CMB2/functions.php';
require get_template_directory() . '/inc/sidebar/sidebar.php';
 
class My_Widget extends WP_Widget {
 
    function __construct() {
 
        parent::__construct(
            'my-text',  // Base ID
            'My Text'   // Name
        );
 
        add_action( 'widgets_init', function() {
            register_widget( 'My_Widget' );
        });
 
    }
 
    public $args = array(
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
        'before_widget' => '<div class="widget-wrap">',
        'after_widget'  => '</div></div>'
    );
 
    public function widget( $args, $instance ) {
 
        echo $args['before_widget'];
 
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
 
        echo '<div class="textwidget">';
 
        echo esc_html__( $instance['text'], 'text_domain' );
 
        echo '</div>';
 
        echo $args['after_widget'];
 
    }
 
    public function form( $instance ) {
 
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'text_domain' );
        $text = ! empty( $instance['text'] ) ? $instance['text'] : esc_html__( '', 'text_domain' );
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'Text' ) ); ?>"><?php echo esc_html__( 'Text:', 'text_domain' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text" cols="30" rows="10"><?php echo esc_attr( $text ); ?></textarea>
        </p>
        <?php
 
    }
 
    public function update( $new_instance, $old_instance ) {
 
        $instance = array();
 
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['text'] = ( !empty( $new_instance['text'] ) ) ? $new_instance['text'] : '';
 
        return $instance;
    }
 
}
$my_widget = new My_Widget();
