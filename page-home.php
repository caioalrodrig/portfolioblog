<?php esc_html(get_header());?>
<body>
<div class="content-area">
    <main>
        <section class="hero">
        <div class="hero-before" style="background-image: url(<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/matrix-bg1.png); "></div>    
            <div class="container">
                <div class="row"> 
                    <div class="column col-md-6" id="hero-text">
                        <h1 class="title " id="t1"> Tecnologias que impactam</h1> 
                        <button class="btn-hero btn" >
                        <a href="http://localhost/devcaiorodrig/blog/"><span>Conhecer</span></a>
                        <div class="btn-before" ></div>
                        </button>
                        
                    </div>
                    <div class="img-container col-md-6" style="background-position: center ; background-image: url(<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/hero-bg2.png); ">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/LCP.webp;" class="distorcer" id="img1" style="width: 250px; height:300px; padding-top:20px;" />
                    </div>
                </div>
            </div>
        </section> 
        <section class="services"> 
            <div class="container column">
                <div class="row " style="margin-bottom: 2vh;">
                <div class="col-md-6 col-12 text-center animate" id="copy1" >
                    <img loading="lazy" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/Easel.png;" style="width:32px; height: 32px;" class="service-icon"/>
                    <p class="service-h7" style="color: #251761">Copyright marcante</p>
                    <p class="sub-title ">Design profissional que <b>direciona</b></p>
                </div>
                <div class="col-md-5 col-12 text-center animate" id="copy2">
                    <img loading="lazy" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/Create.png;" style="width:32px; height: 32px;" class="service-icon"/>
                    <p class="service-h7" style="color: #251761">SEO otimizado</p>
                    <p class="sub-title ">Conquiste autoridade para sua <b>marca</b></p>
                </div>
                </div>
                <div class="row " style="margin-bottom: 2vh;">
                    <div class="col col-md-6 col-12 text-center animate" id="copy3">
                        <img loading="lazy" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/System Information.png;" style="width:32px; height: 32px;" class="service-icon"/>
                        <p class="service-h7" style="color: #251761">Software sob medida</p>
                        <p class="sub-title">Automação e tecnologias <b>mais</b> ágeis</p>
                    </div>
                        <div class="col col-md-5 col-12 text-center animate" id="copy4">
                        <img loading="lazy" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/Cloud.png;" style="width:32px; height: 32px;" class="service-icon" />
                        <p class="service-h7 " style="color: #251761">Transformação digital</p>
                        <p class="sub-title"><b>Gestão</b> e eficiência nos processos</p>
                     </div>
                </div>
            </div>
            <section class="portfolio container justify-content-center d-flex">
            <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="horizontal">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Desktop </button>
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Web</button>
                    <!-- <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Web</button> -->
            </div>
            <div class="tab-content " id="myTabContent" >
                <div class="tab-pane fade show active " id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0" >
                    <nav class="pane-body">
                    <!-- <div class="pane-before" style="background-image: url(<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/dec-portfolio1.png); z-index: 1 !important; "></div>                 -->
                    <h3 class="text-center"> Aplicativo Industrial </h3>
                    <ul>
                    <li> Persistência de dados SQLite</li>
                    <li> Comunicação local TPC/IP</li>
                    <li> Monitoramento em tempo real</li>
                    </ul>
                    <hr style="margin-left: 55%; width: 30%; opacity: 0.1"></hr>
                    <nav class="portfolio-icons" style="padding-left: 60%;">
                        <a href="https://github.com/caioalrodrig/supervisory_app" target="_blank"><img src="<?php echo esc_attr(get_template_directory_uri() . '/imgs/Info.png'); ?>" style="width:16px;"> </a>
                        <button type="img-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="border: none;">
                            <img src="<?php echo esc_attr(get_template_directory_uri() . '/imgs/Link.png'); ?>" style="width:16px;">
                        </button>
                    </nav>
                    </nav>
                    <img loading="lazy" src="<?php echo esc_attr(get_template_directory_uri() . '/imgs/supervisory.png'); ?>">
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                        <video controls>
                            <source loading="lazy" src="<?php echo esc_attr(get_template_directory_uri() . '/imgs/supervisory.mp4'); ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        
                        <video controls style="margin-top:15px;">
                            <source loading="lazy"  src="<?php echo esc_attr(get_template_directory_uri() . '/imgs/supervisory2.mp4'); ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <nav class="pane-body">
                    <!-- <div class="pane-before" style="background-image: url(<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/dec-portfolio2.png);"></div> -->
                    <h3 class="text-center"> Freelancer Portfolio </h3>
                    <ul>
                    <li> Landing Page responsiva</li>
                    <li> Formulário para captação de leads </li>
                    </ul>
                    <hr style="margin-left: 55%; width: 30%; opacity: 0.1"></hr>
                    <nav class="portfolio-icons" style="padding-left: 60%;">
                        <a href="https://github.com/caioalrodrig/devrodrigscaio" target="_blank"><img src="<?php echo esc_attr(get_template_directory_uri() . '/imgs/Info.png'); ?>" style="width:16px;"> </a>
                        <!-- <button type="img-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" style="border: none; width: 30% !important;"> -->   
                            <img src="<?php echo esc_attr(get_template_directory_uri() . '/imgs/Link.png'); ?>">
                        <!-- </button> -->
                    </nav>
                    </nav>
                    <img loading="lazy" src="<?php echo esc_attr(get_template_directory_uri() . '/imgs/mobile.png'); ?>" style="transform: scale(0.8);">
                    <!-- Modal aqui-->
                </div>
                <!-- <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">Friend</div> -->
            </div>
            </section>
        </section>
        <section class="middle-area" style="background-image: url(<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/bg-steps.png);">
            <div class="container col-md-12 text-center" style="position: relative;">
                <h1 class="title" id="t2" style="font-size:34px !important; color: #251761;">A cultura ágil </h1>
            </div>
            <div class="steps-wrapper container column">
                <h3 class="h-step" >1</h3>
                <div class="step-odd"><p>Começamos com uma <u>reunião</u> para falar de prazos e valor do investimento</p> </div>
                <h3 class="h-step" >2</h3>
                <div class="step"><p>Antes do início especificamos todas as telas do projeto <u>sem cobrar</u> por isto </p></div>
                <h3 class="h-step" >3</h3>
                <div class="step-odd"><p>Desenvolvimento com <u>entregas</u> continuadas no servidor desde o primeiro instante</p></div>
                <h3 class="h-step" >4</h3>
                <div class="step"><p>Modificações e manutenção por 3 meses <u>grátis</u> após finalizado </p></div>
            </div>
        </section>
        <section class="bottom-area">
            <div class="text-center" >
            <img style="width:431px;  height:175px; opacity: 0.8; transform: scale(-0.7) ;" src="<?php echo esc_attr(get_template_directory_uri() . '/imgs/decoration-pattern.png'); ?>">
            </div>
            <div class="container cards">
                <div class="row mx-auto ">
                <button class="col-3 btn-reveal" style="background-image: url(<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/bg-page.png);">
                <img loading="lazy" class="plan-card img-fluid" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/page.svg">
                <?php esc_html(get_sidebar('card1'));?>
                <img loading="lazy" class= "plan-card-plus"src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/Plus.png">
                </button>
                <button class="col-3 btn-reveal"  style="background-image: url(<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/bg-blog.png);" >
                <img loading="lazy" class="plan-card img-fluid" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/blog.svg">
                <?php esc_html(get_sidebar('card2'));?>
                <img class= "plan-card-plus"src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/Plus.png">    
                </button>
                <button class="col-3 btn-reveal"  style="background-image: url(<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/bg-loja.png);">
                <img loading="lazy" class="plan-card img-fluid" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/loja.svg">
                <?php esc_html(get_sidebar('card3'));?>
                <img class= "plan-card-plus"src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/Plus.png">
                </button>
                </div>
            </div>
            <button class="btn btn-primary btn-info" style="margin-bottom: 10vh !important;" >
                <a><span class="btn-span">Conhecer&nbsp;</span></a>
            </button>
        </section>
        <button id="backToTopBtn" style="color: #251761">&nbsp;
        <svg width="30" height="45" viewBox="0 0 40 45" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform: scale(0.6); margin-left: 2px;">
        <path d="M17.2511 44.0203L22.9214 44.0152L22.8921 11.4336L28.5624 11.4285L28.5575 5.99821L22.8872 6.00332L22.8823 0.573045L17.212 0.578149L17.2169 6.00842L11.5466 6.01353L11.5515 11.4438L17.2218 11.4387L17.2511 44.0203ZM5.88609 16.8792L5.88121 11.4489L11.5515 11.4438L11.5564 16.8741L5.88609 16.8792ZM5.88609 16.8792L5.89098 22.3094L0.220684 22.3146L0.215796 16.8843L5.88609 16.8792ZM34.2376 16.8537L34.2327 11.4234L28.5624 11.4285L28.5673 16.8588L34.2376 16.8537ZM34.2376 16.8537L34.2425 22.2839L39.9128 22.2788L39.9079 16.8486L34.2376 16.8537Z" fill="#251761"/>
        </svg>
        </button>
    </main>
    <section>
            <?php esc_html(get_footer());?>
        </section>
</div>

