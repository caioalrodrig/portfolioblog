<?php get_header();?>
<section class="middle-area" id="primary">
    <main id="main-single">
        <div class="container single">
            <?php
             while(have_posts()): the_post();
                get_template_part('template-parts/content','single');    
            ?>
            <div class="row">
                <div class="col-12 text-center">
                    <h3>Similar posts: </h3>
                </div>
                <div class="pages text-center col-6"> <?php next_post_link(); ?></div>
                <div class="pages text-center col-6"> <?php previous_post_link();?> </div>
            </div>
            <?php              
            endwhile;
            ?>
        </div>
    </main>
    </section>
<?php  get_footer();?>
