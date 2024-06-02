<?php get_header();?>
<div> 
<?php 
    $image_url = get_template_directory_uri() . '/imgs/contato.png';
?>
<main class="main-blog" style="padding-bottom: 0;">
    <section class="middle-area blog-area row">
        <div class="col-md-2"></div>
        <div class="contact-area col-sm-12 col-md-7 column" style="padding-bottom: 0;" id="contact-div">
            <div class="contact-area-before"  id="contact-div" style="padding-left:20vw;">
                <img src="<?php echo $image_url ?>" style="min-width: 200px; width: 20vw;"/>
            </div>
            <div class="column" >
                <h1 class="contact-header" style="padding-left: 9px;"> <?php _e('Entre em contato conosco', 'portfolioblog'); ?></h1>
                <!-- Chamar o get_mod -->
            </div >
            <div class="contact-div" >
            <?php esc_html(get_sidebar('home'));?> <!-- formulario de contato widget -->
            </div>
        </div>
        <div class="text-center" >
            <img style="max-width: 90%; height:auto; opacity: 0.8;" src="<?php echo esc_attr(get_template_directory_uri() . '/imgs/decoration-pattern.png'); ?>">
        </div>
        <nav class="navbar blog-sidebar">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="margin-left: 50% !important;">
                <img src="<?php echo esc_attr(get_template_directory_uri()) . '/imgs/toggler-icon.png' ?>">
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Categorias</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-1">
                <?php esc_html(get_sidebar('blog'));?>
                <div class="search" id="search-sidebar">
                <?php esc_html(get_search_form());?>
                </div>
            </div>
            </div>
        </nav>
        </section>
    </section>
    
    </main>
</div>
<section>
    <?php get_footer();?>
</section>
