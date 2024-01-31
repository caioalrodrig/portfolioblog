<?php 
/*
    Template Name: General Template
*/
?>
<?php get_header();?>
<div> 
    <main>
    <section class="slide">Slide</section>
    <section class="services">Serviços</section>
    <section class="middle-area">
        <aside class="sidebar col-md-4">Barra lateral</aside>
        <div class="news col-md-8">
            <?php
            if(have_posts()):
                while( have_posts()): the_post();
            ?>
            <article>
                <h2><?php the_title();?></h2>
                <p> Published in <?php echo get_the_date(); ?> 
                    by <?php the_author_posts_link();?> </p>
                <p>Categories <?php the_category('');?></p>
                <p><?php the_tags('Tags', ','); ?></p>
                <?php the_content(); ?>
            </article>
            <?php 
                endwhile;
            else:?>
            <p>There is nothing to show here</p>
            
            <?php endif;?>
        </div>
    </section>
    <section class="map">Mapa</section>

    </main>
</div>
<?php get_footer();?>

</body>
</html>