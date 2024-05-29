<?php esc_html(get_header());?>
<?php $categories = get_the_category(); ?>
<section class="middle-area main-single row" id="primary">
<nav class="progressbar d-none d-sm-block"></nav>
    <main id="main-single">
    <div class="row">
        <div class="col-2"></div>
        <div class="breadcrumb col-8">
        <span class="addr-crumb">
            <a href=" http://localhost/devcaiorodrig/blog">Blog</a>&nbsp;/&nbsp;
            
            <?php
            if ($categories) {
                foreach($categories as $category) {
                    echo '<a class="addr-crumb" href="' . 
                        esc_url(get_category_link($category->term_id)) .
                        '">' . 
                        esc_html($category->name) . '</a>';
                }
            }
            ?>
        </span>
        </div>
    </div>
        <div class="container single">
            <?php
             while(have_posts()): the_post();
                esc_html(get_template_part('template-parts/content','single')); 
                
                wp_link_pages( array(
                    'before'      => '<div class="page-links">' . __( 'Pages:', 'textdomain' ),
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                    'next_or_number' => 'number',
                ) );

                if(comments_open() || esc_html(get_comments_number())):
                    esc_html(comments_template());
                endif;
            ?>
            <div class="row">
                <div class="col-12 text-center">
                    <h3><?php _e('Similar posts:','portfolioblog');?> </h3>
                </div>
                <div class="pages text-center col-6"> <?php esc_url(next_post_link()); ?></div>
                <div class="pages text-center col-6"> <?php esc_url(previous_post_link());?> </div>
            </div>
            <?php              
            endwhile;
            ?>
        </div>
    </main>
    </section>
    <button id="backToTopBtn" style="color: <?php echo esc_attr(get_theme_mod('set_first_color')) ;?>">

<svg width="30" height="45" viewBox="0 0 40 45" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform: scale(0.6); margin-left: 2px;">
<path d="M17.2511 44.0203L22.9214 44.0152L22.8921 11.4336L28.5624 11.4285L28.5575 5.99821L22.8872 6.00332L22.8823 0.573045L17.212 0.578149L17.2169 6.00842L11.5466 6.01353L11.5515 11.4438L17.2218 11.4387L17.2511 44.0203ZM5.88609 16.8792L5.88121 11.4489L11.5515 11.4438L11.5564 16.8741L5.88609 16.8792ZM5.88609 16.8792L5.89098 22.3094L0.220684 22.3146L0.215796 16.8843L5.88609 16.8792ZM34.2376 16.8537L34.2327 11.4234L28.5624 11.4285L28.5673 16.8588L34.2376 16.8537ZM34.2376 16.8537L34.2425 22.2839L39.9128 22.2788L39.9079 16.8486L34.2376 16.8537Z" fill="#251761"/>
</svg>
</button>
<?php  esc_html(get_footer());?>
