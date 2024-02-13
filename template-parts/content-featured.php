<article <?php post_class(array('class'=>'featured'));?> >
    <div class="thumbnail">
        <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail('large',array('class'=>'img-fluid'));?>
        </a>
    </div>
    <h2><a href="<?php the_permalink();?>">
    <?php the_title();?>
    </a></h2>
    <div class="meta-info">
        <p> Published in <?php echo get_the_date(); ?> </p>
    </div>
    <p><?php the_tags('Tags: <span>','', '</span>'); ?></p>
    <?php the_excerpt(); ?>
</article>