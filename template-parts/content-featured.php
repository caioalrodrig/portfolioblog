<article <?php post_class(array('class'=>'featured'));?> >
    <div class="thumbnail">
        <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail('medium',array('class'=>'img-fluid', 'class' => 'wp-featured-img'));?>
        </a>
    </div>
    <h2 class="featured-h2"><a href="<?php the_permalink();?>">
    <?php the_title();?>
    </a></h2>    
    <div class="row meta-info">
        <div class="column col-6" style="padding:0;">
        <label class="blog-lb">Published in</label>
        <p class="meta-info-p"> <?php echo get_the_date(); ?> </p>
        </div>
        <div class="col-1 vline"></div>
        <div class="column col-5" style="padding:2px !important;">
        <label class="blog-lb">Tags</label>
        <p class="meta-info-p"><?php the_tags('<span>','', '</span>'); ?></p>
        </div>        
    </div>
    <?php the_excerpt(); ?>
</article>