<?php esc_html(get_header());?>
<section class="middle-area" id="primary">
<main id="main">
        <div class="text-center" id="search-nav">
            <h2 class="search-results-for"> <?php echo _e('Showing results for: ', 'portfolioblog') . esc_html(get_search_query());?></h2>
        </div>
        <div class="container">
            <?php
            if(have_posts()):
                while(have_posts()): the_post();
                    esc_html(get_template_part('template-parts/content','search'));    
                endwhile; 
            ?>
        </div>
            <?php
                else:
            ?>
            <div class="row no-results">
                <div class="col-3"><?php _e('No results found. Please, try again: ','portfolioblog')?></div>
                <div class="col-9">
                <?php
                esc_html(get_search_form());
                ?> 
                </div>
            </div>
            <div class="suggestions">
                <?php the_widget('WP_Widget_Recent_Posts', array('title' => esc_html__('Latest Posts','portfolioblog'),'number'=> esc_html('3')));?>
            </div>  

            <?php
            endif;

            the_posts_pagination(array('prev-text'=>esc_html__('Previous','portfolioblog'),
            'next_text'=>esc_html__('Next','portfolioblog'),
            'screen_reader_text' => ''
            )
        );?>
            
        </div>
    </main>
    </section>
<?php esc_html(get_footer());?>


