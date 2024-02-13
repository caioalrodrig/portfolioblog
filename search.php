<?php get_header();?>
<div id="primary">
    <div id="main">
        <div class="container">
        <h2 class="search-results-for">Mostrando resultados para: <?php echo get_search_query();?></h2>
        <?php get_search_form(); ?>
        </div>
        <div class="container">
            <?php
             while(have_posts()): the_post();
                get_template_part('template-parts/content','search');    
            endwhile;
            ?>
            <!-- <div class="row">
                <div class="pages text-start col-6"><?php previous_posts_link("<< Posts recentes");?></div>
                <div class="pages text-end col-6"><?php next_posts_link("Posts antigos >>");?></div>
            </div> -->
            <?php
            the_posts_pagination(array('prev-text'=>'Anterior',
            'next_text'=>'Próximo',
            'screen_reader_text' => ''
            )
        );?>
            
        </div>
    </div>
</div>
<?php  get_footer();?>