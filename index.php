<?php get_header();?>
<div> 
    <main>
    <section class="row middle-area">
        <div class="news col-sm-10">
        <div class="container">
            <div class="row">
                <!-- <h1>Últimas notícias</h1> -->
                <?php   
                  $featured = new WP_Query('post_type=post&posts_per_page=1');            
                    if($featured->have_posts()):
                        while($featured->have_posts()): $featured->the_post();
                ?>
                <div class="col-12">
                    <?php
                     get_template_part('template-parts/content','featured'); 
                    ?>
                </div>
                <?php                 
                        endwhile;
                        wp_reset_postdata();
                    endif;
                ?>
                <!-- <h1>Noticias gerais</h1> -->
                <?php   
                    $args = array(
                        'posts-per-page'=>'4',
                        'offset' =>'1'
                    );
                    $secondary = new WP_Query($args);            
                    if($secondary->have_posts()):
                        while($secondary->have_posts()): $secondary->the_post();
                ?>
                    <div class="col-sm-6">
                        <?php
                        get_template_part('template-parts/content', get_post_type()); 
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
        <?php get_sidebar('blog');?>

        
    </section>
    <section class="map">Mapa</section>

    </main>
</div>
<?php get_footer();?>

</body>
</html>