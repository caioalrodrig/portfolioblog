<?php esc_html(get_header());?>
<body>
<div class="content-area">
    <main>
        <section class="hero" style="background-image: url(<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/hero-bg.png); "> 
            <div class="container">
                <div class="row"> 
                    <div class="column col-md-6" id="hero-text">
                        <h1 class="title" id="t1" style="color: <?php echo esc_attr(get_theme_mod('set_first_color')) ;?>"> <?php echo esc_html(get_theme_mod('set_subtitle'));?></h1>
                        <h6 style="font-size: medium;"><?php echo esc_html(get_theme_mod('set_subsubtitle'));?> </h6>
                        <button class="btn-hero btn" >
                        <a><span>&nbsp;&nbsp;<?php echo esc_html(get_theme_mod('set_action_btn','GET INFO'));?>&#128640;</span></a>
                        </button>

                    </div>
                    <img src="<?php echo esc_url(wp_get_attachment_image_url( esc_html(get_theme_mod( 'set_animated_img')), 'full' )); ?>" class="img-fluid col-md-6 distorcer" id="img1" />
                </div>
            </div>
        </section> 
        <section class="services"> 
            <div class="container column">
                <div class="row " style="margin-bottom: 2vh;">
                <div class="col-md-6 col-12 text-center" >
                    <img src="<?php echo esc_url(wp_get_attachment_image_url( esc_html(get_theme_mod( 'set_icon_1')), 'full' )); ?>" class="service-icon"/>
                    <p class="service-h7" style="color: <?php echo esc_attr(get_theme_mod('set_first_color')) ;?>"><?php echo esc_html(get_theme_mod('set_sec2_subtitle1'));?></p>
                    <p class="sub-title "><?php echo esc_html(get_theme_mod('set_sec2_description1'));?></p>
                </div>
                <div class=" vline" ></div>
                <div class="col-md-5 col-12 text-center">
                    <img src="<?php echo esc_url(wp_get_attachment_image_url( esc_html(get_theme_mod( 'set_icon_2')), 'full' )); ?>" class="service-icon"/>
                    <p class="service-h7" style="color: <?php echo esc_attr(get_theme_mod('set_first_color')) ;?>"><?php echo esc_html(get_theme_mod('set_sec2_subtitle2'));?></p>
                    <p class="sub-title "><?php echo esc_html(get_theme_mod('set_sec2_description2'));?></p>
                </div>
                </div>
                <div class="row " style="margin-bottom: 2vh;">
                    <div class="col col-md-6 col-12 text-center">
                        <img src="<?php echo esc_url(wp_get_attachment_image_url( esc_html(get_theme_mod( 'set_icon_3')), 'full' )); ?>" class="service-icon"/>
                        <p class="service-h7" style="color: <?php echo esc_attr(get_theme_mod('set_first_color')) ;?>"><?php echo esc_html(get_theme_mod('set_sec2_subtitle3'));?></p>
                        <p class="sub-title"><?php echo esc_html(get_theme_mod('set_sec2_description3'));?> </p>
                    </div>
                    <div class=" vline" ></div>
                    <div class="col col-md-5 col-12 text-center ">
                        <img src="<?php echo esc_url(wp_get_attachment_image_url( esc_html(get_theme_mod( 'set_icon_4')), 'full' )); ?>" class="service-icon"/>
                        <p class="service-h7 " style="color: <?php echo esc_attr(get_theme_mod('set_first_color')) ;?>"><?php echo esc_html(get_theme_mod('set_sec2_subtitle4'));?></p>
                        <p class="sub-title"><?php echo esc_html(get_theme_mod('set_sec2_description4'));?></p>
                     </div>
                </div>

            </div>
        </section>
        <section class="portfolio">
        <ul class="nav nav-underline justify-content-center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                    Desktop
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Mobile</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Web</button>
            </li>
        </ul>
        <div class="tab-content text-center" id="myTabContent" >
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <ul>
                Aplicativo Industrial
                <li> Persistência de dados SQLite</li>
                <li>Comunicação local TPC/IP</li>
                <li>Monitoramento em tempo real</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            Webpage para agência de designers, com o copyright do cliente aplicado ao estilo
            </div>
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">Friend</div>
        </div>
        </section>
        <section class="middle-area">
            <div class="steps-wrapper container column">
                <div class="step-odd"><p> Você fala o que quer e o que não quer. Quanto mais detalhes, melhor. Será um prazer escutar sobre a história da sua marca.</p></div>
                <div class="step"><p>Esta estapa não é cobrada. Compartilho com o cliente um protótipo inicial com todas as telas do software. </p></div>
                <div class="step-odd"><p>Durante o desenvolvimento, as funcionalidades são icorporadas automaticamente ao servidor de hospedagem.</p></div>
                <div class="step"><p>Após concluído e entregue, o cliente pode validar e se adaptar ao sistema. Alterações podem ser feitas neste período, sem custos adicionais.</p></div>
            </div>
           <div class="container col-md-12 text-center">
                <h1 class="title" id="t2" style="font-size:76px; color: <?php echo esc_attr(get_theme_mod('set_first_color')) ;?>;"><?php echo esc_html(get_theme_mod('set_home_middlearea_h1'),'portfolioblog');?> </h1>
            </div>
            <div class="container">
                <div class="row mx-auto">
                <button class="col-3 btn-reveal" style="background-image: url(<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/bg-page.png);">
                <img class="plan-card img-fluid" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/page.svg">
                <?php esc_html(get_sidebar('card1'));?>
                <img class= "plan-card-plus"src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/Plus.png">
                </button>
                <button class="col-3 btn-reveal"  style="background-image: url(<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/bg-blog.png);" >
                <img class="plan-card img-fluid" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/blog.svg">
                <?php esc_html(get_sidebar('card2'));?>
                <img class= "plan-card-plus"src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/Plus.png">    
                </button>
                <button class="col-3 btn-reveal"  style="background-image: url(<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/bg-loja.png);">
                <img class="plan-card img-fluid" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/loja.svg">
                <?php esc_html(get_sidebar('card3'));?>
                <img class= "plan-card-plus"src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/imgs/Plus.png">
                </button>
                </div>
            </div>

            <div class="text-center get-info" >
                <button class="btn btn-primary" >
                <a><span class="btn-span">&nbsp;&nbsp;<?php echo esc_html(get_theme_mod('set_action_btn','GET INFO'));?>&#128640; </span></a>
                </button>
            </div>   
        </section>
        <button id="backToTopBtn" style="color: <?php echo esc_attr(get_theme_mod('set_first_color')) ;?>">&nbsp;&#11105;</button>
    </main>
</div>

<section>
    <?php esc_html(get_footer());?>
</section>