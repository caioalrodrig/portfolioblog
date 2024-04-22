<article <?php post_class()?> id="post <?php post_class();?>">
    <h2 class="post-h2"><a href="<?php the_permalink();?>">
        <?php the_title();?>
        </a></h2>    
    <div class="row">
        <div class="row meta-info text-center">
        <div class="column col-3" style="padding:0;">
        <label class="blog-lb">Published in</label>
        <p class="meta-info-p"> <?php echo get_the_date(); ?> </p>
        </div>
        <div class="col-1 vline"></div>
        <div class="column col-2" style="padding:2px !important;">
        <label class="blog-lb">Tags</label>
        <p class="meta-info-p"><?php the_tags('<span>','', '</span>'); ?></p>
        </div>        
        </div>
    </div>
    <div >
        <?php if(has_excerpt()):?>
            <div class="content">
            <?php the_excerpt(); ?>
            </div>
        <?php elseif(strpos($post->post_content,'<!--more--!>')):?>
            <div class="content">
            <?php the_content(__('More'),'portfolioblog');?>
            </div>
        <?php else:?>
            <div class="content">
            <?php the_excerpt('');?>
            </div>
            <?php endif;?>
    </div>
</article>