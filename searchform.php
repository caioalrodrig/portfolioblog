<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/'));?>">
    <label for="s" class="lb-search">
    <span class="screen-reader-text"><?php echo _x('Search for ','label','portfolioblog');?></span>
    </label>
    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('&nbsp;Pesquisar','placeholder','portfolioblog');?>" value="<?php echo get_search_query(); ?>" name="s" /> 
    <?php 
        $image_url = get_template_directory_uri() . '/imgs/glass.png';
    ?>
    <button type="submit" class="search-submit" >
        <img src="<?php echo $image_url;?>" style="width: 15px; height: auto;">
        <span class="screen-reader-text">              
        </span>
    </button>
</form>
