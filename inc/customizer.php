<?php

function wp_theme_customizer($wp_customize){
    /*
    Title 
    */ 
    $wp_customize->add_section('sec_main_title', array(
        'title'=>'Main Title',
        'description'=> 'Select header title settings',
        'priority'=>'100'
        )
    );
    /*
        H1 TEXT
    */
    $wp_customize->add_setting('set_h1', array(
        'type'=> 'theme_mod',
        'default' => 'Nice Blog Title',
        'sanitize_callback'=>'sanitize_text_field'
        )
    );
    $wp_customize->add_control('set_h1', array(
        'label'=> 'Set page main title',
        'section'=> 'sec_main_title',
        'type'=> 'text'
    )
    );
    /*
        LOGO
    */
    $wp_customize->add_setting('set_logo',array(
        'type'=>'theme_mod',
        'sanitize_callback'=>'sanitize_url_raw'

    )
    );
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize,
        'set_logo',array(
            'label'=> 'Set logo image file',
            'description'=> 'Upload header logo file',
            'section'=> 'sec_main_title',
            'mime_type'=> 'image'
        )
    )
    );
    /*
    Color palette  
    */
      
    $wp_customize->add_section('sec_colors', array(
        'title'=>'Colors',
        'description'=> 'Color Pallete',
        'priority'=>'100'
        )
    );
    /*
        COLOR 1
    */
    $wp_customize->add_setting('set_first_color', array(
        'type'=> 'theme_mod',
        'default' => '#251761',
        'sanitize_callback'=>'sanitize_hex_color'
        )
    );
    $wp_customize->add_setting('set_second_color', array(
        'type'=> 'theme_mod',
        'default' => '#ff8800',
        'sanitize_callback'=>'sanitize_hex_color'
        )
    );
    $wp_customize->add_setting('set_neutral_color', array(
        'type'=> 'theme_mod',
        'default' => '#ff88007d',
        'sanitize_callback'=>'sanitize_hex_color'
        )
    );
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
        'set_first_color',array(
                'label'=> 'Theme Color 1',
                'section'=>'sec_colors'
            )
        )
    );
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
        'set_second_color',array(
                'label'=> 'Theme Color 2',
                'section'=>'sec_colors'
            )
        )
    );
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
        'set_neutral_color',array(
                'label'=> 'Theme Neutral Color ',
                'section'=>'sec_colors'
            )
    )
    );
    /*
    Customized social list
        URL    
    */

    $wp_customize->add_section('sec_social_list_icons', array(
        'title'=>'Social List Settings',
        'description'=> 'Social List Settings',
        'priority'=>'100'
        )
    );
    $wp_customize->add_setting(
        'set_icon_url_1',array(
            'type'=>'theme_mod',
            'default'=>'',
            'sanitize_callback'=>'esc_url_raw'
        )        
    );
    $wp_customize->add_setting(
        'set_icon_url_2',array(
            'type'=>'theme_mod',
            'default'=>'',
            'sanitize_callback'=>'esc_url_raw'
        )        
    );
    $wp_customize->add_control('set_icon_url_1', array(
        'label'=> 'Set url for icon 1',
        'description'=> 'Set url for social lists icon 1',
        'section'=> 'sec_social_list_icons',
        'type'=> 'url'
    )
    );
    $wp_customize->add_control('set_icon_url_2', array(
        'label'=> 'Set url for icon 2',
        'description'=> 'Set url for social lists icon 2',
        'section'=> 'sec_social_list_icons',
        'type'=> 'url'
    )
    );
    /*
        IMG    
    */ 
    $wp_customize->add_setting('set_icon_img_1',array(
            'type'=>'theme_mod',
            'sanitize_callback'=>'sanitize_url_raw'
        )
    );
    $wp_customize->add_setting('set_icon_img_2',array(
        'type'=>'theme_mod',
        'sanitize_callback'=>'sanitize_url_raw'
    )
    );
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize,
        'set_icon_img_1',array(
            'label'=> 'Arquivo de icone 1',
            'description'=> 'Upload file for social lists icon 2',
            'section'=> 'sec_social_list_icons',
            'mime_type'=> 'image'
        )
    )
    );
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize,
        'set_icon_img_2',array(
            'label'=> 'Arquivo de icone 2',
            'description'=> 'Upload file for social lists icon 2',
            'section'=> 'sec_social_list_icons',
            'mime_type'=> 'image'
        )
    )
    );
    /*
    Carousel
    */
    $wp_customize->add_section(
        'sec_slider', array(
            'title' =>'Slider Settings',
            'description' => 'Section for carousel customizing'
        )
    );
    /*
        TITLES
    */
    $wp_customize->add_setting(
        'carousel_title_1', array(
            'type' => 'theme_mod',
            'default' => 'Hello title 1',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'carousel_title_1', array(
            'label' => 'Set carousel title text',
            'description' => 'Set carousel title for slide 1',
            'section' => 'sec_slider',
            'type' => 'text'
        )
    );
    $wp_customize->add_setting(
        'carousel_title_2', array(
            'type' => 'theme_mod',
            'default' => 'Hello title 2',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'carousel_title_2', array(
            'label' => 'Set carousel title text',
            'description' => 'Set carousel title for slide 2',
            'section' => 'sec_slider',
            'type' => 'text'
        )
    );
    /*
        SLIDER IMAGES
    */
    $wp_customize->add_setting('set_img_1',array(
        'type'=>'theme_mod',
        'sanitize_callback'=>'sanitize_url_raw'
    )
    );
    $wp_customize->add_setting('set_img_2',array(
        'type'=>'theme_mod',
        'sanitize_callback'=>'sanitize_url_raw'
    )
    );
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize,
        'set_img_1',array(
            'label'=> 'Slider image 1',
            'description'=> 'Upload slide image file (recommended width > 1700px)',
            'section'=> 'sec_slider',
            'mime_type'=> 'image'
        )
    )
    );
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize,
    'set_img_2',array(
        'label'=> 'Slider image 2',
        'description'=> 'Upload slide image file (recommended width > 1700px)',
        'section'=> 'sec_slider',
        'mime_type'=> 'image'
    )
    )
    );
    /* 
    Homepage 
    */
    $wp_customize->add_section(
        'sec_homepage1', array(
            'title' =>'Homepage Section 1 Content',
            'description'=>'Homepage first section, below slider'

        )
    );
    /*
        SUBTITLE (H2)
    */
    $wp_customize->add_setting(
        'set_subtitle', array(
            'type' => 'theme_mod',
            'default' => 'Tecnologia da Informação',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_subtitle', array(
            'label' => 'Set homepage tag (h2) subtitle text',
            'section' => 'sec_homepage1',
            'type' => 'text'
        )
    );
    /*
        sub-SUBTITLE (H6)
    */
    $wp_customize->add_setting(
        'set_subsubtitle', array(
            'type' => 'theme_mod',
            'default' => 'Some impactful text',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_subsubtitle', array(
            'label' => 'Set homepage tag (h6) description text',
            'section' => 'sec_homepage1',
            'type' => 'text'
        )
    );
    /*
        ANIMATED IMG
    */
    $wp_customize->add_setting('set_animated_img',array(
        'type'=>'theme_mod',
        'sanitize_callback'=>'sanitize_url_raw'
    )
    );
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize,
    'set_animated_img',array(
        'label'=> 'Homepage main animated image',
        'description'=> 'Upload the image file ',
        'section'=> 'sec_homepage1',
        'mime_type'=> 'image'
    )
    )
    );  
    /*
    Homepage Middle Section
    */  
    $wp_customize->add_section(
        'sec_homepage2', array(
            'title' =>'Homepage Section 2 Content',
            'description'=>'Homepage second section, in the middle of the page'
        )
    );    
    /*
        IMAGE-ICONS
    */
    $wp_customize->add_setting('set_icon_1',array(
        'type'=>'theme_mod',
        'sanitize_callback'=>'sanitize_url_raw'
    )
    );
    $wp_customize->add_setting('set_icon_2',array(
        'type'=>'theme_mod',
        'sanitize_callback'=>'sanitize_url_raw'
    )
    );
    $wp_customize->add_setting('set_icon_3',array(
        'type'=>'theme_mod',
        'sanitize_callback'=>'sanitize_url_raw'
    )
    );
    
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize,
    'set_icon_1',array(
        'label'=> 'Homepage second section icon 1',
        'description'=> 'Upload image file (recommended width 90px)',
        'section'=> 'sec_homepage2',
        'mime_type'=> 'image'
    )
    )
    );   
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize,
    'set_icon_2',array(
        'label'=> 'Homepage second section icon 2',
        'description'=> 'Upload image file (recommended width 90px)',
        'section'=> 'sec_homepage2',
        'mime_type'=> 'image'
    )
    )
    );   
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize,
    'set_icon_3',array(
        'label'=> 'Homepage second section icon 3',
        'description'=> 'Upload image file (recommended width 90px)',
        'section'=> 'sec_homepage2',
        'mime_type'=> 'image'
    )
    )
    );  
    
    /*
        SUBTITLE H7
    */
    $wp_customize->add_setting(
        'set_sec2_subtitle1', array(
            'type' => 'theme_mod',
            'default' => 'Header (h7) 1',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_setting(
        'set_sec2_subtitle2', array(
            'type' => 'theme_mod',
            'default' => 'Header (h7) 2',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_setting(
        'set_sec2_subtitle3', array(
            'type' => 'theme_mod',
            'default' => 'Header (h7) 3',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_sec2_subtitle1', array(
            'label' => 'Homepage second section subtitle 1',
            'section' => 'sec_homepage2',
            'type' => 'text'
        )
    );
    $wp_customize->add_control(
        'set_sec2_subtitle2', array(
            'label' => 'Homepage second section subtitle 2',
            'section' => 'sec_homepage2',
            'type' => 'text'
        )
    );
    $wp_customize->add_control(
        'set_sec2_subtitle3', array(
            'label' => 'Homepage second section subtitle 3',
            'section' => 'sec_homepage2',
            'type' => 'text'
        )
    );
    /*
        H7 DESCRIPTION
    */
    $wp_customize->add_setting(
        'set_sec2_description1', array(
            'type' => 'theme_mod',
            'default' => 'Header (h7) description 1',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_setting(
        'set_sec2_description2', array(
            'type' => 'theme_mod',
            'default' => 'Header (h7) description 2',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_setting(
        'set_sec2_description3', array(
            'type' => 'theme_mod',
            'default' => 'Header (h7) description 3',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_sec2_description1', array(
            'label' => 'Homepage second section subtitle description 1',
            'section' => 'sec_homepage2',
            'type' => 'text'
        )
    );
    $wp_customize->add_control(
        'set_sec2_description2', array(
            'label' => 'Homepage second section subtitle description 2',
            'section' => 'sec_homepage2',
            'type' => 'text'
        )
    );
    $wp_customize->add_control(
        'set_sec2_description3', array(
            'label' => 'Homepage second section subtitle description 3',
            'section' => 'sec_homepage2',
            'type' => 'text'
        )
    );
    /*
        HOME MIDDLEAREA TITLE H1
    */
    $wp_customize->add_setting(
        'set_home_middlearea_h1', array(
            'type' => 'theme_mod',
            'default' => 'Home middlearea title (h1)',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_home_middlearea_h1', array(
            'label' => 'Home middlearea title (h1)',
            'section' => 'sec_homepage2',
            'type' => 'text'
        )
    );
    /*
        CALL-TO-ACTION BTN
    */
    $wp_customize->add_setting(
        'set_action_btn', array(
            'type' => 'theme_mod',
            'default' => 'GET INFO',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control(
        'set_home_middlearea_h1', array(
            'label' => 'Call-to-action button text',
            'section' => 'sec_homepage2',
            'type' => 'text'
        )
    );
    
    
}
add_action('customize_register','wp_theme_customizer');