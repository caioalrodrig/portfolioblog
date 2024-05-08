<?php esc_html(get_header());?>
<main class="main-blog">
<section class=" blog-area middle-area" >
        <div class="text-left" id="search-nav">
            <h1 class="search-results-for title"> <?php echo _e('Mostrando resultados para: ', 'portfolioblog') . "'" . esc_html(get_search_query()) . "'";?> </h2>
        </div>
        <div class="row" style="margin-bottom: 10vh;">
            <div class="col-sm-2"></div>
            <div class="col-sm-6">
                <?php
                if(have_posts()):
                    while(have_posts()): the_post();
                        esc_html(get_template_part('template-parts/content','search'));    
                    endwhile; 
                ?>
            </div>
            <?php else:
            ?>
            <div class="container no-results">
                <div><?php _e('No results found. Please, give it another try: ','portfolioblog')?></div>
                <div><?php esc_html(get_search_form()); ?></div>
                <div class="suggestions">
                <?php the_widget('WP_Widget_Recent_Posts', array('title' => esc_html__('Latest Posts','portfolioblog'),'number'=> esc_html('3')));?>
                </div>  
            </div>
            </div>            
            <?php endif;
            ?>
            </div>
    </section>            
    <div class="container text-center">
            <?php
                the_posts_pagination(array('prev_text'=>esc_html__('&lt;&lt; Prev','portfolioblog'),
                'next_text'=>esc_html__('Next>>','portfolioblog'),
                'screen_reader_text' => ''
                )
            );
            ?>
    </div>
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
    </section>

    <button id="backToTopBtn" style="color: <?php echo esc_attr(get_theme_mod('set_first_color')) ;?>">
    </main>
    <section>
        <?php esc_html(get_footer());?>
    </section>

