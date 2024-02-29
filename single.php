<?php esc_html(get_header());?>
<section class="middle-area" id="primary">
    <main id="main-single">
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
<?php  esc_html(get_footer());?>
