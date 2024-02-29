<footer>
<div class="row">
    <div class="copyright col-sm-7 col-4">
        <p class="copy">
            <?php
            echo esc_html(get_theme_mod('set_copyright','Copyright X - All rights reserved'));
            ?>
        </p>
    </div>       
    <nav class="footer-menu col-sm-5 col-8 text-right">
        <?php
            wp_nav_menu(array(
                'theme_location' => esc_html('footer_menu')
            )
        );
        ?>
    </nav> 
</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>