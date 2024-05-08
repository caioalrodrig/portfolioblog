<?php esc_html(get_header());?>
<div> 
    <main class="main-blog">
    <section class="row blog-area">
        <div class="archive col-sm-10">
        <div class="container">
            <div class="row">
                <!-- <h1>Últimas notícias</h1> -->
                <?php   
                the_archive_title('<h1 class="archive-title text-center">','</h1>');
                the_archive_description();
                
                    if(have_posts()):
                        while(have_posts()): the_post();
                ?>
                <div class="col-12">
                    <?php
                    esc_html(get_template_part('template-parts/content','archive')); 
                    ?>
                </div>
                <?php                 
                        endwhile;
                        wp_reset_postdata();
                    endif;
                ?>
                <!-- <h1>Noticias gerais</h1> -->
            </div>
        </div>
        </div>
    </section>
    <nav class="navbar blog-sidebar">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="margin-left: 50% !important;">
                <img src="<?php echo esc_attr(get_template_directory_uri()) . '/imgs/toggler-icon.png' ?>">
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Blog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <?php esc_html(get_sidebar('blog'));?>
                    <div class="search" id="search-sidebar">
                    <?php esc_html(get_search_form());?>
                    </div> 
                </div>
            </div>
        </nav>
        <div class="text-center" >
            <img style="max-width: 70%; height:auto; opacity: 0.4;" src="<?php echo esc_attr(get_template_directory_uri() . '/imgs/decoration-pattern.png'); ?>">
        </div>
    </section>

    <button id="backToTopBtn" style="color: <?php echo esc_attr(get_theme_mod('set_first_color')) ;?>">

    </main>
</div>
<?php esc_html(get_footer());?>

</body>
</html>