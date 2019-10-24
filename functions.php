<?php

function addCustomThemeFiles_1902(){
    wp_enqueue_style('bootstrapCSS1902', get_template_directory_uri() . '/assests/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('customCSS1902', get_template_directory_uri() . '/assests/css/style.css', array(), '0.0.1', 'all');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapJS1902', get_template_directory_uri() . '/assests/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
    wp_enqueue_script('customJS1902', get_template_directory_uri() . '/assests/js/script.js', array('jquery'), '0.0.1', true);
};

add_action('wp_enqueue_scripts', 'addCustomThemeFiles_1902');

add_theme_support('post-thumbnails', array('post'));

add_image_size('icon', 50, 50, true);

function addCustomMenus_1902(){
    add_theme_support('menus');
    register_nav_menu('top_navigation', __('The top navigation is located at the top of each page.', '1902Custom'));
    register_nav_menu('side_navigation', __('The side navigation is located at the side of each page', '1902Custom'));
    register_nav_menu('bottom_navigation', __('The bottom navigation is located at the bottom of each page', '1902Custom'));
};

add_action('after_setup_theme', 'addCustomMenus_1902');

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

$customHeaderDefaults = array(
    'width' => 1280,
    'height' => 720,
    'default-image' => get_template_directory_uri() . '/assests/images/water-and-rocks.jpg'
);
add_theme_support('custom-header', $customHeaderDefaults);

register_default_headers(array (
    'defaultImage' => array(
        'url' => get_template_directory_uri() . '/assests/images/water-and-rocks.jpg',
        'thumbnail_url' => get_template_directory_uri() . '/assests/images/water-and-rocks.jpg',
        'description' => __('The default image for the custom header.', '1902Custom')
    )
));

add_theme_support('wp-block-styles');
