<?php


$wp_customize->add_section('public_blog_post_setting',array(
        'title'=>esc_html__( 'Post Settings', 'public-blog' ),
        'panel'      => 'public_blog_options_panal',
        
        'priority'=>'30'    
    ));
     $wp_customize->add_setting(
         'public_blog_post_show_readtime',
         array(
            'default'   => $default['public_blog_post_show_readtime'], // Set default value
            'sanitize_callback' => 'public_blog_sanitize_checkbox', // Sanitize input
            )
     );
    
     $wp_customize->add_control(
         new WP_Customize_Control(
                $wp_customize,
                'public_blog_post_show_readtime', // Setting ID
                array(
                    'label'     => __('Show Read Time', 'public-blog'),
                    'section'   => 'public_blog_post_setting', // No hyphen
                    'settings'  => 'public_blog_post_show_readtime', // Setting ID
                    'type'      => 'checkbox',
                )
            )
     );


     $wp_customize->add_setting(
        'public_blog_post_show_date',
        array(
           'default'            => $default['public_blog_post_show_date'], // Set default value
           'sanitize_callback'  => 'public_blog_sanitize_checkbox', // Sanitize input
           )
    );
   
    $wp_customize->add_control(
        new WP_Customize_Control(
               $wp_customize,
               'public_blog_post_show_date', // Setting ID
               array(
                   'label'     => __('Show Posted Date', 'public-blog'),
                   'section'   => 'public_blog_post_setting', // No hyphen
                   'settings'  => 'public_blog_post_show_date', // Setting ID
                   'type'      => 'checkbox',
               )
           )
    );


           // Setting Read More Text.
        $wp_customize->add_setting( 'public_blog_readmore_text',
        array(
            'default'           => $default['public_blog_readmore_text'],
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        )
        );

        $wp_customize->add_control( 'public_blog_readmore_text',
        array(
            'label'    => esc_html__( 'Read more button text', 'public-blog' ),
            'section'  => 'public_blog_post_setting',
            'type'     => 'text',
            'priority' => 40,
            'settings'  => 'public_blog_readmore_text', // Setting ID
        )
        );




      $wp_customize->add_setting(
        'public_blog_post_next_post_link',
        array(
           'default'   => $default['public_blog_post_next_post_link'], // Set default value
           'sanitize_callback' => 'public_blog_sanitize_checkbox', // Sanitize input
           )
    );
   
    $wp_customize->add_control(
        new WP_Customize_Control(
               $wp_customize,
               'public_blog_post_next_post_link', // Setting ID
               array(
                   'label'     => __('Next/Previous Post Link', 'public-blog'),
                   'section'   => 'public_blog_post_setting', // No hyphen
                   'settings'  => 'public_blog_post_next_post_link', // Setting ID
                   'type'      => 'checkbox',
               )
           )
    );

    $wp_customize->add_setting(
        'public_blog_post_excerpt_length',
        array(
           'default'   => $default['public_blog_post_excerpt_length'], // Set default value
           'sanitize_callback' => 'absint', // Sanitize input
           )
    );
   
    $wp_customize->add_control(
        new WP_Customize_Control(
               $wp_customize,
               'public_blog_post_excerpt_length', // Setting ID
               array(
                   'label'     => __('Excerpt Length', 'public-blog'),
                   'section'   => 'public_blog_post_setting', // No hyphen
                   'settings'  => 'public_blog_post_excerpt_length', // Setting ID
                   'type'      => 'number',
               )
           )
    );

