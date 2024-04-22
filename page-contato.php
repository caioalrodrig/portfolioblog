<?php get_header();?>
<div> 
<?php 
    $image_url = get_template_directory_uri() . '/imgs/contato.png';
?>
<main class="main-blog">
    <section class="middle-area blog-area row" >
        <div class="col-md-8 contact-area col-12"  id="contact-div">
            <div class="column contact-area">
                <h1 class="title"> <?php _e('Entre em contato conosco', 'portfolioblog'); ?></h1>
                <p> Preencha o formulário abaixo, retornamos em breve!</p> 
                <!-- Chamar o get_mod -->
            </div >
            <div class="contact-div">
            <?php esc_html(get_sidebar('home'));?> <!-- formulario de contato widget -->
            </div>
        </div>
        <section class="sidebar-area col-md-3 col-12 h-100 row">
            <?php esc_html(get_sidebar('blog'));?>
            <div class="search" id="search-sidebar">
            <?php esc_html(get_search_form());?>
            </div>
            <img class="d-none d-md-block" src="<?php echo $image_url ?>" />
        </section>
        <img class="d-block d-sm-block d-md-none" src="<?php  echo $image_url ?>" style="width:50%; height: auto; float:right;"/>
    </section>
    <button id="backToTopBtn" style="color: <?php echo esc_attr(get_theme_mod('set_first_color')) ;?>">&nbsp;&#11105;</button>

    </main>
</div>
<section>
    <?php get_footer();?>
</section>
