<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php
    $page_title = wp_title( '|', false, 'left' );
    
    if (empty($page_title)) {
        $page_title = esc_html(get_bloginfo('name'));
    } else {
        $page_title =  esc_html(get_bloginfo('name')) . $page_title ;
    }
    
    echo $page_title;
    ?>
    </title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php 
        $icon1 = get_template_directory_uri() . '/imgs/git_icon.svg';
        $icon2 = get_template_directory_uri() . '/imgs/in_icon.svg';
    ?>
    <header >
        <div class="header-before"></div>
        <section class="top-bar">
        <div class="container">
            <div class="row row-media">
            <nav class="social-media col-xl-9 col-sm-7 col-5">
                <a href="<?php echo esc_url(get_theme_mod('set_icon_url_1')); ?>" target="_blank">
                <img class="nav-icon" src="<?php echo esc_attr($icon1); ?>"> 
                </a>
                <a href="<?php echo esc_url(get_theme_mod('set_icon_url_2')); ?>" target="_blank">
                <img class="nav-icon" src="<?php echo esc_attr($icon2); ?>"> 
                </a>
            </nav>
            <div class="search col-xl-3 col-sm-5 col-7 text-end">
                <?php esc_html(get_search_form()); 
                ?>  
            </div>
            </div>
        </div>
        </section>
        <section class="menu-area">
        <div class="container">
            <div class="row">
            <section  class="col-6">
            <!-- <img src="<?php echo esc_url(wp_get_attachment_image_url( esc_html(get_theme_mod( 'set_logo')), 'full' )); ?> " class="logo"/> -->
            <!-- <h1 class="logo-p" style="color: <?php echo esc_attr(get_theme_mod('set_first_color')) ;?>"><?php echo esc_html(get_theme_mod('set_h1','Tech Blog'));?></h1> -->
            </section>
            <nav class="navbar col-5 navbar-expand-md bg-body-tertiary" id="menu-bs">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarToggler">
                <nav class="menu text-right"> 
                    <div class="row ">
                    <?php wp_nav_menu(array('theme_location' => esc_html('my_main_menu'))); ?>
                    </div>
                </nav> 
                </div>
            </div>
            </nav>            
        </div>
        </div>
        </section>
    </header>
