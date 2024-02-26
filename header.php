<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>devCaioRodrigues</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <section class="top-bar">
        <div class="container">
            <div class="row">
            <div class="social-media col-xl-9 col-sm-7 col-6">
                <a href="<?php echo get_theme_mod('set_icon_url_1') ?>" target="_blank">
                <img class="nav-icon" src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'set_icon_img_1'), 'full' ); ?>"> 
                </a>
                <a href="<?php echo get_theme_mod('set_icon_url_2') ?>" target="_blank">
                <img class="nav-icon" src="<?php echo wp_get_attachment_image_url( get_theme_mod( 'set_icon_img_2'), 'full' ); ?>"> 
                </a>
            </div>
            <div class="search col-xl-3 col-sm-5 col-6 text-right">
                <?php get_search_form();?>
            </div>
            </div>
        </div>
        </section>
        <section class="menu-area">
        <div class="container">
            <div class="row">
            <section id="logo" class="logo col-8" style="color: <?php echo get_theme_mod('set_first_color') ;?>">Caio Rodrigues</section>
            
            <nav class="navbar col-4 navbar-expand-md bg-body-tertiary" id="menu-bs">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarToggler">
                <nav class="menu text-right"> 
                    <div class="row ">
                    <?php wp_nav_menu(array('theme_location' => 'my_main_menu')) ?>
                    </div>
                </nav> 
                </div>
            </div>
            </nav>

            
        </div>
        </div>
        </section>
    </header>
