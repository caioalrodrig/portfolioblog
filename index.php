<?php esc_html(get_header());?>
<div> 
    <main class="main-blog">
    <section class="row blog-area middle-area">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 ">
        <section class="blog-posts">
            <div class="breadcrumb">
                <span class="addr-crumb">
                    <a href="http://localhost/devcaiorodrig/blog">Blog</a>&nbsp;/
                </span>
            </div>     
            <div class="row">
                <?php   
                  $featured = new WP_Query('post_type=post&posts_per_page=1');            
                    if($featured->have_posts()):
                        while(esc_html($featured->have_posts())): esc_html($featured->the_post());
                ?>
                
                <div class="col-12 text-center">
                    <?php
                     esc_html(get_template_part('template-parts/content','featured')); 
                    ?>
                </div>
                <?php                 
                        endwhile;
                        wp_reset_postdata();
                    endif;
                ?>
                <!-- Noticias gerais -->
                <?php   
                    $args = array(
                        'posts-per-page'=>'4',
                        'offset' =>'1'
                    );
                    $secondary = new WP_Query($args);            
                    if($secondary->have_posts()):
                        while($secondary->have_posts()): esc_html($secondary->the_post());
                ?>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5">
                        <?php
                        esc_html(get_template_part('template-parts/content', get_post_type())); 
                        ?>
                    </div>
                <?php                 
                        endwhile;
                        wp_reset_postdata();
                        
                        // the_posts_pagination(array('prev-text'=>esc_html__('Previous','portfolioblog'),
                        // 'next_text'=>esc_html__('Next','portfolioblog'),
                        // 'screen_reader_text' => ''
                        //     )
                        // );
                    endif;
                ?>
            </div>
        </section>
        </div>
        <nav class="navbar blog-sidebar" style="padding: 0;">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="margin-left: 50% !important;">
                <img src="<?php echo esc_attr(get_template_directory_uri()) . '/imgs/toggler-icon.png' ?>">
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Categorias</h5>
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
            <img style="max-width: 90%; height:auto; opacity: 0.8;" src="<?php echo esc_attr(get_template_directory_uri() . '/imgs/decoration-pattern.png'); ?>">
        </div>
    </section>

    <button id="backToTopBtn" style="color: <?php echo esc_attr(get_theme_mod('set_first_color')) ;?>">

        <svg width="30" height="45" viewBox="0 0 40 45" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform: scale(0.6); margin-left: 2px;">
        <path d="M17.2511 44.0203L22.9214 44.0152L22.8921 11.4336L28.5624 11.4285L28.5575 5.99821L22.8872 6.00332L22.8823 0.573045L17.212 0.578149L17.2169 6.00842L11.5466 6.01353L11.5515 11.4438L17.2218 11.4387L17.2511 44.0203ZM5.88609 16.8792L5.88121 11.4489L11.5515 11.4438L11.5564 16.8741L5.88609 16.8792ZM5.88609 16.8792L5.89098 22.3094L0.220684 22.3146L0.215796 16.8843L5.88609 16.8792ZM34.2376 16.8537L34.2327 11.4234L28.5624 11.4285L28.5673 16.8588L34.2376 16.8537ZM34.2376 16.8537L34.2425 22.2839L39.9128 22.2788L39.9079 16.8486L34.2376 16.8537Z" fill="#251761"/>
        </svg>
    </button>
    </main>
</div>
<section>
    <?php esc_html(get_footer());?>
</section>
