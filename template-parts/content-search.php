<article <?php post_class()?> id="post <?php post_class();?>">
    <div class="row">
        <h2> <?php the_title();?></h2>
        <p class="col-3"> Published in <?php echo get_the_date(); ?></p> 
        <?php if(has_category()):?>
            <p class="col-3"> Categories: <?php the_category('');?></p>
        <?php endif;?>
        <p class="col-3"><?php the_tags('Tags: <span>','', '</span>'); ?></p>
    </div>
    <div class="content">
        <?php the_excerpt(); ?>
    </div>
</article>