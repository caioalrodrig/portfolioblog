<?php get_header();?>
<div> 
    <main>
    <section class="middle-area">
        <?php get_sidebar('blog');?>
        <div class="news col-md-8">
            <?php
            if(have_posts()):
                while( have_posts()): the_post();
            ?>
            <?php
                get_template_part('template-parts/content')            
            ?>
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