<?php esc_html(get_header());?>
<div> 
    <main>
    <section class="row middle-area">
        <div class="news col-sm-9">
        <div class="container">
            <div class="row">
                <!-- <h1>Últimas notícias</h1> -->
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
                        'posts-per-page'=>esc_html('4'),
                        'offset' =>esc_html('1')
                    );
                    $secondary = new WP_Query($args);            
                    if($secondary->have_posts()):
                        while(esc_html($secondary->have_posts())): esc_html($secondary->the_post());
                ?>
                    <div class="col-sm-6">
                        <?php
                        esc_html(get_template_part('template-parts/content', get_post_type())); 
                        ?>
                    </div>
                <?php                 
                        endwhile;
                        wp_reset_postdata();
                    endif;
                ?>
            </div>
        </div>
        </div>
        <?php esc_html(get_sidebar('blog'));?>

        
    </section>

    <button id="backToTopBtn">&nbsp&#11149;</button>
    </main>
</div>
<?php esc_html(get_footer());?>

</body>
</html>