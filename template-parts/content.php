<article <?php esc_attr(post_class());?> >
    <h2 class="post-h2" ><a href="<?php the_permalink();?>">
    <?php the_title();?>
    </a></h2>
    <div class="thumbnail">
        <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail('thumbnail');?>
        </a>
    </div>
    <div class="column meta-info">
        <div class="column" style="padding:0;">
        <label class="blog-lb"><?php _e('Publicado em','portfolioblog');?></label>
        <p class="meta-info-p"> <?php echo esc_html(get_the_date()); ?> </p>
        </div>
        <div class="column" style="padding-bottom:6px !important;">
        <?php
          if(has_category()):
        ?>
        <label class="blog-lb">Categoria</label>
        <p class="meta-info-p"><?php the_category(','); ?></p>
        <?php
          endif;
        ?>
        </div>    
    </div> 
    
    <?php if(has_excerpt()):?>
            <div class="content">
            <?php the_excerpt(); ?>
            </div>
        <?php elseif(strpos($post->post_content,'<!--More--!>')):?>
            <div class="content">
            <?php the_content(__('More','portfolioblog'));?>
            </div>
        <?php else:?>
            <div class="content">
            <?php the_excerpt('');?>
            </div>
            <?php endif;?>
</article>
