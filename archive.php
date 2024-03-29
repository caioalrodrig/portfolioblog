<?php get_header();?>
<div> 
    <main>
    <section class="row middle-area">
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
                     get_template_part('template-parts/content','archive'); 
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
        <?php get_sidebar('blog');?>
    </section>
    <section class="map">Mapa</section>

    </main>
</div>
<?php get_footer();?>

</body>
</html>