<?php

function wp_theme_customizer($wp_customize){
    /*
    Color palette  
        First color
    */
      
    $wp_customize->add_section('sec_colors', array(
        'title'=>'Colors',
        'description'=> 'Color Pallete',
        'priority'=>'100'
        )
    );
    $wp_customize->add_setting('set_first_color', array(
        'type'=> 'theme_mod',
        'default' => '#251761',
        'sanitize_callback'=>'sanitize_hex_color'
        )
    );
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,
        'set_first_color',array(
                'label'=> 'Theme Color',
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
        )
    );
    $wp_customize->add_setting('set_icon_img_2',array(
        'type'=>'theme_mod'
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

    
}
add_action('customize_register','wp_theme_customizer');