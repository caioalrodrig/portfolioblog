<?php get_header();?>
<div> 
    <main>
    <section class="middle-area">
        <div class="container">
            <div class="row">
                <div class="error-404">
                <h1>Page not found</h1>
                <p>Unfortunately, the page searched could not be reached.</p>
                </div>
                <div class="error">
                    <p>Que tal fazer uma pesquisa?</p>
                    <?php get_search_form();?>
                </div>
                <div class="suggestions">
                    <h6>Que tal conhecer nosso conteúdo?</h6>
                    <?php the_widget('WP_Widget_Recent_Posts', array('title' => 'Latest Posts','number'=> '3'))?>
                </div>
            </div>
        </div>
    </section>
    <section class="map">Mapa</section>

    </main>
</div>
<?php get_footer();?>

</body>
</html>