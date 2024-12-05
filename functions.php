<?php
// Theme Setup
function blog_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'my-blog-theme'),
    ));
}
add_action('after_setup_theme', 'blog_theme_setup');

// Enqueue Styles and Scripts
function blog_theme_enqueue_assets() {
    wp_enqueue_style('reset', get_template_directory_uri() . '/src/css/reset.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/src/css/style.css', array('reset'));
    wp_enqueue_script('main-js', get_template_directory_uri() . '/src/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'blog_theme_enqueue_assets');
?>
