<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/'));?>">
    <label>
    <span class="screen-reader-text"><?php echo _x('Search for: ','label','devportfolio');?></span>
    </label>
    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('&nbsp;Search&hellip;','placeholder','devportfolio')?>" value="<?php echo get_search_query(); ?>" name="s" /> 
    <button type="submit" class="search-submit" >
        <span class="screen-reader-text">              
        <?php echo _x('OK','submit button','devportfolio');?>
        </span>
        <svg id="search" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16" >
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
        </svg>
    </button>
</form>
