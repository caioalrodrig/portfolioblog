<?php get_header();?>
<section class="middle-area" id="primary">
<main id="main">
        <div class="row" id="search-nav">
            <div class="col-8"><h2 class="search-results-for">Mostrando resultados para: <?php echo get_search_query();?></h2></div>
            <div class="col-6"> <?php get_search_form(); ?></div>
        </div>
        <div class="container">
            <?php
             while(have_posts()): the_post();
                get_template_part('template-parts/content','search');    
            endwhile;
            ?>

            <?php
            the_posts_pagination(array('prev-text'=>'Anterior',
            'next_text'=>'Próximo',
            'screen_reader_text' => ''
            )
        );?>
            
        </div>
    </main>
    </section>
<?php  get_footer();?>


