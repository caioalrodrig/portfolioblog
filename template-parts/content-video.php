<article>
    <h2><?php the_title();?></h2>
    <?php the_post_thumbnail('thumbnail');?>
    <p> Published in <?php echo get_the_date(); ?> 
    <p>Categories <?php the_category('');?></p>
    <p><?php the_tags('Tags', ','); ?></p>
    <?php the_excerpt(); ?>
</article>