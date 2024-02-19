<article <?php post_class()?> >
    <h2 class="post-h2"><a href="<?php the_permalink();?>">
    <?php the_title();?>
    </a></h2>
    <div class="thumbnail">
        <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail('thumbnail');?>
        </a>
    </div>
    <div class="column meta-info">
        <div class="column" style="padding:0;">
        <label class="blog-lb">Published in</label>
        <p class="meta-info-p"> <?php echo get_the_date(); ?> </p>
        </div>
        <div class="column" style="padding:2px !important;">
        <?php
          if(has_tag()):
        ?>
        <label class="blog-lb">Tags</label>
        <p class="meta-info-p"><?php the_tags('<span>','', '</span>'); ?></p>
        <?php
          endif;
        ?>
        </div>    
        <div class="hline text-right"></div>                
    </div> 
    
    <?php the_excerpt(); ?>
</article>
