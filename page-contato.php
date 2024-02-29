<?php get_header();?>
<div> 
    <main>
    <section class="middle-area">
        <div class="container" id="contact-div">
            <div class="row">
                <h1 class="title"> <?php _e('Contact', 'portfolioblog'); ?></h1>
                <p>Contact us through our form</p> 
                <!-- Chamar o get_mod -->
            </div>
            <?php esc_html(get_sidebar('home'));?> <!-- formulario de contato widget -->
        </div>
    </section>
    <button id="backToTopBtn">&nbsp&#11149;</button>

    </main>
</div>
<?php get_footer();?>

</body>
</html>