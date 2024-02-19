<article <?php post_class()?> id="post <?php post_class();?>">
    <div class="row text-center">
        <h2> <?php the_title();?></h2>
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
        <div class="thumbnail col-12 ">
            <?php the_post_thumbnail('large',array('class' => 'img-fluid'));?>
        </div> 
    </div> 
    </div>
    <div class="content">
        <?php the_content(); ?>
    </div>
</article>


