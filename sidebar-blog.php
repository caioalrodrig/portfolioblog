<?php if(is_active_sidebar('sidebar-2')): ?>
    <aside class="sidebar sidebar-blog col-sm-3 h-100 " >
    <?php esc_html(dynamic_sidebar('sidebar-2')); ?>
    <div class="search" id="search-sidebar">
        <?php esc_html(get_search_form());?>
    </div>
    </aside>
<?php endif; ?>