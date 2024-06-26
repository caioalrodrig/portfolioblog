<article <?php post_class(array('class'=>esc_html('featured')));?> >
    <div class="thumbnail">
        <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail('medium',array('class'=>esc_html('img-fluid'), 'class' => esc_html('wp-featured-img')));?>
        </a>
    </div>
    <h2 class="featured-h2"><a href="<?php the_permalink();?>">
    <?php the_title();?>
    </a></h2>    
    <div class="row featured-meta-info">
        <div class="column col-6" style="padding:0;">
        <label class="blog-lb"><?php _e('Published in','portfolioblog');?></label>
        <p class="meta-info-p"> <?php echo esc_html(get_the_date()); ?> </p>
        </div>
        <div class="col-1 vline"></div>
        <div class="column col-5" style="padding:2px !important;">
        <label class="blog-lb">Categoria</label>
        <p class="meta-info-p"><?php the_category(','); ?></p>
        </div>        
    </div>
    <?php the_excerpt(); ?>
</article>