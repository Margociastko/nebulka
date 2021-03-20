<?php


if ( ! current_user_can( 'manage_options' ) ) {
    show_admin_bar( false );
}


//B4 Navwalker
function register_navwalker(){
	require_once get_template_directory() . '/functions/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// Register Navigation Menus
function mainsetup() {

  register_nav_menus( array(
    		'primary'  => __( 'Nawigacja', 'Nebula' ),
        'bottomstap' => __('Pasek kategorii', 'Nebula'),
    		'footer'  => __( 'Stopka', 'Nebula' ),
    	) );

  add_editor_style();

  add_theme_support( 'wp-block-styles' );

  add_theme_support( 'align-wide' );

  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

  add_theme_support( 'post-thumbnails' );
}
add_action( 'init', 'mainsetup' );



// Remove emoji!
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );

// Remove default jQuery
function myphpinformation_scripts() {
      wp_deregister_script('jquery');
      wp_register_script('jquery', get_stylesheet_directory_uri() . '/components/lib/scripts/jquery3.6.0.min.js', false);
      wp_enqueue_script('jquery');
  }

add_action( 'wp_enqueue_scripts', 'myphpinformation_scripts' );

// Load scripts
function _margo_scripts() {

  // load styles
  wp_enqueue_style( 'style-sass', get_template_directory_uri() . '/components/styles/styles.min.css' );
  wp_enqueue_style( 'style-bootstrap', get_template_directory_uri() . '/components/lib/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );

  // wp_enqueue_script( 'functions', THEME_DIR_URI . '/components/js/functions.js', array(), '', true );

  // Load Bootstrap JS
  wp_enqueue_script( 'bootstrap-js',  get_template_directory_uri() . '/components/lib/bootstrap/js/bootstrap.min.js', array('jquery'), null, true);
  wp_enqueue_script( 'bootstrapbundle-js',  get_template_directory_uri() . '/components/lib/bootstrap/js/bootstrap.min.bundle.js', array('jQuery'), null, true);

  // Load FontAwesome
  wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/components/lib/fontawesome/css/all.min.css' );

  // Load retina


}
add_action( 'wp_enqueue_scripts', '_margo_scripts' );

$sid = 1;

?>
