<?php esc_html(get_header());?>
<main class="main-blog">
<section class=" blog-area middle-area" >
        <div class="text-left" id="search-nav">
            <h1 class="search-results-for title"> <?php echo _e('Mostrando resultados para: ', 'portfolioblog') . "'" . esc_html(get_search_query()) . "'";?> </h2>
        </div>
        <div class="row" style="margin-bottom: 10vh;">
            <div class="col-sm-2"></div>
            <div class="col-sm-6">
                <?php
                if(have_posts()):
                    while(have_posts()): the_post();
                        esc_html(get_template_part('template-parts/content','search'));    
                    endwhile; 
                ?>
            </div>
            <section class="sidebar-area col-sm-2 h-100 ">
            <?php esc_html(get_sidebar('blog'));?>
            <div class="search" id="search-sidebar">
            <?php esc_html(get_search_form());?>
            </div>
            </section>
            <?php else:
            ?>
            <div class="container no-results">
                <div><?php _e('No results found. Please, give it another try: ','portfolioblog')?></div>
                <div><?php esc_html(get_search_form()); ?></div>
                <div class="suggestions">
                <?php the_widget('WP_Widget_Recent_Posts', array('title' => esc_html__('Latest Posts','portfolioblog'),'number'=> esc_html('3')));?>
                </div>  
            </div>
            </div>
            <section class="sidebar-area col-sm-2 h-100 ">
            <?php esc_html(get_sidebar('blog'));?>
            <div class="search" id="search-sidebar">
            <?php esc_html(get_search_form());?>
            </div>
            </section>
            
            <?php endif;
            ?>
            </div>
    </section>            
    <div class="container text-center">
            <?php
                the_posts_pagination(array('prev_text'=>esc_html__('&lt;&lt; Prev','portfolioblog'),
                'next_text'=>esc_html__('Next>>','portfolioblog'),
                'screen_reader_text' => ''
                )
            );
            ?>
    </div>
    </main>
    <section>
        <?php esc_html(get_footer());?>
    </section>

