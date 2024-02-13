<article <?php post_class()?> id="post <?php post_class();?>">
    <div class="row">
        <h2> <?php the_title();?></h2>
        <div class="thumbnail col-12">
            <?php the_post_thumbnail('large',array('class' => 'img-fluid'));?>
        </div>
        <p class="col-3"> Published in <?php echo get_the_date(); ?></p> 
        <p class="col-3"> Categories: <?php the_category('');?></p>
        <p class="col-3"><?php the_tags('Tags: <span>','', '</span>'); ?></p>
    </div>
    <div class="content">
        <?php the_content(); ?>
    </div>
</article>