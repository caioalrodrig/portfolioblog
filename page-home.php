<?php esc_html(get_header());?>
<div class="content-area">
    <main>
        <section class="services"> 
            <div class="container">
                <div class="row"> 
                    <div class="column col-md-5">
                        <h1 class="title" id="t1" style="color: <?php echo esc_attr(get_theme_mod('set_first_color')) ;?>"> <?php echo esc_html(get_theme_mod('set_subtitle'));?></h1>
                        <h6 style="font-size: medium;"><?php echo esc_html(get_theme_mod('set_subsubtitle'));?> </h6>
                        <button class="btn-hero btn-primary" style="background-color: <?php echo esc_attr(get_theme_mod('set_second_color','#ff8800')) ;?>;" >
                        <a><span>&nbsp;&nbsp;<?php echo esc_html(get_theme_mod('set_action_btn','GET INFO'));?>&#128640;</span></a>
                        </button>

                    </div>
                    <img src="<?php echo esc_url(wp_get_attachment_image_url( esc_html(get_theme_mod( 'set_animated_img')), 'full' )); ?>" class="img-fluid col-md-7 distorcer" id="img1" />
                </div>

                <div class="row">
                <div class="col-6 text-center">
                    <img src="<?php echo esc_url(wp_get_attachment_image_url( esc_html(get_theme_mod( 'set_icon_1')), 'full' )); ?>"/>
                    <p class="service-h7" style="color: <?php echo esc_attr(get_theme_mod('set_first_color')) ;?>"><?php echo esc_html(get_theme_mod('set_sec2_subtitle1'));?></p>
                    <p class="sub-title"><?php echo esc_html(get_theme_mod('set_sec2_description1'));?></p>
                </div>
                <p class="col-6 triangle text-center"></p>
                </div>
                <div class="row">
                    <div class="col col-md-6 text-center">
                        <img src="<?php echo esc_url(wp_get_attachment_image_url( esc_html(get_theme_mod( 'set_icon_2')), 'full' )); ?>"/>
                        <p class="service-h7" style="color: <?php echo esc_attr(get_theme_mod('set_first_color')) ;?>"><?php echo esc_html(get_theme_mod('set_sec2_subtitle2'));?></p>
                        <p class="sub-title"><?php echo esc_html(get_theme_mod('set_sec2_description2'));?></p>
                    </div>
                    <div class="col col-md-6 text-center">
                        <img src="<?php echo esc_url(wp_get_attachment_image_url( esc_html(get_theme_mod( 'set_icon_3')), 'full' )); ?>"/>
                        <p class="service-h7 " style="color: <?php echo esc_attr(get_theme_mod('set_first_color')) ;?>"><?php echo esc_html(get_theme_mod('set_sec2_subtitle3'));?></p>
                        <p class="sub-title"><?php echo esc_html(get_theme_mod('set_sec2_description3'));?></p>
                     </div>
                </div>

            </div>
        </section>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="<?php echo esc_url(wp_get_attachment_image_url( esc_html(get_theme_mod( 'set_img_1')), 'full' )); ?>" class="d-block w-100" style="height:300px" alt="https://placekitten.com/800/600">
                <div class="carousel-caption">
                <div class="column">
                    <h3 class="carousel-h">
                        <?php echo esc_html(get_theme_mod('carousel_title_1','Hello title 1'),'portfolioblog');?>
                    </h3>
                    <svg  xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                    </svg> 

                </div>
                </div>
                </div>
                <div class="carousel-item">
                <img src="<?php echo esc_url(wp_get_attachment_image_url( esc_html(get_theme_mod( 'set_img_2')), 'full' )); ?>" class="d-block w-100" style="height:300px" alt="https://placekitten.com/800/600">
                <div class="carousel-caption ">
                    <div class="column">
                    <h3 class="carousel-h">
                        <?php echo esc_html(get_theme_mod('carousel_title_1','Hello title 2'),'portfolioblog');?>
                    </h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                    </svg>
                    </div>
                </div>
                </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden"> <?php _e('Previous','portfolioblog');?></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden"><?php _e('Next','portfolioblog');?></span>
        </button>
        </div>
        <section class="middle-area">
           <div class="container col-md-12 text-center">
                <h1 class="title" id="t2" style="font-size:76px; color: <?php echo esc_attr(get_theme_mod('set_first_color')) ;?>;"><?php echo esc_html(get_theme_mod('set_home_middlearea_h1'),'portfolioblog');?> </h1>
            </div>
            <div class="container">
                <div class="row mx-auto">
                <button class="col-3 btn-reveal" >
                <img class="plan-card img-fluid" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/page.svg">
                <?php esc_html(get_sidebar('card1'));?>
                </button>
                <button class="col-3 btn-reveal" >
                <img class="plan-card img-fluid" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/blog.svg">
                <?php esc_html(get_sidebar('card2'));?>
                </button>
                <button class="col-3 btn-reveal" >
                <img class="plan-card img-fluid" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/loja.svg">
                <?php esc_html(get_sidebar('card3'));?>
                </button>
                </div>
            </div>

            <div class="row">
                <div class="col-3"></div>
                <div class="col-6 ">
                <button class="btn btn-primary" style="background-color: <?php echo esc_attr(get_theme_mod('set_second_color','#ff8800'));?> !important;" >
                <a><span class="btn-span">&nbsp;&nbsp;<?php echo esc_html(get_theme_mod('set_action_btn','GET INFO'));?>&#128640; </span></a>
                </button>
                </div>
            </div>     

        </section>
        <button id="backToTopBtn" style="color: <?php echo esc_attr(get_theme_mod('set_first_color')) ;?>">&nbsp;&#11149;</button>
    </main>
</div>
<?php esc_html(get_footer());?>
