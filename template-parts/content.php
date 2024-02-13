<article <?php post_class()?> >
    <h2><a href="<?php the_permalink();?>">
    <?php the_title();?>
    </a></h2>
    <div class="thumbnail">
        <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail('thumbnail');?>
        </a>
    </div>
    <p> Published in <?php echo get_the_date(); ?> 
    <p>Categories: <?php the_category('');?></p>
    <p><?php the_tags('Tags', ','); ?></p>
    <?php the_excerpt(); ?>
</article>