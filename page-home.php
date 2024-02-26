<?php get_header(); ?>
<div class="content-area">
    <main>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/matriximg2.png" class="d-block w-100" style="height:300px" alt="https://placekitten.com/800/600">
                <div class="carousel-caption">
                <div class="column">
                    <h3 class="carousel-h">
                        <?php echo get_theme_mod( 'carousel_title_1','Hello title 1' )?>
                    </h3>
                    <svg  xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                    </svg> 
                </div>
                </div>
                </div>
                <div class="carousel-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/matriximg.png" class="d-block w-100" style="height:300px" alt="https://placekitten.com/800/600">
                <div class="carousel-caption ">
                    <div class="column">
                    <h3 class="carousel-h" >
                        <?php echo get_theme_mod('carousel_title_2','Hello title 2')?>
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
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
        <section class="services"> 
            <div class="container">
                <div class="row"> 
                    <div class="column col-md-5">
                        <h1 class="title" id="t1">Serviços de TI</h1>
                        <h6 style="font-size: 20px;">Aqui seu sistema web é desenvolvido de forma profissional, com tecnologias seguras e atuais. </h6>
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/amico.svg" class="img-fluid col-md-7 distorcer" id="img1" style="max-height: 60vh; min-height: 40vh;"></img>
                </div>

                <div class="row">
                <div class="col-6 text-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/Easel.png"></img>
                    <p class="service-h7">Dê vida à sua marca</p>
                    <p class="sub-title">Recriamos qualquer design, seu site é desenhado sob medida.</p>
                </div>
                <p class="col-6 triangle text-center"></p>
                </div>
                <div class="row">
                    <div class="col col-md-6 text-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/Create.png"></img>
                        <p class="service-h7">Gerencie conteúdos</p>
                        <p class="sub-title">Sistemas customizáveis no pós entrega, através da plataforma Wordpress.</p>
                    </div>
                    <div class="col col-md-6 text-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/System Information.png"></img>
                        <p class="service-h7">Soluções para sistemas</p>
                        <p class="sub-title">Instalamos e construimos plug-ins que atendem suas regras de negócio.</p>
                     </div>
                </div>

            </div>
        </section>
        <section class="middle-area">
           <div class="container col-md-12 text-center">
                <h1 class="title" id="t2" style="font-size:76px;">Extraia o máximo do Wordpress</h1>
            </div>
            <div class="container">
                <div class="row mx-auto"> <!--  erro aqui?-->
                <button class="col-3 btn-reveal" >
                <img class="plan-card img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/page.svg">
                <p class="reveal-p text-start">Tecnologias: <br/> <br/>  Bootstrap <br/> Animações JavaScript <br/> Customizações<br/> </p>
                </button>
                <button class="col-3 btn-reveal" >
                <img class="plan-card img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/blog.svg">
                <p class="reveal-p text-start">Tecnologias: <br/> <br/>  Bootstrap <br/> Animações JavaScript <br/> Customizações<br/> </p>
                </button>
                <button class="col-3 btn-reveal" >
                <img class="plan-card img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/imgs/loja.svg">
                <p class="reveal-p text-start">Tecnologias: <br/> <br/>  Bootstrap <br/> Animações JavaScript <br/> Customizações<br/> </p>
                </button>
                </div>
            </div>

            <div class="row">
                <div class="col-8"></div>
                <button class="btn btn-primary col-4 align-self-end">Saber +</button>
            </div>     

        </section>
        <button id="backToTopBtn">&nbsp&#11149;</button>
    </main>
</div>
<?php get_footer(); ?>
