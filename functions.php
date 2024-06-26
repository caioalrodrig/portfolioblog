<?php 
function load_scripts(){
    wp_enqueue_style('template', get_template_directory_uri().'/css/template.css', array(),
    '1.0','all');
    wp_enqueue_style('bootstrap-css','https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(),'5.3.2','all');
    wp_enqueue_script('bootstrap-js','https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js' , array('jquery'),'5.3.2',true);
    wp_enqueue_script('template-js', get_template_directory_uri(). '/js/template.js' , array('jquery'),'1.0.0', false);
}
add_action('wp_enqueue_scripts','load_scripts');

function wppage_config(){
    register_nav_menus(
        array(
            'my_main_menu' => 'Main Menu',
            'footer_menu' => 'Footer Menu'
        )
    );
    $args = array(
        'height' => 225,
        'width' => 1920
    );
    add_theme_support('post-thumbnails');
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support('post-formats', array(
        'video', 'image'
    ));
    load_theme_textdomain('portfolioblog',get_template_directory() . '/languages/');

}
add_action('after_setup_theme','wppage_config', 0);
add_action('widgets_init','wppage_sidebars', 0);

function wppage_sidebars(){
    register_sidebar(
        array(
            'name' => 'Contact Page Sidebar',
            'id' => 'sidebar-1',
            'description' => 'Sidebar to be used for contact Form',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>' 
        )
        );
        register_sidebar(
            array(
                'name' => 'Blog Sidebar',
                'id' => 'sidebar-2',
                'description' => 'Sidebar to be used on Blog Page',
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>' 
            )
            );
            register_sidebar(
                array(
                    'name' => 'Service-card 1',
                    'id' => 'card1',
                    'description' => 'Animated card 1 area',
                    'before_widget' => '<div class="reveal-p text-start">',
                    'after_widget' => '</div>'
                )
            );
            register_sidebar(
                array(
                    'name' => 'Service-card 2',
                    'id' => 'card2',
                    'description' => 'Animated card 2 text area',
                    'before_widget' => '<div class="reveal-p text-start">',
                    'after_widget' => '</div>'
                )
            );
            register_sidebar(
                array(
                    'name' => 'Service-card 3',
                    'id' => 'card3',
                    'description' => 'Animated card 3 text area',
                    'before_widget' => '<div class="reveal-p text-start">',
                    'after_widget' => '</div>'
                )
            );
                
}

require_once get_template_directory(). '/inc/customizer.php';

