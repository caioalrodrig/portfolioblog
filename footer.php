<footer>
<?php
    $page_title = wp_title( '|', false );
    if ( $page_title != ''){
?>
<nav class="row footer-menu">
    <div class="col-md-2"></div>

    <div class="column col-md-3 footer-wrapper text-center">
        <h2 class="h2-footer">Mídia</h2>
        <nav class="column footer-social-list">
            <a href="<?php echo esc_url(get_theme_mod('set_icon_url_1')); ?>" target="_blank">
            <img class="icon-footer" src="<?php echo esc_url(wp_get_attachment_image_url( esc_html(get_theme_mod( 'set_social_footer1')), 'full' )); ?>"> 
            </a>
            <a href="<?php echo esc_url(get_theme_mod('set_icon_url_2')); ?>" target="_blank">
            <img class="icon-footer" src="<?php echo esc_url(wp_get_attachment_image_url( esc_html(get_theme_mod( 'set_social_footer2')), 'full' )); ?>"> 
            </a>
            <a href="<?php echo esc_url(get_theme_mod('set_icon_url_2')); ?>" target="_blank">
            <img class="icon-footer" src="<?php echo esc_url(wp_get_attachment_image_url( esc_html(get_theme_mod( 'set_social_footer3')), 'full' )); ?>"> 
            </a>
        </nav>
    </div>
    <div class="column col-md-3 footer-wrapper text-center" >
        <h2 class="h2-footer">Sobre</h2>
        <p style="margin-bottom: 0 !important; margin-left: 10%;">Rato de academia apaixonado por aprender coisas novas Atualmente mestrando em Ciência da Computação e em busca de recolocação profissional</p>
        
    </div>
    <div class="column col-md-3 footer-wrapper text-center">
        <h2 class="h2-footer">WhatsApp</h2>
        <label style=" position:relative; top:14%;" ><img class="contact-icon-footer" style ="float: left;" src="<?php echo get_template_directory_uri() . '/imgs/Phone.png'?>"/></label>
        <a href="tel:+5532984066147"><span >(32) 984066147</span></a>

    </div>
</nav>
<?php
    }
?>
<div class="footer-after" style="background-image: url(<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/bg-footer.png);"></div>
<div class="row footer-inner" >
<div class="col-sm-3"></div>
    <div class="copyright col-sm-4 col-6">
        <p class="copy" style>
            <?php
            echo esc_html(get_theme_mod('set_copyright','Copyright X - All rights reserved'));
            ?>
        </p>
    </div>       
    <nav class="nav-footer-menu col-sm-5 col-6 ">
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