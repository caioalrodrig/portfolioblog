<?php if(is_active_sidebar('sidebar-2')): ?>
    <aside class="sidebar sidebar-blog col-sm-3 h-100 " >
    <?php dynamic_sidebar('sidebar-2'); ?>
    <div class="search" id="search-sidebar">
        <?php get_search_form();?>
    </div>
    </aside>
<?php endif; ?>