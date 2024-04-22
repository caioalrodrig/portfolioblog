<?php get_header();?>
<div> 
    <main class="main-blog">
    <section class="middle-area">
        <div class="container">
            <div class="row">
                <div class="error-404">
                <h1 class="title">Pagina não encontrada</h1>
                <p>Por favor, forneça uma URL válida</p>
                </div>
                <div class="error text-center">
                    <img src=" <?php echo esc_url_raw(get_template_directory_uri()) . '/imgs/404.png'; ?>"/>
                </div>

                <div class="suggestions row">
                    <span class="col-12 col-md-4">Que tal conhecer nosso conteúdo?</span>
                    <div class="col-12 col-md-6" >
                    <?php get_search_form();?>
                    </div>
                </div>
                <?php the_widget('WP_Widget_Recent_Posts', array('title' => 'Latest Posts','number'=> '3'))?>

            </div>
        </div>
    </section>

    </main>
</div>
<?php get_footer();?>

</body>
</html>